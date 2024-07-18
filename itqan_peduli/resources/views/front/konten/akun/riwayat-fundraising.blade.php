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
            <div class="flex mt-14 mx-5 justify-center">
                <div id="btnKomisi" class="bg-green-600 p-3 text-center font-semibold text-white w-1/2 rounded-s-2xl cursor-pointer" onclick="showPeriod('Komisi', this)">
                    <p>Riwayat Komisi</p>
                </div>
                <div id="btnPenarikan" class="w-1/2 text-center text-black p-3 bg-gray-200 rounded-e-2xl cursor-pointer" onclick="showPeriod('Penarikan', this)">
                    <p>Riwayat Penarikan</p>
                </div>
            </div>
            <div class="riwayat my-10">
                <div id="Komisi">
                    <p class="font-bold text-lg my-2">Riwayat Komisi</p>
                    <form class="my-5 w-full">   
                        <div class="relative">
                        <input type="search" id="default-search" class="block w-full p-3 bg-gray-50 text-sm text-gray-900 rounded-lg border-none focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500" style="box-shadow: 0 1px 3px 0 gray;" placeholder="Cari Donasi..." required />
                        <div id="search-icon" class="absolute inset-y-0 end-3 flex items-center ps-3 pointer-events-none">
                                <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                    <path id="search-icon-path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                </svg>
                            </div>
                        </div>
                    </form>
                    <div class="card flex justify-between mt-6 border-b-2 pb-2">
                        <div class="kiri">
                            <p class="text-xs text-gray-400">IDK-123123123</p>
                            <p class="my-1.5 font-semibold">Komisi</p>
                            <p class="text-xs text-gray-400">29/09/22 11:11</p>
                        </div>
                        <div class="kanan my-auto text-right">
                            <p class="text-lg font-bold">Rp 1.000.000</p>
                            <a href="/detail" class="text-sm text-green-700 font-semibold">lihat detail</a>
                        </div>
                    </div>
                    <!-- Tambahkan entri riwayat komisi lainnya di sini -->
                </div>
                <div id="Penarikan" class="hidden">
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
    
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnKomisi = document.getElementById('btnKomisi');
            showPeriod('Komisi', btnKomisi);
        });

        function showPeriod(period, element) {
            const sections = ['Komisi', 'Penarikan'];
            sections.forEach(section => {
                document.getElementById(section).classList.add('hidden');
            });
            document.getElementById(period).classList.remove('hidden');

            const buttons = ['btnKomisi', 'btnPenarikan'];
            buttons.forEach(btn => {
                document.getElementById(btn).classList.remove('bg-green-600', 'text-white');
                document.getElementById(btn).classList.add('bg-gray-200', 'text-black');
            });

            element.classList.add('bg-green-600', 'text-white');
            element.classList.remove('bg-gray-200', 'text-black');
        }
    </script>
@endsection
