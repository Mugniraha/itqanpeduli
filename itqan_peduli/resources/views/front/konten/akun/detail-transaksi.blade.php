@extends('front.layout.main3')

@section('konten')
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header flex">
            <a href="/riwayat-transaksi" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Detail Transaksi</p>
        </div>
        <div class="konten m-5">
            <p class="font-bold text-lg my-3">Data Diri Donatur</p>
            <p class="font-semibold">Nama Donatur : <b>Luthfi Mawarid Putra Alamsyah</b></p>
            <p class="font-semibold">Nomor Telepon : <b>12211223</b></p>
            <p class="font-semibold">Email : <b>Luthfi@gmail.com</b></p>
            <p class="font-bold text-lg mt-10 my-3">Detail Donasi</p>
            <p class="font-semibold">ID Donasi : <b>DI-123312</b></p>
            <p class="font-semibold">Tanggal Donasi : <b>28/08/2021 11:25</b></p>
            <p class="font-semibold">Jenis Donasi : <b>Donasi Instan</b></p>
            <p class="font-semibold">Program : -</p>
            <p class="font-semibold">Jumlah Donasi : <b>Rp 1.210.200</b></p>
            <p class="font-semibold">Jumlah Komisi : <b>213.000</b></p>
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
