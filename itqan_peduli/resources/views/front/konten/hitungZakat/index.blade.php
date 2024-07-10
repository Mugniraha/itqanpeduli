@extends('front.layout.main')
@section('konten')


<div class="relative z-10 p-4 mt-9">
    <p class=" text-white text-lg font-bold">Pilih Jenis Zakat Anda</p>
</div>

<div class="relative z-10 flex gap-3 justify-center mt-12">
    <div onclick="showDiv('penghasilan', this)" class="relative z-10 flex flex-col items-center bg-white shadow-lg p-2 rounded-2xl w-24 py-4 h-28 cursor-pointer">
        <div>
            <img src="{{asset('images/penghasilan.png')}}" alt="">
        </div>
        <div>
            <p class="text-gray-500 text-sm font-normal mt-2">Penghasilan</p>
        </div>
    </div>
    <div onclick="showDiv('tabungan' , this)" class="relative z-10 flex flex-col items-center bg-white shadow-lg p-2 rounded-2xl w-24 py-4 h-28 cursor-pointer">
        <div>
            <img src="{{asset('images/tabungan.png')}}" alt="">
        </div>
        <div>
            <p class="text-gray-500 text-sm font-normal mt-2">Tabungan</p>
        </div>
    </div>
    <div onclick="showDiv('perdagangan' , this)" class="relative z-10 flex flex-col items-center bg-white shadow-lg p-2 rounded-2xl w-24 py-4 h-28 cursor-pointer">
        <div>
            <img src="{{asset('images/dagang.png')}}" alt="">
        </div>
        <div>
            <p class="text-gray-500 text-sm font-normal mt-2">Perdagangan</p>
        </div>
    </div>
    <div onclick="showDiv('emas' , this)" class="relative z-10 flex flex-col items-center justify-center bg-white shadow-lg p-2 rounded-2xl w-24 py-4 h-28 cursor-pointer">
        <div>
            <img class="h h-10" src="{{asset('images/emas.png')}}"  alt="">
        </div>
        <div>
            <p class="text-gray-500 text-sm font-normal mt-4">Emas</p>
        </div>
    </div>
</div>

<div id="penghasilan" class="hidden">
    <div class="flex mt-14 mx-5 justify-center">
        <div class="bg-green-600 p-3 text-center font-semibold text-white w-1/2 rounded-s-2xl">
            <p>Perbulan</p>
        </div>
        <div class="w-1/2 text-center text-black p-3 bg-gray-200 rounded-e-2xl">
            <p>Pertahun</p>
        </div>
    </div>

    <div class="mx-5">
        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="inputPenghasilan" class=" bg-white px-1 text-sm text-black">Penghasilan </label>
                    </div>
                    <div class="mt-1" data-modal-target="penghasilan-modal" data-modal-toggle="penghasilan-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputPenghasilan" placeholder="Masukan penghasilan bulanan anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakat()">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="bonus" class=" bg-white px-1 text-sm text-black">Pendapatan lainya (Bonus, THR) </label>
                    </div>
                    <div class="mt-1" data-modal-target="pendapatan-modal" data-modal-toggle="pendapatan-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="bonus" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakat()">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="kebutuhan" class=" bg-white px-1 text-sm text-black">Pengeluaran kebutuhan pokok </label>
                    </div>
                    <div class="mt-1" data-modal-target="pengeluaran-modal" data-modal-toggle="pengeluaran-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="kebutuhan" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakat()">
            </div>
        </div>
    </div>

    <div id="statusZakat" class="mx-5 my-3 mt-5">
        <p class="p text-base font-bold">Status bayar Zakat</p>
        <div id="statusBayarZakat" class="rounded-2xl p-2 py-3 mt-3 cursor-pointer">
            <p class="text-green-700 text-center font-bold"></p>
        </div>
    </div>


    <div class="mx-9 mt-8">
        <p class="mb-1 font-bold text-gray-700">Catatan</p>
        <ul class="w w-3/4 list-disc mx-4 text-gray-600 ">
            <li>Perhitungan zakat diupdate secara otomatis berdasarkan update harga emas</li>
            <li>Harga emas per gram saat ini Rp.940.000 (www.harga-emas.org)</li>
            <li>Nishab 85 gram per Bulan Rp.658.333</li>
            <li>Dianjurkan dipotong dari gaji bruto</li>
        </ul>
    </div>


    <div id="jumlahZakat" class="mx-5 my-3 hidden">
        <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
        <div class=" mb-4">
            <p id="nilaiZakat" class=" text-green-700 text-xl font-bold"></p>
        </div>
    </div>

    <div class="mb-8 mt-10">
        <div class="bg-green-700 border border-green-700 rounded-2xl p-2 py-3 mx-5 mb-2.5 hover:bg-green-800 cursor-pointer">
            <p class="text-white text-center font-bold">Lanjutkan</p>
        </div>
        <div class="bg-white border border-green-700 rounded-2xl p-2 py-3 mx-5 shadow-sm hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
            <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
        </div>
    </div>

    <div class="mb-32 mx-5">
        <p class="tracking-wide text-gray-600"> <span class="font-bold text-gray-700"> Nisab </span> adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk zakat penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara 85 gr emas</p>
    </div>



        <div id="penghasilan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Penghasilan
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total pendapatan tetap per-bulan. <span class="font-bold text-black">(Gaji bulanan)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pendapatan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Pendapatan Lainnya
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total pendapatan tetap per-bulan. <span class="font-bold text-black">(Gaji bulanan)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pengeluaran-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Pengeluaran Kebutuhan Pokok
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total pendapatan tetap per-bulan. <span class="font-bold text-black">(Gaji bulanan)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>

