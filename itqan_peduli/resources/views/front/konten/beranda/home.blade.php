@extends('front.layout.mainHome')

@section('konten')

<style>
.no-scrollbar::-webkit-scrollbar {
    display: none;
}

    /* Untuk Firefox */
.no-scrollbar {
    -ms-overflow-style: none;  /* IE 10+ */
    scrollbar-width: none;  /* Firefox */
}
</style>

<form class="max-w-md mx-auto pt-24">
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
    <div class="relative">
        <input type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required />
        <button type="submit" class="absolute end-2.5 bottom-2.5 font-medium rounded-lg text-sm px-2 py-2">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg>
        </button>
    </div>
</form>
<div id="default-carousel" class="relative w-full p-4 px-8 z-0" data-carousel="slide">
    <div class="relative h-56 overflow-hidden rounded-xl pb-10">
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.com/docs/images/blog/image-1.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.com/docs/images/blog/image-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.com/docs/images/blog/image-3.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.com/docs/images/blog/image-4.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://flowbite.com/docs/images/blog/image-2.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
</div>
<div class="w-[-512px] mx-8 bg-white border border-gray-200 rounded-xl shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex flex-col p-5">
        <div class="flex justify-between">
            <diV class="flex gap-3 items-center">
                <img class="w-24 h-24 mb-3 rounded-full shadow-lg " src="https://flowbite.com/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
                <div class="">
                    <h5 class="text-md font-medium text-gray-900 dark:text-white">Donasi Instan</h5>
                    <p class="text-sm text-gray-500 dark:text-gray-400">Buat kegiatan donasi kamu lebih mudah disini</p>
                    <div class="flex items-center mt-2">
                        <a href="#" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Donasi Sekarang</a>
                    </div>
                </div>
            </diV>
        </div>
    </div>
</div>
<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Campaign Mendesak</p>
    <a href="#" class="font-semibold text-green-600 hover:text-green-700">Lihat Semua</a>
</div>
<div class="w-full max-w-4xl overflow-x-auto no-scrollbar snap-x pb-2">
    <div class="flex space-x-4">
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Campaign Terpopuler</p>
</div>
<div class="mx-8">
    <div class="">
        <div class="flex w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-s-lg w-1/3 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <div class="p-5 w-2/3">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex my-3 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-s-lg w-1/3 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <div class="p-5 w-2/3">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-s-lg w-1/3 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <div class="p-5 w-2/3">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex mx-8 mt-3">
    <a class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Muat Lebih Banyak</a>
</div>

<div class="grid gap-2 mx-8">
    <div class="flex gap-2">
        <div class="flex items-center justify-center w-full p-5 gap-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-12 h-12 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M15.03 9.684h3.965c.322 0 .64.08.925.232.286.153.532.374.717.645a2.109 2.109 0 0 1 .242 1.883l-2.36 7.201c-.288.814-.48 1.355-1.884 1.355-2.072 0-4.276-.677-6.157-1.256-.472-.145-.924-.284-1.348-.404h-.115V9.478a25.485 25.485 0 0 0 4.238-5.514 1.8 1.8 0 0 1 .901-.83 1.74 1.74 0 0 1 1.21-.048c.396.13.736.397.96.757.225.36.32.788.269 1.211l-1.562 4.63ZM4.177 10H7v8a2 2 0 1 1-4 0v-6.823C3 10.527 3.527 10 4.176 10Z" clip-rule="evenodd"/>
            </svg>
            <div class="w-2/3">
                <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Donatur</p>
                <span class="text-sm mb-3 font-bold text-gray-700 dark:text-gray-400">456.789++</span>
            </div>
        </div>
        <div class="flex items-center justify-center w-full p-5 gap-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <svg class="w-12 h-12 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M9 2.221V7H4.221a2 2 0 0 1 .365-.5L8.5 2.586A2 2 0 0 1 9 2.22ZM11 2v5a2 2 0 0 1-2 2H4v11a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-7ZM8 16a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H9a1 1 0 0 1-1-1Zm1-5a1 1 0 1 0 0 2h6a1 1 0 1 0 0-2H9Z" clip-rule="evenodd"/>
            </svg>
            <div class="w-2/3">
                <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Program</p>
                <span class="text-sm mb-3 font-bold text-gray-700 dark:text-gray-400">131.456++</span>
            </div>
        </div>
    </div>
    <div class="grid items-center justify-center w-full p-5 gap-1 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
        <svg class="w-12 h-12 mx-auto text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M12 14a3 3 0 0 1 3-3h4a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-4a3 3 0 0 1-3-3Zm3-1a1 1 0 1 0 0 2h4v-2h-4Z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M12.293 3.293a1 1 0 0 1 1.414 0L16.414 6h-2.828l-1.293-1.293a1 1 0 0 1 0-1.414ZM12.414 6 9.707 3.293a1 1 0 0 0-1.414 0L5.586 6h6.828ZM4.586 7l-.056.055A2 2 0 0 0 3 9v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2h-4a5 5 0 0 1 0-10h4a2 2 0 0 0-1.53-1.945L17.414 7H4.586Z" clip-rule="evenodd"/>
        </svg>
        <div class="w-2/3 grid items-center justify-center mx-auto">
            <p class="mx-auto whitespace-nowrap text-xs font-normal text-gray-700 dark:text-gray-400">Total donasi yang disalurkan</p>
            <span class="mx-auto text-sm font-bold text-gray-700 dark:text-gray-400">Rp1.131.456.789++</span>
        </div>
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Laporan Terkini</p>
    <a href="#" class="font-semibold text-green-600 hover:text-green-700">Lihat Semua</a>
