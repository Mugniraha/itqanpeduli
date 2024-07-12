@extends('user.home.index2')

@section('content')

<style>
    .truncate-text {
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Number of lines to show */
        -webkit-box-orient: vertical;
    }
</style>
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header relative">
            <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-80 object-cover bg-black rounded w-full">
            <div class="absolute top-0 left-0 my-10 mx-5">
                <a href="/program" class="">
                    <svg class="w-7 h-7 text-green-600 p-0.5 rounded-full bg-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="konten m-5">
            <p class="font-bold my-2">Donasi Untuk Meningkatkan Kualitas Gedung Polindra</p>
            <div class="dana flex my-3">
                <p class="font-bold">Rp13.205.500</p>
                <p class="text-gray-400 text-sm my-auto mx-1.5">Dari Rp13.205.500</p>
            </div>
            <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
            </div>
            <div class="dana flex justify-between my-2">
                <p class="text-gray-400 text-xs my-auto mx-1.5">135 Hari Lagi</p>
                <p class="font-bold text-sm cursor-pointer" id="showModal">Lihat Rincian Dana</p>
            </div>
            <a href="/yayasan" class="flex my-3 rounded-2xl p-4 border border-gray-400">
                <div class="kiri">
                    <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-16 w-16 bg-black object-cover rounded-full w-full">
                </div>
                <div class="tengah mx-3 my-auto">
                    <div class="atas my-auto flex">
                        <p class="font-bold text-sm">Yayasan Mandiri</p>
                        <svg class="w-4 h-4 my-auto text-blue-800 ms-1 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                        </svg>
                    </div>
                    <p class="text-xs text-gray-400">Terdaftar sejak 29 mei 2022</p>
                </div>
                <svg class="w-7 h-7 text-gray-800 my-auto ms-auto dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10 16 4-4-4-4"/>
                </svg>
            </a>
            <div class="des my-5">
                <p class="font-bold">Deskripsi</p>
                <div class="truncate-text max-h-12 overflow-hidden mt-3">
                    <p class="text-sm leading-snug">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis omnis, facilis tenetur asperiores dolore voluptates at odio suscipit, nesciunt quis sit distinctio esse aperiam cum officia sapiente laudantium facere modi nihil praesentium dolorum voluptas! Voluptatem vel sed saepe mollitia quis fugit aspernatur accusamus. Alias ducimus tenetur provident pariatur id? Accusamus!</p>
                </div>
                <a href="/deskripsi">
                    <button class="p-2 bg-green-700 text-white text-sm font-bold mt-3 w-full rounded-md">Muat Lebih Banyak</button>
                </a>
            </div>
            <div class="kabar my-10">
                <div class="atas flex justify-between">
                    <p class="font-bold text-sm">Kabar Terbaru <span class="bg-gray-50 px-2.5 py-1 border border-gray-400 rounded-full">4</span></p>
                    <a href="/kabar" class="text-xs text-gray-400 my-auto font-semibold">Lihat Semua</a>
                </div>
                <div class="card shadow-md rounded-lg my-4 flex">
                    <div class="kiri">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-20 bg-black rounded-l-lg px-5 py-2">
                    </div>
                    <div class="kanan my-auto ms-2">
                        <p class="text-sm">#Solidaritas Untuk Korban</p>
                        <p class="text-sm">Gempa Cianjur</p>
                        <p class="text-xs text-gray-500">22 Agustus 2022</p>
                    </div>
                </div>
                <div class="card shadow-md rounded-lg my-4 flex">
                    <div class="kiri">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-20 bg-black rounded-l-lg px-5 py-2">
                    </div>
                    <div class="kanan my-auto ms-2">
                        <p class="text-sm">#Solidaritas Untuk Korban</p>
                        <p class="text-sm">Gempa Cianjur</p>
                        <p class="text-xs text-gray-500">22 Agustus 2022</p>
                    </div>
                </div>
                <div class="card shadow-md rounded-lg my-4 flex">
                    <div class="kiri">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-20 bg-black rounded-l-lg px-5 py-2">
                    </div>
                    <div class="kanan my-auto ms-2">
                        <p class="text-sm">#Solidaritas Untuk Korban</p>
                        <p class="text-sm">Gempa Cianjur</p>
                        <p class="text-xs text-gray-500">22 Agustus 2022</p>
                    </div>
                </div>
            </div>
            <div class="donatur">
                <div class="atas flex justify-between">
                <p class="font-bold text-sm">Donatur<span class="bg-gray-50 ms-2 px-2.5 py-1 border border-gray-400 rounded-full">4</span></p>
                <a href="/donatur" class="text-gray-400 text-xs my-auto">Lihat Semua</a>
                </div>  
                <div class="card shadow-md rounded-lg flex p-3">
                    <div class="kiri w-36">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                        <div class="kiri flex justify-between w-full">
                        <p class="text-sm font-semibold">Hamba Allah</p>
                        <p class="text-xs text-gray-500 ms-10">22 Agustus 2022</p>
                        </div>
                        <p class="text-sm font-bold">Donasi Rp 10.000</p>
                    </div>
                </div>
                <div class="card shadow-md py-2 rounded-lg my-4">
                    <div class="atas flex p-3">
                        <div class="kiri w-36">
                            <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                        </div>
                        <div class="kanan my-auto ms-2 w-full">
                            <div class="kiri flex justify-between w-full">
                            <p class="text-sm font-semibold">Hamba Allah</p>
                            <p class="text-xs text-gray-500 ms-10">22 Agustus 2022</p>
                            </div>
                            <p class="text-sm font-bold">Donasi Rp 10.000</p>
                        </div>
                    </div>
                    <p class="text-sm px-3 pt-2">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Saepe optio pariatur esse, delectus eveniet repellendus consequuntur beatae laboriosam facilis minus?</p>
                    <p class="font-semibold text-sm p-3">11 Orang Mengaminkan doa ini</p>
                    <div class="bawah flex justify-between p-3">
                        <div class="kiri w-full justify-center flex my-auto pt-2 border-t border-r">
                            <svg class="w-6 h-6 me-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                            </svg>
                            <p>Aamiin</p>
                        </div>
                        <div class="kanan w-full my-auto justify-center flex pt-2 border-t border-l">
                            <svg class="w-6 h-6 me-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M7.926 10.898 15 7.727m-7.074 5.39L15 16.29M8 12a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm12 5.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Zm0-11a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                            </svg>
                            <p>Bagikan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="duta mt-10 mb-32">
                <div class="atas flex justify-between">
                    <p class="font-bold text-sm">Duta Amal<span class="bg-gray-50 ms-2 px-2.5 py-1 border border-gray-400 rounded-full">4</span></p>
                    <a href="/duta" class="text-gray-400 text-xs my-auto">Lihat Semua</a>
                </div>  
                <div class="card shadow-md rounded-lg flex p-3">
                    <div class="kiri w-36 my-auto">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                        <p class="text-sm font-semibold">Mughni</p>
                        <p class="text-xs text-gray-500 my-1.5">Berhasil mengajak 112 orang untuk berdonasi</p>
                        <p class="text-sm font-bold">Donasi Rp 10.000</p>
                    </div>
                </div>
                <div class="card shadow-md rounded-lg flex p-3">
                    <div class="kiri w-36 my-auto">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="text-center h-16 my-auto bg-black rounded-full">
                    </div>
                    <div class="kanan my-auto ms-2 w-full">
                        <p class="text-sm font-semibold">Mughni</p>
                        <p class="text-xs text-gray-500 my-1.5">Berhasil mengajak 112 orang untuk berdonasi</p>
                        <p class="text-sm font-bold">Donasi Rp 10.000</p>
                    </div>
                </div>
                <a href="/dutaamal">
                    <button class="bg-green-600 px-5 my-10 py-2 rounded-md text-white text-sm font-semibold w-full">Jadi Duta Amal</button>
                </a>
            </div>
        </div>
    </div>

    <!-- Modal HTML -->
    <div id="myModal" class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50 hidden overflow-y-auto">
        <div class="bg-white p-6 rounded-lg shadow-md w-3/4 md:w-1/2 lg:w-1/3 mt-14 mb-4">
            <div class="flex justify-between items-center border-b pb-3">
                <h3 class="text-lg font-semibold">Rincian Penggunaan Dana</h3>
                <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            <div class="mt-4 text-sm">
                <!-- Rincian Dana content -->
                 <div class="atas">
                    <div class="flex justify-between my-4">
                        <p>Dana Terkumpul</p>
                        <p>Rp 130.234.042</p>
                    </div>
                    <div class="flex justify-between my-4">
                        <p>Donasi Sudah Dicairkan</p>
                        <p>Rp 0</p>
                    </div>
                    <div class="flex justify-between my-4">
                        <p>Donasi Operasi Kitabisa</p>
                        <p>Rp 130.234.042</p>
                    </div>
                    <div class="flex justify-between my-4">
                        <p>Biaya Admin Bank</p>
                        <p>Rp 708.100</p>
                    </div>
                    <div class="flex justify-between my-4">
                        <p class="font-bold">Dana Tersisa</p>
                        <p class="font-bold text-green-700">Rp 104.390.100</p>
                    </div>
                </div>
                <div class="tengah border border-gray-400 px-2 py-4 rounded-2xl my-2 bg-green-100">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, assumenda magnam nobis quibusdam veritatis nihil.</p>
                </div>
                <div class="bawah px-2 py-4 rounded-2xl my-2 bg-green-100">
                    <div class="1 flex justify-between">
                        <div class="bintang mt-1 w-28">
                            <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                            </svg>
                        </div>
                        <div class="teks">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea alias quaerat vel laboriosam facere quos omnis, nihil at iure praesentium!</p>
                        </div>
                    </div>
                    <div class="1 flex justify-between">
                        <div class="bintang mt-1 flex w-28">
                            <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                            </svg>
                            <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                            </svg>
                        </div>
                        <div class="teks">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea alias quaerat vel laboriosam facere quos omnis, nihil at iure praesentium!</p>
                        </div>
                    </div>
                    <div class="1 flex justify-between">
                        <div class="bintang mt-1 flex w-28">
                            <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                            </svg>
                            <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                            </svg>
                            <svg class="w-3 h-3 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M13.849 4.22c-.684-1.626-3.014-1.626-3.698 0L8.397 8.387l-4.552.361c-1.775.14-2.495 2.331-1.142 3.477l3.468 2.937-1.06 4.392c-.413 1.713 1.472 3.067 2.992 2.149L12 19.35l3.897 2.354c1.52.918 3.405-.436 2.992-2.15l-1.06-4.39 3.468-2.938c1.353-1.146.633-3.336-1.142-3.477l-4.552-.36-1.754-4.17Z"/>
                            </svg>
                        </div>
                        <div class="teks">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea alias quaerat vel laboriosam facere quos omnis, nihil at iure praesentium!</p>
                        </div>
                    </div>
                </div>
                <div class="tombol w-full bg-green-700 text-center text-white font-semibold py-3 rounded-lg my-2">
                    <button>Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('showModal').addEventListener('click', function() {
            document.getElementById('myModal').classList.remove('hidden');
        });

        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('myModal').classList.add('hidden');
        });
    </script>
@endsection
