@extends('front.layout.main3')

@section('konten')

<div class="relative z-20">
    <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
        <div class="flex items-center rounded-full bg-green-200 p-2">
            <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </div>
        <div class="flex items-center ml-7">
            <p class="font-semibold">Donasi Instan</p>
        </div>
    </div>
</div>

<div class="mt-20">
    <div class="mx-8 mb-6 mt-10">
        <p class="font-bold mb-0.5">Donasi Instan</p>
        <p class="font-semibold">Buat kegiatan donasimu lebih mudah disini</p>
    </div>
    <div class="mx-8 grid gap-3 ">
        <div class="relative" id="nominal-input-container">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
            <input type="text" id="nominal" class="cursor-pointer block px-4 pl-9 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="Tes" readonly />
            <label for="nominal" class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nominal</label>
            <span class="absolute inset-y-0 right-3 flex items-center justify-center gap-1 pointer-events-none">
                <p class="text-xs">Ubah</p>
                <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
            </span>
        </div>
        <div class="relative" id="payment-method-input-container">
            <img id="payment-method-image" class="h-5 absolute top-4 bottom-0 left-0 flex items-center pl-3" src="{{ url('/logo_pembayaran.png')}}" alt="logo">
            <input type="text" id="payment-method" class="cursor-pointer block px-4 pl-20 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="Metode Pembayaran" readonly />
            <label for="payment-method" class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Metode Pembayaran</label>
            <span class="absolute inset-y-0 right-3 flex items-center justify-center gap-1 pointer-events-none">
                <p class="text-xs">Ubah</p>
                <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
            </span>
        </div>
        <div id="data" class="relative w-full p-4 border border-gray-400 cursor-pointer rounded-xl flex justify-between">
            <div id="isi-data" class="">
                <div class="text-sm text-gray-400">Nama disamarkan</div>
                <div class="font-bold text-green-700">Hamba Allah</div>
                <div class="text-sm text-gray-400">Nomor Hp</div>
            </div>
            <span class="absolute inset-y-0 right-3 flex items-center justify-center gap-1 pointer-events-none">
                <p class="text-xs">Ubah</p>
                <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
            </span>
        </div>
        <div class="relative" id="program-zakat-input-container">
            <input type="text" id="program-zakat" class="cursor-pointer block px-4 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="Pilih Program Zakat" readonly />
            <label for="payment-method" class="absolute text-sm  dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Program Zakat</label>
            <span class="absolute inset-y-0 right-3 flex items-center justify-center gap-1 pointer-events-none">
                <p class="text-xs">Pilih</p>
                <svg class="w-[18px] h-[18px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                </svg>
            </span>
        </div>
    </div>
    <div id="" class="bg-green-100 rounded-xl my-3 p-4 mx-8">
        <div class="flex justify-between items-center">
            <p class="text-sm flex items-center gap-2">Dana Pengembangan Dakwah
                <button data-popover-target="popover-description" data-popover-placement="bottom" type="button">
                    <svg class="w-[16px] h-[16px] text-green-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11h2v5m-2 0h4m-2.592-8.5h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                </button>
            </p>
            <div data-popover id="popover-description" role="tooltip" class="absolute z-10 invisible inline-block w-64 text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 dark:text-gray-400 dark:border-gray-600 dark:bg-gray-800">
                <div class="px-3 py-2 bg-gray-100 border-b border-gray-200 rounded-t-lg dark:border-gray-600 dark:bg-gray-700">
                    <h3 class="font-semibold text-gray-900 dark:text-white">Popover title</h3>
                </div>
                <div class="px-3 py-2">
                    <p>And here's some amazing content. It's very engaging. Right?</p>
                </div>
                <div data-popper-arrow></div>
            </div>
        </div>
        <div class="mt-2 grid grid-cols-4 gap-3">
            <button class="pengembang rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full mt-2" onclick="selectPengembangan(2.5, this)">2.5%</button>
            <button class="pengembang rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full mt-2" onclick="selectPengembangan(5, this)">5%</button>
            <button class="pengembang rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full mt-2" onclick="selectPengembangan(7.5, this)">7.5%</button>
            <button class="pengembang rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full mt-2" onclick="selectPengembangan(10, this)">10%</button>
            {{-- <input type="text" id="" class="col-span-4 border p-2 w-full mt-2" placeholder="Masukkan nominal lain" > --}}
            <div class="relative col-span-4" id="pengembangan-input-container">
                <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
                <input oninput="inputManual()" type="text" id="pengembangan-input" class="block px-4 pl-9 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="0" />
                <label for="pengembangan-input" class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-green-100 dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nominal lain</label>
            </div>
        </div>
    </div>
    <div class="mx-8 ">
        <div class="font-semibold my-4">Rincian Pembayaran Donasi</div>
        <div class="flex justify-between">
            <div>Dana untuk donasi</div>
            <div id="dana-donasi">Rp 0</div>
        </div>
        <div class="flex justify-between my-1">
            <div>Dana Pengembangan Dakwah</div>
            <div id="dana-pengembangan">Rp 0</div>
        </div>
        <div class="flex justify-between">
            <div>Total Donasi</div>
            <div id="total-donasi">Rp 0</div>
        </div>
    </div>
    <div class="flex mx-8 mt-6 mb-4">
        <button type="submit" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Lanjutkan</button>
    </div>
