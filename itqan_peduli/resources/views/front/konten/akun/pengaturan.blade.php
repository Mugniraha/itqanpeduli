<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <title>About Us</title>
</head>

<body class="bg-gray-200 max-w-[512px] mx-auto">
    <div class="p-4 bg-white">

        <div class="flex my-6">
            <a href="{{ url('/akun') }}" type="button"
                class="text-white  ms-0 bg-white shadow-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-gray-400">
                <svg class="w-4 h-4  text-green-700  dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <p class="text-center mx-36 font-semibold text-xl">Profil Saya</p>
        </div>
        <div class=" isi mt-10">
            <div class="flex flex-col pt-3 pb-5 items-center gap-4">
                <img class="w-21 h-21 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="">
                {{-- <div class="font-medium text-center dark:text-black">
                    <div class="text-xl font-semibold text-white dark:text-black">Ramadhani</div>
                    <a href="{{  url('/editprofil') }}" class="flex justify-center text-sm text-white dark:text-black-400">Ubah Profil
                        <svg class="w-4 h-4 my-auto text-white dark:text-black" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m9 5 7 7-7 7" />
                        </svg>
                    </a>
                </div> --}}
            </div>
            <div action="" class="mt-8">
                {{-- <div class="relative mt-6">
                    <label class="block mb-2 px-2 text-sm font-medium text-gray-900 dark:text-white" for="file_input">Upload
                        foto</label>
                    <input
                        class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="file_input" type="file">

                </div> --}}
                <div class="relative mt-6">
                    <label for="nama"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nama
                        Lengkap</label>
                    <input type="text" id="nama" placeholder="Nama lengkap anda"
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                    <label for="email"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Alamat
                        Email</label>
                    <input type="email" id="email" placeholder="Email anda"
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                    <label for="no_telepon"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nomor
                        Telepon anda</label>
                    <input type="text" id="no_telepon" placeholder="contoh: 0821021xx-xxxx"
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                {{-- <div class="relative mt-6">
                    <label for="password1"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kata sandi
                        <span class="text-yellow-500">* silahkan diisi jika ingin mengganti password</span></label>
                    <input type="password" id="password1" placeholder="masukan kata sandi anda."
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">

                        <svg id="toggleVisibility" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                </div>
                <a href="{{ url('/login') }}" type="button"
                    class="px-6 py-3.5  w-full mt-6  text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                    <p class="text-white mx-auto text-xl text-center font-semibold">Simpan</p>
                </a> --}}
            </div>
        </div>



    </div>
    <script>
        document.getElementById('toggleVisibility').addEventListener('click', function() {
            const passwordInput = document.getElementById('password1');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

</body>

</html>
