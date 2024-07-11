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
        <img src="/images/logomediaberbagi.png" class="w-48 h-auto" alt="">


        <div class=" mt-10">
            <div class="flex justify-center">
                <svg class="w-36 h-36 text-green-700 dark:text-white" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M9.5 11.5 11 13l4-3.5M12 20a16.405 16.405 0 0 1-5.092-5.804A16.694 16.694 0 0 1 5 6.666L12 4l7 2.667a16.695 16.695 0 0 1-1.908 7.529A16.406 16.406 0 0 1 12 20Z" />
                </svg>
            </div>

            <div class="text-2xl font-bold text-black text-center dark:text-white">Berhasil Ganti Password</div>
            <div class="text-lg text-black justify-center dark:text-white">Jaga baik-baik akun anda, jangan lupa logout
                setelah login.
            </div>

            <a href="{{ url('/login') }}" type="button"
                class="px-6 py-3.5  w-full mt-12 mb-4 text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl dark:bg-gray-400 dark:hover:bg-gray-500 dark:focus:ring-gray-600">
                <p class="text-white mx-auto text-xl text-center font-semibold">Masuk</p>
            </a>


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

    {{-- <script>
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
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>

</html>
