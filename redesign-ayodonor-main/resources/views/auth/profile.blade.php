@extends('layout.app')
@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-2">
                <b class="text-danger">PROFILE</b>
            </div>
            <div class="col-md-10 col-sm-12 bg-grey10">
                <form action="{{ route('profile.update') }}" method="post">
                    @csrf
                    <div class="row form-group p-3">
                        <div class="col-3">
                            <label>Nama</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group text-left">
                                <input type="text" class="form-control" id="name" name="name" value="{{ auth()->user()['name'] }}" required>
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
                                <input type="text" class="form-control" id="address" name="address" value="{{ auth()->user()['address'] }}" required>
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
                                    <option value="A" @if(auth()->user()['blood_type'] === 'A') selected @endif>A</option>
                                    <option value="AB" @if(auth()->user()['blood_type'] === 'AB') selected @endif>AB</option>
                                    <option value="B" @if(auth()->user()['blood_type'] === 'B') selected @endif>B</option>
                                    <option value="O" @if(auth()->user()['blood_type'] === 'O') selected @endif>O</option>
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
                                <input type="text" class="form-control" id="phone" name="phone" value="{{ auth()->user()['phone'] }}" required>
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <label>Email</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group text-left">
                                <input type="text" class="form-control" id="email" value="{{ auth()->user()['email'] }}" disabled>
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <label>Password</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group text-left">
                                <input type="password" class="form-control" id="password" placeholder="Password" name="password">
                                @error('password')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <label>Konfirmasi Password</label>
                        </div>
                        <div class="col-9">
                            <div class="form-group text-left">
                                <input type="password" class="form-control" id="passwordConfirmation" placeholder="Konfirmasi Password" name="password_confirmation">
                                @error('password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row p-3">
                        <div class="col-6 text-right">
                            <button type="submit" class="btn btn-success">SIMPAN</button>
                        </div>
                        <div class="col-6 ">
                            <a href="dashboard" type="button" class="btn btn-danger">BATAL</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
