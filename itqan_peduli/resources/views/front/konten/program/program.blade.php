@extends('user.home.index')

@section('content')
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
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path id="search-icon-path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                </div>
            </form>
        </div>
        <div class="konten mx-auto mt-10 mb-24">
            <p class="font-bold ms-7">Berdasarkan Kategori</p>
            <div class="konten mt-3">
                <div class="overflow-x-scroll no-scrollbar h-18 mt-2 whitespace-nowrap ">
                    <a href="#semua" class="semu inline-block text-center" data-kategori="semua">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Semua</p>
                    </a>
                    <a href="#kesehatan" class="semu inline-block text-center" data-kategori="kesehatan">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12.01 6.001C6.5 1 1 8 5.782 13.001L12.011 20l6.23-7C23 8 17.5 1 12.01 6.002Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Kesehatan</p>
                    </a>
                    <a href="#infrastruktur" class="semu inline-block text-center" data-kategori="infrastruktur">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 4h12M6 4v16M6 4H5m13 0v16m0-16h1m-1 16H6m12 0h1M6 20H5M9 7h1v1H9V7Zm5 0h1v1h-1V7Zm-5 4h1v1H9v-1Zm5 0h1v1h-1v-1Zm-3 4h2a1 1 0 0 1 1 1v4h-4v-4a1 1 0 0 1 1-1Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Infrastruktur</p>
                    </a>
                    <a href="#pendidikan" class="semu inline-block text-center" data-kategori="pendidikan">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.03v13m0-13c-2.819-.831-4.715-1.076-8.029-1.023A.99.99 0 0 0 3 6v11c0 .563.466 1.014 1.03 1.007 3.122-.043 5.018.212 7.97 1.023m0-13c2.819-.831 4.715-1.076 8.029-1.023A.99.99 0 0 1 21 6v11c0 .563-.466 1.014-1.03 1.007-3.122-.043-5.018.212-7.97 1.023"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Pendidikan</p>
                    </a>
                    <a href="#kemanusiaan" class="semu inline-block text-center" data-kategori="kemanusiaan">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M4.5 17H4a1 1 0 0 1-1-1 3 3 0 0 1 3-3h1m0-3.05A2.5 2.5 0 1 1 9 5.5M19.5 17h.5a1 1 0 0 0 1-1 3 3 0 0 0-3-3h-1m0-3.05a2.5 2.5 0 1 0-2-4.45m.5 13.5h-7a1 1 0 0 1-1-1 3 3 0 0 1 3-3h3a3 3 0 0 1 3 3 1 1 0 0 1-1 1Zm-1-9.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Kemanusiaan</p>
                    </a>
                    <a href="#wirausaha" class="semu inline-block text-center" data-kategori="wirausaha">
                        <button class="bg-gray-200 p-2.5 rounded-full mx-8 inline-block" style="box-shadow: 0 1px 3px 0 gray;">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 12c.263 0 .524-.06.767-.175a2 2 0 0 0 .65-.491c.186-.21.333-.46.433-.734.1-.274.15-.568.15-.864a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 12 9.736a2.4 2.4 0 0 0 .586 1.591c.375.422.884.659 1.414.659.53 0 1.04-.237 1.414-.659A2.4 2.4 0 0 0 16 9.736c0 .295.052.588.152.861s.248.521.434.73a2 2 0 0 0 .649.488 1.809 1.809 0 0 0 1.53 0 2.03 2.03 0 0 0 .65-.488c.185-.209.332-.457.433-.73.1-.273.152-.566.152-.861 0-.974-1.108-3.85-1.618-5.121A.983.983 0 0 0 17.466 4H6.456a.986.986 0 0 0-.93.645C5.045 5.962 4 8.905 4 9.736c.023.59.241 1.148.611 1.567.37.418.865.667 1.389.697Zm0 0c.328 0 .651-.091.94-.266A2.1 2.1 0 0 0 7.66 11h.681a2.1 2.1 0 0 0 .718.734c.29.175.613.266.942.266.328 0 .651-.091.94-.266.29-.174.537-.427.719-.734h.681a2.1 2.1 0 0 0 .719.734c.289.175.612.266.94.266.329 0 .652-.091.942-.266.29-.174.536-.427.718-.734h.681c.183.307.43.56.719.734.29.174.613.266.941.266a1.819 1.819 0 0 0 1.06-.351M6 12a1.766 1.766 0 0 1-1.163-.476M5 12v7a1 1 0 0 0 1 1h2v-5h3v5h7a1 1 0 0 0 1-1v-7m-5 3v2h2v-2h-2Z"/>
                            </svg>
                        </button>
                    <p class="text-xs mt-1.5 font-medium">Wirausaha</p>
                    </a>
                </div>
            </div>
            <div class="konten1 max-w-md mx-auto">
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-semua" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-kesehatan" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-infrastruktur" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-infrastruktur" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-pendidikan" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-pendidikan" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-pendidikan" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Renovasi Polindra</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-kemanusiaan" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-wirausaha" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-wirausaha" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
                <a href="/artikel" class="kotak flex my-5 p-2 rounded-md kategori-wirausaha" style="box-shadow: 0 1px 3px 0 gray;">
                    <div class="kiri w-32 me-3">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-24 bg-black rounded w-full">
                    </div>
                    <div class="kanan w-full">
                        <p class="font-semibold text-xs">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                            <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
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
    //             <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
    //                 <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18 17.94 6M18 18 6.06 6"/>
    //             </svg>
    //         `;
    //     } else {
    //         searchIcon.innerHTML = `
    //             <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
    //                 <path id="search-icon-path" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
    //             </svg>
    //         `;
    //     }
    // });

    // searchIcon.addEventListener('click', function() {
    //     searchInput.value = '';
    //     searchIcon.innerHTML = `
    //         <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
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