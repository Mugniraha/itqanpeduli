@extends('front.layout.main5')

@section('konten')
<style>
    .tooltip[data-show] {
        visibility: visible;
        opacity: 1;
    }
</style>

<div class="relative z-20 px-4 pt-4 pb-28">
    <p class="text-lg font-bold text-white text-center">Selamat Datang</p>
    <p class="text-sm text-white text-center mb-10">Memulai sesuatu dengan bismillah</p>

    @foreach($fundraiserData as $data)
        <div class="text-center">
            <img class="w-24 h-24 rounded-full mx-auto" src="{{ $data['fundraiser']->image ? asset('storage/' . str_replace('/storage/', '', $data['fundraiser']->image)) : asset('default-profile.png') }}" alt="Foto Profil">

            <div class="text-lg font-semibold text-white">{{ $data['fundraiser']->nama }}</div>
            <a href="{{ url('/pengaturan-fundraiser') }}" class="flex justify-center px-auto text-sm text-white">
                Ubah Profil
                <svg class="w-4 h-4 my-auto text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7" />
                </svg>
            </a>
        </div>
        @endforeach

    <p class="text-gray-600 font-semibold mt-16 mb-1">Link Kamu</p>
    <div class="w-full">
        <div class="relative">
            <input id="rekening-copy-input" type="text" class="col-span-6 bg-green-50 border border-gray-300 text-gray-600 rounded-lg block w-full px-3 py-1.5" value="https://flowbite.com/docs/components/clipboard/" disabled readonly>
            <button id="rekening-copy-button" class="absolute end-2 top-1/2 -translate-y-1/2 text-gray-500 rounded-lg px-3 inline-flex items-center justify-center">
                <span id="default-icon-1">
                    <svg class="w-4 h-4 text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 20">
                        <path d="M16 1h-3.278A1.992 1.992 0 0 0 11 0H7a1.993 1.993 0 0 0-1.722 1H2a2 2 0 0 0-2 2v15a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2Zm-3 14H5a1 1 0 0 1 0-2h8a1 1 0 0 1 0 2Zm0-4H5a1 1 0 0 1 0-2h8a1 1 0 1 1 0 2Zm0-5H5a1 1 0 0 1 0-2h2V2h4v2h2a1 1 0 1 1 0 2Z"/>
                    </svg>
                </span>
                <span id="success-icon-1" class="hidden inline-flex items-center">
                    <svg class="w-3.5 h-3.5 text-blue-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5.917 5.724 10.5 15 1.5"/>
                    </svg>
                </span>
            </button>
            <div id="tooltip-rekening-copy-button" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip">
                <span id="default-tooltip-message-1">Copy to clipboard</span>
                <span id="success-tooltip-message-1" class="hidden">Copied!</span>
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </div>

    <div class="transaksi bg-green-50 my-5 rounded-xl border border-gray-300">
    @foreach($fundraiserData as $data)
        <div class="atas flex">
            <div class="kiri rounded-y-md rounded-l-md p-4 w-[50%]">
                <div class="info flex">
                    <p class="items-center text-sm font-semibold">Pengunjung</p>
                    <button data-popover-target="popover-description-1" data-popover-placement="bottom-end" type="button">
                        <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="sr-only">Show information</span>
                    </button>
                    <div id="popover-description-1" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900">Pengunjung</h3>
                            <p>jumlah pengunjung yang melakukan klik pada link refferal fundraiser</p>
                        </div>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <p>{{ $data['totalPengunjung'] }}</p>
            </div>

            <div class="kanan border-l border-gray-300 rounded-y-md rounded-r-md p-4 w-[50%]">
                <div class="info flex">
                    <p class="items-center text-sm font-semibold">Transaksi Pending</p>
                    <button data-popover-target="popover-description-2" data-popover-placement="bottom-end" type="button">
                        <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="sr-only">Show information</span>
                    </button>
                    <div id="popover-description-2" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900">Transaksi Pending</h3>
                            <p>jumlah transaksi donatur yang belum dibayar melalui link refferal fundraiser</p>
                        </div>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <p>{{ $data['totalTransaksiPending'] }}</p>
            </div>
        </div>
        <div class="bawah border-t border-gray-300 p-4">
            <div class="info flex">
                <p class="items-center text-sm font-semibold">Transaksi Berhasil</p>
                <button data-popover-target="popover-description-3" data-popover-placement="bottom-end" type="button">
                    <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                    </svg>
                    <span class="sr-only">Show information</span>
                </button>
                <div id="popover-description-3" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                    <div class="p-3 space-y-2">
                        <h3 class="font-semibold text-gray-900">Transaksi Berhasil</h3>
                        <p>jumlah transaksi yang sudah dibayar melalui link refferal fundraiser</p>
                    </div>
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
            <p>{{ $data['transaksi']->where('status', 'completed')->count() }}</p> <!-- Assuming 'completed' is the status for successful transactions -->
        </div>
    @endforeach
