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
    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only">Search</label>
    <div class="relative">
        <input type="search" id="default-search" class="block w-full p-4 text-sm text-gray-900 border border-gray-300 rounded-xl bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Search Mockups, Logos..." required />
        <button type="submit" class="absolute end-2.5 bottom-2.5 font-medium rounded-lg text-sm px-2 py-2">
            {{-- <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
            </svg> --}}
            <svg class="w-4 h-4" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.75 23.75C19.2728 23.75 23.75 19.2728 23.75 13.75C23.75 8.22715 19.2728 3.75 13.75 3.75C8.22715 3.75 3.75 8.22715 3.75 13.75C3.75 19.2728 8.22715 23.75 13.75 23.75Z" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M26.25 26.25L20.8125 20.8125" stroke="#515151" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        </button>
    </div>
</form>
<div id="default-carousel" class="relative w-full p-4 px-8 z-0" data-carousel="slide">
    <div class="relative h-56 overflow-hidden rounded-xl pb-10">
        @foreach ($banners as $banner)
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="{{ asset('storage/' . $banner->image)}}" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="{{ $banner->link }}">
        </div>
        @endforeach

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
<div class="w-[-512px] mx-8 bg-white border border-gray-200 rounded-xl shadow">
    <div class="flex flex-col p-5">
        <div class="flex justify-between">
            <diV class="flex gap-3 items-center">
                <img class="h-24 mb-3" src="/image.png" alt="Bonnie image"/>
                <div class="">
                    <h5 class="text-md font-medium text-gray-900">Donasi Instan</h5>
                    <p class="text-sm text-gray-500">Buat kegiatan donasi kamu lebih mudah disini</p>
                    <div class="flex items-center mt-2">
                        <a href="/donasi-instan" class="inline-flex items-center px-4 py-2 text-sm font-medium text-center text-white bg-green-700 rounded-lg hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300">Donasi Sekarang</a>
                    </div>
                </div>
            </diV>
        </div>
    </div>
</div>
<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Campaign Mendesak</p>
    <a href="/campaign-mendesak" class="font-semibold text-green-600 hover:text-green-700">Lihat Semua</a>
</div>
<div class="w-full max-w-4xl overflow-x-auto no-scrollbar snap-x pb-2">
    <div class="flex space-x-4">
        @foreach ($campaigns_mendesak as $campaign_mendesak)
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg h-2/4 object-cover" src="{{ asset('storage/' . $campaign_mendesak->photo) }}" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 line-clamp-2">{{ $campaign_mendesak->title }}</p>
                <div class="w-full bg-gray-200 rounded-full h-2.5 mb-4">
                    <div class="bg-green-600 h-2.5 rounded-full" style="width: 45%"></div>
                </div>
                <div class="flex justify-between gap-4 mb-2">
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
        @endforeach
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Campaign Terpopuler</p>
</div>
<div class="mx-8">
    <div class="">
        @foreach ($campaigns_terpopuler as $campaign_terpopuler)
        <div class="flex w-full bg-white border border-gray-200 rounded-lg shadow">
            <img class="rounded-s-lg w-1/3 object-cover" src="{{ asset('storage/' . $campaign_terpopuler->photo) }}" alt="Card Image 1" />
            <div class="p-5 w-2/3">
                <p class="mb-3 font-normal text-gray-700 line-clamp-2">{{ $campaign_terpopuler->title }}</p>
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
        @endforeach
    </div>
</div>
<div class="flex mx-8 mt-3">
    <a href="/campaign-populer" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Muat Lebih Banyak</a>
</div>

