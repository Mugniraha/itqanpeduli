@extends('front.layout.main3')

@section('konten')
<div class="p-4 bg-white">
    <img src="/images/logomediaberbagi.png" class="w-48 h-auto" alt="">

    <a href="{{ url('/akun/{id}') }}" type="button"
        class="text-white my-6 bg-gray-300 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2">
        <svg class="w-6 h-6 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
            width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M5 12h14M5 12l4-4m-4 4 4 4" />
        </svg>
    </a>

    <div class="isi">
        <div class="text-2xl font-bold text-black">Daftar Duta Amal</div>
        <div class="text-lg text-black">Jadi pasukan kebaikan bersama kami Yayasan Media Berbagi</div>

        <form action="{{ route('fundraisers.store') }}" method="POST">
            @csrf

            <div class="relative my-4">
                <label for="jenis_duta" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Jenis Duta</label>
                <select id="jenis_duta" name="tipe" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" disabled selected>Pilih jenis duta</option>
                    <option value="Perorangan">Perorangan</option>
                    <option value="Kelompok">Kelompok</option>
                </select>
            </div>

            <div class="relative my-4">
                <label for="nama_lengkap" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nama Lengkap</label>
                <input type="text" id="nama_lengkap" name="nama" placeholder="Masukkan nama lengkap anda" class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>

            <div class="relative my-4">
                <label for="no_wa" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nomor Whatsapp</label>
                <input type="text" id="no_wa" name="no_telepon" placeholder="Contoh: 0821-21xx-xxxx" class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>

            <div class="relative my-4">
                <label for="alamat_email" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Alamat Email</label>
                <input type="email" id="alamat_email" name="email" placeholder="Contoh: mediaberbagi@gmail.com" class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
            </div>

            <div class="relative my-4">
                <label for="provinsi" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Provinsi</label>
                <select id="provinsi" name="provinsi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" disabled selected>Pilih provinsi tempat anda tinggal</option>
                </select>
            </div>

            <!-- Kab/Kota -->
            <div class="relative my-4">
                <label for="kabkota" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kab/ Kota</label>
                <select id="kabkota" name="kabkota" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="" disabled selected>Pilih Kab/ Kota tempat anda tinggal</option>
                </select>
            </div>

            <div class="relative my-4">
                <label for="password1" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Kata Sandi</label>
                <input type="password" id="password1" name="password" placeholder="Masukkan kata sandi anda" class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <svg id="toggleVisibility" class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </div>
            </div>

            <div class="relative my-4">
                <label for="password2" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Konfirmasi Kata Sandi</label>
                <input type="password" id="password2" name="password_confirmation" placeholder="Masukkan kata sandi anda" class="w-full py-3 px-4 border border-gray-300 rounded-md focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent">
                <div class="absolute inset-y-0 right-0 pr-3 flex items-center">
                    <svg id="toggleVisibility1" class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                        <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                    </svg>
                </div>
            </div>

            <button type="submit" class="px-6 py-3.5 mt-6 w-full text-base font-medium text-white inline-flex items-center border border-green-700 bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-100 rounded-2xl">
                <p class="text-white mx-auto text-lg text-center font-semibold">Daftar Duta Amal</p>
            </button>
        </form>
    </div>
</div>

<script>
    // Fungsi untuk menampilkan atau menyembunyikan kata sandi
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

    // Fungsi untuk mengambil dan menampilkan daftar provinsi
    fetch('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')
        .then(response => response.json())
        .then(provinces => {
            const provinsiSelect = document.getElementById('provinsi');
            provinsiSelect.innerHTML = '<option value="" disabled selected>Pilih provinsi tempat anda tinggal</option>';

            provinces.forEach(province => {
                const option = document.createElement('option');
                option.value = province.name;
                option.textContent = province.name;
                provinsiSelect.appendChild(option);
            });
        })
        .catch(error => console.error('Error fetching provinces:', error));

    // Fungsi untuk mengambil dan menampilkan daftar kabupaten/kota berdasarkan provinsi yang dipilih
    document.getElementById('provinsi').addEventListener('change', function() {
        const provinsiId = this.value;

        if (provinsiId) {
            fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiId}.json`)
                .then(response => response.json())
                .then(kabkotaList => {
                    const kabkotaSelect = document.getElementById('kabkota');
                    kabkotaSelect.innerHTML = '<option value="" disabled selected>Pilih Kab/ Kota</option>';

                    kabkotaList.forEach(kabkota => {
                        const option = document.createElement('option');
                        option.value = kabkota.name;
                        option.textContent = kabkota.name;
                        kabkotaSelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching kabupaten/kota:', error));
        } else {
            document.getElementById('kabkota').innerHTML = '<option value="" disabled selected>Pilih Kab/ Kota tempat anda tinggal</option>';
        }
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endsection
