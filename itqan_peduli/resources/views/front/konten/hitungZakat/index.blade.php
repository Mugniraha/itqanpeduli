@extends('front.layout.mainHitung')
@section('konten')


<div class="relative z-10 p-4 mt-6">
    <p class=" text-white text-lg font-bold">Pilih Jenis Zakat Anda</p>
</div>

<div class="relative z-10 flex gap-3 justify-center mt-0">
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

<div id="penghasilan" class="">
    <div class="flex mt-14 mx-5 justify-center">
        <div id="btnPerbulan" class="bg-green-600 p-3 text-center font-semibold text-white w-1/2 rounded-s-2xl cursor-pointer" onclick="showPeriod('perbulan', this)">
            <p>Perbulan</p>
        </div>
        <div id="btnPertahun" class="w-1/2 text-center text-black p-3 bg-gray-200 rounded-e-2xl cursor-pointer" onclick="showPeriod('pertahun', this)">
            <p>Pertahun</p>
        </div>
    </div>

    <div id="perbulan" class="">
        <div class="mx-5">
            <div class="w-full">
                <div class="relative mt-6">
                    <div class="flex absolute -top-3 left-2 bg-white px-2">
                        <div>
                            <label for="inputPenghasilan" class=" bg-white px-1 text-sm font-medium text-black">Penghasilan </label>
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
                            <label for="bonus" class=" bg-white px-1 text-sm text-black font-medium">Pendapatan lainya (Bonus, THR) </label>
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
                            <label for="kebutuhan" class=" bg-white px-1 text-sm text-black font-medium">Pengeluaran kebutuhan pokok </label>
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
                <li>Harga emas per gram saat ini <span id="hargaEmas"> Loading.... </span> (www.logammulia.com)</li>
                <li>Nishab 85 gram per Bulan <span id="nisabEmasBulan"> Loading.... </span></li>
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
                            Pendapatan tambahan diluar dari pendapatan tetap. <span class="font-bold text-black">(Hasil bagi Saham, Bonus, THR)</span>
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
                            Total harta yang dikeluarkan untuk memenuhi  kebutuhan hidup.  <span class="font-bold text-black">(makan, listrik, tagihan, dll)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="pertahun" class="hidden">
        <div class="mx-5">
            <div class="w-full">
                <div class="relative mt-6">
                    <div class="flex absolute -top-3 left-2 bg-white px-2">
                        <div>
                            <label for="inputPenghasilanPertahun" class=" bg-white px-1 text-sm font-medium text-black">Penghasilan Pertahun</label>
                        </div>
                        <div class="mt-1" data-modal-target="penghasilanTahunan-modal" data-modal-toggle="penghasilanTahunan-modal">
                            <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <input type="number" id="inputPenghasilanPertahun" placeholder="Masukan penghasilan bulanan anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatTahunan()">
                </div>
            </div>

            <div class="w-full">
                <div class="relative mt-6">
                    <div class="flex absolute -top-3 left-2 bg-white px-2">
                        <div>
                            <label for="bonusPertahun" class=" bg-white px-1 text-sm text-black font-medium">Pendapatan lainya (Bonus, THR) </label>
                        </div>
                        <div class="mt-1" data-modal-target="pendapatanTahunan-modal" data-modal-toggle="pendapatanTahunan-modal">
                            <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <input type="number" id="bonusPertahun" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatTahunan()">
                </div>
            </div>

            <div class="w-full">
                <div class="relative mt-6">
                    <div class="flex absolute -top-3 left-2 bg-white px-2">
                        <div>
                            <label for="kebutuhanPertahun" class=" bg-white px-1 text-sm text-black font-medium">Pengeluaran kebutuhan pokok </label>
                        </div>
                        <div class="mt-1" data-modal-target="pengeluaranTahunan-modal" data-modal-toggle="pengeluaranTahunan-modal">
                            <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                            </svg>
                        </div>
                    </div>
                    <input type="number" id="kebutuhanPertahun" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatTahunan()">
                </div>
            </div>
        </div>

        <div id="statusZakatPertahun" class="mx-5 my-3 mt-5">
            <p class="p text-base font-bold">Status bayar Zakat</p>
            <div id="statusBayarZakatPertahun" class="rounded-2xl p-2 py-3 mt-3 cursor-pointer">
                <p class="text-green-700 text-center font-bold"></p>
            </div>
        </div>


        <div class="mx-9 mt-8">
            <p class="mb-1 font-bold text-gray-700">Catatan</p>
            <ul class="w w-3/4 list-disc mx-4 text-gray-600 ">
                <li>Perhitungan zakat diupdate secara otomatis berdasarkan update harga emas</li>
                <li>Harga emas per gram saat ini <span id="hargaEmas2"> Loading.... </span> (www.logammulia.com)</li>
                <li>Nishab 85 gram per Bulan <span id="nisabEmasBulan2"> Loading.... </span></li>
                <li>Dianjurkan dipotong dari gaji bruto</li>
            </ul>
        </div>


        <div id="jumlahZakatPertahun" class="mx-5 my-3 hidden">
            <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
            <div class=" mb-4">
                <p id="nilaiZakatPertahun" class=" text-green-700 text-xl font-bold"></p>
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

        <div id="penghasilanTahunan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Penghasilan
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total pendapatan tetap dalam satu tahun. <span class="font-bold text-black">(Gaji dalam satu tahun)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pendapatanTahunan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Pendapatan Lainnya
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Pendapatan tambahan diluar dari pendapatan tetap. <span class="font-bold text-black">(Hasil bagi Saham, Bonus, THR)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pengeluaranTahunan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                            Pengeluaran Kebutuhan Pokok
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total harta yang dikeluarkan untuk memenuhi kebutuhan hidup.  <span class="font-bold text-black">(makan, listrik, tagihan, dll)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

