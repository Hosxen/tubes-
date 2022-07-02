<?php

namespace App\Http\Controllers;

use App\Models\Component;
use App\Models\Contact;
use App\Models\Donor;
use App\Models\Province;
use App\Models\Schedule;
use App\Models\Stock;
use App\Models\User;

use Carbon\Carbon;
use Illuminate\Http\Request;
use niklasravnsborg\LaravelPdf\Facades\Pdf;

class PMIController extends Controller
{
    public function index()
    {
        $stocks = Stock::groupBy('blood_type')
            ->selectRaw('blood_type, sum(value) as stock')
            ->get();

        $data['components'] = Component::all();
        $data['provinces'] = Province::all();

        $data['stocks'] = $stocks;

        return view('index', $data);
    }

    public function aboutDonor()
    {
        return view('pmi.aboutDonor');
    }

    public function bloodStock(Request $request)
    {
        $bloodType = $request->get('blood_type');
        $componentId = $request->get('component');
        $provinceId = $request->get('province');

        $stocks = Stock::when($bloodType, function ($q) use ($bloodType) {
            $q->where('blood_type', $bloodType);
        })
            ->when($componentId, function ($q) use ($componentId) {
                $q->where('component_id', $componentId);
            })
            ->when($provinceId, function ($q) use ($provinceId) {
                $q->where('province_id', $provinceId);
            })
            ->groupBy('blood_type')
            ->selectRaw('blood_type, sum(value) as stock')
            ->get();

        $data['components'] = Component::all();
        $data['provinces'] = Province::all();

        $data['blood_type'] = $bloodType;
        $data['province'] = $provinceId ? Province::find($provinceId) : null;
        $data['component'] = $componentId ? Component::find($componentId) : null;

        $data['stocks'] = $stocks;

        return view('pmi.bloodStock', $data);
    }

    public function contact()
    {
        $data['contacts'] = Contact::all();
        return view('pmi.contact', $data);
    }

    public function schedule()
    {
        $data['schedules'] = Schedule::all();
        return view('pmi.schedule', $data);
    }

    public function donor()
    {
        $data['schedules'] = Schedule::all();
        return view('pmi.schedule', $data);
    }

    public function donorCreate(Request $request)
    {
        if (!auth()->check()) {
            return redirect('login');
        }

        $data['schedule_id'] = $request->get('schedule_id');

        return view('pmi.donorForm', $data);
    }

    public function donorStore(Request $request)
    {
        if (!auth()->check()) {
            return redirect('login');
        }

        $validated = $request->validate([
            'schedule_id' => 'required|string',
            'name' => 'required|string',
            'gender' => 'required|string',
            'dob' => 'required|string',
            'blood_type' => 'required|string',
            'weight' => 'required|numeric',
            'height' => 'required|numeric',
            'address' => 'required|string',
            'rt' => 'required|string',
            'rw' => 'required|string',
            'village' => 'required|string',
            'sub_district' => 'required|string',
            'phone' => 'required|string',
            'disease_history' => 'required|string'
        ]);

        $validated['user_id'] = auth()->id();

        $donor = Donor::create($validated);
        return response()->json(['status' => true, 'data' => $donor]);
    }

    public function downloadDonor(Donor $donor)
    {
        $data['donor'] = $donor->load('schedule');
        $pdf = PDF::loadView('pmi.pdf', $data);
        return $pdf->stream('Tiket Donor Darah.pdf');
    }

    public function findFriend()
    {
        $data['users'] = User::where('role', 'user')->get();
        return view('pmi.findFriend', $data);
    }

    public function editUser(User $user, Request $request)
    {
        if (!auth()->user()->isAdmin()) {
            return view('forbidden');
        }

        $data['user'] = $user;
        return view('pmi.updateUser', $data);
    }

    public function updateUser(User $user, Request $request)
    {
        if (!auth()->user()->isAdmin()) {
            return view('forbidden');
        }

        $validated = $request->validate([
            'name' => 'required|string',
            'address' => 'required|string',
            'blood_type' => 'required|in:A,B,AB,O',
            'phone' => 'required|string'
        ]);

        $user->update($validated);
        $user->refresh();
        return redirect('find-friend')->with('success', "Berhasil mengubah data user {$user['name']}");
    }

    public function deleteUser(User $user)
    {
        if (!auth()->user()->isAdmin()) {
            return view('forbidden');
        }

        $user->donors()->delete();
        $user->delete();
        return redirect('find-friend')->with('success', "Berhasil menghapus user {$user->getOriginal('name')}");
    }

    public function showScheduleDonor(Schedule $schedule)
    {
        $data['donors'] = Donor::where('schedule_id', $schedule['id'])->get();
        return view('pmi.listDonor', $data);
    }
}
