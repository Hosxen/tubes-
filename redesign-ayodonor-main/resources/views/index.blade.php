@extends('layout.app')
@section('content')
    <div class="px-5 pb-5">
        <div class="row justify-content-center px-2">
            <div class="col-10">
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <div class="card">
                            <div class="card-header bg-red100 text-light text-right">
                                <b> JUMLAH STOK DARAH PMI </b>
                            </div>
                            <div class="card-body p-1">
                                <canvas id="chart" height="100"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4 col-sm-12 mt-5 text-center">
                        <div class="container">
                            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="{{ asset('assets/files/carousel.png') }}"
                                             alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/files/carousel.png') }}"
                                             alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('assets/files/carousel.png') }}"
                                             alt="Third slide">
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                   data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                   data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-4 col-sm-12 mt-5 text-center">
                        <div class="card h-100">
                            <div class="card-header bg-red100 text-light text-left">
                                <b> CARI STOK DARAH </b>
                            </div>
                            <form action="{{ route('blood-stock') }}" class="overflow-auto p-3" method="get">
                                <div class="card-body py-0 pt-3">
                                    <div class="form-group text-left">
                                        <label for="bloodType">Golongan Darah</label>
                                        <select class="form-control" id="bloodType" name="blood_type">
                                            <option value="">-Pilih Golongan Darah-</option>
                                            <option value="A">A</option>
                                            <option value="AB">AB</option>
                                            <option value="B">B</option>
                                            <option value="O">O</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div class="form-group text-left">
                                        <label for="component">Pilih Komponen</label>
                                        <select class="form-control" id="component" name="component">
                                            <option value="">-Pilih Komponen-</option>
                                            @if ($components !== null)
                                                @foreach($components as $item)
                                                    <option value="{{ $item['id'] }}">
                                                        {{ $item['value'] }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body py-0">
                                    <div class="form-group text-left">
                                        <label for="province">Pilih Provinsi</label>
                                        <select class="form-control" id="province" name="province">
                                            <option value="">-Pilih Provinsi-</option>
                                            @if ($provinces !== null)
                                                @foreach($provinces as $item)
                                                    <option value="{{ $item['id'] }}">
                                                        {{ $item['value'] }}
                                                    </option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-danger">CARI</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 mt-5 text-center">
                        <div class="card h-100">
                            <div class="card-header bg-red100 text-light text-left">
                                <b> Kegiatan Donor </b> | 06 - 12 - 2021
                            </div>
                            <div class="card-body">
                                <ol class="text-left">
                                    <li><a href="">Kegiatan di Provinsi Bali</a></li>
                                    <li><a href="">Kegiatan di Provinsi Banten</a></li>
                                    <li><a href="">Kegiatan di Provinsi Jawa Barat</a></li>
                                    <li><a href="">Kegiatan di Provinsi Jawa Tengah</a></li>
                                    <li><a href="">Kegiatan di Provinsi Jawa Timur</a></li>
                                    <li><a href="">Kegiatan di Provinsi Lampung</a></li>
                                    <li><a href="">Kegiatan di Provinsi Sulawesi Barat</a></li>
                                    <li><a href="">Kegiatan di Provinsi Sumatera Selatan</a></li>
                                    <li><a href="">Kegiatan di Provinsi Sumatera Utara</a></li>

                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-sm-12 mt-5 text-center">
                        <div class="card">
                            <div class="card-header bg-red100 text-light text-left">
                                FAQ's
                            </div>
                            <div class="card-body text-left">
                                <div class="accordion" id="accordionExample">
                                    <div class="card">
                                        <div class="card-header bg-red100" id="headingOne">
                                            <p class="text-light mb-0" data-toggle="collapse"
                                               data-target="#collapseOne" aria-expanded="true"
                                               aria-controls="collapseOne">
                                                Mengapa Harus Bayar Saat Kita Butuh Darah dari PMI?
                                            </p>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Biaya yang kita keluarkan perkantong darah sebenarnya adalah biaya
                                                penggantian pemeliharaan darah, supaya kondisinya tetap sama seperti
                                                saat berada dalam tubuh kita. Biaya ini yang kita kenal dgn nama <b>"BPPD"</b>
                                                atau Biaya Penggantian Pengelolaan Darah.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <div class="card-header bg-red100" id="headingTwo">
                                            <p class="text-light mb-0" data-toggle="collapse"
                                               data-target="#collapseTwo" aria-expanded="true"
                                               aria-controls="collapseTwo">
                                                Mengapa Kita Perlu Donor Darah?
                                            </p>
                                        </div>

                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                <b>Kebutuhan yang besar </b>: Setiap delapan detik, ada satu orang yang
                                                membutuhkan transfusi darah di Indonesia. <br>
                                                <b>Pemeriksaan kesehatan gratis </b>: Sebelum mendonorkan darah, petugas
                                                akan memeriksa suhu tubuh, denyut nadi, tekanan darah dan kadar
                                                hemoglobin Anda. <br>
                                                <b>Tidak menyakitkan </b>: Ya Anda memang akan merasa sakit. Namun, rasa
                                                sakit itu tidak seberapa dan akan hilang dengan cepat.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <div class="card-header bg-red100" id="headingThree">
                                            <p class="text-light mb-0" data-toggle="collapse"
                                               data-target="#collapseThree" aria-expanded="true"
                                               aria-controls="collapseThree">
                                                Kenapa Ketika Membutuhkan Darah Prosesnya Lama ?
                                            </p>
                                        </div>

                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Proses permintaan darah transfusi di Palang Merah Indonesia (PMI)
                                                memerlukan proses <b>"Crossmatch"</b> yaitu uji serasi silang antara
                                                darah pasien dengan darah donor yang diberikan. Crossmatch ini bertujuan
                                                untuk melihat apakah darah pasien sesuai dengan darah donor sehingga
                                                tidak ada efek yang merugikan pasien transfusi darah tersebut.Secara
                                                keseluruhan darah pendonor baru siap diberikan kepada seseorang itu
                                                butuh waktu paling lama sekitar 3 jam
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">

                                        <div class="card-header bg-red100" id="headingFour">
                                            <p class="text-light mb-0" data-toggle="collapse"
                                               data-target="#collapseFour" aria-expanded="true"
                                               aria-controls="collapseFour">
                                                Apa Yang Harus Kita Persiapkan Sebelum Donor ?
                                            </p>
                                        </div>

                                        <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                             data-parent="#accordionExample">
                                            <div class="card-body">
                                                Kita memerlukan tidur yang nyenyak di malam sebelum mendonor, sarapan
                                                pagi atau makan siang sebelum mendonor. Banyak minum seperti jus, susu
                                                sebelum mendonor. Rileks saat mendonor, dan banyak minum setelah
                                                mendonor. Kita bisa melanjutkan kegiatan setelah mendonor, asal hindari
                                                aktivitas fisik yang berat.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-12 mt-5">
                        <a href="https://www.rhesusnegatif.com/">
                            <img src="{{ asset('assets/files/poster.png') }}" alt="poster" class="img-fluid w-100">
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script>
        $(document).ready(function () {
            const backgroundColor = [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(39, 174, 96, 0.2)',
                'rgba(93, 173, 226, 0.2)'
            ];

            const stocks = {!! json_encode($stocks) !!};

            const chartLabels = $.map(stocks, function (stock) {
                return stock['blood_type'];
            });

            const chartDatasets = $.map(stocks, function (stock) {
                return stock['stock'];
            });

            let i = 0;
            const chartBackgroundColor = $.map(stocks, function () {
                if (i > 7) i = 0;
                return backgroundColor[i++];
            });

            let ctx = $('#chart');
            let data = {
                labels: chartLabels,
                datasets: [
                    {
                        label: 'JUMLAH PENDONOR',
                        borderWidth: 2,
                        data: chartDatasets,
                        backgroundColor: chartBackgroundColor,
                    },
                ]
            };

            new Chart(ctx, {
                type: 'bar',
                data: data,
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        })
    </script>
@stop
