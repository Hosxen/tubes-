@extends('layout.app')
@section('content')
    <div class="container mb-5">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <div class="card h-100">
                    <div class="card-header bg-red100 text-light text-left">
                        <b> UNIT TRANSFUSI DARAH </b> | PALANG MERAH INDONESIA
                    </div>
                    <div class="card-body table-responsive">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">No.</th>
                                <th scope="col" class="text-center">NAMA UTD</th>
                                <th scope="col" class="text-center">PROVINSI</th>
                                <th scope="col" class="text-center">ALAMAT</th>
                                <th scope="col" class="text-center">TELP.</th>
                                <th scope="col" class="text-center">FAX.</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if ($contacts !== null)
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contact['utd_name'] }}</td>
                                        <td>{{ $contact['province'] }}</td>
                                        <td>{{ $contact['address'] }}</td>
                                        <td>{{ $contact['phone'] }}</td>
                                        <td>{{ $contact['fax'] }}</td>
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
        </div>
    </div>
@stop
