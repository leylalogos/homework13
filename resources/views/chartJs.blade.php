@extends('layout.admin')
@section('content')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.1/chart.min.js"></script>

    <script>
        $(function() {

            const labels = [
                'January',
                'February',
                'March',
                'April',
                'May',
                'June',
            ];
            const data = {
                labels: labels,
                datasets: [{
                    label: 'پست های هفت روز اخیر',
                    backgroundColor: 'rgb(255, 99, 132)',
                    borderColor: 'rgb(255, 99, 132)',
                    data: [
                        {{ $postcount[0] }},
                        {{ $postcount[1] }},
                        {{ $postcount[2] }},
                        {{ $postcount[3] }},
                        {{ $postcount[4] }},
                        {{ $postcount[5] }},
                        {{ $postcount[6] }},
                    ],
                }]
            };
            var config = {
                type: 'line',
                data: data,
                options: {}
            };
            var myChart = new Chart(
                document.getElementById('lineChart'),
                config
            );


        })
    </script>

    <!-- LINE CHART -->
    <div class="row justify-content-center mt-4">
        <div class="col-6">
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