<div class="grid gap-2 mx-8">
    <div class="flex gap-2">
        <div class="flex items-center justify-center w-full p-5 gap-1 bg-white border border-gray-200 rounded-lg shadow">
            <svg class="w-12 h-12" width="104" height="102" viewBox="0 0 104 102" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g filter="url(#filter0_dd_781_1053)">
                <path d="M58.7632 73.9697C66.7819 62.3996 77.8121 65.824 83.011 69.4228C83.4315 69.7139 83.6974 70.1712 83.7782 70.6763L87.2873 92.6104C87.4798 93.8133 86.5644 94.9074 85.3463 94.9243C73.723 95.0853 52.2456 95.2643 43.6521 94.8906C33.5761 93.5104 21.1729 83.3774 15.7733 76.5448C15.6909 76.4406 15.6216 76.3321 15.5669 76.2111C14.9288 74.7987 14.3544 71.9225 16.6522 70.3906C18.9114 68.8845 21.0524 69.3278 21.991 69.8021C22.1005 69.8574 22.1945 69.9277 22.2858 70.0096C26.6782 73.9496 36.0472 84.8906 40.6523 84.8906H45.6523C40.1523 84.8906 40.2644 80.5 40.6523 78.3906C41 76.5 43 74.8897 45.6523 74.8897H57.0544C57.7382 74.8897 58.3737 74.5317 58.7632 73.9697Z" fill="#F3F8F5"/>
                <path d="M67.1522 84.8906H40.6523M40.6523 84.8906C36.0472 84.8906 26.6782 73.9496 22.2858 70.0096C22.1945 69.9277 22.1005 69.8574 21.991 69.8021C21.0524 69.3278 18.9114 68.8845 16.6522 70.3906C14.3544 71.9225 14.9288 74.7987 15.5669 76.2111C15.6216 76.3321 15.6909 76.4406 15.7733 76.5448C21.1729 83.3774 33.5761 93.5104 43.6521 94.8906C52.2456 95.2643 73.723 95.0853 85.3463 94.9243C86.5644 94.9074 87.4797 93.8133 87.2873 92.6104L83.7782 70.6763C83.6974 70.1712 83.4315 69.7139 83.011 69.4228C77.8121 65.824 66.7819 62.3996 58.7632 73.9697C58.3737 74.5317 57.7382 74.8897 57.0544 74.8897H45.6523C43 74.8897 41 76.5 40.6523 78.3906C40.2644 80.5 40.1523 84.8906 45.6523 84.8906H40.6523Z" stroke="black" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                <rect x="83.25" y="67.25" width="14.5" height="28.5" rx="2.75" fill="#FBC71E" stroke="black" stroke-width="2.5"/>
                <rect x="27.25" y="19.25" width="64.5" height="33.5" rx="1.75" fill="#FBC71E" stroke="black" stroke-width="2.5"/>
                <mask id="mask0_781_1053" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="26" y="18" width="67" height="36">
                <rect x="26" y="18" width="67" height="36" rx="3" fill="#D9D9D9"/>
                </mask>
                <g mask="url(#mask0_781_1053)">
                <circle cx="60.5" cy="36.5" r="9.25" fill="#077734" stroke="black" stroke-width="2.5"/>
                <mask id="path-7-inside-1_781_1053" fill="white">
                <path d="M93.8494 25.211C93.8798 26.8676 92.5357 28.2769 90.9377 27.8392C90.5772 27.7404 90.2215 27.6223 89.8722 27.485C88.5889 26.9808 87.4174 26.2287 86.4246 25.2718C85.4319 24.3148 84.6374 23.1717 84.0864 21.9076C83.9365 21.5636 83.8054 21.2125 83.6935 20.8558C83.1975 19.275 84.5566 17.8802 86.2131 17.8498L90.7124 17.7673C92.369 17.7369 93.7365 19.0552 93.7669 20.7117L93.8494 25.211Z"/>
                </mask>
                <path d="M93.8494 25.211C93.8798 26.8676 92.5357 28.2769 90.9377 27.8392C90.5772 27.7404 90.2215 27.6223 89.8722 27.485C88.5889 26.9808 87.4174 26.2287 86.4246 25.2718C85.4319 24.3148 84.6374 23.1717 84.0864 21.9076C83.9365 21.5636 83.8054 21.2125 83.6935 20.8558C83.1975 19.275 84.5566 17.8802 86.2131 17.8498L90.7124 17.7673C92.369 17.7369 93.7365 19.0552 93.7669 20.7117L93.8494 25.211Z" fill="#077734" stroke="black" stroke-width="5" mask="url(#path-7-inside-1_781_1053)"/>
                <mask id="path-8-inside-2_781_1053" fill="white">
                <path d="M92.8122 46.31C92.8129 44.6532 91.4438 43.2682 89.854 43.7345C89.4953 43.8397 89.1417 43.9642 88.795 44.1076C87.5209 44.6348 86.363 45.4077 85.3876 46.3823C84.4122 47.3569 83.6383 48.5141 83.1101 49.7878C82.9663 50.1344 82.8415 50.4878 82.736 50.8465C82.2684 52.4359 83.6522 53.8062 85.3091 53.8069L89.8091 53.8088C91.466 53.8095 92.8097 52.4669 92.8104 50.81L92.8122 46.31Z"/>
                </mask>
                <path d="M92.8122 46.31C92.8129 44.6532 91.4438 43.2682 89.854 43.7345C89.4953 43.8397 89.1417 43.9642 88.795 44.1076C87.5209 44.6348 86.363 45.4077 85.3876 46.3823C84.4122 47.3569 83.6383 48.5141 83.1101 49.7878C82.9663 50.1344 82.8415 50.4878 82.736 50.8465C82.2684 52.4359 83.6522 53.8062 85.3091 53.8069L89.8091 53.8088C91.466 53.8095 92.8097 52.4669 92.8104 50.81L92.8122 46.31Z" fill="#077734" stroke="black" stroke-width="5" mask="url(#path-8-inside-2_781_1053)"/>
                <mask id="path-9-inside-3_781_1053" fill="white">
                <path d="M33 53.5C34.6569 53.5 36.0413 52.1303 35.5743 50.5406C35.469 50.182 35.3443 49.8285 35.2007 49.4818C34.6731 48.2079 33.8996 47.0504 32.9246 46.0754C31.9496 45.1004 30.7921 44.3269 29.5182 43.7993C29.1715 43.6557 28.818 43.531 28.4594 43.4257C26.8697 42.9587 25.5 44.3431 25.5 46V50.5C25.5 52.1569 26.8431 53.5 28.5 53.5H33Z"/>
                </mask>
                <path d="M33 53.5C34.6569 53.5 36.0413 52.1303 35.5743 50.5406C35.469 50.182 35.3443 49.8285 35.2007 49.4818C34.6731 48.2079 33.8996 47.0504 32.9246 46.0754C31.9496 45.1004 30.7921 44.3269 29.5182 43.7993C29.1715 43.6557 28.818 43.531 28.4594 43.4257C26.8697 42.9587 25.5 44.3431 25.5 46V50.5C25.5 52.1569 26.8431 53.5 28.5 53.5H33Z" fill="#077734" stroke="black" stroke-width="5" mask="url(#path-9-inside-3_781_1053)"/>
                <mask id="path-10-inside-4_781_1053" fill="white">
                <path d="M27.5 26C27.5 27.6569 28.8697 29.0413 30.4594 28.5743C30.818 28.469 31.1715 28.3443 31.5182 28.2007C32.7921 27.6731 33.9496 26.8996 34.9246 25.9246C35.8996 24.9496 36.6731 23.7921 37.2007 22.5182C37.3443 22.1715 37.469 21.818 37.5743 21.4594C38.0413 19.8697 36.6569 18.5 35 18.5L30.5 18.5C28.8431 18.5 27.5 19.8431 27.5 21.5L27.5 26Z"/>
                </mask>
                <path d="M27.5 26C27.5 27.6569 28.8697 29.0413 30.4594 28.5743C30.818 28.469 31.1715 28.3443 31.5182 28.2007C32.7921 27.6731 33.9496 26.8996 34.9246 25.9246C35.8996 24.9496 36.6731 23.7921 37.2007 22.5182C37.3443 22.1715 37.469 21.818 37.5743 21.4594C38.0413 19.8697 36.6569 18.5 35 18.5L30.5 18.5C28.8431 18.5 27.5 19.8431 27.5 21.5L27.5 26Z" fill="#077734" stroke="black" stroke-width="5" mask="url(#path-10-inside-4_781_1053)"/>
                </g>
                <path d="M13 8H48.5C51.3 8 60 15 64 18.5H44C41.5 18.5 37.5 22 44 26.5C48.9573 29.932 51.8849 31.819 52.8694 32.4208C52.9572 32.4745 53.0398 32.532 53.1164 32.6008C54.1246 33.5052 55.6546 35.6909 54.5 38C53.0099 40.9802 48.5593 45.4407 25.4628 32.7551C25.1659 32.5921 24.8244 32.5043 24.4861 32.5208C23.2835 32.5793 20.2863 32.7503 17.8787 32.8902C16.823 32.9515 15.9017 32.1812 15.7757 31.1312L13 8Z" fill="#F3F8F5"/>
                <path d="M13 8C23.6667 8 45.7 8 48.5 8M13 8L15.7757 31.1312C15.9017 32.1812 16.823 32.9515 17.8787 32.8902C20.2863 32.7503 23.2835 32.5793 24.4861 32.5208C24.8244 32.5043 25.1659 32.5921 25.4628 32.7551C48.5593 45.4407 53.0099 40.9802 54.5 38C55.6546 35.6909 54.1246 33.5052 53.1164 32.6008C53.0398 32.532 52.9572 32.4745 52.8694 32.4208C51.8849 31.819 48.9573 29.932 44 26.5C37.5 22 41.5 18.5 44 18.5H64C60 15 51.3 8 48.5 8M13 8H48.5" stroke="black" stroke-width="2.5" stroke-linejoin="round"/>
                <rect x="6.25" y="6.25" width="14.5" height="28.5" rx="2.75" fill="#077734" stroke="black" stroke-width="2.5"/>
                </g>
                <defs>
                <filter id="filter0_dd_781_1053" x="0" y="0" width="104" height="102" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset dy="2"/>
                <feGaussianBlur stdDeviation="1.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.1 0"/>
                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_781_1053"/>
                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                <feOffset/>
                <feGaussianBlur stdDeviation="2.5"/>
                <feComposite in2="hardAlpha" operator="out"/>
                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.08 0"/>
                <feBlend mode="normal" in2="effect1_dropShadow_781_1053" result="effect2_dropShadow_781_1053"/>
                <feBlend mode="normal" in="SourceGraphic" in2="effect2_dropShadow_781_1053" result="shape"/>
                </filter>
                </defs>
            </svg>
            <div class="w-2/3">
                <p class="text-xs font-normal text-gray-700">Donatur</p>
                <span class="text-sm mb-3 font-bold text-gray-700">456.789++</span>
            </div>
        </div>
        <div class="flex items-center justify-center w-full p-5 gap-1 bg-white border border-gray-200 rounded-lg shadow">
            <svg class="w-12 h-12" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M29.1663 4.1665H12.4997C11.3946 4.1665 10.3348 4.60549 9.5534 5.38689C8.77199 6.16829 8.33301 7.2281 8.33301 8.33317V41.6665C8.33301 42.7716 8.77199 43.8314 9.5534 44.6128C10.3348 45.3942 11.3946 45.8332 12.4997 45.8332H37.4997C38.6047 45.8332 39.6645 45.3942 40.4459 44.6128C41.2274 43.8314 41.6663 42.7716 41.6663 41.6665V16.6665L29.1663 4.1665Z" fill="#077734" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M29.167 4.1665V16.6665H41.667" fill="#FBC71E"/>
                <path d="M29.167 4.1665V16.6665H41.667L29.167 4.1665Z" stroke="#070707" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33.3337 27.0835H16.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M33.3337 35.4165H16.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M20.8337 18.75H18.7503H16.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div class="w-2/3">
                <p class="text-xs font-normal text-gray-700">Program</p>
                <span class="text-sm mb-3 font-bold text-gray-700">131.456++</span>
            </div>
        </div>
    </div>
    <div class="grid items-center justify-center w-full p-5 gap-1 bg-white border border-gray-200 rounded-lg shadow">
        <svg class="w-12 h-12 mx-auto" width="96" height="100" viewBox="0 0 96 100" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="3.75" y="38.25" width="81.5" height="52.5" rx="3.75" fill="#FBC71E" stroke="black" stroke-width="2.5"/>
            <rect x="10.5872" y="60.3555" width="51.3186" height="40.0389" rx="3.75" transform="rotate(-83.0591 10.5872 60.3555)" fill="#077734" stroke="black" stroke-width="2.5"/>
            <rect x="13.8919" y="66.334" width="51.3186" height="40.0389" rx="3.75" transform="rotate(-83.0591 13.8919 66.334)" fill="#FBC71E" stroke="black" stroke-width="2.5"/>
            <rect x="4.23805" y="73.0425" width="86.5" height="40.0389" rx="3.75" transform="rotate(-55.5205 4.23805 73.0425)" fill="#077734" stroke="black" stroke-width="2.5"/>
            <rect x="14.2381" y="66.0991" width="68.3721" height="31.3744" rx="3.75" transform="rotate(-55.5205 14.2381 66.0991)" fill="#FBC71E" stroke="black" stroke-width="2.5"/>
            <circle cx="50" cy="41.5" r="9.25" fill="#F3F8F5" stroke="black" stroke-width="2.5"/>
            <rect x="1.75" y="42.25" width="86.5" height="56.5" rx="3.75" fill="#077734" stroke="black" stroke-width="2.5"/>
            <rect x="1.75" y="52.25" width="86.5" height="35.5" fill="#FBC71E" stroke="black" stroke-width="2.5"/>
            <path d="M64.75 70C64.75 65.1675 68.6675 61.25 73.5 61.25H92.5C93.4665 61.25 94.25 62.0335 94.25 63V78C94.25 78.9665 93.4665 79.75 92.5 79.75H73.5C68.6675 79.75 64.75 75.8325 64.75 71V70Z" fill="#F3F8F5" stroke="black" stroke-width="2.5"/>
            <rect x="68.2381" y="71.5698" width="9.5" height="9.5" rx="4.75" transform="rotate(-55.5205 68.2381 71.5698)" fill="#FBC71E" stroke="black" stroke-width="2.5"/>
        </svg>
        <div class="w-2/3 grid items-center justify-center mx-auto">
            <p class="mx-auto whitespace-nowrap text-xs font-normal text-gray-700">Total donasi yang disalurkan</p>
            <span class="mx-auto text-sm font-bold text-gray-700">Rp1.131.456.789++</span>
        </div>
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Laporan Terkini</p>
    <a href="/laporan-terkini" class="font-semibold text-green-600 hover:text-green-700">Lihat Semua</a>