</div>

<div id="nominal-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50 overflow-y-auto">
    <div class="relative z-50">
        <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
            <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closeNominalPage()">
                <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </div>
            <div class="flex items-center ml-7">
                <p class="font-semibold">Nominal Donasi Instan</p>
            </div>
        </div>
    </div>
    <div class="mx-8 mt-20">
        <img class="w-full" src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg" alt="" >
    </div>
    <div class="flex justify-between items-center mx-8 my-4">
        <p class="font-bold">Masukan Nominal Donasi anda</p>
    </div>
    <div class="t-4 grid grid-cols-3 auto-cols-auto mx-8 gap-1">
        <button class="nominal-button rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('10000', this)">10 Rb</button>
        <button class="nominal-button rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('25000', this)">25 Rb</button>
        <button class="nominal-button rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('50000', this)">50 Rb</button>
        <button class="nominal-button rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('100000', this)">100 Rb</button>
        <button class="nominal-button rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('250000', this)">250 Rb</button>
        <button class="nominal-button rounded-xl p-2 bg-white text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('500000', this)">500 Rb</button>
        {{-- <input type="text" id="nominal-input" class="col-span-3 border p-2 w-full mt-4" placeholder="Masukkan nominal lain"> --}}
        <div class="relative col-span-3 mt-3" id="nominal-input2-container">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
            <input type="number" min="10000" id="nominal-input" class="block px-4 pl-9 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="0"/>
            <label for="pengembangan-input" class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-green-100 dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nominal lain</label>
        </div>
        <div class="whitespace-nowrap text-gray-500 text-xs">Minimal Donasi Rp10.000</div>
        <div class="flex mt-4 mb-4 col-span-3">
            <button onclick="confirmNominal()" type="submit" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Lanjutkan</button>
        </div>
    </div>
</div>

<div id="payment-method-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50 overflow-y-auto pb-12">
    <div class="relative z-50">
        <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
            <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closePaymentMethodPage()">
                <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </div>
            <div class="flex items-center ml-7">
                <p class="font-semibold">Metode Pembayaran</p>
            </div>
        </div>
    </div>
    <div class="flex items-center mt-24 mx-8">
        <p class="font-bold">Pilih Metode Pembayaran</p>
    </div>
    <div class="my-3 mx-8 bg-green-100 border border-green-600 rounded-xl p-3">
        <div class="my-1">
            <p class="text-sm">Pembayaran Instan</p>
            <p class="text-xs">Verifikasi Otomatis, minimal pembayaran 10 ribu</p>
        </div>
        <div class="">
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'ShopeePay')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>ShopeePay</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'OVO')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>OVO</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Gopay')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Gopay</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Dana')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Dana</p></button>
        </div>
    </div>
    <div class="my-3 mx-8 bg-green-100 border border-green-600 rounded-xl p-3">
        <div class="my-1">
            <p class="text-sm">Pembayaran Instan</p>
            <p class="text-xs">Verifikasi Otomatis, minimal pembayaran 10 ribu</p>
        </div>
        <div class="">
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'QRIS')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>QRIS</p></button>
        </div>
    </div>
    <div class="my-3 mx-8 bg-green-100 border border-green-600 rounded-xl p-3">
        <div class="my-1">
            <p class="text-sm">Pembayaran Instan</p>
            <p class="text-xs">Verifikasi Otomatis, minimal pembayaran 10 ribu</p>
        </div>
        <div class="">
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'BSI Virtual Account')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>BSI Virtual Account</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'BRI Virtual Account')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>BRI Virtual Account</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Mandiri Virtual Account')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Mandiri Virtual Account</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Dana Virtual Account')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>BCA Virtual Account</p></button>
        </div>
    </div>
    <div class="my-3 mx-8 bg-green-100 border border-green-600 rounded-xl p-3">
        <div class="my-1">
            <p class="text-sm">Pembayaran Instan</p>
            <p class="text-xs">Verifikasi Otomatis, minimal pembayaran 10 ribu</p>
        </div>
        <div class="">
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Transfer BSI')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer BSI</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Transfer BRI')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer BRI</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Transfer Mandiri')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer Mandiri</p></button>
            <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-white border border-gray-400 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Transfer BCA')">
                <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer BCA</p></button>
        </div>
    </div>
