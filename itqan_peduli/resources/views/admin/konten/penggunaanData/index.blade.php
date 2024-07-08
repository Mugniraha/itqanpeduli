@extends('admin.layout.main')
@section('konten')

    <div class="p-5">
        <p class="text-2xl text-black font-bold mb-1">Penggunaan Penyimpanan</p>
        <p class="text-sm text-gray-400 font-semibold">anda berada di mode terbatas, dimana penggunaan maksimal adalah <span>1GB.</span>Segera upgrade untuk penyimpanan yang tidak terbatas</p>
    </div>

    <div class="mt-14 grid grid-cols-2 gap-7 bg-white">
        <div>
            <div id="chart1" class=" border rounded-sm shadow-sm">
            </div>
        </div>
        <div>
            <div id="chart2" class="border rounded-sm shadow-sm">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options1 = {
        chart: {
            type: 'line',
            width: '100%',
            height: '300rem',
        },
        series: [{
            name: 'Sukses',
            data: [0,1,2,3,4,5]
        }],
        stroke: {
            curve: 'smooth',
        },
        colors:['#5942F8']
        }
        var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
        chart1.render();

        var options2 = {
            chart: {
                type: 'donut',
                width: '100%',
                height: '300rem',
            },
            series: [30, 70],
            labels: ['Used', 'Free'],
            plotOptions: {
                pie: {
                    donut: {
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: '22px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                color: 'black',
                                offsetY: -10
                            },
                            value: {
                                show: true,
                                fontSize: '16px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                color: 'black',
                                offsetY: 16,
                                formatter: function (val) {
                                    return val + '%'
                                }
                            },
                            total: {
                                show: true,
                                showAlways: true,
                                label: 'Total',
                                fontSize: '22px',
                                fontFamily: 'Helvetica, Arial, sans-serif',
                                color: 'black',
                                formatter: function (w) {
                                    return w.globals.seriesTotals.reduce((a, b) => {
                                        return a + b
                                    }, 0) + '%'
                                }
                            }
                        }
                    }
                }
            },
            colors: ['#FF4560', '#00E396']
        }

        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();


    </script>

@endsection