{{-- Kalkulator Tabungan --}}
<div id="tabungan" class="hidden">
    <div class="mx-5">
        <div class="w-full mt-20">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">saldo tabungan </label>
                    </div>
                    <div class="mt-1" data-modal-target="tabungan-modal" data-modal-toggle="tabungan-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="Masukan jumlah tabungan anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">Bunga (jika menabug di bank konvesional) </label>
                    </div>
                    <div class="mt-1" data-modal-target="bunga-modal" data-modal-toggle="bunga-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>
    </div>

    <div class="">
        <div class="mx-5 my-3">
            <p class="p text-base font-bold">Status bayar Zakat</p>
        </div>
        {{-- <div class="bg-green-100 border border-green-700 rounded-2xl p-2 py-3 mx-5">
            <p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>
        </div> --}}
        <div class="bg-red-100 border border-red-700 rounded-md p-2 py-3 mx-5">
            <p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>
        </div>
    </div>

    <div class=" mt-8">
        <div class="mx-5 my-1">
            <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
        </div>
        <div class="mx-5 mb-4">
            <p class="text-green-700 text-xl font-bold">Rp 250.000</p>
        </div>
    </div>

    <div class="mb-8">
        <div class="bg-green-700 border border-green-700 rounded-2xl p-2 py-3 mx-5 mb-2.5 hover:bg-green-800 cursor-pointer">
            <p class="text-white text-center font-bold">Lanjutkan</p>
        </div>
        <div class="bg-white border border-green-700 rounded-2xl p-2 py-3 mx-5 shadow-sm hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
            <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
        </div>
    </div>

    <div class="mb-32 mx-5">
        <p class="tracking-wide text-gray-600"> <span class="font-bold text-gray-700"> Nisab </span> adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk zakat penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara 85 gr emas</p>
    </div>



        <div id="tabungan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Penghasilan
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total pendapatan tetap per-bulan. <span class="font-bold text-black">(Gaji bulanan)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="bunga-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Pendapatan Lainnya
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total pendapatan tetap per-bulan. <span class="font-bold text-black">(Gaji bulanan)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>