</div>
<div class="w-full max-w-4xl overflow-x-auto no-scrollbar snap-x pb-2">
    <div class="flex space-x-4">
        <div class="ml-8 snap-center w-1/2 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5 w-full">
                <p class="text-xs whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
            </div>
        </div>
        <div class="ml-8 snap-center w-5/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5 w-full">
                <p class="text-xs whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
            </div>
        </div>
        <div class="ml-8 snap-center w-5/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5 w-full">
                <p class="text-xs whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Campaign Rekomendasi</p>
    <a href="#" class="font-semibold text-green-600 hover:text-green-700">Lihat Semua</a>
</div>
<div class="w-full max-w-4xl overflow-x-auto no-scrollbar snap-x pb-2">
    <div class="flex space-x-4">
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Berdasarkan Kategori</p>
</div>
<div class="flex overflow-x-scroll gap-4 no-scrollbar whitespace-nowrap pl-8 mb-4">
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
    <div class="">
        <div class="p-4 rounded-full bg-white shadow-xl flex items-center justify-center">
            <svg class="w-[25px] h-[25px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.143 4H4.857A.857.857 0 0 0 4 4.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 10 9.143V4.857A.857.857 0 0 0 9.143 4Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286A.857.857 0 0 0 20 9.143V4.857A.857.857 0 0 0 19.143 4Zm-10 10H4.857a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286A.857.857 0 0 0 9.143 14Zm10 0h-4.286a.857.857 0 0 0-.857.857v4.286c0 .473.384.857.857.857h4.286a.857.857 0 0 0 .857-.857v-4.286a.857.857 0 0 0-.857-.857Z"/>
            </svg>
        </div>
        <p class="font-semibold pt-1">Kategori</p>
    </div>
</div>
<div class="mx-8">
    <div class="">
        <div class="flex w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-s-lg w-1/3 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <div class="p-5 w-2/3">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex my-3 w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-s-lg w-1/3 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <div class="p-5 w-2/3">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex w-full bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <img class="rounded-s-lg w-1/3 object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <div class="p-5 w-2/3">
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4 dark:bg-gray-700">
                    <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4">
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400">Terkumpul</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">Rp131.456.789</span>
                    </div>
                    <div>
                        <p class="text-xs font-normal text-gray-700 dark:text-gray-400 whitespace-nowrap">Hari Tersisa</p>
                        <span class="text-sm mb-3 font-semibold text-gray-700 dark:text-gray-400">656 Hari</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex mx-8 mt-3 mb-3">
    <a class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Muat Lebih Banyak</a>
</div>

<div class="mt-10 mb-36 grid gap-4">
    <div class="flex justify-between mx-20">
        <div class="p-3 rounded-full bg-white shadow-xl">
            <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="p-3 rounded-full bg-white shadow-xl">
            <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="p-3 rounded-full bg-white shadow-xl">
            <svg class="w-[30px] h-[30px] text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z" clip-rule="evenodd"/>
            </svg>
        </div>
    </div>

    <div class="flex justify-between mx-8">
        <div class="">
            <p class="text-gray-400">Tetang Kami</p>
        </div>
        <div class="">
            <p class="text-gray-400">|</p>
        </div>
        <div class="">
            <p class="text-gray-400">Syarat & Ketentuan</p>
        </div>
        <div class="">
            <p class="text-gray-400">|</p>
        </div>
        <div class="">
            <p class="text-gray-400">Pusat Bantuan</p>
        </div>
    </div>

    <div class="flex justify-center">
        <p class="text-gray-400">Copyright &copy 2023 Media Berbagi</p>
    </div>
</div>



@endsection
