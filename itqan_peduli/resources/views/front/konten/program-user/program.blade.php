@extends('front.layout.mainProgram')

@section('konten')
<style>
    /* Untuk browser Webkit (Chrome, Safari, dll.) */
    .no-scrollbar::-webkit-scrollbar {
        display: none;
    }

    /* Untuk Firefox */
    .no-scrollbar {
        -ms-overflow-style: none;  /* IE 10+ */
        scrollbar-width: none;  /* Firefox */
    }
    .hidden {
        display: none;
    }
    .card {
        transition: opacity 0.3s ease;
    }
</style>

<div class="bungkus bg-white min-h-screen overflow-hidden overflow-auto">
    <div class="relative">
        <div class="absolute flex justify-center items-center inset-0">
            <div class="bg-green-700 h-[350px] w-[750px] max-w-screen-lg rounded-b-full -mx-[256px] z-0"></div>
        </div>
    </div>
    <div class="teks z-50 relative ms-10 mt-12 text-white">
        <p class="font-bold">Tempat Investasi Akhirat</p>
        <p> Ada <b>123 tempat</b> untuk investasi akhirat</p>
    </div>
    <div class="subheader mt-10">
        <form class="max-w-md mx-auto">
            <div class="relative">
                <input type="search" id="default-search" class="block w-full p-3 bg-gray-50 text-sm text-gray-900 rounded-lg border-none focus:outline-none focus:bg-white focus:ring-2 focus:ring-blue-500" style="box-shadow: 0 1px 3px 0 gray;" placeholder="Cari Donasi..." required />
                <div id="search-icon" class="absolute inset-y-0 end-3 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path id="search-icon-path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
            </div>
        </form>
    </div>
    <div class="konten mx-auto mt-10 mb-32">
        <p class="font-bold ms-7">Berdasarkan Kategori</p>
        <div class="konten mt-3">
            <div class="overflow-x-scroll no-scrollbar h-18 mt-2 whitespace-nowrap flex">
                @foreach ($categories as $kategori)
                    <a href="#" class="inline-block text-center mx-6" data-kategori="{{ $kategori->name }}">
                        <div class="flex items-center justify-center">
                            <div class="w-14 h-14 rounded-full bg-white shadow-xl flex items-center justify-center">
                                <img class="w-[25px] h-[25px]" src="{{ asset('storage/' . $kategori->icon )}}" alt="{{ $kategori->name }}">
                            </div>
                        </div>
                        <p class="text-sm text-gray-900 mt-2 font-semibold">{{ $kategori->name }}</p>
                    </a>
                @endforeach
            </div>
        </div>

        <div class="konten1 max-w-md mx-auto">
            @foreach ($campaigns as $campaign)
                <a href="{{ $campaign->is_expired ? '#' : '/artikel/' . $campaign->id }}" 
                class="kotak flex my-5 p-2 rounded-md kategori-semua kategori-{{ $campaign->category }} {{ $campaign->is_expired ? 'pointer-events-none opacity-50' : '' }}" 
                style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="{{ asset('storage/' . $campaign->photo) }}" alt="{{ $campaign->title }}" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">{{ $campaign->title }}</p>

                        @php
                            $target = is_numeric($campaign->target) ? (float)$campaign->target : 0;
                            $terkumpul = is_numeric($campaign->totalDanaTerkumpul) ? (float)$campaign->totalDanaTerkumpul : 0;
                            $progress = $target > 0 ? min(($terkumpul / $target) * 100, 100) : 0;
                        @endphp

                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: {{ $progress }}%"></div>
                        </div>
                        
                        <div class="flex justify-between">
                            <div class="kiri text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp. {{ number_format($terkumpul, 0, ',', '.') }}</p>
                            </div>
                            <div class="kanan text-xs">
                                <p class="mb-0.5">Hari Tersisa</p>
                                <p class="font-bold">
                                    @if ($campaign->hari_tersisa === null)
                                        Tidak Ada Deadline
                                    @elseif ($campaign->hari_tersisa > 0)
                                        {{ $campaign->hari_tersisa }} Hari
                                    @else
                                        Berakhir
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>


    </div>
</div>

<script>
// Ambil semua tombol kategori
const kategoriButtons = document.querySelectorAll('[data-kategori]'); 

// Tambahkan event listener untuk setiap tombol kategori
kategoriButtons.forEach(button => {
    button.addEventListener('click', function() {
        // Ambil kategori dari data attribute
        const kategori = button.getAttribute('data-kategori');

        // Ambil semua kotak konten berdasarkan kategori
        const semuaKonten = document.querySelectorAll('.kotak');

        // Jika yang diklik adalah kategori "semua", tampilkan semua kotak
        if (kategori === 'semua') {
            semuaKonten.forEach(kotak => {
                kotak.style.display = 'flex';
            });
        } else {
            // Semua kotak konten diubah menjadi display none
            semuaKonten.forEach(kotak => {
                kotak.style.display = 'none';
            });

            // Tampilkan kotak yang memiliki kategori yang sesuai
            const kategoriKonten = document.querySelectorAll('.kategori-' + kategori);
            kategoriKonten.forEach(kotak => {
                kotak.style.display = 'flex';
            });
        }
    });
});
</script>

@endsection