{{-- Kalkulator Tabungan --}}
<div id="tabungan" class="hidden h-dvh">
    <div class="mx-5">
        <div class="w-full mt-14">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="inputSaldoTabungan" class=" bg-white px-1 text-sm text-black font-medium">Saldo tabungan </label>
                    </div>
                    <div class="mt-1" data-modal-target="tabungan-modal" data-modal-toggle="tabungan-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputSaldoTabungan" placeholder="Masukan jumlah tabungan anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatTabungan()">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="inputBungaTabungan" class=" bg-white px-1 text-sm text-black font-medium">Bunga (jika menabug di bank konvesional) </label>
                    </div>
                    <div class="mt-1" data-modal-target="bunga-modal" data-modal-toggle="bunga-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputBungaTabungan" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatTabungan()">
            </div>
        </div>
    </div>

    <div id="statusZakatTabungan" class="mx-5 my-3 mt-5">
        <p class="p text-base font-bold">Status bayar Zakat</p>
        <div id="statusBayarZakatTabungan" class="rounded-2xl p-2 py-3 mt-3 cursor-pointer">
            <p class="text-green-700 text-center font-bold"></p>
        </div>
    </div>

    <div id="jumlahZakatTabungan" class="mx-5 my-3 hidden">
        <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
        <div class=" mb-4">
            <p id="nilaiZakatTabungan" class=" text-green-700 text-xl font-bold"></p>
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
                            Tabungan
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total tabungan yang dimiliki.
                            {{-- <span class="font-bold text-black">(Gaji bulanan)</span> --}}
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
                            Bunga
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                            Total bunga dari tabungan.
                            {{-- <span class="font-bold text-black">(Gaji bulanan)</span> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
</div>


{{-- Kalkulator Perdagangan --}}
<div id="perdagangan" class="hidden h-dvh">
    <div class="mx-5">
        <div class="w-full mt-14">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black font-medium">Modal selama 1 tahun </label>
                    </div>
                    <div class="mt-1" data-modal-target="modalDagang-modal" data-modal-toggle="modalDagang-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputModal" placeholder="Masukan jumlah modal usaha anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatPerdagangan()">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black font-medium">Keuntungan selama 1 tahun </label>
                    </div>
                    <div class="mt-1" data-modal-target="keuntungan-modal" data-modal-toggle="keuntungan-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputKeuntungan" placeholder="masukan jumlah keuntungan usaha anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatPerdagangan()">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black font-medium">Piutang dagang </label>
                    </div>
                    <div class="mt-1" data-modal-target="piutang-modal" data-modal-toggle="piutang-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputPiutangDagang" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatPerdagangan()">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black font-medium">Utang jatuh tempo</label>
                    </div>
                    <div class="mt-1" data-modal-target="hutang-modal" data-modal-toggle="hutang-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputUtangTempo" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatPerdagangan()">
            </div>
        </div>

        <div class="w-full">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="name" class=" bg-white px-1 text-sm text-black font-medium">Kerugian selama 1 tahun </label>
                    </div>
                    <div class="mt-1" data-modal-target="kerugian-modal" data-modal-toggle="kerugian-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputKerugian" placeholder="Opsional, Jika ada" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatPerdagangan()">
            </div>
        </div>
    </div>

    <div id="bungkusStatusPerdagangan" class="mx-5 p-3 mt-4 rounded-2xl">
        <div id="statusZakatPerdagangan" class="my-2">
            <p class="p text-base font-bold">Status bayar Zakat</p>
            <div id="statusBayarZakatPerdagangan" class="rounded-2xl p-2 py-3 mt-3 cursor-pointer">
                <p class="text-green-700 text-center font-bold"></p>
            </div>
        </div>
    </div>
    <div id="jumlahZakatPerdagangan" class="mx-5 my-3 hidden">
        <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
        <div class=" mb-4">
            <p id="nilaiZakatPerdagangan" class=" text-green-700 text-xl font-bold"></p>
        </div>
    </div>

    <div class=" flex mx-5 gap-2">
        <div class="bg-white border border-green-700 w-full rounded-lg p-2 py-3 hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
            <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
        </div>
        <div class="bg-green-700 border w-full border-green-700 rounded-lg p-2 py-3 hover:bg-green-800 cursor-pointer">
            <p class="text-white text-center font-bold">Lanjutkan</p>
        </div>
    </div>

    <div id="modalDagang-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                        Modal Dagang
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                        Modal usaha yang dikeluarkan dalam satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="keuntungan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                        Keuntungan
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                        keuntungan yang diperoleh dalam satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="piutang-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                        Piutang
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                        Piutang yang belum dibayarkan selama satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="hutang-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                        Hutang
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                        Hutang yang belum dibayarkan selama satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="kerugian-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                        Kerugian
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                        Kerugian yang dialami selama satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

</div>


{{-- Kalkulator Emas --}}
<div id="emas" class="hidden h-dvh">
    <div class="mx-5">
        <div class="w-full mt-14">
            <div class="relative mt-6">
                <div class="flex absolute -top-3 left-2 bg-white px-2">
                    <div>
                        <label for="inputJumlahEmas" class=" bg-white px-1 text-sm text-black font-medium">Jumlah emas (per gram) </label>
                    </div>
                    <div class="mt-1" data-modal-target="jumlahEmas-modal" data-modal-toggle="jumlahEmas-modal">
                        <svg class="w-[18px] h-[18px] text-green-600 dark:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                    </div>
                </div>
                <input type="number" id="inputJumlahEmas" placeholder="Masukan total berat emas anda" class="w-full py-3 px-4 border border-gray-400 rounded-2xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" oninput="hitungZakatEmas()">
            </div>
        </div>

    </div>

    <div id="bungkusStatusEmas" class="mx-5 p-3 mt-4 rounded-2xl">
        <div id="statusZakatEmas" class="my-2">
            <p class="p text-base font-bold">Status bayar Zakat</p>
            <div id="statusBayarZakatEmas" class="rounded-2xl p-2 py-3 mt-3 cursor-pointer">
                <p class="text-green-700 text-center font-bold"></p>
            </div>
        </div>
    </div>

    <div id="jumlahZakatEmas" class="mx-5 my-3 hidden">
        <p class="p text-base font-bold">Jumlah yang dibayarkan</p>
        <div class=" mb-4">
            <p id="nilaiZakatEmas" class=" text-green-700 text-xl font-bold"></p>
        </div>
    </div>

    <div class="flex mx-5 gap-2">
        <div class="bg-white border border-green-700 w-full rounded-lg p-2 py-3 hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
            <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
        </div>
        <div class="bg-green-700 border w-full border-green-700 rounded-lg p-2 py-3 hover:bg-green-800 cursor-pointer">
            <p class="text-white text-center font-bold">Lanjutkan</p>
        </div>
    </div>
    <div class=""></div>

    <div id="jumlahEmas-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700 p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700 dark:text-gray-600">
                        Jumlah Emas
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900 dark:text-gray-800">
                        Total berat emas yang dimiliki.
                    </p>
                </div>
            </div>
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
        document.addEventListener('DOMContentLoaded', function() {
            // Ketika halaman dimuat, secara otomatis tampilkan bagian 'penghasilan'
            const penghasilanElement = document.getElementById('penghasilan');
            penghasilanElement.classList.remove('hidden');

            // Mengatur latar belakang dan teks untuk bagian 'penghasilan'
            const penghasilanButton = document.querySelector('[onclick="showDiv(\'penghasilan\', this)"]');
            penghasilanButton.classList.add('bg-green-700', 'text-white', 'selected');
            penghasilanButton.classList.remove('bg-white', 'text-gray-500');

            const textElement = penghasilanButton.querySelector('p');
            textElement.classList.add('font-semibold');
            textElement.classList.remove('text-gray-500', 'font-normal');

            // Jika perlu menampilkan periode default seperti 'perbulan', Anda bisa menyesuaikan di sini
            const btnPerbulan = document.getElementById('btnPerbulan');
            showPeriod('perbulan', btnPerbulan); // Misalnya memanggil fungsi showPeriod untuk menampilkan 'perbulan'
        });

        function showDiv(id, element) {
            const sections = ['penghasilan', 'tabungan', 'perdagangan', 'emas'];
            sections.forEach(section => {
                document.getElementById(section).classList.add('hidden');
            });
            document.getElementById(id).classList.remove('hidden');

            const elements = document.querySelectorAll('.selected');
            elements.forEach(el => {
                el.classList.remove('bg-green-700', 'text-white', 'selected');
                el.classList.add('bg-white', 'text-gray-500');

                const textElements = el.querySelectorAll('p');
                textElements.forEach(textEL => {
                    textEL.classList.remove('text-white', 'font-semibold');
                    textEL.classList.add('text-gray-500', 'font-normal');
                });
            });

            element.classList.add('bg-green-700', 'text-white', 'selected');
            element.classList.remove('bg-white', 'text-gray-500');

            const textElements = element.querySelectorAll('p');
            textElements.forEach(textEL => {
                textEL.classList.add('text-white', 'font-semibold');
                textEL.classList.remove('text-gray-500', 'font-normal');
            });

            if (id === 'penghasilan') {
                showPeriod('perbulan', document.getElementById('btnPerbulan'));
            }
        }

        function showPeriod(period, element) {
            document.getElementById('perbulan').classList.add('hidden');
            document.getElementById('pertahun').classList.add('hidden');
            document.getElementById(period).classList.remove('hidden');

            const buttons = ['btnPerbulan', 'btnPertahun'];
            buttons.forEach(btn => {
                document.getElementById(btn).classList.remove('bg-green-600', 'text-white');
                document.getElementById(btn).classList.add('bg-gray-200', 'text-black');
            });

            element.classList.add('bg-green-600', 'text-white');
            element.classList.remove('bg-gray-200', 'text-black');

            periode = period; // Set periode berdasarkan ID (perbulan atau pertahun)
        }

        let periode = 'bulanan';

        async function hitungZakat(){
            const penghasilan = parseFloat(document.getElementById('inputPenghasilan').value) || 0;
            const bonus = parseFloat(document.getElementById('bonus').value) || 0;
            const kebutuhan = parseFloat(document.getElementById('kebutuhan').value) || 0;

            const totalPenghasilan = penghasilan + bonus;
            const penghasilanBersih = totalPenghasilan - kebutuhan;

            try {
                const response = await fetch('/harga-emas');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data harga emas');
                }
                const data = await response.json();
                const hargaEmas = parseFloat(data.harga_emas);
                console.log('Harga:', hargaEmas);

                const nisab = 85 * hargaEmas / (periode === 'perbulan' ? 12 : 1);

                const zakat = penghasilanBersih >= nisab ? 0.025 * penghasilanBersih : 0;

                document.getElementById('statusZakat').classList.remove('hidden');
                document.getElementById('jumlahZakat').classList.remove('hidden');

                if (zakat > 0) {
                    document.getElementById('statusBayarZakat').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
                    document.getElementById('statusBayarZakat').classList.remove('bg-red-100', 'border', 'border-red-700');
                    document.getElementById('statusBayarZakat').classList.add('bg-green-100', 'border', 'border-green-700');
                    document.getElementById('nilaiZakat').innerHTML = `Rp ${zakat.toLocaleString('id-ID')}`;
                } else {
                    document.getElementById('statusBayarZakat').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
                    document.getElementById('statusBayarZakat').classList.remove('bg-green-100', 'border', 'border-green-700');
                    document.getElementById('statusBayarZakat').classList.add('bg-red-100', 'border', 'border-red-700');
                    const zakatKurang = 0.025 * penghasilanBersih;
                    const zakatBulat = zakatKurang.toFixed(0);
                    document.getElementById('nilaiZakat').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
                }
            } catch (error) {
                console.error('Error dalam mengambil data:', error);
                // Handle error secara sesuai dengan kebutuhan aplikasi Anda
            }
        }

        async function hitungZakatTahunan(){
            const penghasilanPertahun = parseFloat(document.getElementById('inputPenghasilanPertahun').value) || 0;
            const bonusPertahun = parseFloat(document.getElementById('bonusPertahun').value) || 0;
            const kebutuhanPertahun = parseFloat(document.getElementById('kebutuhanPertahun').value) || 0;

            const totalPenghasilanPertahun = penghasilanPertahun + bonusPertahun;
            const penghasilanBersihPertahun = totalPenghasilanPertahun- kebutuhanPertahun;

            try {
                const response = await fetch('/harga-emas');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data harga emas');
                }
                const data = await response.json();
                const hargaEmas = parseFloat(data.harga_emas);
                console.log('Harga:', hargaEmas);

                const nisabPertahun = 85 * hargaEmas;
                const zakatPertahun = penghasilanBersihPertahun >= nisabPertahun ? 0.025 * penghasilanBersihPertahun : 0;

                document.getElementById('statusZakatPertahun').classList.remove('hidden');
                document.getElementById('jumlahZakatPertahun').classList.remove('hidden');

                if (zakatPertahun > 0) {
                    document.getElementById('statusBayarZakatPertahun').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
                    document.getElementById('statusBayarZakatPertahun').classList.remove('bg-red-100', 'border', 'border-red-700');
                    document.getElementById('statusBayarZakatPertahun').classList.add('bg-green-100', 'border', 'border-green-700');
                    document.getElementById('nilaiZakatPertahun').innerHTML = `Rp ${zakatPertahun.toLocaleString('id-ID')}`;
                } else {
                    document.getElementById('statusBayarZakatPertahun').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
                    document.getElementById('statusBayarZakatPertahun').classList.remove('bg-green-100', 'border', 'border-green-700');
                    document.getElementById('statusBayarZakatPertahun').classList.add('bg-red-100', 'border', 'border-red-700');
                    const zakatKurang = 0.025 * penghasilanBersihPertahun;
                    const zakatBulat = zakatKurang.toFixed(0);
                    document.getElementById('nilaiZakatPertahun').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
                }
            } catch (error) {
                console.error('Error dalam mengambil data:', error);
                // Handle error secara sesuai dengan kebutuhan aplikasi Anda
            }
        }

        async function hitungZakatTabungan(){
            const tabungan = parseFloat(document.getElementById('inputSaldoTabungan').value)||0;
            const bunga = parseFloat(document.getElementById('inputBungaTabungan').value)||0;

            const totalTabungan = tabungan + bunga;

            try {
                const response = await fetch('/harga-emas');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data harga emas');
                }
                const data = await response.json();
                const hargaEmas = parseFloat(data.harga_emas);
                console.log('Harga:', hargaEmas);

                const nisabTabungan = 85 * hargaEmas / (periode === 'bulanan' ? 12 : 1);
                const zakatTabungan = totalTabungan >= nisabTabungan ? 0.025 * totalTabungan : 0;

                document.getElementById('statusZakatTabungan').classList.remove('hidden');
                document.getElementById('jumlahZakatTabungan').classList.remove('hidden');

                if (zakatTabungan > 0) {
                    document.getElementById('statusBayarZakatTabungan').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
                    document.getElementById('statusBayarZakatTabungan').classList.remove('bg-red-100', 'border', 'border-red-700');
                    document.getElementById('statusBayarZakatTabungan').classList.add('bg-green-100', 'border', 'border-green-700');
                    document.getElementById('nilaiZakatTabungan').innerHTML = `Rp ${zakatTabungan.toLocaleString('id-ID')}`;
                } else {
                    document.getElementById('statusBayarZakatTabungan').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
                    document.getElementById('statusBayarZakatTabungan').classList.remove('bg-green-100', 'border', 'border-green-700');
                    document.getElementById('statusBayarZakatTabungan').classList.add('bg-red-100', 'border', 'border-red-700');
                    const zakatKurang = 0.025 * totalTabungan;
                    const zakatBulat = zakatKurang;
                    document.getElementById('nilaiZakatTabungan').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
                }
            } catch (error) {
                console.error('Error dalam mengambil data:', error);
                // Handle error secara sesuai dengan kebutuhan aplikasi Anda
            }
        }

        async function hitungZakatPerdagangan(){
            const modal = parseFloat(document.getElementById('inputModal').value)||0;
            const keuntungan = parseFloat(document.getElementById('inputKeuntungan').value)||0;
            const piutangDagang  = parseFloat(document.getElementById('inputPiutangDagang').value)||0;
            const utangTempo = parseFloat(document.getElementById('inputUtangTempo').value)||0;
            const kerugian = parseFloat(document.getElementById('inputKerugian').value)||0;

            const totalPerdagangan = (modal + keuntungan + piutangDagang)-(utangTempo + kerugian);

            try {
                const response = await fetch('/harga-emas');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data harga emas');
                }
                const data = await response.json();
                const hargaEmas = parseFloat(data.harga_emas);
                console.log('Harga:', hargaEmas);

                const nisabPerdagangan = 85 * hargaEmas;
                const zakatPerdagangan = totalPerdagangan >= nisabPerdagangan ? 0.025 * totalPerdagangan : 0;

                document.getElementById('statusZakatPerdagangan').classList.remove('hidden');
                document.getElementById('jumlahZakatPerdagangan').classList.remove('hidden');
                document.getElementById('bungkusStatusPerdagangan').classList.remove('hidden');

                if (zakatPerdagangan > 0) {
                    document.getElementById('statusBayarZakatPerdagangan').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
                    document.getElementById('statusBayarZakatPerdagangan').classList.remove('bg-white', 'border', 'border-red-700');
                    document.getElementById('statusBayarZakatPerdagangan').classList.add('bg-white', 'border', 'border-green-700');
                    document.getElementById('bungkusStatusPerdagangan').classList.remove('bg-red-50','rounded-xl');
                    document.getElementById('bungkusStatusPerdagangan').classList.add('bg-green-50', 'rounded-xl');
                    document.getElementById('nilaiZakatPerdagangan').innerHTML = `Rp ${zakatPerdagangan.toLocaleString('id-ID')}`;
                } else {
                    document.getElementById('statusBayarZakatPerdagangan').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
                    document.getElementById('statusBayarZakatPerdagangan').classList.remove('bg-white', 'border', 'border-green-700');
                    document.getElementById('statusBayarZakatPerdagangan').classList.add('bg-white', 'border', 'border-red-700');
                    document.getElementById('bungkusStatusPerdagangan').classList.remove('bg-green-50', 'border','rounded-xl');
                    document.getElementById('bungkusStatusPerdagangan').classList.add('bg-red-50','rounded-xl');
                    const zakatKurang = 0.025 * totalPerdagangan;
                    const zakatBulat = zakatKurang;
                    document.getElementById('nilaiZakatPerdagangan').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
                }
            } catch (error) {
                console.error('Error dalam mengambil data:', error);
                // Handle error secara sesuai dengan kebutuhan aplikasi Anda
            }
        }

        async function hitungZakatEmas(){
            const emas = parseFloat(document.getElementById('inputJumlahEmas').value)||0;

            try {
                const response = await fetch('/harga-emas');
                if (!response.ok) {
                    throw new Error('Gagal mengambil data harga emas');
                }
                const data = await response.json();
                const hargaEmas = parseFloat(data.harga_emas);
                const nisabEmas = 85 * hargaEmas;
                const zakatEmas = emas >= 85 ? 0.025 * emas * hargaEmas : 0;

                document.getElementById('statusZakatEmas').classList.remove('hidden');
                document.getElementById('jumlahZakatEmas').classList.remove('hidden');
                document.getElementById('bungkusStatusEmas').classList.remove('hidden');

                if (zakatEmas > 0) {
                    document.getElementById('statusBayarZakatEmas').innerHTML = '<p class="text-green-700 text-center font-bold">Wajib Bayar Zakat</p>';
                    document.getElementById('statusBayarZakatEmas').classList.remove('bg-white', 'border', 'border-red-700');
                    document.getElementById('statusBayarZakatEmas').classList.add('bg-white', 'border', 'border-green-700');
                    document.getElementById('bungkusStatusEmas').classList.remove('bg-red-50','rounded-xl');
                    document.getElementById('bungkusStatusEmas').classList.add('bg-green-50', 'rounded-xl');
                    document.getElementById('nilaiZakatEmas').innerHTML = `Rp ${zakatEmas.toLocaleString('id-ID')}`;
                } else {
                    document.getElementById('statusBayarZakatEmas').innerHTML = '<p class="text-red-700 text-center font-bold">Tidak wajib membayar zakat, tapi bisa berinfak</p>';
                    document.getElementById('statusBayarZakatEmas').classList.remove('bg-white', 'border', 'border-green-700');
                    document.getElementById('statusBayarZakatEmas').classList.add('bg-white', 'border', 'border-red-700');
                    document.getElementById('bungkusStatusEmas').classList.remove('bg-green-50', 'border','rounded-xl');
                    document.getElementById('bungkusStatusEmas').classList.add('bg-red-50','rounded-xl');
                    const zakatKurang = 0.025 * emas *hargaEmas;
                    const zakatBulat = zakatKurang;
                    document.getElementById('nilaiZakatEmas').innerHTML = `Rp ${zakatBulat.toLocaleString('id-ID')}`;
                }
            } catch (error) {
                console.error('Error dalam mengambil data:', error);
                // Handle error secara sesuai dengan kebutuhan aplikasi Anda
            }
        }

        async function fetchHargaEmas(){
            const response = await fetch('/harga-emas');
            const data = await response.json();

            if (response.ok){
                document.getElementById('hargaEmas').textContent = `Rp ${data.harga_emas.toLocaleString('id-ID')}`;
            }else{
                document.getElementById('hargaEmas').textContent = 'Gagal mengambil harga emas';
                console.error(data.error);
            }

            if (response.ok){
                document.getElementById('hargaEmas2').textContent = `Rp ${data.harga_emas.toLocaleString('id-ID')}`;
            }else{
                document.getElementById('hargaEmas2').textContent = 'Gagal mengambil harga emas';
                console.error(data.error);
            }

            const hargaEmas = parseFloat(data.harga_emas);
            const nishabEmasBulanan = (85 * hargaEmas) / 12;
            const formattedNishab = nishabEmasBulanan.toLocaleString('id-ID');
            document.getElementById('nisabEmasBulan').textContent = formattedNishab;
            document.getElementById('nisabEmasBulan2').textContent = formattedNishab;
        }

        // document.addEventListener('DOMContentLoaded', fetchHargaEmas);
        document.addEventListener('DOMContentLoaded', async () => {
                await fetchHargaEmas();
        });


    </script>

@endsection
