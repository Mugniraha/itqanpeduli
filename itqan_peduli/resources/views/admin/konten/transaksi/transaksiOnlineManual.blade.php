@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">Transaksi Online</p>
                <p class="text-sm text-gray-300 font-semibold">Pantau semua donasi melalui payment gateway dan transfer</p>
            </div>
            <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                <a class="text-green-700">Export</a>
            </div>
        </div>
    </div>

    <div class="flex mt-10">
        <div href="{{route('transaksiOnline')}}"  class="bg-white p-2 text-blue-600 font-normal rounded-t-sm">
            <a href="{{'transaksiOnline'}}" class="mx-3">Payment Gateway</a>
        </div>
        <div class="bg-green-700 p-2 text-white font-normal rounded-t-sm">
            <span class="mx-3" href="">Manual</span>
        </div>
    </div>
    <div class="relative overflow-x-auto sm:rounded-sm p-5">
        <table id="myTable" class="min-w-full leading-normal stripe w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700  bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold text-lg text-black">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nama Donatur
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nama Projek
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Tgl Transaksi
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black w-32">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-gray-100 odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="px-6 py-4 text-black text-base">
                        1
                    </td>
                    <td class="px-6 py-4 text-gray-800 text-base">
                        INV-202407041625315EwxkKce
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Hamba Allah
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Hadiah Terbaik Untuk Anak Bangsa
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        2024-07-04 16:25:32
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Rp. 10.000.000
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Menunggu
                    </td>
                    <td class=" text-black text-base">
                        <a href="#" class="text-white text-sm p-1 px-2 dark:text-black bg-green-700 rounded-sm">
                            Lihat Detail
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
