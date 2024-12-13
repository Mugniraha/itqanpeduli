<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
    <script src="{{asset('js/table.js')}}"></script>
    <script src="{{asset('js/table.js')}}"></script>
    <title>Document</title>
</head>
<body class="w-full m-0 p-0">
    <div class="bg-slate-50">
        <div class="relative bg-gray-50 w-full">
            <div id="sideBar" class="fixed bg-slate-200 w-72 h-screen overflow-hidden mx-4 mt-4 p-5 pb-72 rounded-2xl">
                <div class="flex justify-between">
                    <a href="#" class="flex items-center ps-2.5 mb-5">
                        <img src="{{url('/logo_itqan.png')}}" class="h-8 me-3 sm:h-10" alt="Itqan Pedulli" />
                    </a>
                    <button onclick="closeNav()" type="button" class="items-center p-2 my-2 ms-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <svg class="w-[24px] h-[24px] text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                        </svg>
                    </button>
                </div>
                <div class= "h-screen overflow-y-scroll">
                    <ul class="space-y-2 text-md font-medium">
                        <li>
                            <a href="{{url('/dashboard2')}}" class="flex items-center p-2 text-gray-500 hover:text-green-600 rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.5 2c-.178 0-.356.013-.492.022l-.074.005a1 1 0 0 0-.934.998V11a1 1 0 0 0 1 1h7.975a1 1 0 0 0 .998-.934l.005-.074A7.04 7.04 0 0 0 22 10.5 8.5 8.5 0 0 0 13.5 2Z"/>
                                    <path d="M11 6.025a1 1 0 0 0-1.065-.998 8.5 8.5 0 1 0 9.038 9.039A1 1 0 0 0 17.975 13H11V6.025Z"/>
                                </svg>
                                <span class="ms-3">Dashboard</span>
                            </a>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-publikasi-program" data-collapse-toggle="dropdown-publikasi-program">
                                <svg class="w-6 h-6 text-gray-500" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 6H7a2 2 0 01-2-2V6a2 2 0 012-2h7l5 5v11a2 2 0 01-2 2z"></path>
                                </svg>
                                <span class="text-gray-500 hover:text-green-600 flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Publikasi Program</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-publikasi-program" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{route('campaign.index')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Infaq</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Zakat</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Wakaf</a>
                                </li>
                                <li>
                                    <a href="#" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">qurban</a>
                                </li>
                                <li>
                                    <a href="{{url('publikasi-archive')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Archive</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-pengaturan-program" data-collapse-toggle="dropdown-pengaturan-program">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Pengaturan Program</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-pengaturan-program" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{url('/kategori')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Kategori</a>
                                </li>
                                <li>
                                    <a href="{{url('/urutkan-kategori')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Urutkan Kategori</a>
                                </li>
                                <li>
                                    <a href="{{url('/urutkan-program')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Urutkan Program</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-transaksi" data-collapse-toggle="dropdown-transaksi">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M4 5a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H4Zm0 6h16v6H4v-6Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M5 14a1 1 0 0 1 1-1h2a1 1 0 1 1 0 2H6a1 1 0 0 1-1-1Zm5 0a1 1 0 0 1 1-1h5a1 1 0 1 1 0 2h-5a1 1 0 0 1-1-1Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Transaksi</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-transaksi" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{route('transaksi.showAllTransaksi')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Semua Transaksi</a>
                                </li>
                                <li>
                                    <a href="{{route('transaksiOnline')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Transaksi Online</a>
                                </li>
                                <li>
                                    <a href="{{route('transaksiOffline')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Transaksi Offline</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                        <a href="{{url('/dana-terkumpul')}}" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600rounded-lg hover:bg-gray-100 group">
                            <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z" clip-rule="evenodd"/>
                            </svg>
                            <span class="flex-1 group ms-3 whitespace-nowrap">Dana Terkumpul</span>
                        </a>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-penyaluran-dana" data-collapse-toggle="dropdown-penyaluran-dana">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" clip-rule="evenodd"/>
                                <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Penyaluran Dana</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-penyaluran-dana" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{url('/penyaluran')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Input Penyaluran</a>
                                </li>
                                <li>
                                    <a href="{{url('/lembaga')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Input Hak Lembaga</a>
                                </li>
                                <li>
                                    <a href="{{url('/mediaBerbagi')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Input MediaBerbagi</a>
                                </li>
                                <li>
                                    <a href="{{url('/berita')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Laporan Berita</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-data-donatur" data-collapse-toggle="dropdown-data-donatur">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Data Donatur</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-data-donatur" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{'semuaDonatur'}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Semua Donatur</a>
                                </li>
                                <li>
                                    <a href="{{route('donaturSukses')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Donatur Sukses</a>
                                </li>
                                <li>
                                    <a href="{{route('donaturGagal')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Donatur Gagal</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-fundraiser" data-collapse-toggle="dropdown-fundraiser">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 6a3.5 3.5 0 1 0 0 7 3.5 3.5 0 0 0 0-7Zm-1.5 8a4 4 0 0 0-4 4 2 2 0 0 0 2 2h7a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-3Zm6.82-3.096a5.51 5.51 0 0 0-2.797-6.293 3.5 3.5 0 1 1 2.796 6.292ZM19.5 18h.5a2 2 0 0 0 2-2 4 4 0 0 0-4-4h-1.1a5.503 5.503 0 0 1-.471.762A5.998 5.998 0 0 1 19.5 18ZM4 7.5a3.5 3.5 0 0 1 5.477-2.889 5.5 5.5 0 0 0-2.796 6.293A3.501 3.501 0 0 1 4 7.5ZM7.1 12H6a4 4 0 0 0-4 4 2 2 0 0 0 2 2h.5a5.998 5.998 0 0 1 3.071-5.238A5.505 5.505 0 0 1 7.1 12Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Fundraiser</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-fundraiser" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{url('/fundraiser')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">List Fundraiser</a>
                                </li>
                                <li>
                                    <a href="{{url('/leaderboard')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Leaderboard</a>
                                </li>
                                <li>
                                    <a href="{{url('/tranfun')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Transaksi</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-web-utama" data-collapse-toggle="dropdown-web-utama">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <path fill-rule="evenodd" d="M8.64 4.737A7.97 7.97 0 0 1 12 4a7.997 7.997 0 0 1 6.933 4.006h-.738c-.65 0-1.177.25-1.177.9 0 .33 0 2.04-2.026 2.008-1.972 0-1.972-1.732-1.972-2.008 0-1.429-.787-1.65-1.752-1.923-.374-.105-.774-.218-1.166-.411-1.004-.497-1.347-1.183-1.461-1.835ZM6 4a10.06 10.06 0 0 0-2.812 3.27A9.956 9.956 0 0 0 2 12c0 5.289 4.106 9.619 9.304 9.976l.054.004a10.12 10.12 0 0 0 1.155.007h.002a10.024 10.024 0 0 0 1.5-.19 9.925 9.925 0 0 0 2.259-.754 10.041 10.041 0 0 0 4.987-5.263A9.917 9.917 0 0 0 22 12a10.025 10.025 0 0 0-.315-2.5A10.001 10.001 0 0 0 12 2a9.964 9.964 0 0 0-6 2Zm13.372 11.113a2.575 2.575 0 0 0-.75-.112h-.217A3.405 3.405 0 0 0 15 18.405v1.014a8.027 8.027 0 0 0 4.372-4.307ZM12.114 20H12A8 8 0 0 1 5.1 7.95c.95.541 1.421 1.537 1.835 2.415.209.441.403.853.637 1.162.54.712 1.063 1.019 1.591 1.328.52.305 1.047.613 1.6 1.316 1.44 1.825 1.419 4.366 1.35 5.828Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Web Utama</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-web-utama" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{url('/banner')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Slider</a>
                                </li>
                                <li>
                                    <a href="{{url('/partner')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Partner</a>
                                </li>
                                <li>
                                    <a href="{{url('/articleCategory')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Kategori Blog</a>
                                </li>
                                <li>
                                    <a href="{{url('/article')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Blog</a>
                                </li>
                                <li>
                                    <a href="{{url('/kegiatan')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Kegiatan</a>
                                </li>
                                <li>
                                    <a href="{{'/konten'}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Konten</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600rounded-lg hover:bg-gray-100 group">
                                <span class="flex-1 ms-3 whitespace-nowrap">Pengaturan</span>
                            </div>
                        </li>
                        <li>
                            <a href="{{route('admin')}}" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="flex-1 group ms-3 whitespace-nowrap">User</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{  url('/data-bank') }}" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z" clip-rule="evenodd"/>
                                    <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z"/>
                                </svg>
                                <span class="flex-1 group ms-3 whitespace-nowrap">Data Bank</span>
                            </a>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-notifikasi-wa" data-collapse-toggle="dropdown-notifikasi-wa">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Notifikasi Whatsapp</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-notifikasi-wa" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{'template'}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Template</a>
                                </li>
                                <li>
                                    <a href="{{route('connect')}}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Connect Whatsapp</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-email" data-collapse-toggle="dropdown-email">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M17 6h-2V5h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2h-.541A5.965 5.965 0 0 1 14 10v4a1 1 0 1 1-2 0v-4c0-2.206-1.794-4-4-4-.075 0-.148.012-.22.028C7.686 6.022 7.596 6 7.5 6A4.505 4.505 0 0 0 3 10.5V16a1 1 0 0 0 1 1h7v3a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-3h5a1 1 0 0 0 1-1v-6c0-2.206-1.794-4-4-4Zm-9 8.5H7a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2Z"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Email</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-email" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{  url('/notifikasiEmail') }}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Notifikasi Email</a>
                                </li>
                                <li>
                                    <a href="{{  url('/email') }}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Mail Setting</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/media-berbagi-setting" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="ms-3 group">Mediaberbagi Setting</span>
                            </a>
                        </li>
                        <li>
                            <!-- <a href="/penggunaanData" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group"> -->
                            <a href="{{'penggunaanData'}}" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 7.205c4.418 0 8-1.165 8-2.602C20 3.165 16.418 2 12 2S4 3.165 4 4.603c0 1.437 3.582 2.602 8 2.602ZM12 22c4.963 0 8-1.686 8-2.603v-4.404c-.052.032-.112.06-.165.09a7.75 7.75 0 0 1-.745.387c-.193.088-.394.173-.6.253-.063.024-.124.05-.189.073a18.934 18.934 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.073a10.143 10.143 0 0 1-.852-.373 7.75 7.75 0 0 1-.493-.267c-.053-.03-.113-.058-.165-.09v4.404C4 20.315 7.037 22 12 22Zm7.09-13.928a9.91 9.91 0 0 1-.6.253c-.063.025-.124.05-.189.074a18.935 18.935 0 0 1-6.3.998c-2.135.027-4.26-.31-6.3-.998-.065-.024-.126-.05-.189-.074a10.163 10.163 0 0 1-.852-.372 7.816 7.816 0 0 1-.493-.268c-.055-.03-.115-.058-.167-.09V12c0 .917 3.037 2.603 8 2.603s8-1.686 8-2.603V7.596c-.052.031-.112.059-.165.09a7.816 7.816 0 0 1-.745.386Z"/>
                                </svg>
                                <span class="ms-3 group">Penggunaan Data</span>
                            </a>
                        </li>
                        <li>
                            <button type="button" class="flex items-center w-full p-2 text-base text-gray-500 transition duration-75 rounded-lg group hover:bg-gray-100" aria-controls="dropdown-analytics" data-collapse-toggle="dropdown-analytics">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667"/>
                                </svg>
                                <span class="flex-1 hover:text-green-600 ms-3 text-left rtl:text-right whitespace-nowrap">Analytics</span>
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4"/>
                                </svg>
                            </button>
                            <ul id="dropdown-analytics" class="hidden py-2 space-y-2">
                                <li>
                                    <a href="{{ url('/googleAnalytics') }}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Google Analytics</a>
                                </li>
                                <li>
                                    <a href="{{ url('/facebookPixel') }}" class="flex items-center w-full p-2 text-gray-500 hover:text-green-600 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100">Facebook Pixel</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="/googleFont" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m10.5785 19 4.2979-10.92966c.0369-.09379.1674-.09379.2042 0L19.3785 19m-8.8 0H9.47851m1.09999 0h1.65m7.15 0h-1.65m1.65 0h1.1m-7.7-3.9846h4.4M3 16l1.56685-3.9846m0 0 2.73102-6.94506c.03688-.09379.16738-.09379.20426 0l2.50367 6.94506H4.56685Z"/>
                                </svg>
                                <span class="ms-3 group">Google Font</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/paymentGateaway') }}" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M4 19v2c0 .5523.44772 1 1 1h14c.5523 0 1-.4477 1-1v-2H4Z"/>
                                    <path fill="currentColor" fill-rule="evenodd" d="M9 3c0-.55228.44772-1 1-1h8c.5523 0 1 .44772 1 1v3c0 .55228-.4477 1-1 1h-2v1h2c.5096 0 .9376.38314.9939.88957L19.8951 17H4.10498l.90116-8.11043C5.06241 8.38314 5.49047 8 6.00002 8H12V7h-2c-.55228 0-1-.44772-1-1V3Zm1.01 8H8.00002v2.01H10.01V11Zm.99 0h2.01v2.01H11V11Zm5.01 0H14v2.01h2.01V11Zm-8.00998 3H10.01v2.01H8.00002V14ZM13.01 14H11v2.01h2.01V14Zm.99 0h2.01v2.01H14V14ZM11 4h6v1h-6V4Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="ms-3 group">Payment Gateway</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/pengaturanSistem') }}" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M9.586 2.586A2 2 0 0 1 11 2h2a2 2 0 0 1 2 2v.089l.473.196.063-.063a2.002 2.002 0 0 1 2.828 0l1.414 1.414a2 2 0 0 1 0 2.827l-.063.064.196.473H20a2 2 0 0 1 2 2v2a2 2 0 0 1-2 2h-.089l-.196.473.063.063a2.002 2.002 0 0 1 0 2.828l-1.414 1.414a2 2 0 0 1-2.828 0l-.063-.063-.473.196V20a2 2 0 0 1-2 2h-2a2 2 0 0 1-2-2v-.089l-.473-.196-.063.063a2.002 2.002 0 0 1-2.828 0l-1.414-1.414a2 2 0 0 1 0-2.827l.063-.064L4.089 15H4a2 2 0 0 1-2-2v-2a2 2 0 0 1 2-2h.09l.195-.473-.063-.063a2 2 0 0 1 0-2.828l1.414-1.414a2 2 0 0 1 2.827 0l.064.063L9 4.089V4a2 2 0 0 1 .586-1.414ZM8 12a4 4 0 1 1 8 0 4 4 0 0 1-8 0Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="ms-3 group">Pengaturan</span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M13.383 4.076a6.5 6.5 0 0 0-6.887 3.95A5 5 0 0 0 7 18h3v-4a2 2 0 0 1-1.414-3.414l2-2a2 2 0 0 1 2.828 0l2 2A2 2 0 0 1 14 14v4h4a4 4 0 0 0 .988-7.876 6.5 6.5 0 0 0-5.605-6.048Z"/>
                                    <path d="M12.707 9.293a1 1 0 0 0-1.414 0l-2 2a1 1 0 1 0 1.414 1.414l.293-.293V19a1 1 0 1 0 2 0v-6.586l.293.293a1 1 0 0 0 1.414-1.414l-2-2Z"/>
                                </svg>
                                <span class="ms-3 group">Update Software</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ url('/pembayaran') }}" class="flex items-center p-2 text-gray-500 hover:text-green-600 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M7 6a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2h-2v-4a3 3 0 0 0-3-3H7V6Z" clip-rule="evenodd"/>
                                    <path fill-rule="evenodd" d="M2 11a2 2 0 0 1 2-2h11a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2v-7Zm7.5 1a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5Z" clip-rule="evenodd"/>
                                <path d="M10.5 14.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0Z"/>
                                </svg>
                                <span class="ms-3 group">Pembayaran</span>
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center p-2 text-gray-500 hover:text-green-600 mb-32 hover:text-green-600transition duration-75 rounded-lg hover:bg-gray-100 group">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                    <path fill-rule="evenodd" d="M11.675 2.015a.998.998 0 0 0-.403.011C6.09 2.4 2 6.722 2 12c0 5.523 4.477 10 10 10 4.356 0 8.058-2.784 9.43-6.667a1 1 0 0 0-1.02-1.33c-.08.006-.105.005-.127.005h-.001l-.028-.002A5.227 5.227 0 0 0 20 14a8 8 0 0 1-8-8c0-.952.121-1.752.404-2.558a.996.996 0 0 0 .096-.428V3a1 1 0 0 0-.825-.985Z" clip-rule="evenodd"/>
                                </svg>
                                <span class="ms-3 group">Darkmode</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="main" class="relative ml-80 bg-transparent">
                <div id="navBar" class="fixed bg-slate-50 w-[calc(100%-20rem)] h-20 flex content-center justify-between">
                    <div class="flex items-center">
                        <button id="iconNavOpen" onclick="openNav()" type="button" class="hidden items-center p-2 my-2 ms-3 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
                            </svg>
                        </button>
                        <p class="font-bold text-lg text-gray-500 pl-5">Dashboard</p>
                    </div>
                    <div class="flex items-center">

                        <button id="dropdownSearchButton" data-dropdown-toggle="dropdownSearch" data-dropdown-placement="bottom" class="md:hidden font-medium rounded-lg text-sm px-2.5 py-2.5 text-center inline-flex items-center" type="button">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdownSearch" class="z-10 hidden bg-white rounded-lg shadow w-60">
                            <div class="p-3">
                                <label for="input-group-search" class="sr-only">Search</label>
                                <div class="relative">
                                    <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                                    <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                    </svg>
                                    </div>
                                    <input type="text" id="input-group-search" class="block w-full p-2 ps-10 text-sm text-gray-500 border border-gray-300 rounded-lg bg-gray-50 focus:ring-green-500 focus:border-green-500" placeholder="Search user">
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center ms-3">
                            <div class="pr-5">
                                <button type="button" class="flex text-sm items-center" aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                {{-- <img class="w-8 h-8 rounded-full mr-2" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="user photo"> --}}
                                <img class="w-8 h-8 rounded-full mr-2 object-cover" src="{{ Storage::url(Auth::user()->profile_photo_path) }}" alt="{{ Auth::user()->name }}">
                                <span class="relative flex h-3 w-3">
                                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                                    <span class="relative inline-flex rounded-full h-3 w-3 bg-green-500"></span>
                                </span>
                                <div class="px-4 py-3 text-left md:hidden">
                                    <p class="text-sm text-gray-500">
                                        Neil Sims
                                    </p>
                                    <p class="text-sm font-medium text-gray-500 truncate">
                                        neil.sims@flowbite.com
                                    </p>
                                </div>
                                <svg class="w-[15px] h-[15px] ml-2 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7"/>
                                </svg>
                                </button>
                            </div>
                            <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow" id="dropdown-user">
                                <ul class="py-1" role="none">
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem">Earnings</a>
                                </li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}" id="logout-form">
                                        @csrf
                                    </form>
            
                                    {{-- <a href="{{ route('logout') }}"
                                        class="text-white shadow-md bg-green-600 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-red-300 rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Ya , Keluar') }}
                                    </a> --}}
                                    <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100" role="menuitem" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Sign out</a>
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-transparent pt-20">
                    <div class="">
                        <div id="konten" class="pr-4 h-screen rounded-lg">
                            @yield('konten')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>

    <script>
        function openNav() {
            document.getElementById("sideBar").style.display = "block";
            document.getElementById("iconNavOpen").style.display = "none";
            document.getElementById("main").style.marginLeft = "20rem";
            document.getElementById("navBar").style.width = "calc(100% - 20rem)";
            document.getElementById("konten").style.marginLeft = "0px";
        }

        function closeNav() {
            document.getElementById("sideBar").style.display = "none";
            document.getElementById("main").style.marginLeft = "0";
            document.getElementById("navBar").style.width = "100%";
            document.getElementById("iconNavOpen").style.display = "block";
            document.getElementById("konten").style.marginLeft = "20px";
        }
    </script>
</body>
</html>
