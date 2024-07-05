<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body class="p-6 bg-slate-50">
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
    <div class="grid grid-cols-2  md:grid-cols-3 mt-8 p-4 bg-white">
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Program Donasi</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Donatur Hari Ini</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b">
            <h5 class="font-semibold block mb-0">Donatur Bulan Ini</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Transaksi Hari Ini</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0">Transaksi Bulan Ini</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b ">
            <h5 class="font-semibold block mb-0">Dana Terkumpul Hari Ini</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0"> Dana Terkumpul Bulan Ini</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0"> Donasi Menunggu Pembayaran</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b ">
            <h5 class="font-semibold block mb-0"> Dana Menunggu Pembayaran</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0"> Donasi Offline</h5>
            <span class="text-gray-500 block mt-0">11</span>
        </div>
        <div class="p-4  mb-1 border-b border-r">
            <h5 class="font-semibold block mb-0"> Donasi Online</h5>
            <span class="text-gray-500 block mt-0">11</span>
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



    <div class="relative overflow-x-auto sm:rounded-sm bg-white p-5">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 bg-white ">
            <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold text-lg text-black">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Tgl Transaksi
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Metode Pembayaran
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4 text-black text-base">
                        1
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Fajar
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        04-07-2024, 11:21
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        BSI
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Rp 10.669
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Menunggu
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        <a href="#" class="text-white text-sm p-1 px-2 dark:text-black bg-green-700 rounded-sm">
                            Lihat Detail
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
            <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900 dark:text-white">1-10</span> of <span class="font-semibold text-gray-900 dark:text-white">1000</span></span>
            <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Previous</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">2</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">4</a>
                </li>
                <li>
                    <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">5</a>
                </li>
                <li>
            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">Next</a>
                </li>
            </ul>
        </nav>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
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
</body>
</html>
