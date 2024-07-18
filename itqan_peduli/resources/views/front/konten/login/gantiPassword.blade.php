<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <title>Reset</title>
</head>

<body class="bg-gray-200 max-w-[512px] mx-auto">
    <div class="p-4 bg-white">
        <div class="flex my-6">
            <a href="{{ url('/pengaturan') }}" type="button"
                class="text-white  ms-0 bg-white shadow-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-gray-400">
                <svg class="w-4 h-4  text-green-700  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <p class="text-center mx-6 mt-1.5 font-semibold text-xl">Ganti Password</p>
        </div>
        {{-- <img src="/images/logomediaberbagi.png" class="w-48 h-auto" alt=""> --}}


        <div class=" mt-10">
            {{-- <div class="text-2xl font-bold text-black dark:text-white">Reset Password</div>
            <div class="text-lg text-black dark:text-white">Ingat dan jaga baik-baik password anda. Login menggunakan nomor wa dan password saat melanjutkan proses pendaftaran. 
            </div> --}}

            <form action="">
                <div class="relative mt-6">
                    <label for="password0"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kata sandi sebelumnya</label>
                    <input type="password" id="password1" placeholder="masukan lata sandi anda sebelumnya."
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">

                        <svg id="toggleVisibility0" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                </div>
                <div class="relative mt-6">
                    <label for="password1"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kata sandi baru</label>
                    <input type="password" id="password1" placeholder="masukan kata sandi baru anda."
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
                <div class="relative mt-6">
                    <label for="password2"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Konfirmasi kata sandi baru</label>
                    <input type="password" id="password2" placeholder="masukan kata sandi baru anda kembali."
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">

                        <svg id="toggleVisibility1" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                </div>
                <a href="{{  url('/berhasil') }}" type="button"
                    class="px-6 py-3.5  w-full mt-4 mb-4 text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                    <p class="text-white mx-auto text-xl text-center font-semibold">Simpan</p>
                </a>
            </form>

            <div class="text-center">
                <a href="{{ url('/login') }}" class="font-semibold text-sm ">Ingat password ? <b>Masuk</b></a>
            </div>

            <div class="flex text-gray-400 gap-3 mt-8 justify-center">
                <p>Tentang Kami </p>
                |
                <p> Syarat & Ketentuan </p>
                |
                <p> Pusat Bantuan</p>
            </div>
            <p class="text-gray-400 text-center mt-2">Copyright &copy 2023 Media Berbagi</p>



        </div>
    </div>

    <script>
        document.getElementById('toggleVisibility0').addEventListener('click', function() {
            const passwordInput = document.getElementById('password0');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
        document.getElementById('toggleVisibility').addEventListener('click', function() {
            const passwordInput = document.getElementById('password1');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
        document.getElementById('toggleVisibility1').addEventListener('click', function() {
            const passwordInput = document.getElementById('password2');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
