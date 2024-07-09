@extends('front.layout.main3')

@section('konten')

<div class="relative z-10">
    <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
        <div class="flex items-center rounded-full bg-green-200 p-2">
            <svg class="w-7 h-7 text-green-700 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
            </svg>
        </div>
        <div class="flex items-center ml-7">
            <p class="font-semibold">Donasi Instan</p>
        </div>
    </div>
</div>

<div class="mt-20">
    <div>
        <p>Donasi Instan</p>
        <p>Buat kegiatan donasimu lebih mudah disini</p>
    </div>
    <div>
        <div class="relative" id="nominal-input-container">
            <input type="text" id="nominal" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Tes" readonly />
            <label for="nominal" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Nominal</label>
        </div>
        <div class="relative" id="payment-method-input-container">
            <input type="text" id="payment-method" class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder="Tes" readonly />
            <label for="payment-method" class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4">Metode Pembayaran</label>
        </div>
        <div id="data" class="w-full p-2 bg-slate-200 ">
            <div>Nama disamarkan</div>
            <div>Muhammad Sidiq</div>
            <div>0812-1212-1212</div>
        </div>
    </div>
    <div>
        <p>
            Dana Pengembangan Dakwah !
        </p>
        <div>
            <div>2,5%</div>
            <div>5%</div>
            <div>7,5%</div>
            <div>10%</div>
        </div>
        <div>Nominal</div>
    </div>
    <div>
        <div>Rincian Pembayaran Donasi</div>
        <div>
            <div>Dana untuk donasi</div>
            <div>Rp 237.500</div>
        </div>
        <div>
            <div>Dana Pengembangan Dakwah</div>
            <div>Rp 12.500</div>
        </div>
        <div>
            <div>Total Donasi</div>
            <div>Rp 250.000</div>
        </div>
    </div>
    <button type="submit">Lanjutkan</button>
</div>

<div id="nominal-page" class="hidden fixed inset-0 bg-white p-4 w-[512px] mx-auto z-50">
    <div class="flex justify-between items-center">
        <h2>Pilih atau Masukkan Nominal</h2>
        <button onclick="closeNominalPage()">Close</button>
    </div>
    <div class="mt-4">
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectNominal('10000')">Rp 10.000</button>
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectNominal('50000')">Rp 50.000</button>
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectNominal('100000')">Rp 100.000</button>
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectNominal('500000')">Rp 500.000</button>
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectNominal('1000000')">Rp 1.000.000</button>
        <input type="text" id="nominal-input" class="border p-2 w-full mt-4" placeholder="Masukkan nominal lain">
        <button id="nominal-continue" class="mt-4 p-2 bg-blue-500 text-white" onclick="confirmNominal()">Lanjutkan</button>
    </div>
</div>

<div id="payment-method-page" class="hidden fixed inset-0 bg-white p-4 w-[512px] mx-auto z-50">
    <div class="flex justify-between items-center">
        <h2>Pilih Metode Pembayaran</h2>
        <button onclick="closePaymentMethodPage()">Close</button>
    </div>
    <div class="mt-4">
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectPaymentMethod('Bank Transfer')">Bank Transfer</button>
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectPaymentMethod('E-Wallet')">E-Wallet</button>
        <button class="p-2 bg-blue-500 text-white w-full mt-2" onclick="selectPaymentMethod('Credit Card')">Credit Card</button>
    </div>
</div>

<script>
    document.getElementById('nominal').addEventListener('click', function() {
        document.getElementById('nominal-page').classList.remove('hidden');
    });

    function closeNominalPage() {
        document.getElementById('nominal-page').classList.add('hidden');
    }

    function selectNominal(nominal) {
        document.getElementById('nominal-input').value = nominal;
    }

    function confirmNominal() {
        var nominalValue = document.getElementById('nominal-input').value;
        document.getElementById('nominal').value = nominalValue;
        closeNominalPage();
    }

    document.getElementById('payment-method').addEventListener('click', function() {
        document.getElementById('payment-method-page').classList.remove('hidden');
    });

    function closePaymentMethodPage() {
        document.getElementById('payment-method-page').classList.add('hidden');
    }

    function selectPaymentMethod(method) {
        document.getElementById('payment-method').value = method;
        closePaymentMethodPage();
    }
</script>

@endsection