</div>

<div id="data-input-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50">
    <div class="relative z-50">
        <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
            <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closeDataInputPage()">
                <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </div>
            <div class="flex items-center ml-7">
                <p class="font-semibold">Data Diri</p>
            </div>
        </div>
    </div>
    <div class="mx-8 mb-6 mt-20">
        <p class="font-bold mb-0.5">Data diri</p>
        <p class="font-semibold">Isi data diri anda disini</p>
    </div>
    <div class="mx-8">
        <div class="relative" >
            <input type="text" id="nama-input" class="block px-4 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="Nama Lengkap" />
            <label for="nominal" class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nama Lengkap</label>
        </div>
        <div class="relative my-3">
            <input type="tel" id="phone-input" class="block px-4 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="cth : 0811-xxxx-xxxx" />
            <label for="nominal" class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nomor Hp</label>
        </div>
        {{-- <input type="checkbox" id="samarkan-checkbox" class="mr-2" > <label for="samarkan-checkbox">Samarkan nama</label> --}}
        <div class="flex items-center my-2">
            <input id="samarkan-checkbox" type="radio" onchange="toggleSamarkanNama()" name="nama-samaran" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
            <label for="default-radio-1" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Samarkan nama saya</label>
        </div>
        <div class="relative my-3">
            <textarea id="doa-input" rows="4" class="block px-4 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-green-500 focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="Tulis doa untuk penggalang dana atau dirimu sendiri di sini. Biar doa kamu bisa dilihat dan diamini oleh #OrangBaik lainnya"></textarea>
            <label for="doa-input" class="absolute text-sm dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Doa di donasi ini <b>(opsional)</b></label>
        </div>
        <div class="flex mt-4 mb-4">
            <button id="data-continue" onclick="confirmData()" type="submit" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Lanjutkan</button>
        </div>
    </div>
</div>


<div id="program-zakat-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50 overflow-y-auto pb-12">
    <div class="relative z-50">
        <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
            <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closeProgramZakatPage()">
                <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </div>
            <div class="flex items-center ml-7">
                <p class="font-semibold">Program Zakat</p>
            </div>
        </div>
    </div>
    <div class="flex items-center mt-24 mx-8">
        <p class="font-bold text-lg">Pilih Program Zakat</p>
    </div>
    <div class="my-3 mx-8">
        <div class="">
            <button class="flex justify-between gap-4 items-center rounded-xl text-left text-sm p-4 bg-green-100 border border-green-400 font-semibold w-full mt-2" onclick="selectProgramZakat('Zakat Instan')">
                <p class="">Zakat Instan</p>
                <svg class="w-4 h-4 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7"/>
                </svg>
            </button>
            <button class="flex justify-between gap-4 items-center rounded-xl text-left text-sm p-4 bg-green-100 border border-green-400 font-semibold w-full mt-2" onclick="selectProgramZakat('Zakat Masjid')">
                <p>Zakat Masjid</p>
                <svg class="w-4 h-4 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7"/>
                </svg>
            </button>
            <button class="flex justify-between gap-4 items-center rounded-xl text-left text-sm p-4 bg-green-100 border border-green-400 font-semibold w-full mt-2" onclick="selectProgramZakat('Zakat Ramadhan')">
                <p>Zakat Ramadhan</p>
                <svg class="w-4 h-4 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7"/>
                </svg>
            </button>
            <button class="flex justify-between gap-4 items-center rounded-xl text-left text-sm p-4 bg-green-100 border border-green-400 font-semibold w-full mt-2" onclick="selectProgramZakat('Zakat Pendidikan')">
                <p>Zakat Pendidikan</p>
                <svg class="w-4 h-4 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="m9 5 7 7-7 7"/>
                </svg>
            </button>
        </div>
    </div>
</div>

