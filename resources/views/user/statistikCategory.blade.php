@extends('layouts.dashboard_layout')

@section('title', 'Statistics')

@section('content')
<div class="col px-5" style="height:80vh">
    <div class="row my-4">
        <div class="col">
            <h4 class="text-white text-center m-0">Statistics : {{$_GET['cari']}}</h4>
        </div>
    </div>
    <div class="row p-2" style="height: 100%">
        <div class="justify-content-end float-right">
            <form action="{{route('statistikCategory')}}" method="GET" class="ml-4">
                <select name="cari" id="cars" style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
                    @foreach($marketplace as $mk)
                    <option value="{{$mk->nama_marketplace}}">{{$mk->nama_marketplace}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-dark">Find</button>
            </form>
        </div>
        <div class="justify-content-end float-right">
            <form action="{{route('statistikProduct')}}" method="GET" class="ml-4">
                <select name="cari" id="cars" style="background-color:#232228;color:white;border-radius: 8px;border:1px solid #232228; padding:3px">
                    @foreach($products as $pd)
                    <option value="{{$pd->nama_product}}">{{$pd->nama_product}}</option>
                    @endforeach
                </select>
                <button type="submit" class="btn btn-dark">Find</button>
            </form>
        </div>
        <div class="w-100 container-overflow" style="border-radius: 30px; background-color:#232228; padding:30px">
            <div class="card-deck text-white">
                <div class="container d-flex justify-content-center">
                    <table class="table table-striped">
                        <tr class="bg-dark text-white text-center">
                            <th>Nama Product</th>
                            <th>Terjual</th>
                            <th>Stock</th>
                            <th>% Terjual</th>
                        </tr>
                        <?php
                        $temp_label = array();
                        $temp_y = array();
                        ?>
                        @foreach ($products as $index => $d)

                        <tr class="text-center">
                            <td class="text-white">{{ $d->nama_product }}</td>
                            <?php
                            $sum = 0
                            ?>
                            @foreach ($data as $index2 => $d2)
                            @if($d2->nama_product === $d->nama_product)
                            <?php
                            $sum += $d2->jumlah;
                            ?>
                            @endif
                            @endforeach
                            <td class="text-white">{{ $sum }}</td>

                            <td class="text-white">{{ $d->stock_product }}</td>
                            @if($d->stock_product === 0)
                            <td class="text-white">{{ number_format($sum / ($sum + 1) * 100, 2, ',', ' ') }} % </td>
                            @else
                            <td class="text-white">{{ number_format($sum / ($sum + $d->stock_product) * 100, 2, ',', ' ') }} % </td>
                            @endif
                            <?php
                            array_push($temp_label, $d->nama_product);
                            array_push($temp_y, $sum);
                            ?>

                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>



            <div id="chartContainer" style="height: 350px; width: 100%;border-radius: 10px"></div>

            <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
            <script type="text/javascript">
                var js_array = [<?php echo '"' . implode('","', $temp_label) . '"' ?>];
                var js_y = [<?php echo implode(',', $temp_y) ?>];
                var dataString = [];

                for (let i = 0; i < js_y.length; i++) {
                    dataString[i] = {
                        label: js_array[i],
                        y: js_y[i]
                    };
                }
                window.onload = function() {
                    var chart = new CanvasJS.Chart("chartContainer", {
                        title: {
                            text: "Hasil Statistik Penjualan Barang"
                        },
                        data: [{
                            // Change type to "doughnut", "line", "splineArea", etc.
                            type: "column",
                            dataPoints: dataString
                        }]
                    });
                    chart.render();
                }
            </script>
        </div>
    </div>
</div>
@endsection