@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                <a href="{{route('transaksiOffline')}}" class="text-green-700">Kembali</a>
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

    <div class="p-4 md:p-5">
        <form class="" action="{{route('transaksi.editDonasiManual', $donaturManual->id)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nama_donatur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Donatur</label>
                <input type="text" name="nama_donatur" id="nama_donatur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$donaturManual->nama_donatur}}" required />
            </div>
            <input type="hidden" name="id" value="{{$donaturManual->id}}">
            <div class="mb-3">
                <label for="nama_program_zakat" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                <input type="text" name="nama_program_zakat" id="nama_program_zakat" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$donaturManual->nama_program_zakat}}" readonly required/>
            </div>
            <div class="mb-3">
                <label for="fundraiser" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                <input type="text" name="fundraiser" id="fundraiser" class="bg-gray-200 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$donaturManual->fundraiser}}" readonly required />
            </div>
            <div class="mb-3">
                <label for="email_donatur" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                <input type="text" name="email_donatur" id="email_donatur" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$donaturManual->email_donatur}}" required />
            </div>
            <div class="mb-3">
                <label for="nomor_hp" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                <input type="text" name="nomor_hp" id="nomor_hp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$donaturManual->nomor_hp}}" required />
            </div>
            <div class="mb-3">
                <label for="nominal_total" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nominal</label>
                <input type="text" name="nominal_total" id="nominal_total" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" value="{{$donaturManual->nominal_total}}" required />
            </div>
            <div class="mb-3">
                <label for="tgl_transaksi" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Donatur</label>
                <input type="date" name="tgl_transaksi" id="tgl_transaksi" placeholder="" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="{{ old('tgl_transaksi', $donaturManual->tgl_transaksi) }}"  required />
            </div>
            <div class="flex justify-end">
                <button type="submit" class="text-white w-1/5 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Simpan</button>
            </div>
        </form>
    </div>




@endsection
