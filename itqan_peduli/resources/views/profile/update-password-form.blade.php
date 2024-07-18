<div>
    <x-form-section submit="updatePassword" class="bg-white max-w-[512px] mx-auto p-4">
        <div class="p-10">
            {{-- <x-application-logo>
                <img src="/images/logomediaberbagi.png" class="w-48 h-auto" alt="">
            </x-application-logo>
            <x-authentication-card-logo>
                <img src="/images/logomediaberbagi.png" class="w-48 h-auto" alt="">
            </x-authentication-card-logo>
            <x-application-mark class="block h-9 w-auto" /> --}}

            <div class=" ">
                {{-- <div class="text-2xl font-bold text-black">Reset Password</div>
                <div class="text-lg text-black">Ingat dan jaga baik-baik password anda. Login menggunakan nomor wa dan
                    password saat melanjutkan proses pendaftaran.
                </div> --}}
                <x-slot name="title">
                    <div class="flex my-6">
                        <a href="{{ url('/pengaturan') }}" type="button"
                            class="text-white ms-0 bg-white shadow-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                            <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                            </svg>
                        </a>
                        <p class="text-center mx-6 mt-1.5 font-semibold text-xl">Ganti Password</p>
                    </div>
                    {{-- {{ __('Ganti Password') }} --}}
                </x-slot>



                <x-slot name="form">
                    <div class="relative col-span-6">
                        <x-label for="current_password" value="{{ __('Kata sandi sebelumnya') }}" />
                        <x-input id="current_password" type="password" class="mt-1 block w-full"
                            wire:model="state.current_password" autocomplete="current-password" />
                        <x-input-error for="current_password" class="mt-2" />
                    </div>

                    <div class="relative col-span-6">
                        <x-label for="password" value="{{ __('Kata sandi baru') }}" />
                        <x-input id="password" type="password" class="mt-1 block w-full" wire:model="state.password"
                            autocomplete="new-password" />
                        <x-input-error for="password" class="mt-2" />
                    </div>

                    <div class="relative col-span-6">
                        <x-label for="password_confirmation" value="{{ __('Konfirmasi kata sandi baru') }}" />
                        <x-input id="password_confirmation" type="password" class="mt-1 block w-full"
                            wire:model="state.password_confirmation" autocomplete="new-password" />
                        <x-input-error for="password_confirmation" class="mt-2" />
                    </div>
                </x-slot>

                <x-slot name="actions" class="flex justify-center">

                    <div class="flex flex-col justify-center">
                        <x-action-message class="me-3" on="saved">
                            {{ __('Saved') }}
                        </x-action-message>
                        <x-button class="items-center">
                            {{ __('Save') }}
                        </x-button>
                        <div class="text-center mt-2">
                            <a href="{{ url('/login') }}" class="font-semibold text-sm">Ingat password? <b>Masuk</b></a>
                        </div>
                        <div class="flex text-gray-400 gap-3 mt-8 justify-center">
                            <p>Tentang Kami</p>
                            |
                            <p>Syarat & Ketentuan</p>
                            |
                            <p>Pusat Bantuan</p>
                        </div>
                        <p class="text-gray-400 text-center mt-2">Copyright &copy 2023 Media Berbagi</p>
                    </div>

                </x-slot>
                <x-slot name="description">
                    {{-- {{ __('Ingat dan jaga baik-baik password anda. Login menggunakan nomor wa dan
                                    password saat melanjutkan proses pendaftaran.') }} --}}
                </x-slot>

            </div>
    </x-form-section>
    {{-- <x-slot name="footer">
        
    </x-slot> --}}

</div>



{{-- @props(['submit'])

<div class="bg-gray-200 max-w-[512px] mx-auto">
    <div class="p-4 bg-white">
        <div class="flex my-6">
            <a href="{{ url('/pengaturan') }}" type="button"
                class="text-white ms-0 bg-white shadow-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                <svg class="w-4 h-4 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <p class="text-center mx-6 mt-1.5 font-semibold text-xl">Ganti Password</p>
        </div>

        <div submit="updatePassword" class="mt-10">
            <form wire:submit="{{ $submit }}" class="mt-6 space-y-6">

                <div class="relative mt-6">
                    <label for="current_password"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kata sandi sebelumnya</label>
                    <input wire:model="state.current_password" autocomplete="current-password" type="password" id="current_password" name="current_password" placeholder="Masukan kata sandi Anda sebelumnya."
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                    <x-input-error for="current_password" class="mt-2" />
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <svg id="toggleVisibility0" class="w-6 h-6 text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                </div>

                <div class="relative mt-6">
                    <label for="password"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kata sandi baru</label>
                    <input type="password" id="password" name="password" placeholder="Masukan kata sandi baru Anda."
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <svg id="toggleVisibility" class="w-6 h-6 text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                </div>

                <div class="relative mt-6">
                    <label for="password_confirmation"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Konfirmasi kata sandi baru</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Masukan kata sandi baru Anda kembali."
                        class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                    <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                        <svg id="toggleVisibility1" class="w-6 h-6 text-gray-800" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="2"
                                d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
                            <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                        </svg>
                    </div>
                </div>

                <div name="actions">
                    <button type="submit"
                    class="px-6 py-3.5 w-full mt-4 mb-4 text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl">
                    <p class="text-white mx-auto text-xl text-center font-semibold">{{ __('Save') }}</p>
                </button>
                </div>
                
            </form>

            <div class="text-center">
                <a href="{{ url('/login') }}" class="font-semibold text-sm">Ingat password? <b>Masuk</b></a>
            </div>

            <div class="flex text-gray-400 gap-3 mt-8 justify-center">
                <p>Tentang Kami</p>
                |
                <p>Syarat & Ketentuan</p>
                |
                <p>Pusat Bantuan</p>
            </div>
            <p class="text-gray-400 text-center mt-2">Copyright &copy 2023 Media Berbagi</p>
        </div>
    </div>

    <script>
        document.getElementById('toggleVisibility0').addEventListener('click', function() {
            const passwordInput = document.getElementById('current_password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });

        document.getElementById('toggleVisibility').addEventListener('click', function() {
            const passwordInput = document.getElementById('password');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });

        document.getElementById('toggleVisibility1').addEventListener('click', function() {
            const passwordInput = document.getElementById('password_confirmation');
            const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
            passwordInput.setAttribute('type', type);
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</div> --}}


{{-- <div class="bg-white shadow sm:rounded-lg">
    <div class="px-4 py-5 sm:p-6">
        <h3 class="text-lg font-medium text-gray-900">
            {{ __('Update Password') }}
        </h3>
        <p class="mt-1 text-sm text-gray-600">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>

        <form method="POST" action="{{ route('password.update') }}" class="mt-6 space-y-6">
            @csrf
            @method('POST')

            <div class="col-span-6 sm:col-span-4">
                <label for="current_password" class="block text-sm font-medium text-gray-700">
                    {{ __('Current Password') }}
                </label>
                <input id="current_password" name="current_password" type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" autocomplete="current-password" />
                @error('current_password') 
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="password" class="block text-sm font-medium text-gray-700">
                    {{ __('New Password') }}
                </label>
                <input id="password" name="password" type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" autocomplete="new-password" />
                @error('password') 
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="col-span-6 sm:col-span-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">
                    {{ __('Confirm Password') }}
                </label>
                <input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" autocomplete="new-password" />
                @error('password_confirmation') 
                    <span class="mt-2 text-sm text-red-600">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (session('status') == 'password-updated')
                    <p class="text-sm text-green-600 me-3">{{ __('Saved.') }}</p>
                @endif

                <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-white uppercase tracking-widest hover:bg-blue-500 focus:outline-none focus:border-blue-700 focus:ring focus:ring-blue-200 active:bg-blue-600 disabled:opacity-25 transition">
                    {{ __('Save') }}
                </button>
            </div>
        </form>
    </div>
</div> --}}
