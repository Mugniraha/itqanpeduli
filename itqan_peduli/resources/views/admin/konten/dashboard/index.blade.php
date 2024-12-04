@extends('admin.layout.main')
@section('konten')
    <div class="flex gap-10 w-full ">
        <div class="p-5 w-3/5 bg-green-600 border border-gray-200 rounded-xl shadow ">
            <div class="w-55">
                <a href="#" class="">
                    <h5 class="text-3xl font-semibold tracking-tight text-white mb-1">Selamat Datang</h5>
                </a>
                <p class="mb-5 font-semibold text-gray-200">Silahkan menggunakan menu disampng untuk menulai</p>
            </div>
            <a href="#" class="inline-flex items-center px-3 py-2 my-5 text-sm font-medium text-center text-green-600 bg-white rounded-lg">
                <span class="px-5 p-1">Lihat Statistik Terbaru</span>
            </a>
        </div>
        <div class="p-5  w-2/5 bg-lime-500 border border-gray-200 rounded-xl shadow ">
            <div class="w-55">
                <a href="#" class="">
                    <h5 class="text-3xl font-semibold tracking-tight text-white mb-1">Selamat Datang</h5>
                </a>
                <p class="mb-5 font-semibold text-gray-200">Get more of your customer, Dapatkan semua fitur mediaberbagi dalam satu aplikasi</p>
            </div>
            <a href="#" class="inline-flex items-center px-3 py-2 my-5 text-sm font-medium text-center text-green-600 bg-white rounded-lg">
                <span class="px-5 p-1">Hubungi Salles Anda</span>
            </a>
        </div>
    </div>

    <div class="mt-14">
        <span class="text-2xl font-bold font">Statistik</span>
    </div>
    <div class="grid grid-cols-2 md:grid-cols-3 mt-8 p-4 bg-white">
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Program Donasi</h5>
            <span class="text-gray-500 block mt-0">{{ $programCount }}</span>
        </div>
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Donatur Hari Ini</h5>
            <span class="text-gray-500 block mt-0">{{ $donaturToday }}</span>
        </div>
        <div class="p-4 mb-1 border-b">
            <h5 class="font-semibold block mb-0">Donatur Bulan Ini</h5>
            <span class="text-gray-500 block mt-0">{{ $donaturThisMonth }}</span>
        </div>
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Transaksi Hari Ini</h5>
            <span class="text-gray-500 block mt-0">{{ $transaksiToday }}</span>
        </div>
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Transaksi Bulan Ini</h5>
            <span class="text-gray-500 block mt-0">{{ $transaksiThisMonth }}</span>
        </div>
        <div class="p-4 mb-1 border-b">
            <h5 class="font-semibold block mb-0">Dana Terkumpul Hari Ini</h5>
            <span class="text-gray-500 block mt-0">{{ number_format($danaToday, 0, ',', '.') }}</span>
        </div>
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Dana Terkumpul Bulan Ini</h5>
            <span class="text-gray-500 block mt-0">{{ number_format($danaThisMonth, 0, ',', '.') }}</span>
        </div>
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Donasi Menunggu Pembayaran</h5>
            <span class="text-gray-500 block mt-0">{{ $donasiMenungguPembayaran }}</span>
        </div>
        <div class="p-4 mb-1 border-b">
            <h5 class="font-semibold block mb-0">Dana Menunggu Pembayaran</h5>
            <span class="text-gray-500 block mt-0">{{ number_format($danaMenungguPembayaran, 0, ',', '.') }}</span>
        </div>
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Donasi Offline</h5>
            <span class="text-gray-500 block mt-0">{{ $donasiOffline }}</span>
        </div>
        <div class="p-4 mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Donasi Online</h5>
            <span class="text-gray-500 block mt-0">{{ $donasiOnline }}</span>
        </div>
    </div>

    <div class="mt-14 grid grid-cols-2 gap-7 bg-white">
        <div>
            <span class="text-2xl font-bold font">Grafik Transaksi Minggu Ini</span>
            <div id="chart1" class=" border rounded-sm shadow-sm">
            </div>
        </div>
        <div>
            <span class="text-2xl font-bold font">Grafik Donatur Bulan Ini</span>
            <div id="chart2" class="border rounded-sm shadow-sm">

            </div>
        </div>
    </div>

    <div class="mt-14">
        <span class="text-2xl font-bold font">Donasi Terbaru</span>
    </div>
    <div class="relative overflow-x-auto sm:rounded-sm p-5 border-none bg-white">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Tgl Transaksi</th>
                    <th>Metode Pembayaran</th>
                    <th>Nominal</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($donasiTerbaru as $index => $donasi)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $donasi->donatur }}</td>
                        <td>{{ $donasi->created_at }}</td>
                        <td>{{ $donasi->metode_pembayaran }}</td>
                        <td>{{ number_format($donasi->nominal, 0, ',', '.') }}</td>
                        <td>{{ $donasi->status }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
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
            data: ['450000','360000','270000','180000','90000']
        }],
        xaxis: {
            categories: ['27-06','28-06','29-06','30-06','01-07']
        },
        stroke: {
            curve: 'smooth',
        },
        colors:['#5942F8']
        }
        var chart1 = new ApexCharts(document.querySelector("#chart1"), options1);
        chart1.render();

        var options2 = {
        chart: {
            type: 'line',
            width: '100%',
            height: '300rem',
        },
        series: [{
            name: 'sales',
            data: [30,40,35,50,49,60,70,91,125]
        }],
        xaxis: {
            categories: [1991,1992,1993,1994,1995,1996,1997, 1998,1999]
        },
        stroke: {
            curve: 'smooth',
        },
        colors:['#F9D962']
        }
        var chart2 = new ApexCharts(document.querySelector("#chart2"), options2);
        chart2.render();
    </script>

@endsection