</div>
<div class="w-full max-w-4xl overflow-x-auto no-scrollbar snap-x pb-2">
    <div class="flex space-x-4">
        <div class="ml-8 snap-center w-1/2 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5 w-full">
                <p class="text-xs whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
                <p class="mb-3 font-normal text-gray-700 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
            </div>
        </div>
        <div class="ml-8 snap-center w-5/6 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5 w-full">
                <p class="text-xs whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
                <p class="mb-3 font-normal text-gray-700 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
            </div>
        </div>
        <div class="ml-8 snap-center w-5/6 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            </a>
            <div class="p-5 w-full">
                <p class="text-xs whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
                <p class="mb-3 font-normal text-gray-700 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
            </div>
        </div>
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Campaign Rekomendasi</p>
    <a href="/campaign-rekomendasi" class="font-semibold text-green-600 hover:text-green-700">Lihat Semua</a>
</div>
<div class="w-full max-w-4xl overflow-x-auto no-scrollbar snap-x pb-2">
    <div class="flex space-x-4">
        @foreach ($campaigns_rekomendasi as $campaign_rekomendasi)
        <div class="ml-8 snap-center w-2/3 bg-white border border-gray-200 rounded-lg shadow">
            <a href="#">
                <img class="rounded-t-lg" src="{{ asset('storage/' . $campaign_rekomendasi)}}" alt="Card Image 1" />
            </a>
            <div class="p-5">
                <p class="mb-3 font-normal text-gray-700 line-clamp-2">{{ $campaign_rekomendasi->title }}</p>
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
        @endforeach
    </div>
