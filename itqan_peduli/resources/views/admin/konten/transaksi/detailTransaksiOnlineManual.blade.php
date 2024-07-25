@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                <a href="{{route('transaksiOnlineManual')}}" class="text-green-700">Kembali</a>
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


    <div class="relative overflow-x-auto sm:rounded-sm bg-white p-5">
        <table id="" class="min-w-full leading-normal stripe w-full text-md text-left text-black font-normal border-none">
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td class="w-1/2">Nama Projek</td>
                    <td class="w-1/2">{{$transaksi->nama_program_zakat}}</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>Nominal Donasi</td>
                    <td>Rp {{ number_format($transaksi->nominal_total, 0, ',','.')}}</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>Kode Unik</td>
                    <td>0</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>Total Transfer</td>
                    <td>{{$transaksi->nominal_zakat}}</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>Status</td>
                    <td>{{$transaksi->status}}</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>Nama Donatur</td>
                    <td>{{$transaksi->nama_donatur}}</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>Metode Pembayaran</td>
                    <td>{{$transaksi->metode_pembayaran}}</td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 border-none even:bg-gray-100 h-12 text-left even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <td>Bukti Pembayaran</td>
                    <td>
                        @if ($transaksi->buktiPembayaran)
                            <img data-modal-target="detail-image-{{$transaksi->id}}" data-modal-toggle="detail-image-{{$transaksi->id}}" class="h-60" src="{{asset('storage/bukti_pembayaran/'. $transaksi->buktiPembayaran)}}" alt="Bukti Pembayaran">
                        @else
                            Belum mengirim bukti pembayaran
                        @endif
                    </td>
                </tr>
        </table>
        <div class="w-full mt-10 flex gap-2 justify-center">
            @if ($transaksi->status === 'Terverivikasi')
                <a class="rounded-md bg-green-500 hover:bg-green-600 text-white px-7 py-2 text-md cursor-pointer" >
                    Terverifikasi
                </a>
            @else
                <a class="rounded-md bg-green-500 hover:bg-green-600 text-white px-7 py-2 text-md cursor-pointer" data-modal-target="konfirmasi-{{$transaksi->id}}" data-modal-toggle="konfirmasi-{{$transaksi->id}}">
                    Konfirmasi
                </a>
            @endif
            <a class="rounded-md bg-yellow-500 hover:bg-yellow-600  px-7 py-2 text-md cursor-pointer" data-modal-target="edit-modal-{{$transaksi->id}}" data-modal-toggle="edit-modal-{{$transaksi->id}}">
                Edit
            </a>
            <a class="rounded-md bg-red-500 hover:bg-red-600 px-7 py-2 text-white cursor-pointer" data-modal-target="hapus-modal-{{$transaksi->id}}" data-modal-toggle="hapus-modal-{{$transaksi->id}}">
                Hapus
            </a>
        </div>
    </div>

    <div id="hapus-modal-{{$transaksi->id}}" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="hapus-modal-{{$transaksi->id}}">
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
                    <div class="flex justify-center">
                        <form action="{{route('transaksi.deletePembayaranOnlineManual', $transaksi->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button data-modal-hide="hapus-modal-{{$transaksi->id}}" type="submit" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya
                            </button>
                        </form>
                        <button data-modal-hide="hapus-modal-{{$transaksi->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="edit-modal-{{$transaksi->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Edit
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="edit-modal-{{$transaksi->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="" action="{{route('transaksi.editPembayaranOnlineManual', $transaksi->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div>
                            <label for="nominal_total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                            <input type="text" name="nominal_total" id="nominal_total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$transaksi->nominal_total}}" required />
                        </div>
                        <input type="hidden" name="id" value="{{$transaksi->id}}">
                        <div class="mb-4">
                            <label for="nama_donatur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Donatur</label>
                            <input type="text" name="nama_donatur" id="nama_donatur" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{$transaksi->nama_donatur}}" required />
                        </div>
                        <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div id="detail-image-{{$transaksi->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                        Bukti Pembayaran
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="detail-image-{{$transaksi->id}}">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <img class="h-full" src="{{asset('storage/bukti_pembayaran/'. $transaksi->buktiPembayaran)}}" alt="Bukti Pembayaran">
                </div>
            </div>
        </div>
    </div>

    <div id="konfirmasi-{{$transaksi->id}}" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative  py-12 px-12 w-2/6  max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="konfirmasi-{{$transaksi->id}}">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="p-4 md:p-5">
                    <p class="text-green-700 font-medium text-lg text-center">Konfirmasi Pembayaran?</p>
                    <div class="flex justify-center mt-7">
                        <form action="{{route('transaksi.konfirmasiPembayaran', $transaksi->id)}}" method="POST">
                            @csrf
                            @method('PATCH')
                            <button data-modal-hide="konfirmasi-{{$transaksi->id}}" type="submit" class="text-white bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                Ya
                            </button>
                        </form>
                        <button data-modal-hide="konfirmasi-{{$transaksi->id}}" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
