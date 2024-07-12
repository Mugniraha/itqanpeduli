@extends('front.layout.main3')

@section('konten')
    <div class="p-4 bg-white">

        <div class="flex my-6">
            <a href="{{ url('/akun') }}" type="button"
                class="text-white  ms-0 bg-white shadow-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-gray-400">
                <svg class="w-4 h-4  text-green-700  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <p class="text-center mx-6 mt-1.5 font-semibold text-xl">Profil</p>
        </div>
        <div class=" isi mt-10">
            <div class="flex flex-col pt-3 pb-5 items-center gap-4">
                <img class="w-21 h-21 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="">
                <div class="font-medium text-center dark:text-black">
                    <div class="text-xl font-semibold text-black dark:text-black">Ramadhani</div>
                </div>
            </div>
            <form action="" class="mt-8">
                <div class="relative mt-6">
                    <label class="block mb-2 px-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        foto</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">
                </div>
                <div class="relative mt-6">
                    <label for="jenis_duta"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Jenis Duta</label>
                    <select id="jenis_duta"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Perorangan</option>
                        <option value="US">Perorangan</option>
                        <option value="CA">Kelompok</option>
                    </select>
                </div>
                <div class="relative mt-6">
                    <label for="nama"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nama
                        Lengkap</label>
                    <input type="text" id="nama" placeholder="masukan nama lengkap anda."
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                    <label for="email"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Alamat
                        Email</label>
                    <input type="email" id="email" placeholder="contoh: mediaberbagi@gmail.com"
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                    <label for="no_telepon"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nomor
                        Telepon</label>
                    <input type="text" id="no_telepon" placeholder="contoh: 0821021xx-xxxx"
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                    <label for="provinsi"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Provinsi</label>
                    <select id="provinsi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Jawa Barat</option>
                        <option value="US">Perorangan</option>
                        <option value="CA">Kelompok</option>
                    </select>
                </div>
                <div class="relative mt-6">
                    <label for="kab_kota"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kab/Kota</label>
                    <select id="kab_kota"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option selected>Kab. Bandung</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select>
                </div>
                <a href="{{ url('/ubah-katasandi') }}" type="button"
                    class="px-3 py-3 w-full my-2 text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                    <p class="text-gray-600 font-semibold">Ganti Password</p>
                    <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600 dark:text-white" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ url('/login') }}" type="button"
                    class="px-6 py-3.5  w-full mt-6  text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                    <p class="text-white mx-auto text-xl text-center font-semibold">Simpan</p>
                </a>
            </form>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    {{-- </body>

</html> --}}
@endsection
