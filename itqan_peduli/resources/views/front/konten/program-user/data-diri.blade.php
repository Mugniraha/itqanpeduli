@extends('front.layout.main3')
@section('konten')

<div class="relative z-20">
    <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6 shadow-lg">
        <a href="/artikel/{id}" class="flex items-center rounded-full bg-green-200 p-2">
            <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
        <div class="flex items-center ml-7">
            <p class="font-semibold">Nominal Donasi</p>
        </div>
    </div>
</div>

<div class="mt-24 mb-12 mx-8 grid gap-5">
    <div class="bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg h-56 w-full object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
        </a>
        <div class="p-5">
            <p class="mb-3 font-normal text-gray-700 line-clamp-2">Cianjut Berduka: 200 lebih meninggal dunia. cianjur berduka</p>
        </div>
    </div>
</div>

    <div class="t-4 grid grid-cols-3 auto-cols-auto mx-8 gap-1">
        <div class="relative col-span-3" id="nominal-input2-container">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
            <input type="number" min="10000" id="nominal-input" 
                class="block px-4 pl-9 pr-20 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" 
                placeholder="0" />
            <label for="nominal-input" 
                class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-green-100 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">
                Nominal
            </label>
            <!-- Teks Ubah dan Ikon Chevron -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                <a href="/nominal-donasi" class="flex items-center text-gray-700 font-medium">
                    <span class="mr-2">Ubah</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
    
    <div class="t-4 grid grid-cols-3 auto-cols-auto mx-8 gap-1 mt-5">
        <div class="relative col-span-3" id="nominal-input2-container">
            <!-- <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span> -->
            <input type="number" min="10000" id="nominal-input" 
                class="block px-4 pl-9 pr-20 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer"/>
            <label for="nominal-input" 
                class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-green-100 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">
                Metode Pembayaran
            </label>
            <!-- Teks Ubah dan Ikon Chevron -->
            <div class="absolute inset-y-0 right-0 flex items-center pr-4">
                <a href="/nominal-donasi" class="flex items-center text-gray-700 font-medium">
                    <span class="mr-2">Ubah</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                    </svg>
                </a>
            </div>
        </div>
    </div>

    <div class="mx-8 mb-6 mt-10">
        <p class="font-bold mb-0.5">Data diri</p>
        <p class="font-semibold">Isi data diri anda disini</p>
    </div>
    <div class="mx-8">
        <div class="relative" >
            <input type="text" id="nama-input" class="block px-4 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="Nama Lengkap" />
            <label for="nominal" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nama Lengkap</label>
        </div>
        <div class="relative my-3">
            <input type="tel" id="phone-input" class="block px-4 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="cth : 0811-xxxx-xxxx" />
            <label for="nominal" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor Hp</label>
        </div>
        {{-- <input type="checkbox" id="samarkan-checkbox" class="mr-2" > <label for="samarkan-checkbox">Samarkan nama</label> --}}
        <div class="flex items-center my-2">
            <input id="samarkan-checkbox" type="radio" onchange="toggleSamarkanNama()" name="nama-samaran" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 focus:ring-2">
            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900">Samarkan nama saya</label>
        </div>
        <div class="relative my-3">
            <textarea id="doa-input" rows="4" class="block px-4 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="Tulis doa untuk penggalang dana atau dirimu sendiri di sini. Biar doa kamu bisa dilihat dan diamini oleh #OrangBaik lainnya"></textarea>
            <label for="doa-input" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Doa di donasi ini <b>(opsional)</b></label>
        </div>
    </div>

    <div class="flex mt-4 mb-4 mx-8 col-span-3">
        <a href="/rincian-pembayaran" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Lanjutkan</a>
    </div>
    

@endsection