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
                            <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                            <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                            <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
            <a href="{{url('/rincian-pembayaran')}}" id="btnPenghasilanBulan">
                <div class="bg-green-700 border border-green-700 rounded-2xl p-2 py-3 mx-5 mb-2.5 hover:bg-green-800 cursor-pointer">
                    <p class="text-white text-center font-bold">Lanjutkan</p>
                </div>
            </a>
            {{-- <div class="bg-green-700 border border-green-700 rounded-2xl p-2 py-3 mx-5 mb-2.5 hover:bg-green-800 cursor-pointer">
                <a href="{{url('/rincian-pembayaran')}}" class="text-white text-center font-bold"><p class="text-white text-center font-bold">Lanjutkan</p></a>
            </div> --}}
            <div class="bg-white border border-green-700 rounded-2xl p-2 py-3 mx-5 shadow-sm hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
                <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
            </div>
        </div>

        <div class="mb-32 mx-5">
            <p class="tracking-wide text-gray-600"> <span class="font-bold text-gray-700"> Nisab </span> adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk zakat penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara 85 gr emas</p>
        </div>

        <div id="penghasilan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Penghasilan
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
                            Total pendapatan tetap per-bulan. <span class="font-bold text-black">(Gaji bulanan)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pendapatan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Pendapatan Lainnya
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
                            Pendapatan tambahan diluar dari pendapatan tetap. <span class="font-bold text-black">(Hasil bagi Saham, Bonus, THR)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pengeluaran-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Pengeluaran Kebutuhan Pokok
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
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
                            <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                            <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                            <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
            <a href="{{url('/rincian-pembayaran')}}" id="btnPenghasilanTahun">
                <div class="bg-green-700 border border-green-700 rounded-2xl p-2 py-3 mx-5 mb-2.5 hover:bg-green-800 cursor-pointer">
                    <p class="text-white text-center font-bold">Lanjutkan</p>
                </div>
            </a>
            <div class="bg-white border border-green-700 rounded-2xl p-2 py-3 mx-5 shadow-sm hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
                <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
            </div>
        </div>

        <div class="mb-32 mx-5">
            <p class="tracking-wide text-gray-600"> <span class="font-bold text-gray-700"> Nisab </span> adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk zakat penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara 85 gr emas</p>
        </div>

        <div id="penghasilanTahunan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Penghasilan
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
                            Total pendapatan tetap dalam satu tahun. <span class="font-bold text-black">(Gaji dalam satu tahun)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pendapatanTahunan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Pendapatan Lainnya
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
                            Pendapatan tambahan diluar dari pendapatan tetap. <span class="font-bold text-black">(Hasil bagi Saham, Bonus, THR)</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="pengeluaranTahunan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Pengeluaran Kebutuhan Pokok
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
        <a href="{{url('/rincian-pembayaran')}}" id="btnTabungan">
            <div class="bg-green-700 border border-green-700 rounded-2xl p-2 py-3 mx-5 mb-2.5 hover:bg-green-800 cursor-pointer">
                <p class="text-white text-center font-bold">Lanjutkan</p>
            </div>
        </a>
        <div class="bg-white border border-green-700 rounded-2xl p-2 py-3 mx-5 shadow-sm hover:bg-green-100 cursor-pointer" data-modal-target="niat-modal" data-modal-toggle="niat-modal">
            <p class="text-green-700 text-center font-bold">Baca Niat Zakat</p>
        </div>
    </div>

    <div class="mb-32 mx-5">
        <p class="tracking-wide text-gray-600"> <span class="font-bold text-gray-700"> Nisab </span> adalah syarat jumlah minimum (ambang batas) harta yang dapat dikategorikan sebagai harta wajib zakat. Untuk zakat penghasilan yang diwajibkan zakat adalah penghasilan yang berada diatas nisab. Nisab Zakat Penghasilan adalah setara 85 gr emas</p>
    </div>



        <div id="tabungan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Tabungan
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
                            Total tabungan yang dimiliki.
                            {{-- <span class="font-bold text-black">(Gaji bulanan)</span> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div id="bunga-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-lg max-h-full">
                <div class="relative bg-white rounded-lg shadow p-3">
                    <div class="">
                        <p class="text-base font-bold leading-relaxed text-gray-700">
                            Bunga
                        </p>
                    </div>
                    <div class="">
                        <p class="text-base leading-relaxed text-gray-900">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
        <a href="{{url('/rincian-pembayaran')}}" id="btnPerdagangan" class="w-full">
            <div class="bg-green-700 border border-green-700 w-full rounded-lg p-2 py-3 hover:bg-green-800 cursor-pointer">
                <p class="text-white text-center font-bold">Lanjutkan</p>
            </div>
        </a>
    </div>

    <div id="modalDagang-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700">
                        Modal Dagang
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900">
                        Modal usaha yang dikeluarkan dalam satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="keuntungan-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700">
                        Keuntungan
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900">
                        keuntungan yang diperoleh dalam satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="piutang-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700">
                        Piutang
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900">
                        Piutang yang belum dibayarkan selama satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="hutang-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700">
                        Hutang
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900">
                        Hutang yang belum dibayarkan selama satu tahun.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div id="kerugian-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700">
                        Kerugian
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900">
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
                        <svg class="w-[18px] h-[18px] text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
        <a href="{{url('/rincian-pembayaran')}}" id="btnEmas" class="w-full">
            <div class="bg-green-700 border border-green-700 w-full rounded-lg p-2 py-3 hover:bg-green-800 cursor-pointer">
                <p class="text-white text-center font-bold">Lanjutkan</p>
            </div>
        </a>
    </div>
    <div class=""></div>

    <div id="jumlahEmas-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-lg max-h-full">
            <div class="relative bg-white rounded-lg shadow p-3">
                <div class="">
                    <p class="text-base font-bold leading-relaxed text-gray-700">
                        Jumlah Emas
                    </p>
                </div>
                <div class="">
                    <p class="text-base leading-relaxed text-gray-900">
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
        <div class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-3 md:p-2">
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="niat-modal">
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
            <div class="flex items-center p-4 md:p-5 w-full border-gray-200 rounded-b">
                <button data-modal-hide="niat-modal" type="button" class="text-white w-full bg-green-700 hover:bg-green-800  font-medium rounded-lg text-sm px-5 py-3 text-center ">Selesai</button>
            </div>
        </div>
    </div>
</div>

<script src="{{asset('js/zakat.js')}}"></script>

@endsection
