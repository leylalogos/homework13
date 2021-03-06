@extends('layout.admin')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

    <script>
        $(function() {

            const labels = [

                @foreach ($postcount as $shamsi => $count)
                    '{{ $shamsi }}',
                @endforeach
            ];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'پست های هفت روز اخیر',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [
                        @foreach ($postcount as $count)
                            {{ $count }},
                        @endforeach
                    ],
                }]
            };
            var config = {
                type: 'line',
                data: data,
                options: {
                    scales: {
                        y: {
                            // max: 5,
                            // min: 0,
                            ticks: {
                                stepSize: 1
                            },
                            beginAtZero:true
                        }
                    }
                }
            };
            var myChart = new Chart(
                document.getElementById('lineChart'),
                config
            );


        })
    </script>

    <!-- LINE CHART -->
    <div class="row justify-content-center mt-4">
        <div class="col-8">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">نمودار خطی</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-widget="remove"><i
                                class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="chart">
                        <canvas id="lineChart" style="height:250px"></canvas>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
    <!-- /.card -->
@stop
