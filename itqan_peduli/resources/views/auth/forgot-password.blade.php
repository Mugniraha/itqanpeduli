{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <x-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="block">
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}
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

        <a href="{{ url('/login') }}" type="button"
            class="text-white my-6 bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
            <svg class="w-6 h-6  text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 12h14M5 12l4-4m-4 4 4 4" />
            </svg>
        </a>

        <div class=" isi ">
            <div class="text-2xl font-bold text-black">Lupa Password</div>
            <div class="text-lg text-black">Pastikan email Anda benar. Kami akan mengirimkan kode verifikasi
                ke email Anda.
            </div>

            @session('status')
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ $value }}
                </div>
            @endsession

            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <div class="relative mt-8">
                    <label for="email" value="{{ __('Email') }}"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" :value="old('email')"
                    required autofocus autocomplete="username" placeholder=""
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                </div>
                <button  type="submit"
                    class="px-6 py-3.5  w-full mt-8 mb-4 text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl">
                    <p class="text-white mx-auto text-xl text-center font-semibold"> {{ __('Kirim verifikasi email') }}</p>
                </button>
            </form>

            <div class="text-center">
                <a href="{{ route('login') }}" class="font-semibold text-sm ">Ingat password ? <b>Masuk</b></a>
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