{{-- Kalkulator Perdagangan --}}
<div id="perdagangan" class="hidden">
    <div class="mx-5">
        <div class="w-full mt-20">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">Modal selama 1 tahun </label>
                    </div>
                    <div class="mt-1" data-modal-target="tabungan-modal" data-modal-toggle="tabungan-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="Masukan jumlah modal usaha anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">keuntungan selama 1 tahun </label>
                    </div>
                    <div class="mt-1" data-modal-target="bunga-modal" data-modal-toggle="bunga-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="masukan jumlah keuntungan usaha anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">Piutang dagang </label>
                    </div>
                    <div class="mt-1" data-modal-target="bunga-modal" data-modal-toggle="bunga-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">Utang jatuh tempo</label>
                    </div>
                    <div class="mt-1" data-modal-target="bunga-modal" data-modal-toggle="bunga-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">Kerugian selama 1 tahun </label>
                    </div>
                    <div class="mt-1" data-modal-target="bunga-modal" data-modal-toggle="bunga-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>
    </div>

    <div class="bg-green-50 mx-5 p-3 mt-4 rounded-2xl">
        <div class="mx-2 mb-2">
            <p class="p text-base font-bold">Status bayar Zakat</p>
        </div>
        <div class="bg-whitee border border-green-700 rounded-2xl mb-1 p-2 py-3 mx-2">
            <p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>
        </div>
        {{-- <div class="bg-white border border-red-700 rounded-2xl mb-1 p-2 py-3 mx-2">
            <p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>
        </div> --}}
    </div>
    {{-- <div class="bg-red-50 mx-5 p-3 mt-4 rounded-2xl">
        <div class="mx-2 mb-2">
            <p class="p text-base font-bold">Status bayar Zakat</p>
        </div>
        <div class="bg-white border border-red-700 rounded-2xl mb-1 p-2 py-3 mx-2">
            <p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>
        </div>
    </div> --}}

    <div class=" mt-8">
        <div class="mx-5 my-1">
            <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
        </div>
        <div class="mx-5 mb-4">
            <p class="text-green-700 text-xl font-bold">Rp 250.000</p>
        </div>
    </div>

    <div class="mb-32 flex mx-5 gap-2">
        <div class="bg-white border border-green-700 w-full rounded-lg p-2 py-3 hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
            <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
        </div>
        <div class="bg-green-700 border w-full border-green-700 rounded-lg p-2 py-3 hover:bg-green-800 cursor-pointer">
            <p class="text-white text-center font-bold">Lanjutkan</p>
        </div>
    </div>
</div>


{{-- Kalkulator Emas --}}
<div id="emas" class="hidden">
    <div class="mx-5">
        <div class="w-full mt-20">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black">Jumlah emas (per gram) </label>
                    </div>
                    <div class="mt-1" data-modal-target="tabungan-modal" data-modal-toggle="tabungan-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="text" id="name" placeholder="Masukan total berat emas anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>
        </div>

    </div>

    <div class="bg-green-50 mx-5 p-3 mt-4 rounded-2xl">
        <div class="mx-2 mb-2">
            <p class="p text-base font-bold">Status bayar Zakat</p>
        </div>
        <div class="bg-whitee border border-green-700 rounded-2xl mb-1 p-2 py-3 mx-2">
            <p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>
        </div>
        {{-- <div class="bg-white border border-red-700 rounded-2xl mb-1 p-2 py-3 mx-2">
            <p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>
        </div> --}}
    </div>
    {{-- <div class="bg-red-50 mx-5 p-3 mt-4 rounded-2xl">
        <div class="mx-2 mb-2">
            <p class="p text-base font-bold">Status bayar Zakat</p>
        </div>
        <div class="bg-white border border-red-700 rounded-2xl mb-1 p-2 py-3 mx-2">
            <p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>
        </div>
    </div> --}}

    <div class=" mt-8">
        <div class="mx-5 my-1">
            <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
        </div>
        <div class="mx-5 mb-4">
            <p class="text-green-700 text-xl font-bold">Rp 250.000</p>
        </div>
    </div>

    <div class="mb-32 flex mx-5 gap-2">
        <div class="bg-white border border-green-700 w-full rounded-lg p-2 py-3 hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
            <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
        </div>
        <div class="bg-green-700 border w-full border-green-700 rounded-lg p-2 py-3 hover:bg-green-800 cursor-pointer">
            <p class="text-white text-center font-bold">Lanjutkan</p>
        </div>
    </div>
</div>

