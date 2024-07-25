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
                    <a href="{{url('/inputDonasiManual')}}" class="text-green-700">Input Transaksi</a>
                </div>
                <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                    <a class="text-green-700">Export</a>
                </div>
            </div>
        </div>
    </div>

    @if(session('success'))
        <div id="alert-3" class="flex items-center p-4 mt-4 mb-4 text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
            <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
            <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
            </svg>
            <span class="sr-only">Info</span>
            <div class="ms-3 text-sm font-medium">
                {{ session('success') }}
            </div>
            <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-green-50 text-green-500 rounded-lg focus:ring-2 focus:ring-green-400 p-1.5 hover:bg-green-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-green-400 dark:hover:bg-gray-700" data-dismiss-target="#alert-3" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
            </svg>
            </button>
        </div>
    @endif

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
                        Fundraiser
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Donasi
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black w-32">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $row)
                <tr class="odd:bg-gray-100 odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <td class="px-6 py-4 text-black text-base">
                        {{$loop->iteration}}
                    </td>
                    <td class="px-6 py-4 text-gray-800 text-base">
                        {{$row->order_id}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        {{$row->nama_donatur}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        {{$row->nama_program_zakat}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        {{$row->tgl_transaksi}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        {{$row->fundraiser}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Rp {{ number_format($row->nominal_total, 0, ',','.')}}
                    </td>
                    <td class=" text-black text-base">
                        <div class="flex gap-1">
                            <a href="{{route('transaksi.detailTransaksiOffline', $row->id)}}" class="text-white text-sm p-1 w-8 px-2 bg-yellow-400 hover:bg-yellow-500 rounded-sm">
                                <svg class="w-[18px] h-[18px] text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                </svg>
                            </a>
                            <a href="#" data-modal-target="hapus-modal-{{$row->id}}" data-modal-toggle="hapus-modal-{{$row->id}}" class="text-white text-sm p-1 w-8 px-2 bg-red-600 hover:bg-red-700 rounded-sm">
                                <svg class="w-[18px] h-[18px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                </svg>
                            </a>
                            <a href="#" class="text-white text-sm p-1 w-8 px-2 bg-green-600 hover:bg-green-700 rounded-sm">
                                <svg class="w-[18px] h-[18px] text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 15v2a3 3 0 0 0 3 3h10a3 3 0 0 0 3-3v-2m-8 1V4m0 12-4-4m4 4 4-4"/>
                                </svg>
                            </a>
                        </div>
                    </td>
                </tr>
                <div id="hapus-modal-{{$row->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                    <div class="relative p-4 w-full max-w-md max-h-full">
                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                            <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="hapus-modal-{{$row->id}}">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                </svg>
                                <span class="sr-only">Close modal</span>
                            </button>
                            <div class="p-4 md:p-5 text-center">
                                <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                                </svg>
                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Yakin ingin menghapus data?</h3>
                                <form action="{{route('transaksi.deleteDonasiManual', $row->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button data-modal-hide="hapus-modal-{{$row->id}}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                        Ya
                                    </button>
                                </form>
                                <button data-modal-hide="hapus-modal-{{$row->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
