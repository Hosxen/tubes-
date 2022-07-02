@extends('layout.app')
@section('content')
    <div class="container pb-5">
        <div class="row">
            <div class="col-md-4 col-sm-12 mt-5 text-center">
                <div class="card h-100">
                    <div class="card-header bg-red100 text-light">
                        CARI STOK DARAH
                    </div>
                    <form action="{{ route('blood-stock') }}" method="get" class="overflow-auto p-3">
                        <div class="card-body py-0 pt-3">
                            <div class="form-group text-left">
                                <label for="bloodType">Golongan Darah</label>
                                <select class="form-control" id="bloodType" name="blood_type">
                                    <option value="">-Pilih Golongan Darah-</option>
                                    <option @if($blood_type === 'A') selected @endif value="A">A</option>
                                    <option @if($blood_type === 'AB') selected @endif value="AB">AB</option>
                                    <option @if($blood_type === 'B') selected @endif value="B">B</option>
                                    <option @if($blood_type === 'O') selected @endif value="O">O</option>
                                </select>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div class="form-group text-left">
                                <label for="component">Komponen</label>
                                <select class="form-control" id="component" name="component">
                                    <option value="">-Pilih Komponen-</option>
                                    @if ($components !== null)
                                        @foreach($components as $item)
                                            <option value="{{ $item['id'] }}"
                                                    @if($component and $component['id'] === $item['id']) selected @endif>
                                                {{ $item['value'] }}
                                            </option>
                                        @endforeach
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="card-body py-0">
                            <div class="form-group text-left">
                                <label for="province">Provinsi</label>
                                <select class="form-control" id="province" name="province">
                                    <option value="">-Pilih Provinsi-</option>
                                    @if ($provinces !== null)
                                        @foreach($provinces as $item)
                                            <option value="{{ $item['id'] }}"
                                                    @if($province and $province['id'] === $item['id']) selected @endif>
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
                    <div class="card-header bg-red100 text-light">
                        CARI TEMAN
                    </div>
                    <form action="" class="overflow-auto p-3">
                        <div class="card-body py-0 pt-3">
                            <div class="form-group text-left">
                                <label for="bloodType">Golongan Darah</label>
                                <select class="form-control" id="bloodType">
                                    <option>A</option>
                                    <option>AB</option>
                                    <option>B</option>
                                    <option>O</option>
                                </select>
                            </div>
                        </div>
                        <a href="{{ route('find-friend') }}" type="button" class="btn btn-danger">CARI</a>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 mt-5 text-center">
                <div class="card h-100">
                    <div class="card-header bg-red100 text-light">
                        PETA LOKASI
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
                        <b> JUMLAH PENDONOR </b> | @if($province)
                            PROVINSI {{ \Illuminate\Support\Str::upper($province['value']) }} @else SEMUA
                            PROVINSI @endif
                    </div>
                    <div class="card-body p-1">
                        <canvas id="chart" height="100"></canvas>
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
