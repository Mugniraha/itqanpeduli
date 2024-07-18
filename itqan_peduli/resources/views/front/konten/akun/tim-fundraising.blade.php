@extends('front.layout.main3')

@section('konten')
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header flex fixed z-50 bg-white w-[512px]">
            <a href="/akun-fundraiser" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Penarikan Komisi</p>
        </div>
        <div class="konten m-5 mt-24 relative">
            <p class="text-lg font-bold">Tim Penjualan</p>
            <p class="text-sm">Berikut ini total tim penjualan yang anda kelola</p>
            <div class="card flex justify-around my-5">
                <div class="fundraising shadow-md rounded-xl p-5 border border-gray-300 bg-green-50 w-full mr-3">
                    <p class="text-lg font-bold text-center">123</p>
                    <p class="text-sm text-center">Jumlah Fundraising</p>
                </div>
                <div class="fundraising shadow-md rounded-xl p-5 border border-gray-300 bg-green-50 w-full ml-3">
                    <p class="text-lg font-bold text-center">111</p>
                    <p class="text-sm text-center">Jumlah Fundraising</p>
                </div>
            </div>
            <p class="text-lg font-bold mt-10">Statistik</p>
            <div class="card my-5 border border-gray-300 bg-green-50 rounded-xl shadow-md">
                <div class="atas flex">
                    <div class="fundraising border-r border-b p-5 w-full">
                        <p class="text-lg font-bold text-center">123</p>
                        <p class="text-sm text-center">Jumlah Fundraising</p>
                    </div>
                    <div class="fundraising p-5 border-b border-l w-full">
                        <p class="text-lg font-bold text-center">111</p>
                        <p class="text-sm text-center">Jumlah Fundraising</p>
                    </div>
                </div>
                <div class="bawah flex">
                    <div class="fundraising p-5 border-t border-r w-full">
                        <p class="text-lg font-bold text-center">111</p>
                        <p class="text-sm text-center">Jumlah Fundraising</p>
                    </div>
                    <div class="fundraising p-5 border-l border-t w-full">
                        <p class="text-lg font-bold text-center">111</p>
                        <p class="text-sm text-center">Jumlah Fundraising</p>
                    </div>
                </div>
            </div>
            <p class="font-bold text-lg mt-10">Database Tim Fundraiser</p>
            <div class="input flex my-10">
                <form class="my-2 w-full">   
                    <div class="relative">
                    <input type="search" id="default-search" class="block w-full p-3 bg-gray-50 text-sm text-gray-900 rounded-lg border-none focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500" style="box-shadow: 0 1px 3px 0 gray;" placeholder="Cari Donasi..." required />
                    <div id="search-icon" class="absolute inset-y-0 end-3 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path id="search-icon-path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                    </div>
                </form>
                <svg class="w-8 h-8 ms-4 my-auto text-gray-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M20 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6h-2m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4m16 6H10m0 0a2 2 0 1 0-4 0m4 0a2 2 0 1 1-4 0m0 0H4"/>
                </svg>
            </div>    
            <div class="bawah mb-20">
                <div class="card flex justify-between my-5 border-b-2 border-gray-300 py-2">
                    <p class="font-semibold">Shiddiq</p>
                    <p class="font-semibold">11 Donatur</p>
                </div>
                <div class="card flex justify-between my-5 border-b-2 border-gray-300 py-2">
                    <p class="font-semibold">Fepi</p>
                    <p class="font-semibold">11 Donatur</p>
                </div>
                <div class="card flex justify-between my-5 border-b-2 border-gray-300 py-2">
                    <p class="font-semibold">Samsul</p>
                    <p class="font-semibold">11 Donatur</p>
                </div>
                <div class="card flex justify-between my-5 border-b-2 border-gray-300 py-2">
                    <p class="font-semibold">Galih</p>
                    <p class="font-semibold">11 Donatur</p>
                </div>
                <div class="card flex justify-between my-5 border-b-2 border-gray-300 py-2">
                    <p class="font-semibold">Ratna</p>
                    <p class="font-semibold">11 Donatur</p>
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
