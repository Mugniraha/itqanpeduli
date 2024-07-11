@extends('front.layout.main3')

@section('konten')

<div class="relative z-20">
    <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6 shadow-lg">
        <a href="/artikel" class="flex items-center rounded-full bg-green-200 p-2">
            <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
        <div class="flex items-center ml-7">
            <p class="font-semibold">Deskripsi</p>
        </div>
    </div>
</div>

<div class="mt-24 mb-12 mx-8 grid gap-5">
    <div class="">
        <a href="#">
            <img class="rounded-lg" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
        </a>
        <div class="w-full">
            <p class="my-2 text-xs font-bold whitespace-nowrap">13.00 WIB, 22 Agustus 2022</p>
            <p class="text-md font-semibold text-gray-700 dark:text-gray-400 line-clamp-2">Cianjut erduka: 200 lebih meninggal dunia. cianjur berduka</p>
            <p class="my-2 text-sm text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus nostrum dolore perferendis quam voluptas. Illum blanditiis rerum quisquam explicabo mollitia magni quaerat atque soluta consequatur. Voluptatum nobis totam ipsum eius! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione aliquid aspernatur impedit pariatur! Quasi laudantium nam soluta? Cum minus, quod expedita distinctio sapiente quidem, nulla laudantium consequuntur quis at commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, at distinctio. Exercitationem velit assumenda maiores incidunt magni voluptate ipsam sunt, nam amet? Minus enim est autem non debitis. Aliquam, sapiente?</p>
            <img class="my-2" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <p class="my-2 text-sm text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus nostrum dolore perferendis quam voluptas. Illum blanditiis rerum quisquam explicabo mollitia magni quaerat atque soluta consequatur. Voluptatum nobis totam ipsum eius! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione aliquid aspernatur impedit pariatur! Quasi laudantium nam soluta? Cum minus, quod expedita distinctio sapiente quidem, nulla laudantium consequuntur quis at commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, at distinctio. Exercitationem velit assumenda maiores incidunt magni voluptate ipsam sunt, nam amet? Minus enim est autem non debitis. Aliquam, sapiente?</p>
            <img class="my-2" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
            <p class="my-2 text-sm text-gray-700 dark:text-gray-400">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus nostrum dolore perferendis quam voluptas. Illum blanditiis rerum quisquam explicabo mollitia magni quaerat atque soluta consequatur. Voluptatum nobis totam ipsum eius! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ratione aliquid aspernatur impedit pariatur! Quasi laudantium nam soluta? Cum minus, quod expedita distinctio sapiente quidem, nulla laudantium consequuntur quis at commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, at distinctio. Exercitationem velit assumenda maiores incidunt magni voluptate ipsam sunt, nam amet? Minus enim est autem non debitis. Aliquam, sapiente?</p>
        </div>
    </div>
</div>

@endsection