</div>
    <div class="dana bg-green-50 my-5 rounded-xl border border-gray-300">
    @foreach($fundraiserData as $data)
        <div class="atas flex">
            <div class="kiri rounded-y-md rounded-l-md p-4 w-[50%]">
                <div class="info flex">
                    <p class="items-center text-sm font-semibold">Total Dana Online</p>
                    <button data-popover-target="popover-description-4" data-popover-placement="bottom-end" type="button">
                        <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="sr-only">Show information</span>
                    </button>
                    <div id="popover-description-4" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900">Total Dana Online</h3>
                            <p>jumlah hasil nominal donasi dari para donatur yang diundang oleh fundraiser melalui link refferal</p>
                        </div>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <p>{{ $data['totalDanaOnline'] }}</p>
            </div>

            <div class="kanan border-l border-gray-300 rounded-y-md rounded-r-md p-4 w-[50%]">
                <div class="info flex">
                    <p class="items-center text-sm font-semibold">Total Dana Offline   </p>
                    <button data-popover-target="popover-description-5" data-popover-placement="bottom-end" type="button">
                        <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="sr-only">Show information</span>
                    </button>
                    <div id="popover-description-5" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900">Transaksi Offline</h3>
                            <p>jumlah hasil nominal donasi dari para donatur yang diundang oleh fundraiser melalui Admin atau input manual</p>
                        </div>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <p>{{ $data['totalDanaOffline'] }}</p>
            </div>
        </div>
        <div class="bawah border-t border-gray-300 p-4">
            <div class="info flex">
                    <p class="items-center text-sm font-semibold">Total Dana</p>
                    <button data-popover-target="popover-description-6" data-popover-placement="bottom-end" type="button">
                        <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="sr-only">Show information</span>
                    </button>
                    <div id="popover-description-6" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900">Total Dana</h3>
                            <p>seluruh nominal donasi yang telah dikumpulkan melalui offline dan online</p>
                        </div>
                    <div class="tooltip-arrow" data-popper-arrow></div>
                </div>
            </div>
            <p>{{ $data['totalDanaOnline'] + $data['totalDanaOffline'] }}</p>
        </div>
        @endforeach
    </div>
    <div class="komisi bg-green-50 border border-gray-300 rounded-xl">
    @foreach($fundraiserData as $data)
        <div class="atas flex">
            <a href="/komisi" class="kiri rounded-y-md rounded-l-md p-4 w-[50%]">
                <div class="info flex">
                    <p class="items-center text-sm font-semibold">Total Komisi</p>
                    <button data-popover-target="popover-description-7" data-popover-placement="bottom-end" type="button">
                        <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="sr-only">Show information</span>
                    </button>
                    <div id="popover-description-7" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900">Activity growth - Incremental</h3>
                            <p>Report helps navigate cumulative growth of community activities. Ideally, the chart should have a growing trend, as stagnating chart signifies a significant decrease of community activity.</p>
                        </div>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <p class="text-xl text-green-700 font-bold">{{ $data['totalKomisi'] }}</p>
            </a>

            <div class="kanan border-l border-gray-300 rounded-y-md rounded-r-md p-4 w-[50%]">
                <div class="info flex">
                    <p class="items-center text-sm font-semibold">Saldo Komisi</p>
                    <button data-popover-target="popover-description-8" data-popover-placement="bottom-end" type="button">
                        <svg class="w-4 h-4 ms-1 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 13V8m0 8h.01M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
                        </svg>
                        <span class="sr-only">Show information</span>
                    </button>
                    <div id="popover-description-8" data-popover role="tooltip" class="absolute z-10 invisible inline-block text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0 w-72">
                        <div class="p-3 space-y-2">
                            <h3 class="font-semibold text-gray-900">Saldo Komisi</h3>
                            <p>Sisa saldo komisi yang belum ditarik</p>
                        </div>
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </div>
                <p class="text-xl text-green-700 font-bold">{{ $data['saldoKomisi'] }}</p>
            </div>
        </div>
    @endforeach