</div>

<div class="flex justify-between mx-8 my-3">
    <p class="font-bold">Berdasarkan Kategori</p>
</div>
<div class="flex overflow-x-scroll gap-4 no-scrollbar whitespace-nowrap pl-8 mb-4">
    <a href="#semua" class="" data-kategori="semua">
        <div class="flex items-center justify-center">
            <div class="w-14 h-14 rounded-full bg-white shadow-xl flex items-center justify-center">
                {{-- <img class="w-[25px] h-[25px]" src="{{ asset('storage/' . $kategori->icon )}}" alt="{{ $kategori->name }}"> --}}
                <svg class="w-[25px] h-[25px]" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M2.66667 13.75C1.19391 13.75 0 12.5561 0 11.0833V2.66667C0 1.19391 1.19391 0 2.66667 0H11.0833C12.5561 0 13.75 1.19391 13.75 2.66667V11.0833C13.75 12.5561 12.5561 13.75 11.0833 13.75H2.66667ZM2.66667 30C1.19391 30 0 28.8061 0 27.3333V18.9167C0 17.4439 1.19391 16.25 2.66667 16.25H11.0833C12.5561 16.25 13.75 17.4439 13.75 18.9167V27.3333C13.75 28.8061 12.5561 30 11.0833 30H2.66667ZM18.9167 13.75C17.4439 13.75 16.25 12.5561 16.25 11.0833V2.66667C16.25 1.19391 17.4439 0 18.9167 0H27.3333C28.8061 0 30 1.19391 30 2.66667V11.0833C30 12.5561 28.8061 13.75 27.3333 13.75H18.9167ZM18.9167 30C17.4439 30 16.25 28.8061 16.25 27.3333V18.9167C16.25 17.4439 17.4439 16.25 18.9167 16.25H27.3333C28.8061 16.25 30 17.4439 30 18.9167V27.3333C30 28.8061 28.8061 30 27.3333 30H18.9167ZM2.5 8.58333C2.5 10.0561 3.69391 11.25 5.16667 11.25H8.58333C10.0561 11.25 11.25 10.0561 11.25 8.58333V5.16667C11.25 3.69391 10.0561 2.5 8.58333 2.5H5.16667C3.69391 2.5 2.5 3.69391 2.5 5.16667V8.58333ZM18.75 8.58333C18.75 10.0561 19.9439 11.25 21.4167 11.25H24.8333C26.3061 11.25 27.5 10.0561 27.5 8.58333V5.16667C27.5 3.69391 26.3061 2.5 24.8333 2.5H21.4167C19.9439 2.5 18.75 3.69391 18.75 5.16667V8.58333ZM18.75 24.8333C18.75 26.3061 19.9439 27.5 21.4167 27.5H24.8333C26.3061 27.5 27.5 26.3061 27.5 24.8333V21.4167C27.5 19.9439 26.3061 18.75 24.8333 18.75H21.4167C19.9439 18.75 18.75 19.9439 18.75 21.4167V24.8333ZM2.5 24.8333C2.5 26.3061 3.69391 27.5 5.16667 27.5H8.58333C10.0561 27.5 11.25 26.3061 11.25 24.8333V21.4167C11.25 19.9439 10.0561 18.75 8.58333 18.75H5.16667C3.69391 18.75 2.5 19.9439 2.5 21.4167V24.8333Z" fill="white"/>
                    <path d="M2.5 8.58333C2.5 10.0561 3.69391 11.25 5.16667 11.25H8.58333C10.0561 11.25 11.25 10.0561 11.25 8.58333V5.16667C11.25 3.69391 10.0561 2.5 8.58333 2.5H5.16667C3.69391 2.5 2.5 3.69391 2.5 5.16667V8.58333Z" fill="#50A942"/>
                    <path d="M18.75 8.58333C18.75 10.0561 19.9439 11.25 21.4167 11.25H24.8333C26.3061 11.25 27.5 10.0561 27.5 8.58333V5.16667C27.5 3.69391 26.3061 2.5 24.8333 2.5H21.4167C19.9439 2.5 18.75 3.69391 18.75 5.16667V8.58333Z" fill="#FBC71E"/>
                    <path d="M2.5 24.8333C2.5 26.3061 3.69391 27.5 5.16667 27.5H8.58333C10.0561 27.5 11.25 26.3061 11.25 24.8333V21.4167C11.25 19.9439 10.0561 18.75 8.58333 18.75H5.16667C3.69391 18.75 2.5 19.9439 2.5 21.4167V24.8333Z" fill="#FBC71E"/>
                    <path d="M18.75 24.8333C18.75 26.3061 19.9439 27.5 21.4167 27.5H24.8333C26.3061 27.5 27.5 26.3061 27.5 24.8333V21.4167C27.5 19.9439 26.3061 18.75 24.8333 18.75H21.4167C19.9439 18.75 18.75 19.9439 18.75 21.4167V24.8333Z" fill="#50A942"/>
                </svg>
            </div>
            </div>
        <p class="font-semibold pt-1">Semua</p>
    </a>
    @foreach ($categories as $kategori)
    <a href="#{{ $kategori->name }}" class="" data-kategori="{{ $kategori->name }}">
        <div class="flex items-center justify-center">
            <div class="w-14 h-14 rounded-full bg-white shadow-xl flex items-center justify-center">
                <img class="w-[25px] h-[25px]" src="{{ asset('storage/' . $kategori->icon )}}" alt="{{ $kategori->name }}">
            </div>
        </div>
        <p class="font-semibold pt-1">{{ $kategori->name }}</p>
    </a>
    @endforeach
