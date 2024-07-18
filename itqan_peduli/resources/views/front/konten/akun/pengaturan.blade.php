@extends('front.layout.main3')

@section('konten')
    <div class="p-4 bg-white">

        <div class="flex my-6">
            <a href="{{ url('/akun') }}" type="button"
                class="text-white  ms-0 bg-white shadow-md hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                <svg class="w-4 h-4  text-green-700 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <p class="text-center mx-6 mt-1.5 font-semibold text-xl">Profil</p>
        </div>
        <div class=" isi mt-10">
            <div class="flex flex-col pt-3 items-center gap-4">
                <img class="w-21 h-21 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="">
                <div class="font-medium text-center">
                    <div class="text-xl font-semibold text-black">Ramadhani</div>
                </div>
            </div>
            {{-- <a id="upload-link" href="#" class="flex justify-center px-auto mt-2 text-sm text-black">Ubah Profil
                <svg class="w-3.5 h-3.5 my-auto text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m9 5 7 7-7 7" />
                </svg>
            </a> --}}
            <input type="file" id="upload-input" class="hidden" accept="image/*">
            <form action="" class="mt-20">
                <div class="relative mt-6">
                    <label for="jenis_duta"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Jenis Duta</label>
                    <x-input id="jenis_duta" value="Perorangan" type="text" class="mt-1 block w-full"
                        wire:model="state.jenis_duta" required autocomplete="name" readonly />
                    {{-- <select id="jenis_duta"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected>Perorangan</option>
                        <option value="US">Perorangan</option>
                        <option value="CA">Kelompok</option>
                    </select> --}}
                </div>
                <div class="relative mt-6">
                    <x-label for="name" value="{{ __('Name') }}" />
                    <x-input id="name" value="{{ Auth::user()->name }}" type="text" class="mt-1 block w-full"
                        wire:model="state.name" required autocomplete="name" readonly />
                    <x-input-error for="name" class="mt-2" />
                </div>
                <div class="relative mt-6">
                    <x-label for="email" value="{{ __('Email') }}" />
                    <x-input id="email" type="email" value="{{ Auth::user()->email }}" class="mt-1 block w-full"
                        wire:model="state.email" required autocomplete="username" readonly />
                    <x-input-error for="email" class="mt-2" />
                </div>
                <div class="relative mt-6">
                    <x-label for="phone_number" value="{{ __('Nomor Telepon') }}" />
                    <x-input id="phone_number" value="{{ Auth::user()->phone_number }}" type="text"
                        class="mt-1 block w-full" wire:model="state.phone_number" required autocomplete="username"
                        readonly />
                    <x-input-error for="phone_number" class="mt-2" />
                </div>
                <div class="relative mt-6">
                    <label for="provinsi"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Provinsi</label>
                    <x-input id="provinsi" value="Jawa Barat" type="text" class="mt-1 block w-full"
                        wire:model="state.provinsi" required autocomplete="name" readonly />
                    {{-- <select id="provinsi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected>Jawa Barat</option>
                        <option value="US">Perorangan</option>
                        <option value="CA">Kelompok</option>
                    </select> --}}
                </div>
                <div class="relative mt-6">
                    <label for="kab_kota"
                        class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kab/Kota</label>
                        <x-input id="kabkota" value="Kab. Bandung" type="text" class="mt-1 block w-full"
                            wire:model="state.kabkota" required autocomplete="name" readonly />
                    {{-- <select id="kab_kota"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                        <option selected>Kab. Bandung</option>
                        <option value="US">United States</option>
                        <option value="CA">Canada</option>
                        <option value="FR">France</option>
                        <option value="DE">Germany</option>
                    </select> --}}
                </div>
                <a href="{{ url('/update-password') }}" type="button"
                    class="px-3 py-3 w-full mb-3 mt-8 text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center">
                    <p class="text-gray-600 font-semibold">Ganti Password</p>
                    <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </a>
                <a href="{{ url('/update-profile') }}" type="button"
                    class="px-6 py-3.5  w-full  text-base font-medium text-white inline-flex items-center border border-green-800 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl">
                    <p class="text-white mx-auto text-xl text-center font-semibold">Edit Profil</p>
                </a>
            </form>
        </div>



    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    {{-- <script>
        document.getElementById('upload-link').addEventListener('click', function(e) {
            e.preventDefault();
            document.getElementById('upload-input').click();
        });

        document.getElementById('upload-input').addEventListener('change', function() {
            const file = this.files[0];
            if (file) {
                const formData = new FormData();
                formData.append('profile_picture', file);

                // Lakukan AJAX request untuk mengunggah gambar
                fetch('/upload-profile-picture', {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}' // jika Anda menggunakan Laravel
                    }
                }).then(response => {
                    return response.json();
                }).then(data => {
                    if (data.success) {
                        // Ganti gambar profil dengan yang baru
                        document.querySelector('img').src = data.profile_picture_url;
                    } else {
                        alert('Gagal mengunggah gambar');
                    }
                }).catch(error => {
                    console.error('Error:', error);
                    alert('Terjadi kesalahan saat mengunggah gambar');
                });
            }
        });
    </script> --}}
@endsection
