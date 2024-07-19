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
                <div class="overflow-x-scroll no-scrollbar h-18 mt-2 whitespace-nowrap ">
                    <a href="#semua" class="inline-block text-center" data-kategori="semua">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                        <svg width="25" height="25" viewBox="0 0 54 54" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_783_1326)">
                        <path d="M14.6667 25.75C13.1939 25.75 12 24.5561 12 23.0833V14.6667C12 13.1939 13.1939 12 14.6667 12H23.0833C24.5561 12 25.75 13.1939 25.75 14.6667V23.0833C25.75 24.5561 24.5561 25.75 23.0833 25.75H14.6667ZM14.6667 42C13.1939 42 12 40.8061 12 39.3333V30.9167C12 29.4439 13.1939 28.25 14.6667 28.25H23.0833C24.5561 28.25 25.75 29.4439 25.75 30.9167V39.3333C25.75 40.8061 24.5561 42 23.0833 42H14.6667ZM30.9167 25.75C29.4439 25.75 28.25 24.5561 28.25 23.0833V14.6667C28.25 13.1939 29.4439 12 30.9167 12H39.3333C40.8061 12 42 13.1939 42 14.6667V23.0833C42 24.5561 40.8061 25.75 39.3333 25.75H30.9167ZM30.9167 42C29.4439 42 28.25 40.8061 28.25 39.3333V30.9167C28.25 29.4439 29.4439 28.25 30.9167 28.25H39.3333C40.8061 28.25 42 29.4439 42 30.9167V39.3333C42 40.8061 40.8061 42 39.3333 42H30.9167ZM14.5 20.5833C14.5 22.0561 15.6939 23.25 17.1667 23.25H20.5833C22.0561 23.25 23.25 22.0561 23.25 20.5833V17.1667C23.25 15.6939 22.0561 14.5 20.5833 14.5H17.1667C15.6939 14.5 14.5 15.6939 14.5 17.1667V20.5833ZM30.75 20.5833C30.75 22.0561 31.9439 23.25 33.4167 23.25H36.8333C38.3061 23.25 39.5 22.0561 39.5 20.5833V17.1667C39.5 15.6939 38.3061 14.5 36.8333 14.5H33.4167C31.9439 14.5 30.75 15.6939 30.75 17.1667V20.5833ZM30.75 36.8333C30.75 38.3061 31.9439 39.5 33.4167 39.5H36.8333C38.3061 39.5 39.5 38.3061 39.5 36.8333V33.4167C39.5 31.9439 38.3061 30.75 36.8333 30.75H33.4167C31.9439 30.75 30.75 31.9439 30.75 33.4167V36.8333ZM14.5 36.8333C14.5 38.3061 15.6939 39.5 17.1667 39.5H20.5833C22.0561 39.5 23.25 38.3061 23.25 36.8333V33.4167C23.25 31.9439 22.0561 30.75 20.5833 30.75H17.1667C15.6939 30.75 14.5 31.9439 14.5 33.4167V36.8333Z" fill="white"/>
                        <path d="M14.5 20.5833C14.5 22.0561 15.6939 23.25 17.1667 23.25H20.5833C22.0561 23.25 23.25 22.0561 23.25 20.5833V17.1667C23.25 15.6939 22.0561 14.5 20.5833 14.5H17.1667C15.6939 14.5 14.5 15.6939 14.5 17.1667V20.5833Z" fill="#50A942"/>
                        <path d="M30.75 20.5833C30.75 22.0561 31.9439 23.25 33.4167 23.25H36.8333C38.3061 23.25 39.5 22.0561 39.5 20.5833V17.1667C39.5 15.6939 38.3061 14.5 36.8333 14.5H33.4167C31.9439 14.5 30.75 15.6939 30.75 17.1667V20.5833Z" fill="#FBC71E"/>
                        <path d="M14.5 36.8333C14.5 38.3061 15.6939 39.5 17.1667 39.5H20.5833C22.0561 39.5 23.25 38.3061 23.25 36.8333V33.4167C23.25 31.9439 22.0561 30.75 20.5833 30.75H17.1667C15.6939 30.75 14.5 31.9439 14.5 33.4167V36.8333Z" fill="#FBC71E"/>
                        <path d="M30.75 36.8333C30.75 38.3061 31.9439 39.5 33.4167 39.5H36.8333C38.3061 39.5 39.5 38.3061 39.5 36.8333V33.4167C39.5 31.9439 38.3061 30.75 36.8333 30.75H33.4167C31.9439 30.75 30.75 31.9439 30.75 33.4167V36.8333Z" fill="#50A942"/>
                        </g>
                        <defs>
                        <clipPath id="clip0_783_1326">
                        <rect width="30" height="30" fill="white" transform="translate(12 12)"/>
                        </clipPath>
                        </defs>
                        </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Semua</p>
                    </a>
                    @foreach ($categories as $kategori)
                    <a href="#{{ $kategori->name }}" class="inline-block text-center" data-kategori="{{ $kategori->name }}">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <img class="h-6" src="{{ asset('storage/' . $kategori->icon )}}" alt="{{ $kategori->name }}">
                        </button>
                        <p class="text-xs mt-1.5 font-medium">{{ $kategori->name }}</p>
                    </a>
                    @endforeach
                </div>
            </div>
            <div class="konten1 max-w-md mx-auto">
                @foreach ($campaigns as $campaign)
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-semua kategori-{{ $campaign->category }}" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="{{ asset('storage/' . $campaign->photo) }}" alt="{{ $campaign->title }}" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">{{ $campaign->title }}</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5">
                            <div class="bg-green-600 h-2.5 rounded-full" style="width: 45%"></div>
                        </div>
                        <div class="flex justify-between">
                            <div class="kiri text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
                            </div>
                            <div class="kanan text-xs">
                                <p class="mb-0.5">Terkumpul</p>
                                <p class="font-bold">Rp.130.000</p>
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
    const kategoriButtons = document.querySelectorAll('[data-kategori]'); // Selector untuk tombol dengan atribut data-kategori

    // Tambahkan event listener untuk setiap tombol kategori
    kategoriButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Ambil kategori dari data atau id, sesuaikan dengan kebutuhan
            const kategori = button.getAttribute('data-kategori'); // Contoh jika menggunakan data attribute

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

                // Tampilkan kotak konten yang sesuai dengan kategori yang dipilih
                const kontenKategori = document.querySelectorAll(`.kategori-${kategori}`);
                kontenKategori.forEach(kotak => {
                    kotak.style.display = 'flex';
                });
            }
        });
    });

    // const searchInput = document.getElementById('default-search');
    // const searchIcon = document.getElementById('search-icon');
    // const searchIconPath = document.getElementById('search-icon-path');

    // searchInput.addEventListener('input', function() {
    //     if (this.value.trim() !== '') {
    //         searchIcon.innerHTML = `
    //             <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
    //                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
    //             </svg>
    //         `;
    //     } else {
    //         searchIcon.innerHTML = `
    //             <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    //                 <path id="search-icon-path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
    //             </svg>
    //         `;
    //     }
    // });

    // searchIcon.addEventListener('click', function() {
    //     searchInput.value = '';
    //     searchIcon.innerHTML = `
    //         <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    //             <path id="search-icon-path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
    //         </svg>
    //     `;
    // });
    const searchInput = document.getElementById('default-search');
    const searchIcon = document.getElementById('search-icon');

    // Sembunyikan ikon saat input aktif
    searchInput.addEventListener('focus', function() {
        searchIcon.style.display = 'none';
    });

    // Tampilkan ikon saat input tidak aktif
    searchInput.addEventListener('blur', function() {
        searchIcon.style.display = 'block';
        searchIcon.classList.add('my-3.5'); // Menambahkan margin atas 2 pada ikon pencarian
    });

    // Hilangkan margin atas saat input kembali aktif
    searchInput.addEventListener('focus', function() {
        searchIcon.classList.remove('my-auto');
    });
    // Tambahkan event listener untuk event input
    searchInput.addEventListener('input', function(event) {
        const searchText = event.target.value.toLowerCase(); // Ambil teks pencarian dan ubah ke lowercase

        // Ambil semua elemen yang akan dicari (misalnya list donasi) - sesuaikan dengan struktur data Anda
        const items = document.querySelectorAll('.donasi-item'); // Ganti dengan kelas atau selector yang sesuai

        // Loop melalui setiap item
        items.forEach(item => {
            const text = item.textContent.toLowerCase(); // Ambil teks dari setiap item dan ubah ke lowercase

            // Periksa apakah teks pencarian ada di dalam teks item
            if (text.includes(searchText)) {
                item.style.display = 'block'; // Tampilkan item jika cocok dengan pencarian
            } else {
                item.style.display = 'none'; // Sembunyikan item jika tidak cocok dengan pencarian
            }
        });
    });

</script>

@endsection