<script>

    var nominalValue = 0;
    var pengembanganValue = 0;

    function confirmNominal() {
        nominalValue = parseFloat(document.getElementById('nominal-input').value) || 0;
        document.getElementById('nominal').value = nominalValue;
        hitungTotalDonasi();
        closeNominalPage();
    }
    // function confirmNominal() {
    //     var nominalValue = document.getElementById('nominal-input').value;
    // }

    function selectPengembangan(persentase, element) {
        var buttons = document.querySelectorAll('.pengembang');
        buttons.forEach(button => {
            button.classList.remove('bg-green-600'),
            button.classList.remove('text-white');
        });
        element.classList.add('bg-green-600'),
        element.classList.add('text-white');

        pengembanganValue = (nominalValue * persentase / 100).toFixed(2);
        document.getElementById('pengembangan-input').value = pengembanganValue;
        hitungTotalDonasi();
    }

    function inputManual() {
        pengembanganValue = parseFloat(document.getElementById('pengembangan-input').value.replace(/\D/g, '')) || 0;
        hitungTotalDonasi();
    }

    function hitungTotalDonasi() {
        var danaPengembangan = parseFloat(pengembanganValue);
        var totalDonasi = nominalValue + danaPengembangan;

        document.getElementById('dana-donasi').textContent = 'Rp ' + formatRupiah(nominalValue);
        document.getElementById('dana-pengembangan').textContent = 'Rp ' + formatRupiah(danaPengembangan);
        document.getElementById('total-donasi').textContent = 'Rp ' + formatRupiah(totalDonasi);
    }

    function formatRupiah(angka) {
        return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Inisialisasi nilai awal
    confirmNominal();


    document.getElementById('nominal').addEventListener('click', function() {
        document.getElementById('nominal-page').classList.remove('hidden');
    });

    function closeNominalPage() {
        document.getElementById('nominal-page').classList.add('hidden');
    }

    // function selectNominal(nominal) {
    //     document.getElementById('nominal-input').value = nominal;
    // }

    function selectNominal(nominal, element) {
        var buttons = document.querySelectorAll('.nominal-button');
        buttons.forEach(button => {
            button.classList.remove('bg-green-600'),
            button.classList.remove('text-white');
        });
        element.classList.add('bg-green-600'),
        element.classList.add('text-white');

        document.getElementById('nominal-input').value = nominal;
    }

    // function confirmNominal() {
    //     var nominalValue = document.getElementById('nominal-input').value;
    //     document.getElementById('nominal').value = nominalValue;
    //     closeNominalPage();
    // }

    document.getElementById('payment-method').addEventListener('click', function() {
        document.getElementById('payment-method-page').classList.remove('hidden');
    });

    function closePaymentMethodPage() {
        document.getElementById('payment-method-page').classList.add('hidden');
    }

    function selectPaymentMethod(img, method) {
        document.getElementById('payment-method').value = method;

        var paymentImage = document.getElementById('payment-method-image');

        paymentImage.src = img;

        closePaymentMethodPage();
    }

    document.getElementById('data').addEventListener('click', function() {
        document.getElementById('data-input-page').classList.remove('hidden');
    });

    function closeDataInputPage() {
        document.getElementById('data-input-page').classList.add('hidden');
    }

    function toggleSamarkanNama() {
        var namaInput = document.getElementById('nama-input');
        var samarkanCheckbox = document.getElementById('samarkan-checkbox');

        if (samarkanCheckbox.checked) {
            namaInput.value = 'Hamba Allah';
            namaInput.disabled = true;
        } else {
            namaInput.value = '';
            namaInput.disabled = false;
        }
    }

    function confirmData() {
        var namaValue = document.getElementById('nama-input').value;
        var phoneValue = document.getElementById('phone-input').value;
        var doaValue = document.getElementById('doa-input').value;

        if (document.getElementById('samarkan-checkbox').checked) {
            namaValue = 'Hamba Allah';
        }

        document.getElementById('isi-data').innerHTML = `
            <div class="text-sm text-gray-400">Nama disamarkan</div>
            <div class="font-bold text-green-700">${namaValue}</div>
            <div class="text-sm text-gray-400">${phoneValue}</div>
        `;

        closeDataInputPage();
    }

    function closeDataInputPage() {
        document.getElementById('data-input-page').classList.add('hidden');
    }

    document.getElementById('program-zakat').addEventListener('click', function() {
        document.getElementById('program-zakat-page').classList.remove('hidden');
    });

    function closeProgramZakatPage() {
        document.getElementById('program-zakat-page').classList.add('hidden');
    }

    function selectProgramZakat(program) {
        document.getElementById('program-zakat').value = program;

        closeProgramZakatPage();
    }
</script>

@endsection