</div>

    <a href="{{ url('/akun/' . Auth::id()) }}" type="button"
        class="px-4 py-2 w-full mt-4 text-base font-medium text-white items-center border border-green-700 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl">
        <p class="text-white text-center font-semibold">Pindah ke Akun Pengguna</p>
    </a>
            <a href="{{ url('/tim-fundraising') }}" type="button"
                class="px-3 py-3 mt-6  w-full  text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center">
                <p class="text-gray-600 font-semibold text-sm">Tim Fundraising</p>
                <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </a>
            <a href="{{  url('/komisi') }}" type="button"
                class="px-3 py-3  w-full mt-2 text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center">
                <p class="text-gray-600 font-semibold text-sm">Penarikan Komisi</p>
                <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </a>
            <a href="{{ url('/riwayat-fundraising') }}" type="button"
                class="px-3 py-3  w-full mt-2 text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center">
                <p class="text-gray-600 font-semibold text-sm">Riwayat Transaksi</p>
                <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </a>
            <a href="{{ url('/pilih-bank/{id}') }}" type="button"
                class="px-3 py-3  w-full mt-2 text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center">
                <p class="text-gray-600 font-semibold text-sm">Data Bank</p>
                <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </a>
            <a href="{{ url('/pengaturan-fundraiser') }}" type="button"
                class="px-3 py-3  w-full mt-2 text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center">
                <p class="text-gray-600 font-semibold text-sm">Profil</p>
                <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </a>
            
</div>

<div id="data-input-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50 overflow-y-auto pb-12">
        <div class="relative z-50">
            <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
                <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closeDataInputPage()">
                    <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                    </svg>
                </div>
                <div class="flex items-center ml-7">
                    <p class="font-semibold">Data Bank</p>
                </div>
            </div>
        </div>
        <div class="mx-8 mt-20">
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
                <button id="data-continue" onclick="confirmData()" type="submit" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Pilih Bank</button>
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
            <div class="flex mt-4 mb-10">
                <button id="data-continue" onclick="confirmData()" type="submit" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Tambah Bank</button>
            </div>
        </div>
    </div> 


<script>
    // Clipboard copy
    document.getElementById('rekening-copy-button').addEventListener('click', function () {
        const input = document.getElementById('rekening-copy-input');
        input.select();
        document.execCommand('copy');

        const defaultIcon = document.getElementById('default-icon-1');
        const successIcon = document.getElementById('success-icon-1');
        const defaultTooltipMessage = document.getElementById('default-tooltip-message-1');
        const successTooltipMessage = document.getElementById('success-tooltip-message-1');

        defaultIcon.classList.add('hidden');
        successIcon.classList.remove('hidden');
        defaultTooltipMessage.classList.add('hidden');
        successTooltipMessage.classList.remove('hidden');

        setTimeout(() => {
            defaultIcon.classList.remove('hidden');
            successIcon.classList.add('hidden');
            defaultTooltipMessage.classList.remove('hidden');
            successTooltipMessage.classList.add('hidden');
        }, 2000);
    });

    // Popover initialization
    document.querySelectorAll('[data-popover-target]').forEach(button => {
        const targetId = button.getAttribute('data-popover-target');
        const popover = document.getElementById(targetId);
        const popoverInstance = Popper.createPopper(button, popover, {
            placement: button.getAttribute('data-popover-placement') || 'bottom'
        });

        button.addEventListener('click', () => {
            popover.classList.toggle('invisible');
            popover.classList.toggle('opacity-0');
        });

        // Close the popover when clicking outside
        document.addEventListener('click', function(event) {
            if (!button.contains(event.target) && !popover.contains(event.target)) {
                popover.classList.add('invisible');
                popover.classList.add('opacity-0');
            }
        });
    });

    // databank
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
</script>

@endsection
