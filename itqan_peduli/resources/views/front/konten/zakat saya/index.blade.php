@extends('front.layout.main3')

@section('konten')
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header flex">
            <a href="/akun" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Zakat Saya</p>
        </div>
        <div class="konten m-5">
            <div class="flex mt-14 justify-center">
                <div id="btnZakat" class="bg-green-600 p-3 text-center font-semibold text-white w-1/2 rounded-s-2xl cursor-pointer" onclick="showPeriod('Zakat', this)">
                    <p>Riwayat Zakat</p>
                </div>
                <div id="btnInfo" class="w-1/2 text-center text-black p-3 bg-gray-200 font-semibold rounded-e-2xl cursor-pointer" onclick="showPeriod('Info', this)">
                    <p>Info Terbaru</p>
                </div>
            </div>
            <div class="riwayat my-10">
                <div id="Zakat">
                    {{-- <div class="atas flex justify-between">
                        <div class="kiri">
                            <p class="font-bold text-lg">Riwayat Donasi</p>
                            <p class="text-sm">Riwayat Donasi</p>
                        </div>
                        <div class="kanan">
                            <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-white my-2 bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center" type="button">Juli 2024 <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                            </svg>
                            </button>

                            <!-- Dropdown menu -->
                            <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                                <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Juni 2024</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Mei 2024</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">April 2024</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100">Maret 2024</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    @foreach ($month as $bulanTahun)
                        <div class="bulan flex justify-between my-3">
                            <div class="kiri">
                                <p class="text-sm text-gray-600">{{ $groupedZakat[$bulanTahun]->count() }} Zakat</p>
                                <p class="font-semibold">{{ $bulanTahun }}</p>
                            </div>
                            <div class="kanan my-auto text-sm text-gray-600">
                                <p>Rp {{ number_format($groupedZakat[$bulanTahun]->sum('nominal_total'), 0, ',', '.') }}</p>
                            </div>
                        </div>

                        @foreach ($groupedZakat[$bulanTahun] as $row)
                            @php
                                $formattedDate = \Carbon\Carbon::parse($row->tgl_transaksi)->translatedFormat('H:i \\W\\I\\B, d F Y');
                            @endphp
                            <div class="my-4 card flex shadow-md p-2 rounded-md ">
                                <div class="kiri">
                                    <img src="/images/whatsapp1.png" alt="" class="w-24 h-24">
                                </div>
                                <div class="kanan ms-3">
                                    <p class="text-sm text-gray-400">{{ $formattedDate }}</p>
                                    <p class="font-semibold">{{ $row->nama_program_zakat }}</p>
                                    <p class="mt-2 text-sm">Jumlah Zakat</p>
                                    <p class="text-sm font-semibold">Rp {{ number_format($row->nominal_total, 0, ',', '.') }}</p>
                                </div>
                                <div class="ms-32 flex text-right">
                                    @if ($row->status === 'Success' || $row->status === 'settlement')
                                        <p class="text-sm h-6 relative px-1 bg-green-100 text-green-400 rounded-sm">{{$row->status}}</p>
                                    @elseif ($row->status === 'pending')
                                        <p class="text-sm h-6 relative px-1 bg-yellow-100 text-yellow-400 rounded-sm">{{$row->status}}</p>
                                    @else
                                        <p class="text-sm h-6 relative px-1 bg-red-100 text-red-400 rounded-sm">{{$row->status}}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    @endforeach

                </div>
                <div id="Info" class="hidden">
                    <p class="font-bold text-lg my-2">Info Terbaru</p>
                    <div class="bg-white border border-gray-200 rounded-lg shadow">
                    <a href="#">
                        <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
                    </a>
                    <div class="p-5 w-full">
                        <p class="text-xs whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
                        <p class="text-sm font-semibold text-gray-700 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                        <p class="text-xs my-3 text-gray-600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime consectetur accusamus, rerum ducimus illo harum facilis id provident voluptatem distinctio tempora dolorem? Velit explicabo maiores, cumque ex deleniti harum iure?</p>
                        <p class="text-sm font-semibold">Program Terkait</p>
                        <div class="flex w-full">
                            <img class="rounded-lg w-1/3 my-3 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
                            <div class="p-5 w-2/3">
                                <p class="mb-3 font-normal text-gray-700 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                                    <div class="bg-green-600 h-2.5 rounded-full" style="width: 45%"></div>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <div>
                                        <p class="text-xs font-normal text-gray-700">Terkumpul</p>
                                        <span class="text-sm mb-3 font-semibold text-gray-700">Rp131.456.789</span>
                                    </div>
                                    <div>
                                        <p class="text-xs font-normal text-gray-700 whitespace-nowrap">Hari Tersisa</p>
                                        <span class="text-sm mb-3 font-semibold text-gray-700">656 Hari</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnZakat = document.getElementById('btnZakat');
            showPeriod('Zakat', btnZakat);
        });

        function showPeriod(period, element) {
            const sections = ['Zakat', 'Info'];
            sections.forEach(section => {
                document.getElementById(section).classList.add('hidden');
            });
            document.getElementById(period).classList.remove('hidden');

            const buttons = ['btnZakat', 'btnInfo'];
            buttons.forEach(btn => {
                document.getElementById(btn).classList.remove('bg-green-600', 'text-white');
                document.getElementById(btn).classList.add('bg-gray-200', 'text-black');
            });

            element.classList.add('bg-green-600', 'text-white');
            element.classList.remove('bg-gray-200', 'text-black');
        }
    </script>
@endsection
