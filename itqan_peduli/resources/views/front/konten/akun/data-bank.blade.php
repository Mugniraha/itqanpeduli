@extends('front.layout.main3')

@section('konten')
    <div class="bungkus">
        <div class="header flex">
            <a href="/akun-fundraiser" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Data Bank</p>
        </div>
        <div class="konten">
            <div class="mx-8">
                <button class="relative w-full text-left my-3 mb-1 p-4 shadow-md rounded-xl">
                    <div class="text-lg text-gray-700">Farhan Fadhlurrohman</div>
                    <div class="text-gray-700"><b>Mandiri</b> - 122111343231</div>
                </button>
                <button class="relative w-full my-3 text-left mb-1 p-4 shadow-md rounded-xl">
                    <div class="text-lg text-gray-700">Farhan Fadhlurrohman</div>
                    <div class="text-gray-700"><b>BCA</b> - 122111343231</div>
                </button>
                {{-- <input type="checkbox" id="samarkan-checkbox" class="mr-2" > <label for="samarkan-checkbox">Samarkan nama</label> --}}
                <div class="flex mt-2 mb-2">
                    <button id="data-continue" onclick="confirmData()" type="submit" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Pilih Bank</button>
                </div>
                <p class="mt-8 font-bold">Tambah Bank</p>
                <div class="relative mt-6">
                        <label for="nama" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nama Bank</label>
                        <input type="text" id="nama" placeholder="Masukan nama bank" class="w-full py-3 px-4 text-sm border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                        <label for="nama" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nomor Rekening</label>
                        <input type="text" id="nama" placeholder="Masukan nomor rekening" class="w-full py-3 px-4 text-sm border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                        <label for="nama" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Pemilik Rekening</label>
                        <input type="text" id="nama" placeholder="Masukan nama pemilik rekening" class="w-full py-3 px-4 text-sm border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <button data-modal-target="default-modal1" data-modal-toggle="default-modal1" class="block text-white bg-green-700 hover:bg-green-800 my-4 w-full focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                    Tambah Bank
                </button>
            </div>
        </div>
        </div>
    </div>
@endsection