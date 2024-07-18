@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p  class="text-2xl text-white font-semibold mb-2">Transaksi Offline</p>
                <p class="text-sm text-gray-300 font-semibold">Pantau semua donasi yang diinput melalui admin</p>
            </div>
            <div class="flex gap-1">
                <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                    <a href="{{url('/inputdonasiManual')}}" class="text-green-700">Input Transaksi</a>
                </div>
                <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                    <a class="text-green-700">Export</a>
                </div>
            </div>
        </div>
    </div>

    <div class="relative overflow-x-auto sm:rounded-sm mt-8 p-5">
        <table id="myTable" class="min-w-full leading-normal stripe w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700  bg-gray-50">
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
                <tr class="odd:bg-gray-100 odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
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
                        <div class="flex gap-1">
                            <div href="#" class="text-white text-sm p-1 w-8 px-2 bg-yellow-500 rounded-sm">
                                <svg class="w-[18px] h-[18px] text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                </svg>
                            </div>
                            <div href="#" class="text-white text-sm p-1 w-8 px-2 bg-red-600  rounded-sm">
                                <svg class="w-[18px] h-[18px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </div>
                            <div href="#" class="text-white text-sm p-1 w-8 px-2 bg-green-600  rounded-sm">
                                <svg class="w-[18px] h-[18px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4"/>
                                </svg>
                            </div>
                        </div>

                    </td>
                </tr>
            </tbody>
        </table>
    </div>

@endsection
