@extends('layout.app')
@section('content')
    <div class="container-fluid py-5 bg-red100 text-light">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h6>FORM DONOR DARAH</h6>
                    <hr>
                    <p class="text-left">*Mohon Diisi dengan Benar dan Lengkap</p>
                </div>
            </div>

            <form id="form">
                @csrf
                <input type="hidden" name="schedule_id" value="{{ $schedule_id }}">
                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">NAMA LENGKAP</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="name" name="name" required>
                            @error('name')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">JENIS KELAMIN</label>
                    </div>
                    <div class="col-9">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender" class="custom-control-input"
                                   value="male" checked>
                            <label class="custom-control-label" for="customRadioInline1">LAKI-LAKI</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender" class="custom-control-input"
                                   value="female">
                            <label class="custom-control-label" for="customRadioInline2">PEREMPUAN</label>
                        </div>
                        @error('gender')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">TEMPAT TANGGAL LAHIR</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="dob" name="dob" required>
                            @error('dob')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">GOLONGAN DARAH</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <select class="form-control" id="bloodType" name="blood_type" required>
                                <option>A</option>
                                <option>AB</option>
                                <option>B</option>
                                <option>O</option>
                            </select>
                            @error('blood_type')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">BERAT BADAN</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="number" class="form-control" id="weight" name="weight" required>
                            @error('weight')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">TINGGI BADAN</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="number" class="form-control" id="height" name="height" required>
                            @error('height')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">ALAMAT</label>
                    </div>
                    <div class="col-9">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group text-left">
                                    <input type="text" class="form-control" id="address" name="address" required>
                                    @error('address')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-md-2 col-sm-12 float-right">
                                <div class="form-group justify-content-center align-items-center custom-radio custom-control-inline mr-0 float-right">
                                    <label class="p-2">RT</label>
                                    <input type="text" class="form-control" id="rt" name="rt" required>
                                    @error('rt')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-2 col-sm-12 float-right">
                                <div class="justify-content-center align-items-center custom-radio custom-control-inline mr-0 float-right">
                                    <label class="p-2">RW</label>
                                    <input type="text" class="form-control" id="rw" name="rw" required>
                                    @error('rw')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 float-right">
                                <div class="form-group justify-content-center align-items-center custom-radio custom-control-inline mr-0 float-right">
                                    <label class="p-2">Desa</label>
                                    <input type="text" class="form-control" id="village" name="village" required>
                                    @error('village')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12 float-right">
                                <div class="justify-content-center align-items-center custom-radio custom-control-inline mr-0 float-right">
                                    <label class="p-2">Kecamatan</label>
                                    <input type="text" class="form-control" id="subDistrict" name="sub_district" required>
                                    @error('sub_district')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">TELEPON</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="number" class="form-control" id="phone" name="phone" required>
                            @error('phone')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-3">
                        <label class="text-light">RIWAYAT PENYAKIT</label>
                    </div>
                    <div class="col-9">
                        <div class="form-group text-left">
                            <input type="text" class="form-control" id="diseaseHistory" name="disease_history">
                            @error('disease_history')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="row form-group">
                    <div class="col-10">

                    </div>
                    <div class="col-md-2 col-sm-12">
                        <div class="form-group text-right">
                            <button type="button" class="btn btn-success" onclick="store()">
                                SUBMIT
                            </button>

                            <!-- Modal -->
                            <div class="modal fade bd-example-modal-lg" id="modal-dialog" tabindex="-1" role="dialog"
                                 aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                    <div class="modal-content bg-red100">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLongTitle">Donor Darah</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"
                                                    onclick="download()">
                                                <img src="{{ asset('assets/files/ic-download.png') }}" alt="image" height="24">
                                            </button>
                                        </div>
                                        <div class="modal-body ">
                                            <div class="row bg-grey10 rounded-bottom-custom m-2 p-3"
                                                 style="border: 2px solid red; padding: 10px;border-bottom-left-radius: 75px;  border-bottom-right-radius: 75px;">
                                                <div class="col-3">
                                                    <img src="{{ asset('assets/files/blood.png') }}" alt="image" class="img-fluid">
                                                </div>
                                                <div class="col-9 float-left">
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p class="text-dark float-left">Id</p>
                                                        </div>
                                                        <div class="col-1">
                                                            <p class="text-dark float-left">:</p>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="text-dark float-left" id="donor-id"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p class="text-dark float-left">Nama</p>
                                                        </div>
                                                        <div class="col-1">
                                                            <p class="text-dark float-left">:</p>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="text-dark float-left" id="donor-name"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p class="text-dark float-left">Jenis Kelamin</p>
                                                        </div>
                                                        <div class="col-1">
                                                            <p class="text-dark float-left">:</p>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="text-dark float-left" id="donor-gender"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p class="text-dark float-left">Alamat</p>
                                                        </div>
                                                        <div class="col-1">
                                                            <p class="text-dark float-left">:</p>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="text-dark float-left" id="donor-address"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p class="text-dark float-left">Telepon</p>
                                                        </div>
                                                        <div class="col-1">
                                                            <p class="text-dark float-left">:</p>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="text-dark float-left" id="donor-phone"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-4">
                                                            <p class="text-dark float-left">Golongan Darah</p>
                                                        </div>
                                                        <div class="col-1">
                                                            <p class="text-dark float-left">:</p>
                                                        </div>
                                                        <div class="col-7">
                                                            <p class="text-dark float-left" id="donor-blood-type"></p>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-8">
                                                            <img src="{{ asset('assets/files/barcode.png') }}" alt="image"
                                                                 class="img-fluid">
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <p class="text-left">Dengan ini menyatakan bersedia menjadi pendonor darah yang dilasanakan oleh website Donor
                Darah : Save a Live</p>
        </div>
    </div>

    <script>
    let donor = {};
    function store() {
        const form = $('#form');
        $.ajax({
            type: 'POST',
            url: "{{ route('donor.store') }}",
            data: form.serialize(),
            success: function (response) {
                console.log(response);
                donor = response.data;

                $('#donor-id').html(donor.id);
                $('#donor-name').html(donor.name);
                $('#donor-gender').html(donor.gender);
                $('#donor-address').html(donor.address);
                $('#donor-phone').html(donor.phone);
                $('#donor-blood-type').html(donor.blood_type);

                $('#modal-dialog').modal('show');
            }
        });
    }

    function download()
    {
        window.open(`/donor/${donor['id']}/download`, '_blank')
        window.location.href = '/schedule';
    }
    </script>
@stop
