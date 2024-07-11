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

        <a href="{{ url('/lupapassword') }}" type="button"
            class="text-white my-6 bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-gray-200 dark:hover:bg-gray-300 dark:focus:ring-gray-400">
            <svg class="w-6 h-6  text-green-700  dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
            </svg>
        </a>

        <div class=" isi ">
            <div class="text-2xl font-bold text-black dark:text-white">Verifikasi</div>
            <div class="text-lg text-black dark:text-white">Kami sudah mengirimkan kode verifikasi via Whatsapp dengan
                nomor (0821-1231-2213). Silahkan periksa pesan masuk anda.
            </div>

            <form action="">

                {{-- <div class="max-w-sm mx-auto "> --}}
                    <div class="flex mb-2 space-x-2 rtl:space-x-reverse justify-center gap-3 mt-8">
                        <div>
                            <label for="code-1" class="sr-only">First code</label>
                            <input type="text" maxlength="1" data-focus-input-init data-focus-input-next="code-2"
                                id="code-1"
                                class="block w-14 h-14 py-3 text-sm font-extrabold text-center text-gray-400 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required value="0" />
                        </div>
                        <div>
                            <label for="code-2" class="sr-only">Second code</label>
                            <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-1"
                                data-focus-input-next="code-3" id="code-2"
                                class="block w-14 h-14 py-3 text-sm font-extrabold text-center text-gray-400 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required value="0"/>
                        </div>
                        <div>
                            <label for="code-3" class="sr-only">Third code</label>
                            <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-2"
                                data-focus-input-next="code-4" id="code-3"
                                class="block w-14 h-14 py-3 text-sm font-extrabold text-center text-gray-400 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required value="0"/>
                        </div>
                        <div>
                            <label for="code-4" class="sr-only">Fourth code</label>
                            <input type="text" maxlength="1" data-focus-input-init data-focus-input-prev="code-3"
                                data-focus-input-next="code-5" id="code-4"
                                class="block w-14 h-14 py-3 text-sm font-extrabold text-center text-gray-400 bg-white border border-gray-300 rounded-lg focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                required value="0"/>
                        </div>
                    </div>
                {{-- </div> --}}

                <a href="{{  url('/reset') }}" type="button"
                    class="px-6 py-3.5  w-full mt-8 mb-4 text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                    <p class="text-white mx-auto text-xl text-center font-semibold">Verifikasi</p>
                </a>
            </form>

            <div class="text-center">
                <a href="{{ url('/login') }}" class="font-semibold text-sm ">Belum menerima kode ? <b>Kirim Ulang</b></a>
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

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
