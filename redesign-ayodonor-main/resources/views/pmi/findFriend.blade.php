@extends('layout.app')
@section('content')
    <div class="container pb-5">
        <div class="row my-5 mx-1">
            <div class="col-12 bg-red10 table-responsive">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Alamat</th>
                        <th scope="col">Nomor Handphone</th>
                        <th scope="col">Golongan Darah</th>
                        @if(auth()->check() and auth()->user()->isAdmin())
                            <th scope="col">Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody>
                    @if ($users !== null)
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user['name'] }}</td>
                                <td>{{ $user['address'] }}</td>
                                <td>{{ $user['phone'] }}</td>
                                <td>{{ $user['blood_type'] }}</td>
                                @if(auth()->check() and auth()->user()->isAdmin())
                                    <td>
                                        <form method="post" action="{{ url("user/{$user['id']}") }}">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ url("user/{$user['id']}/edit") }}" type="button" class="btn btn-success m-2">Update</a>
                                            <button type="submit" class="btn btn-danger m-2">Delete</button>
                                        </form>
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="6">Tidak Ada Data</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
