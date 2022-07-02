@extends('layout.app')
@section('content')
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-5 text-center">
                <div class="card h-100">
                    <div class="card-header bg-red100 text-light">
                        KEGIATAN DONOR DARAH
                    </div>
                    <form action="" class="overflow-auto p-3">
                        <div class="card-body py-0 pt-3">
                            <div class="form-group text-left">
                                <label>Tanggal Donor</label>
                                <input type="date" class="form-control" id="date" placeholder="">
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div class="form-group text-left">
                                <label for="province">Pilih Provinsi</label>
                                <select class="form-control" id="province">
                                    <option>-Pilih Provinsi-</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-danger">CARI</button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-5 text-center">
                <div class="card h-100">
                    <div class="card-header bg-red100 text-light">
                        LOKASI MOBILE UNIT
                    </div>
                    <div class="card-body">
                        <img src="{{ asset('assets/files/maps.png') }}" alt="gmaps" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="card h-100">
                    <div class="card-header bg-red100 text-light text-left">
                        KEGIATAN MOBILE UNIT
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">Nama Instansi</th>
                                <th scope="col" class="text-center">Alamat</th>
                                <th scope="col" class="text-center">Jam</th>
                                <th scope="col" class="text-center">Rencana Donor</th>
                                <th scope="col" class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if (isset($schedules) and count($schedules) > 0)
                                @foreach($schedules as $schedule)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $schedule['institute_name'] }}</td>
                                        <td>{{ $schedule['address'] }}</td>
                                        <td>{{ $schedule['time'] }}</td>
                                        <td>{{ $schedule['donor_plan'] }}</td>
                                        <td>
                                            @if(auth()->check() and auth()->user()->isAdmin())
                                                <a href="{{ url("schedule/{$schedule['id']}/donor") }}" type="button" class="btn btn-danger">Lihat</a>
                                            @else
                                                <form method="get" action="{{ route('donor.create') }}">
                                                    <input type="hidden" name="schedule_id" value="{{ $schedule['id'] }}">
                                                    <button type="submit" class="btn btn-danger">Daftar</button>
                                                </form>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">Tidak Ada Data</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
