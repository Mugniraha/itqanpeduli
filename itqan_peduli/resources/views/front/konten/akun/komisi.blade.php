@extends('front.layout.main3')

@section('konten')
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header flex">
            <a href="/akun-fundraiser" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Penarikan Komisi</p>
        </div>
        <div class="konten m-5">
            <div class="card shadow-md rounded-xl p-3 my-5 border-2 border-gray-300 bg-green-50">
                <p class="text-lg font-medium">Saldo Tersedia</p>
                <p class="text-lg font-bold text-green-700 my-1">RP 300.00</p>
                <p class="text-sm">Tarik komisi yang anda dapatkan dari link refferal</p>
            </div>
            <div class="bank mt-10">
                <div class="atas flex justify-between">
                    <p class="text-sm font-semibold">Tujuan Penarikan</p>
                    <p class="text-sm font-semibold cursor-pointer" id="data">Ubah Bank</p>
                </div>
                <div class="relative w-full my-3 mb-8 p-4 border border-gray-400 rounded-xl flex justify-between">
                    <div id="isi-data" class="">
                        <div class="text-lg text-gray-700">Farhan Fadhlurrohman</div>
                        <div class="text-gray-700"><b>Mandiri</b> - 122111343231</div>
                    </div>
                </div>
                <div class="relative mt-6">
                    <label for="nama" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nominal Penarikan</label>
                    <input type="text" id="nama" placeholder="Rp 0" class="w-full py-3 px-4 text-sm border border-gray-600 rounded-xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                    <p class="text-gray-600 text-xs">Minimal penarikan komisi Rp 100.000</p>
                </div>
                <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white bg-green-700 hover:bg-green-800 my-4 w-full focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
                    Tarik Komisi
                </button>
                <div class="riwayat my-20">
                    <p class="font-bold text-lg my-2">Riwayat Penarikan</p>
                    <div class="card flex justify-between mt-6 border-b-2 pb-2">
                        <div class="kiri">
                            <p class="text-xs text-gray-400">IDW-123123123</p>
                            <p class="my-1.5 font-semibold">Penarikan Komisi</p>
                            <p class="text-xs text-gray-400">29/09/22 11:11</p>
                        </div>
                        <div class="kanan my-auto text-right">
                            <p class="text-lg font-bold">Rp 4.123.500</p>
                            <p class="text-sm text-green-700 font-semibold">Menunggu Konfirmasi</p>
                        </div>
                    </div>
                    <div class="card flex justify-between mt-4 border-b-2 pb-2">
                        <div class="kiri">
                            <p class="text-xs text-gray-400">IDW-123123123</p>
                            <p class="my-1.5 font-semibold">Penarikan Komisi</p>
                            <p class="text-xs text-gray-400">29/09/22 11:11</p>
                        </div>
                        <div class="kanan my-auto text-right">
                            <p class="text-lg font-bold">Rp 4.123.500</p>
                            <p class="text-sm text-green-700 font-semibold">Berhasil</p>
                        </div>
                    </div>
                    <div class="card flex justify-between mt-4 border-b-2 pb-2">
                        <div class="kiri">
                            <p class="text-xs text-gray-400">IDW-123123123</p>
                            <p class="my-1.5 font-semibold">Penarikan Komisi</p>
                            <p class="text-xs text-gray-400">29/09/22 11:11</p>
                        </div>
                        <div class="kanan my-auto text-right">
                            <p class="text-lg font-bold">Rp 4.123.500</p>
                            <p class="text-sm text-red-700 font-semibold">Ditolak</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="data-input-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50 overflow-y-auto pb-12">
        <div class="relative z-50">
            <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
                <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closeDataInputPage()">
                    <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
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
    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center mx-auto items-center text-center w-[450px] md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="items-center p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center">
                        Berhasil Tarik Komisi
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="leading-relaxed font-semibold dark:text-gray-400">
                        Anda berhasil melakukan penarikan sebesar <b>Rp 121.000</b> ke rekening <b>Muhammad Shiddiq</b> harap menunggu <b>1 X 24 jam</b>
                    </p>
                </div>
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button id="close-modal-button" type="button" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Selesai</button>
                </div>
            </div>
        </div>
    </div>
    <div id="default-modal1" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center mx-auto items-center text-center w-[450px] md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="items-center p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white text-center">
                        Data Bank Ditambah
                    </h3>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="leading-relaxed font-semibold dark:text-gray-400">
                        Data bank mandiri  122134412 a.n Muhammad Shiddiq berhasil ditambah
                    </p>
                </div>
                <div class="flex items-center p-4 md:p-5 border-t border-gray-200 rounded-b dark:border-gray-600">
                    <button id="close-modal-button" type="button" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-blue-800">Selesai</button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
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
