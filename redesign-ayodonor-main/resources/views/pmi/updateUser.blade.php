@extends('layout.app')
@section('content')
    <div class="container">
        <div class="col-md-10 col-sm-12 bg-white mx-auto my-5">
            <form action="{{ url("user/{$user['id']}") }}" method="post">
                @csrf
                @method('put')
                <div class="row form-group p-3">
                    <div class="col-12 p-3">
                        <h6 class="text-center">Update User</h6>
                    </div>
                    <div class="col-3">
                        <label>Nama Lengkap</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $user['name'] }}" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <label>Alamat</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="address" name="address" value="{{ $user['address'] }}" required>
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <label>Golongan Darah</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <select class="form-control" id="bloodType" name="blood_type" required>
                                <option></option>
                                <option value="A" @if($user['blood_type'] === 'A') selected @endif>A</option>
                                <option value="AB" @if($user['blood_type'] === 'AB') selected @endif>AB</option>
                                <option value="B" @if($user['blood_type'] === 'B') selected @endif>B</option>
                                <option value="O" @if($user['blood_type'] === 'O') selected @endif>O</option>
                            </select>
                            @error('blood_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-3">
                        <label>No Hp</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user['phone'] }}" required>
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row p-3">
                    <div class="col-12 text-right text-center">
                        <button type="submit" class="btn btn-danger">SIMPAN</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@stop
