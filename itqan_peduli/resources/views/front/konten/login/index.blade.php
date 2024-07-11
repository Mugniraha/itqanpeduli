<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />

    <title>Login</title>
</head>

<body class="bg-gray-200 max-w-[512px] mx-auto">
    <div class="p-4 bg-white">
        <img src="/images/logomediaberbagi.png" class="w-48 h-auto" alt="">


        <div class=" mt-10">
            <div class="text-2xl font-bold text-black dark:text-white">Login</div>
            <div class="text-lg text-black dark:text-white">Masuk untuk menikmati kemudahan berinvestasi akhirat dan
                akses fitur lainnya.
            </div>

            <form action="">
                <div class="relative mt-6">
                    <label for="email"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Alamat
                        Email</label>
                    <input type="email" id="email" placeholder="contoh: mediaberbagi@gmail.com"
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <div class="relative mt-6">
                    <label for="password1"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kata
                        sandi</label>
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
                <div class="text-end">
                <a href="{{ url('/lupapassword') }}" type="button" class="text-end font-semibold text-sm mt-4 text-green-700">Lupa Kata Sandi ?</a>
                </div>
                <a href="{{ url('/akun') }}" type="button"
                    class="px-6 py-3.5  w-full mt-1.5  text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                    <p class="text-white mx-auto text-xl text-center font-semibold">Masuk</p>
                </a>
            </form>


            <p class="text-center font-semibold text-sm mt-6">Anda belum punya akun ?</p>
            <a href="{{ url('/registrasi') }}" type="button"
                class="px-6 py-3.5  w-full mt-1.5  text-base font-medium text-white inline-flex items-center border border-green-800 bg-gray-100 hover:bg-green-200 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                <p class="text-green-700 mx-auto text-xl text-center font-semibold">Daftar disini</p>
            </a>

            <p class="text-center font-semibold text-sm mt-6">Atau masuk lebih cepat dengan :</p>

            <button type="button"
                class="px-6 py-3.5  w-full mt-1.5  text-base font-medium text-white inline-flex items-center border border-green-800 bg-gray-100 hover:bg-green-200 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">

                <p class="flex text-green-700 mx-auto  text-xl text-center font-semibold"><img src="/images/google.png"
                        class="w-5 h-5 my-auto m-2 text-center" alt="">Login dengan Google</p>
            </button>
            <button type="button"
                class="px-6 py-3.5  w-full mt-1.5  text-base font-medium text-white inline-flex items-center border border-green-800 bg-gray-100 hover:bg-green-200 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">

                <p class="flex text-green-700 mx-auto  text-xl text-center font-semibold"><img
                        src="/images/facebook.png" class="w-5 h-5 my-auto m-2 text-center" alt="">Login dengan
                    Facebook</p>
            </button>

            <div class="flex justify-center mx-auto my-10 gap-24 ">
                <svg class="w-10 h-10 border border-white rounded-full text-green-800 dark:text-white shadow-lg"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z"
                        clip-rule="evenodd" />
                </svg>
                <svg class="w-10 h-10 text-green-800 border border-white rounded-full shadow-lg dark:text-white"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd"
                        d="M3 8a5 5 0 0 1 5-5h8a5 5 0 0 1 5 5v8a5 5 0 0 1-5 5H8a5 5 0 0 1-5-5V8Zm5-3a3 3 0 0 0-3 3v8a3 3 0 0 0 3 3h8a3 3 0 0 0 3-3V8a3 3 0 0 0-3-3H8Zm7.597 2.214a1 1 0 0 1 1-1h.01a1 1 0 1 1 0 2h-.01a1 1 0 0 1-1-1ZM12 9a3 3 0 1 0 0 6 3 3 0 0 0 0-6Zm-5 3a5 5 0 1 1 10 0 5 5 0 0 1-10 0Z"
                        clip-rule="evenodd" />
                </svg>
                <svg class="w-10 h-10 text-green-800 border border-white rounded-full shadow-lg dark:text-white"
                    aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M21.7 8.037a4.26 4.26 0 0 0-.789-1.964 2.84 2.84 0 0 0-1.984-.839c-2.767-.2-6.926-.2-6.926-.2s-4.157 0-6.928.2a2.836 2.836 0 0 0-1.983.839 4.225 4.225 0 0 0-.79 1.965 30.146 30.146 0 0 0-.2 3.206v1.5a30.12 30.12 0 0 0 .2 3.206c.094.712.364 1.39.784 1.972.604.536 1.38.837 2.187.848 1.583.151 6.731.2 6.731.2s4.161 0 6.928-.2a2.844 2.844 0 0 0 1.985-.84 4.27 4.27 0 0 0 .787-1.965 30.12 30.12 0 0 0 .2-3.206v-1.516a30.672 30.672 0 0 0-.202-3.206Zm-11.692 6.554v-5.62l5.4 2.819-5.4 2.801Z"
                        clip-rule="evenodd" />
                </svg>

            </div>

            <div class="flex text-gray-400 gap-3 justify-center">
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
        document.getElementById('toggleVisibility').addEventListener('click', function() {
            const passwordInput = document.getElementById('password1');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
