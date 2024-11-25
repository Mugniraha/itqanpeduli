@extends('front.layout.main3')
@section('konten')

<div class="relative z-20">
    <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6 shadow-lg">
        <a href="/artikel/{id}" class="flex items-center rounded-full bg-green-200 p-2">
            <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </a>
        <div class="flex items-center ml-7">
            <p class="font-semibold">Nominal Donasi</p>
        </div>
    </div>
</div>

<div class="mt-24 mb-12 mx-8 grid gap-5">
    <div class="bg-white border border-gray-200 rounded-lg shadow">
        <a href="#">
            <img class="rounded-t-lg h-56 w-full object-cover" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="Card Image 1" />
        </a>
        <div class="p-5">
            <p class="mb-3 font-normal text-gray-700 line-clamp-2">Cianjut Berduka: 200 lebih meninggal dunia. cianjur berduka</p>
        </div>
    </div>
</div>

<div class="flex justify-between items-center mx-8 my-4">
        <p class="font-bold">Masukan Nominal Donasi anda</p>
    </div>
    <div class="t-4 grid grid-cols-3 auto-cols-auto mx-8 gap-1">
        <button class="nominal-button rounded-xl p-2 text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('10000', this)">10 Rb</button>
        <button class="nominal-button rounded-xl p-2 text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('25000', this)">25 Rb</button>
        <button class="nominal-button rounded-xl p-2 text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('50000', this)">50 Rb</button>
        <button class="nominal-button rounded-xl p-2 text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('100000', this)">100 Rb</button>
        <button class="nominal-button rounded-xl p-2 text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('250000', this)">250 Rb</button>
        <button class="nominal-button rounded-xl p-2 text-green-700 border border-gray-400 font-semibold w-full" onclick="selectNominal('500000', this)">500 Rb</button>
        {{-- <input type="text" id="nominal-input" class="col-span-3 border p-2 w-full mt-4" placeholder="Masukkan nominal lain"> --}}
        <div class="relative col-span-3 mt-3" id="nominal-input2-container">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3 text-gray-500">Rp</span>
            <input type="number" min="10000" id="nominal-input" class="block px-4 pl-9 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-xl border-1 border-gray-400 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer" placeholder="0"/>
            <label for="pengembangan-input" class="absolute text-sm duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-green-100 mx-2 px-2 peer-focus:px-2 peer-focus:text-green-600 peer-focus:dark:text-green-500 peer-placeholder-shown:scale-75 peer-placeholder-shown:-translate-y-4 peer-placeholder-shown:top-2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nominal lain</label>
        </div>
        <div class="whitespace-nowrap text-gray-500 text-xs">Minimal Donasi Rp10.000</div>
        <div class="flex mt-4 mb-4 col-span-3">
            <a href="/pembayaran-program" class="w-[512px] flex justify-center focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2">Lanjutkan</a>
        </div>
    </div>

    <script>

    var nominalValue = 0;
    var pengembanganValue = 0;

    function confirmNominal() {
        nominalValue = parseFloat(document.getElementById('nominal-input').value) || 0;
        document.getElementById('nominal').value = nominalValue;
        hitungTotalDonasi();
        closeNominalPage();
    }
    // function confirmNominal() {
    //     var nominalValue = document.getElementById('nominal-input').value;
    // }

    function selectPengembangan(persentase, element) {
        var buttons = document.querySelectorAll('.pengembang');
        buttons.forEach(button => {
            button.classList.remove('bg-green-600'),
            button.classList.remove('text-white');
        });
        element.classList.add('bg-green-600'),
        element.classList.add('text-white');

        pengembanganValue = (nominalValue * persentase / 100).toFixed(2);
        document.getElementById('pengembangan-input').value = pengembanganValue;
        hitungTotalDonasi();
    }

    function inputManual() {
        pengembanganValue = parseFloat(document.getElementById('pengembangan-input').value.replace(/\D/g, '')) || 0;
        hitungTotalDonasi();
    }

    function hitungTotalDonasi() {
        var danaPengembangan = parseFloat(pengembanganValue);
        var totalDonasi = nominalValue + danaPengembangan;

        document.getElementById('dana-donasi').textContent = 'Rp ' + formatRupiah(nominalValue);
        document.getElementById('dana-pengembangan').textContent = 'Rp ' + formatRupiah(danaPengembangan);
        document.getElementById('total-donasi').textContent = 'Rp ' + formatRupiah(totalDonasi);
    }

    function formatRupiah(angka) {
        return angka.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }

    // Inisialisasi nilai awal
    confirmNominal();


    document.getElementById('nominal').addEventListener('click', function() {
        document.getElementById('nominal-page').classList.remove('hidden');
    });

    function closeNominalPage() {
        document.getElementById('nominal-page').classList.add('hidden');
    }

    // function selectNominal(nominal) {
    //     document.getElementById('nominal-input').value = nominal;
    // }

    function selectNominal(nominal, element) {
        var buttons = document.querySelectorAll('.nominal-button');
        buttons.forEach(button => {
            button.classList.remove('bg-green-600');
            button.classList.remove('text-white');
        });
        element.classList.add('bg-green-600');
        element.classList.add('text-white');

        document.getElementById('nominal-input').value = nominal;
    }

    // function confirmNominal() {
    //     var nominalValue = document.getElementById('nominal-input').value;
    //     document.getElementById('nominal').value = nominalValue;
    //     closeNominalPage();
    // }

    document.getElementById('payment-method').addEventListener('click', function() {
        document.getElementById('payment-method-page').classList.remove('hidden');
    });

    function closePaymentMethodPage() {
        document.getElementById('payment-method-page').classList.add('hidden');
    }

    function selectPaymentMethod(img, method) {
        document.getElementById('payment-method').value = method;

        var paymentImage = document.getElementById('payment-method-image');

        paymentImage.src = img;

        closePaymentMethodPage();
    }

    document.getElementById('data').addEventListener('click', function() {
        document.getElementById('data-input-page').classList.remove('hidden');
    });

    function closeDataInputPage() {
        document.getElementById('data-input-page').classList.add('hidden');
    }

    function toggleSamarkanNama() {
        var namaInput = document.getElementById('nama-input');
        var samarkanCheckbox = document.getElementById('samarkan-checkbox');

        if (samarkanCheckbox.checked) {
            namaInput.value = 'Hamba Allah';
            namaInput.disabled = true;
        } else {
            namaInput.value = '';
            namaInput.disabled = false;
        }
    }

    function confirmData() {
        var namaValue = document.getElementById('nama-input').value;
        var phoneValue = document.getElementById('phone-input').value;
        var doaValue = document.getElementById('doa-input').value;

        if (document.getElementById('samarkan-checkbox').checked) {
            namaValue = 'Hamba Allah';
        }

        document.getElementById('isi-data').innerHTML = `
            <div class="text-sm text-gray-400">Nama disamarkan</div>
            <div class="font-bold text-green-700">${namaValue}</div>
            <div class="text-sm text-gray-400">${phoneValue}</div>
        `;

        closeDataInputPage();
    }

    function closeDataInputPage() {
        document.getElementById('data-input-page').classList.add('hidden');
    }
</script>

@endsection