</div>
<div class="mx-8">
    <div class="grid gap-3">
    @foreach ($campaigns_kategori as $campaign_kategori)
    
    <a href="#" class="kotak kategori-semua kategori-{{ $campaign_kategori->category }} flex w-full bg-white border border-gray-200 rounded-lg shadow">
        <img class="rounded-s-lg h-2/4 object-cover " src="{{ asset('storage/' . $campaign_kategori->photo) }}" alt="Card Image 1" />
        <div class="p-5 w-2/3">
            <p class="mb-3 font-normal text-gray-700 line-clamp-2">{{ $campaign_kategori->title }}</p>
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
    </a>
    @endforeach
    </div>
</div>
<div class="flex mx-8 mt-3 mb-3">
    <a href="/program-user" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Muat Lebih Banyak</a>
</div>

<div class="mt-10 mb-36 grid gap-4">
    <div class="flex justify-between mx-20">
        <div class="p-3 rounded-full bg-white shadow-xl">
            <svg class="w-[30px] h-[30px] text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="p-3 rounded-full bg-white shadow-xl">
            <svg class="w-[30px] h-[30px] text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path fill="currentColor" fill-rule="evenodd" d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z" clip-rule="evenodd"/>
            </svg>
        </div>
        <div class="p-3 rounded-full bg-white shadow-xl">
            <svg class="w-[30px] h-[30px] text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
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

<script>
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

</script>

@endsection
