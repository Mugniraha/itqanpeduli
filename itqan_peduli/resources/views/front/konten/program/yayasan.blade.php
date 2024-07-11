@extends('user.home.index')

@section('content')
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header flex shadow-md fixed top-0 w-[512px] bg-white z-10">
            <a href="/artikel" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Penggalang Dana</p>
        </div>
        <div class="konten mt-24 mx-5 mb-24">
            <div href="/yayasan" class="my-3 border border-green-600 rounded-2xl p-4">
                <div class="atas flex ">
                    <div class="kiri">
                        <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-12 w-12 bg-black object-cover rounded-full w-full">
                    </div>
                    <div class="tengah mx-3 my-auto">
                        <div class="atas my-auto flex">
                            <p class="font-bold">Yayasan Mandiri</p>
                            <svg class="w-4 h-4 my-auto text-blue-800 ms-1 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm13.707-1.293a1 1 0 0 0-1.414-1.414L11 12.586l-1.793-1.793a1 1 0 0 0-1.414 1.414l2.5 2.5a1 1 0 0 0 1.414 0l4-4Z" clip-rule="evenodd"/>
                            </svg>
                        </div>
                        <p class="text-gray-600">Terdaftar sejak 29 mei 2022</p>
                    </div>
                </div>
                <p class="my-4 font-bold">Tentang Penggalang</p>
                <p class="my-4 text-sm">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis fugit culpa maiores harum consectetur expedita error! Itaque sapiente sunt eos minus, nostrum maxime amet error reprehenderit reiciendis vero sequi possimus!</p>
            </div>
            <p class="font-semibold mt-5">Donasi</p>
            <div class="card shadow-lg rounded-lg my-4 flex">
                <div class="kiri w-[60%] bg-black rounded-l-lg flex items-center justify-center">
                    <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-20 object-cover">
                </div>
                <div class="kanan m-2">
                    <p class="font-semibold text-sm">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                        <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                    </div>
                    <div class="bawah flex justify-between">
                        <div class="kiri">
                            <p class="text-xs text-gray-700">22 Agustus 2022</p>
                            <p class="text-xs font-semibold">22 Agustus 2022</p>
                        </div>
                        <div class="kanan justify-between">
                            <p class="text-sm text-gray-700">Hari Tersisa</p>
                            <p class="font-semibold text-sm">516 Hari</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-lg rounded-lg my-4 flex">
                <div class="kiri w-[60%] bg-black rounded-l-lg flex items-center justify-center">
                    <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-20 object-cover">
                </div>
                <div class="kanan m-2">
                    <p class="font-semibold text-sm">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                        <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                    </div>
                    <div class="bawah flex justify-between">
                        <div class="kiri">
                            <p class="text-xs text-gray-700">22 Agustus 2022</p>
                            <p class="text-xs font-semibold">22 Agustus 2022</p>
                        </div>
                        <div class="kanan justify-between">
                            <p class="text-sm text-gray-700">Hari Tersisa</p>
                            <p class="font-semibold text-sm">516 Hari</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-lg rounded-lg my-4 flex">
                <div class="kiri w-[60%] bg-black rounded-l-lg flex items-center justify-center">
                    <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-20 object-cover">
                </div>
                <div class="kanan m-2">
                    <p class="font-semibold text-sm">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                        <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                    </div>
                    <div class="bawah flex justify-between">
                        <div class="kiri">
                            <p class="text-xs text-gray-700">22 Agustus 2022</p>
                            <p class="text-xs font-semibold">22 Agustus 2022</p>
                        </div>
                        <div class="kanan justify-between">
                            <p class="text-sm text-gray-700">Hari Tersisa</p>
                            <p class="font-semibold text-sm">516 Hari</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow-lg rounded-lg my-4 flex">
                <div class="kiri w-[60%] bg-black rounded-l-lg flex items-center justify-center">
                    <img src="/images/Politeknik-Negeri-Indramayu.png" alt="" class="h-20 object-cover">
                </div>
                <div class="kanan m-2">
                    <p class="font-semibold text-sm">Cianjur berduka:200 orang lebih meninggal dunia karna gempa bumi dahsyat</p>
                    <div class="w-full bg-gray-200 rounded-full h-2.5 my-2.5 dark:bg-gray-700">
                        <div class="bg-green-600 h-2.5 rounded-full dark:bg-green-500" style="width: 45%"></div>
                    </div>
                    <div class="bawah flex justify-between">
                        <div class="kiri">
                            <p class="text-xs text-gray-700">22 Agustus 2022</p>
                            <p class="text-xs font-semibold">22 Agustus 2022</p>
                        </div>
                        <div class="kanan justify-between">
                            <p class="text-sm text-gray-700">Hari Tersisa</p>
                            <p class="font-semibold text-sm">516 Hari</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
