@extends('front.layout.main3')

@section('konten')

<div class="relative z-20">
    <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6 shadow-lg">
        <a href="/" class="flex items-center rounded-full bg-green-200 p-2">
            <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
        <div class="flex items-center ml-7">
            <p class="font-semibold">Laporan Terkini</p>
        </div>
    </div>
</div>

<div class="mt-24 mb-12 mx-8 grid gap-5">
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

@endsection
