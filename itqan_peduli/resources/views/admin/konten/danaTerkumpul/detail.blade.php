@extends('admin.layout.main')

@section('konten')
    <div class="welcome flex justify-between bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
        <div class="kiri my-auto">
            <a type="button" href="{{ url('/dana-terkumpul') }}" class="text-green-700 bg-white p-5 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Kembali
            </a>
        </div>
        <div class="kanan my-auto">
            <a type="button" href="#" class="text-green-700 bg-white p-5 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Export
            </a>
        </div>
    </div>
    <div class="konten bg-white shadow-md mt-10 py-5 pb-10">
        <div class="header mx-5">
            <img src="/images/tentangkami.jpeg" alt="" class="h-80 w-full object-cover">
        </div>
        <p class="text-2xl font-semibold my-1 mt-5 mx-5">Program Instan Sedekah</p>
        <div class="teks flex justify-between mx-5">
            <p class="text-sm">Program Tidak Terikat</p>
            <a href="#" class="text-sm text-green-700">Lihat halaman program</a>
        </div>
        <p class="font-semibold text-sm mt-10 mb-5 mx-5">Perkembangan</p>
        <div class="card flex text-slate-400 font-semibold">
            <div class="kiri border-b border-gray-300 p-2 text-sm w-full p-5">
                <p class="text-sm">Target Terkumpul</p>
                <p class="text-sm mt-4">Unlimited</p>
            </div>
            <div class="tengah border-r border-l border-b border-gray-300 p-2 text-sm w-full p-5">
                <p class="text-sm">Donatur</p>
                <p class="text-sm mt-4">77</p>
            </div>
            <div class="kanan border-b border-gray-300 p-2 text-sm w-full p-5">
                <p class="text-sm">Fundraiser</p>
                <p class="text-sm mt-4">10</p>
            </div>
        </div>
        <p class="font-semibold text-sm mt-10 mb-5 mx-5">Data Uang Kas</p>
        <div class="card text-slate-400 font-semibold">
            <div class="atas flex">
                <div class="kiri border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Total Saldo</p>
                    <p class="text-sm mt-4">Unlimited</p>
                </div>
                <div class="tengah border-r border-l border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Saldo Online</p>
                    <p class="text-sm mt-4">77</p>
                </div>
                <div class="kanan border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Saldo Offline</p>
                    <p class="text-sm mt-4">10</p>
                </div>
            </div>
            <div class="bawah flex">
                <div class="kiri border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Sisa Saldo</p>
                    <p class="text-sm mt-4">10</p>
                </div>
                <div class="kanan border-b border-l border-r border-gray-300 w-[33.3%] p-5">
                    <p class="text-sm">Biaya Payment Gateway</p>
                    <p class="text-sm mt-4">10</p>
                </div>
            </div>
        </div>
        <p class="font-semibold text-sm mt-10 mb-5 mx-5">Pembagian Dana Program</p>
        <div class="card text-slate-400 font-semibold">
            <div class="atas flex">
                <div class="kiri border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Dana Penyaluran (99%) - (fee payment gateway)</p>
                    <p class="text-sm mt-4">Unlimited</p>
                </div>
                <div class="tengah border-r border-l border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Hak Lembaga (0%)</p>
                    <p class="text-sm mt-4">77</p>
                </div>
                <div class="kanan border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Hal MediaBerbagi (1%)</p>
                    <p class="text-sm mt-4">10</p>
                </div>
            </div>
            <div class="bawah flex">
                <div class="kiri border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Dana Disalurkan</p>
                    <p class="text-sm mt-4">10</p>
                </div>
                <div class="kanan border-b border-l border-r border-gray-300 w-[33.3%] p-5">
                    <p class="text-sm">Hak Lembaga Disalurkan</p>
                    <p class="text-sm mt-4">10</p>
                </div>
                <div class="kanan border-b border-gray-300 p-2 text-sm w-[33.3%] p-5">
                    <p class="text-sm">Hak MediaBerbagi Disalurkan</p>
                    <p class="text-sm mt-4">10</p>
                </div>
            </div>
        </div>
        <p class="font-semibold text-xl my-5 mx-5">Rincian</p>
        <div class="card mx-5">
            <div class="kiri">
                <p class="text-sm font-bold">Donasi</p>
                <p class="border-b border-gray-300 p-2 text-sm">Donasi online</p>
                <p class="border-b border-gray-300 p-2 text-sm">Donasi offline</p>
                <p class="font-semibold border-b-2 border-black p-2 text-sm">Total donasi</p>
                <p class="text-sm font-bold my-2 mt-4">Potongan</p>
                <p class="border-b border-gray-300 p-2 text-sm">Hak media berbagi</p>
                <p class="border-b border-gray-300 p-2 text-sm">Dana operasional (0%)</p>
                <p class="border-b border-gray-300 p-2 text-sm">Komisi fundraiser (0%)</p>
                <p class="border-b border-gray-300 p-2 text-sm">Biaya payment gateway</p>
                <p class="border-b border-gray-300 p-2 text-sm">Donasi yang telah disalurkan</p>
                <p class="font-semibold border-b border-gray-300 p-2 text-sm">Total potongan</p>
                <p class="font-semibold border-b-2 border-black p-2 text-sm">Dana yang bisa dipakai</p>
                <p class="text-sm text-gray-400 my-3 mx-3">* ketika anda merubah data persen operasional dan komisi fundraiser menjadi 0% data yang lama akan tetap ditampilkan</p>
            </div>
        </div>
    </div>
    <div class="transaksi bg-white my-5 shadow-md p-5 h-auto">
        <p class="font-semibold text-sm mb-5 my-2">Riwayat Transaksi</p>
        <div class="atas flex justify-between mb-12">
            <div class="kiri flex">
                <p>Show</p>
                <form class="max-w-sm ms-2">
                    <select id="countries" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 p-1 dark:bg-gray-700 dark:border-green-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </form>
            </div>
            <div class="kanan">
                <form class="flex items-center max-w-sm mx-auto">
                    <button type="submit" class="p-1.5 me-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                        <span class="sr-only">Search</span>
                    </button>
                    <div class="relative w-full">
                        <input type="text" id="simple-search" class="h-8 bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-800 focus:border-green-800 block w-full ps-2 p-1.5 dark:bg-gray-700 dark:border-green-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-800 dark:focus:border-green-800" required />
                    </div>
                </form>
            </div>
        </div>
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Tanggal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nama
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Payment
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Fee
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-100 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple MacBook Pro 17"
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                    <td class="px-6 py-4">
                        Laptop
                    </td>
                    <td class="px-6 py-4">
                        $2999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-100 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Microsoft Surface Pro
                    </th>
                    <td class="px-6 py-4">
                        White
                    </td>
                    <td class="px-6 py-4">
                        Laptop PC
                    </td>
                    <td class="px-6 py-4">
                        $1999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-100 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Magic Mouse 2
                    </th>
                    <td class="px-6 py-4">
                        Black
                    </td>
                    <td class="px-6 py-4">
                        Accessories
                    </td>
                    <td class="px-6 py-4">
                        $99
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-100 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Google Pixel Phone
                    </th>
                    <td class="px-6 py-4">
                        Gray
                    </td>
                    <td class="px-6 py-4">
                        Phone
                    </td>
                    <td class="px-6 py-4">
                        $799
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Apple Watch 5
                    </th>
                    <td class="px-6 py-4">
                        Red
                    </td>
                    <td class="px-6 py-4">
                        Wearables
                    </td>
                    <td class="px-6 py-4">
                        $999
                    </td>
                    <td class="px-6 py-4">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
            </tbody>
        </table>
        <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4 mb-10" aria-label="Table navigation">
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
                        <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">3</a>
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
        <p class="font-bold text-sm text-gray-500 my-2">Total funding <span class="font-normal">Rp 120.321</span></p>
        <p class="font-bold text-sm text-gray-500 my-2">Total fee <span class="font-normal">Rp 30.500</span></p>
    </div>
    @endsection