<div id="niat-modal" data-modal-backdrop="static" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-lg max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-3 md:p-2 dark:border-gray-600">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="niat-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <div class="p-1 md:px-4 md:my-1 space-y-4">
                <p class="text-black font-bold text-xl">Niat Membayar Zakat</p>
                <img class="w-full" src="{{asset('images/niat.jpg')}}" alt="">
                <p class="font-bold text-gray-700">
                    Artinya : <br>
                    <span class="font-normal tracking-wide">“Aku niat mengeluarkan zakat hartaku, fardhu karena Allah Ta’ala.”</span>
                </p>
            </div>
            <div class="flex items-center p-4 md:p-5 w-full border-gray-200 rounded-b dark:border-gray-600">
                <button data-modal-hide="niat-modal" type="button" class="text-white w-full bg-green-700 hover:bg-green-800  font-medium rounded-lg text-sm px-5 py-3 text-center dark:bg-green-600 dark:hover:bg-green-700 ">Selesai</button>
            </div>
        </div>
    </div>
</div>

    <script>
        function showDiv(id, element){
            document.getElementById('penghasilan').classList.add('hidden');
            document.getElementById('tabungan').classList.add('hidden');
            document.getElementById('perdagangan').classList.add('hidden');
            document.getElementById('emas').classList.add('hidden');

            document.getElementById(id).classList.remove('hidden');

            const elements = document.querySelectorAll('.selected');
            elements.forEach(el => {
                el.classList.remove('bg-green-700', 'text-white','selected');
                el.classList.add('bg-white', 'text-gray-500');

                const textElements = el.querySelectorAll('p');
                textElements.forEach(textEL => {
                    textEL.classList.remove('text-white','font-semibold');
                    textEL.classList.add('text-gray-500','font-normal');
                })
            });

            element.classList.add('bg-green-700', 'text-white', 'selected');
            element.classList.remove('bg-white', 'text-gray-500');

            const textElements = element.querySelectorAll('p');
            textElements.forEach(textEL => {
                    textEL.classList.add('text-white','font-semibold');
                    textEL.classList.remove('text-gray-500','font-normal');
            });
        }

        let periode = 'bulanan';
        function setPeriode(p){
            periode = p;
            document.querySelector('.bg-green').classList.remove('bg-green-600', 'text-white');
            document.querySelector('.bg-gray-200').classList.remove('bg-gray-200', 'text-black');

            if(periode === 'bulanan'){
                document.querySelectorAll('.flex.mt-14 .w-1/2')[0].classList.add('bg-green-600', 'text-white');
                document.querySelectorAll('.flex.mt-14 .w-1/2')[1].classList.add('bg-gray-200', 'text-black');
            } else {
                document.querySelectorAll('.flex.mt-14 .w-1/2')[1].classList.add('bg-green-600', 'text-white');
                document.querySelectorAll('.flex.mt-14 .w-1/2')[0].classList.add('bg-gray-200', 'text-black');
            }
            hitungZakat();
        }

        function hitungZakat(){
            const penghasilan = parseFloat(document.getElementById('inputPenghasilan').value)||0;
            const bonus = parseFloat(document.getElementById('bonus').value)||0;
            const kebutuhan = parseFloat(document.getElementById('kebutuhan').value)||0;

            const totalPenghasilan = penghasilan + bonus;
            const penghasilanBersih = totalPenghasilan - kebutuhan;

            const hargaEmas = 940000;
            const nisab = 85 * hargaEmas / (periode === 'bulanan' ? 12:1);

            const zakat = penghasilanBersih >= nisab ? 0.025 * penghasilanBersih : 0 ;

            document.getElementById('statusZakat').classList.remove('hidden');
            document.getElementById('jumlahZakat').classList.remove('hidden');


            if(zakat > 0){
                document.getElementById('statusBayarZakat').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
                document.getElementById('statusBayarZakat').classList.remove('bg-red-100','border','border-red-700');
                document.getElementById('statusBayarZakat').classList.add('bg-green-100','border','border-green-700');
                document.getElementById('nilaiZakat').innerHTML = `Rp ${zakat.toLocaleString('id-ID')}`;
            } else{
                document.getElementById('statusBayarZakat').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
                document.getElementById('statusBayarZakat').classList.remove('bg-green-100','border','border-green-700');
                document.getElementById('statusBayarZakat').classList.add('bg-red-100','border','border-red-700');
                const zakatKurang = 0.025 * penghasilanBersih;
                const zakatBulat = zakatKurang.toFixed(0);
                document.getElementById('nilaiZakat').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
            }
            document.getElementById('jumlahZakat').classList.remove('hidden');
        }

    </script>

@endsection
