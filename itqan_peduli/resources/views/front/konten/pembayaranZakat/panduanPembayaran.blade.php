@extends('front.layout.main3')

@section('konten')

@if($payment->metode_pembayaran  === 'e-wallet')
    <div class="relative z-40">
        <div id="navBar" class="fixed z-40 bg-white w-[512px] h-auto flex justify-between content-center p-2.5 py-4 px-6">
            <div class="flex">
                <div class="flex items-center">
                    <div class="rounded-full bg-green-200 p-2">
                        <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center ml-7">
                    <div>
                        <p class="font-bold">Penghasilan</p>
                        <p class="">Perbulan</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <p class="rounded-full bg-green-200 px-4 py-2 font-bold text-xl text-green-700">?</p>
            </div>
        </div>
    </div>

    <div class="mx-8 mt-20 mb-10 grid gap-3">
        <div class="flex justify-between items-center">
            @if($payment->order_id)
                <div>
                    <p class="font-semibold text-gray-600 text-sm">No. Invoice</p>
                    <p class="font-semibold ">{{$payment->order_id}}</p>
                </div>
            @endif
            <div>
                {{-- <p class="font-semibold text-gray-600 py-1 px-2 rounded-xl border border-green-600 bg-green-100">Pending</p> --}}
            </div>
        </div>
        <div class="grid items-center w-full bg-green-100 rounded-xl p-6">
            <div class="text-center grid gap-3">

                <div>
                    <p class="text-gray-600 font-semibold text-sm">Total Donasi</p>
                    <span class="font-bold text-lg flex items-center justify-center gap-3">Rp {{ number_format($payment->nominal_total, 0, ',', '.') }}
                        <p class="text-green-700 text-sm flex items-center">Salin</p></span>
                </div>
            </div>
            <div class="relative mt-3 flex justify-center">
                @if($payment->order_id)
                    Terimakasih Sudah Berzakat
                @else
                    <form id="payment-form" action="{{ route('midtrans.transaction.create', ['id' => $payment->id]) }}" method="POST">
                        @csrf
                        <button id="pay-button" class="bg-green-700 p-3 text-center  px-10 rounded-xl text-white" type="button">
                            Bayar Sekarang
                        </button>
                    </form>
                @endif
            </div>
            <div class="bg-yellow-100 border border-yellow-400 p-4 rounded-xl mt-3">
                <p class="text-gray-500"><b class="font-semibold text-gray-700">PENTING!</b> Mohon transfer tepat sampai 3 angka terakhir agar donasi anda lebih mudah divertifikasi</p>
            </div>
        </div>
        <div class="border border-green-600 rounded-xl py-4 w-full flex gap-4 items-center justify-center text-green-600">
            <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
            <p class="font-bold">Cek Status Pembayaran</p>
        </div>


        <div class="grid gap-2">
            <a class="bg-blue-800 rounded-xl p-3 flex items-center gap-3 justify-center text-white">
                <div class="bg-white rounded-full">
                    <svg class="w-6 h-6 text-blue-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="font-semibold">Kirim ke Facebook</p>
            </a>
            <a class="bg-green-600 rounded-xl p-3 flex items-center gap-3 justify-center text-white">
                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                </svg>
                <p class="font-semibold">Kirim ke WhatsApp</p>
            </a>
        </div>
    </div>

    <div class="h-dvh">

    </div>

    <div id="detail-pembayaran-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50 overflow-y-auto">
        <div class="relative z-50">
            <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
                <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closePanduanPembayaranPage()">
                    <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                    </svg>
                </div>
                <div class="flex items-center ml-7">
                    <p class="font-semibold">Panduan Pembayaran</p>
                </div>
            </div>
        </div>
        <div class="mx-8 mt-20">
            <div class="bg-green-100 rounded-xl p-5 grid gap-4">
                <p>1. Kamu akan mendapatkan Notifikasi pembayaran pada aplikasi <b>OVO</b></p>
                <p>2. Buka aplikas aplikasi <b>OVO</b></p>
                <p>3. Akan muncul detail transaksi. <b>Pastikandata transaksi sudah sesuai.</b></p>
                <p>4. Selesaikan proses pembayaran kamu.</p>
                <p>5. Transaksi selesai. Simpan bukti transaksi kamu</p>
            </div>
        </div>
    </div>


@else
    <div class="relative z-40">
        <div id="navBar" class="z-40 fixed bg-white w-[512px] h-auto flex justify-between content-center p-2.5 py-4 px-6">
            <div class="flex">
                <div class="flex items-center">
                    <div class="rounded-full bg-green-200 p-2">
                        <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                        </svg>
                    </div>
                </div>
                <div class="flex items-center ml-7">
                    <div>
                        <p class="font-bold">Penghasilan</p>
                        <p class="">Perbulan</p>
                    </div>
                </div>
            </div>
            <div class="flex items-center">
                <p class="rounded-full bg-green-200 px-4 py-2 font-bold text-xl text-green-700">?</p>
            </div>
        </div>
    </div>

    <div class="mx-8 mt-20 mb-10 grid gap-3">
        <div class="flex justify-between items-center">
            @if($payment->order_id)
                <div>
                    <p class="font-semibold text-gray-600 text-sm">No. Invoice</p>
                    <p class="font-semibold ">{{$payment->order_id}}</p>
                </div>
                <div>
                    {{-- <p class="font-semibold text-gray-600 py-1 px-2 rounded-xl border border-green-600 bg-green-100">Pending</p> --}}
                </div>
            @endif
        </div>
        <div class="bg-yellow-100 border border-yellow-400 p-4 rounded-xl">
            <p class="text-gray-500">Silahkan melakukan transfer <b class="font-semibold text-gray-700">sebelum 06 Februari 2021 11:15:26 WIB</b>, atau donasi akan otomatis dibatalkan oleh sistem kami.</p>
        </div>
        <div class="grid items-center w-full bg-green-100 rounded-xl p-6">
            <div class="text-center grid">
                <div>
                    <p class="text-gray-600 text-md">Pembayaran dilakukan ke rekening a/n</p>
                    <span class="font-semibold" id="nama_pemilik_bank"></span>
                </div>
                <div>
                    <p class="text-gray-500 font-bold text-md ">Total Donasi</p>
                    <span class="font-bold text-lg flex items-center justify-center gap-3">Rp {{ number_format($payment->nominal_total, 0, ',', '.') }}
                        <p class="text-green-700 text-sm flex items-center">Salin</p></span>
                </div>
                <div class="relative mt-3 mx-8 hidden" id="norek-details">
                    <img id="payment-method-image" class="h-5 absolute top-4 bottom-0 left-0 flex items-center pl-4" src="{{ url('/logo_pembayaran.png')}}" alt="logo">
                    <input type="text" id="nomor_rekening" class="cursor-default block px-4 pl-20 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-white rounded-xl border border-green-600 appearance-none focus:outline-none focus:ring-0 focus:border-green-600 peer font-semibold" value="" readonly />
                    <p class="absolute inset-y-0 right-5 font-semibold text-green-700 flex items-center justify-center pointer-events-none">Salin</p>
                </div>
                <div id="bank-details" class="" style="display: none">
                    <input type="hidden"  id="nama_bank" value="">

                </div>

            </div>
            <div class="relative mt-3 flex flex-col justify-center">
                <div class="my-3 mx-8 bg-green-100 border border-green-600 rounded-xl p-3">
                    <div class="my-1">
                        <p class="text-sm">Pembayaran Instan</p>
                        <p class="text-xs">Verifikasi Otomatis, minimal pembayaran 10 ribu</p>
                    </div>
                    <div class="">
                        <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4 bg-transparent hover:bg-green-200 border border-green-700 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'BSI')">
                            <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer BSI</p></button>
                        <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4  bg-transparent hover:bg-green-200 border border-green-700 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'BRI')">
                            <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer BRI</p></button>
                        <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4  bg-transparent hover:bg-green-200 border border-green-700 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'Mandiri')">
                            <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer Mandiri</p></button>
                        <button class="flex gap-4 items-center rounded-xl text-left text-sm p-4  bg-transparent hover:bg-green-200 border border-green-700 font-semibold w-full mt-2" onclick="selectPaymentMethod('{{ url('/logo_pembayaran.png') }}', 'BCA')">
                            <img src="{{ url('/logo_pembayaran.png')}}" alt="" class="h-5"><p>Transfer BCA</p></button>
                    </div>
                </div>
            </div>

            <div class="bg-yellow-100 border border-yellow-400 p-4 rounded-xl mt-3">
                <p class="text-gray-500"><b class="font-semibold text-gray-700">PENTING!</b> Mohon transfer tepat sampai 3 angka terakhir agar donasi anda lebih mudah divertifikasi</p>
            </div>
        </div>
        <div class="border border-green-600 rounded-xl py-4 w-full flex gap-4 items-center justify-center text-green-600">
            <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.5 11.5 11 14l4-4m6 2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"/>
            </svg>
            <p class="font-bold">Cek Status Pembayaran</p>
        </div>
            <button class="bg-green-700 rounded-xl py-4 w-full flex gap-4 items-center justify-center text-white cursor-pointer" data-modal-target="uploadBukti-modal" data-modal-toggle="uploadBukti-modal">
                Upload Bukti Pembayaran
            </button>
        </div>


        <div class="bg-yellow-100 border border-yellow-400 p-4 rounded-xl mx-8">
            <p class="text-gray-500">Dana yang di donasikan melalui <span>Amal Kampung Maghfirah</span> bukan bersumber dan bukan untuk tujuan praktik pencucian uang (money laundry), termasuk teroris dan kejahatan keuangan lainnya.</p>
        </div>
        <div class="grid gap-2 mx-8">
            <div class="">
                <p class="font-bold">Panduan Pembayaran</p>
            </div>
            <div id="accordion-collapse" data-accordion="collapse">
                <h2 id="accordion-collapse-heading-1" class="bg-gray-100 rounded-xl">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-righ bg-gray-100 rounded-t-xl gap-3" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
                    <span class="font-bold">Transfer via ATM</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-1" class="hidden" aria-labelledby="accordion-collapse-heading-1">
                    <div class="bg-gray-100 rounded-b-xl px-8 pb-8 grid gap-4">
                        <p>1. Masukan kartu ATM</p>
                        <p>2. Pilih bahasa</p>
                        <p>3. Masukan <b>PIN ATM</b></p>
                        <p>4. Pilih Transfer</p>
                        <p>5. Masukan <b>kode bank</b> dan nomor <b>rekening tujuan</b> kemudian pilih benar</p>
                        <p>6. Masukan jumlah transfer kemudian pilih benar</p>
                        <p>7. Cek ulang nomor rekening, nama pemilik dan jumlah transfer, apabila sudah yakin tekan <b>"YA"</b></p>
                        <p>8. Tunggu sebentar dan proses transfer selesai.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-2" class="mt-3 bg-gray-100 rounded-xl">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right bg-gray-100 rounded-t-xl gap-3" data-accordion-target="#accordion-collapse-body-2" aria-expanded="false" aria-controls="accordion-collapse-body-2">
                    <span class="font-bold">Transfer via ATM ke Bank lain</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-2" class="hidden" aria-labelledby="accordion-collapse-heading-2">
                    <div class="bg-gray-100 rounded-b-xl px-8 pb-8 grid gap-4">
                        <p>1. Masukan kartu ATM</p>
                        <p>2. Pilih bahasa</p>
                        <p>3. Masukan <b>PIN ATM</b></p>
                        <p>4. Pilih Transfer</p>
                        <p>5. Masukan <b>kode bank</b> dan nomor <b>rekening tujuan</b> kemudian pilih benar</p>
                        <p>6. Masukan jumlah transfer kemudian pilih benar</p>
                        <p>7. Cek ulang nomor rekening, nama pemilik dan jumlah transfer, apabila sudah yakin tekan <b>"YA"</b></p>
                        <p>8. Tunggu sebentar dan proses transfer selesai.</p>
                    </div>
                </div>
                <h2 id="accordion-collapse-heading-3" class="mt-3 bg-gray-100 rounded-xl">
                <button type="button" class="flex items-center justify-between w-full p-5 font-medium rtl:text-right bg-gray-100 rounded-t-xl gap-3" data-accordion-target="#accordion-collapse-body-3" aria-expanded="false" aria-controls="accordion-collapse-body-3">
                    <span class="font-bold">Transfer via Mobile Banking</span>
                    <svg data-accordion-icon class="w-3 h-3 rotate-180 shrink-0" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5 5 1 1 5"/>
                    </svg>
                </button>
                </h2>
                <div id="accordion-collapse-body-3" class="hidden" aria-labelledby="accordion-collapse-heading-3">
                    <div class="bg-gray-100 rounded-b-xl px-8 pb-8 grid gap-4">
                        <p>1. Masukan kartu ATM</p>
                        <p>2. Pilih bahasa</p>
                        <p>3. Masukan <b>PIN ATM</b></p>
                        <p>4. Pilih Transfer</p>
                        <p>5. Masukan <b>kode bank</b> dan nomor <b>rekening tujuan</b> kemudian pilih benar</p>
                        <p>6. Masukan jumlah transfer kemudian pilih benar</p>
                        <p>7. Cek ulang nomor rekening, nama pemilik dan jumlah transfer, apabila sudah yakin tekan <b>"YA"</b></p>
                        <p>8. Tunggu sebentar dan proses transfer selesai.</p>
                    </div>
                </div>
            </div>
            <div class="flex justify-center">
                <p class="text-sm">Yuk bantu sebarkan kebaikan ke teman dan keluarga</p>
            </div>
        </div>
        <div class="grid gap-2 mx-8 mb-10 mt-5">
            <a class="bg-blue-800 rounded-xl p-3 flex items-center gap-3 justify-center text-white">
                <div class="bg-white rounded-full">
                    <svg class="w-6 h-6 text-blue-800 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                    </svg>
                </div>
                <p class="font-semibold">Kirim ke Facebook</p>
            </a>
            <a class="bg-green-600 rounded-xl p-3 flex items-center gap-3 justify-center text-white">
                <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                    <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                </svg>
                <p class="font-semibold">Kirim ke WhatsApp</p>
            </a>
        </div>
    </div>

    <div id="detail-pembayaran-page" class="hidden fixed inset-0 bg-white w-[512px] mx-auto z-50 overflow-y-auto">
        <div class="relative z-50">
            <div id="navBar" class="z-50 fixed bg-white w-[512px] h-auto flex content-center p-2.5 py-4 pl-6">
                <div class="flex items-center rounded-full bg-green-100 p-2 cursor-pointer" onclick="closePanduanPembayaranPage()">
                    <svg class="w-7 h-7 text-green-700" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                    </svg>
                </div>
                <div class="flex items-center ml-7">
                    <p class="font-semibold">Panduan Pembayaran</p>
                </div>
            </div>
        </div>
        <div class="mx-8 mt-20">
            <div class="bg-green-100 rounded-xl p-5 grid gap-4">
                <p>1. Kamu akan mendapatkan Notifikasi pembayaran pada aplikasi <b>OVO</b></p>
                <p>2. Buka aplikas aplikasi <b>OVO</b></p>
                <p>3. Akan muncul detail transaksi. <b>Pastikandata transaksi sudah sesuai.</b></p>
                <p>4. Selesaikan proses pembayaran kamu.</p>
                <p>5. Transaksi selesai. Simpan bukti transaksi kamu</p>
            </div>
        </div>
    </div>

    <div id="uploadBukti-modal" tabindex="50" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t">
                    <h3 class="text-xl font-semibold text-gray-900">
                        Upload Bukti Pembayaran
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-hide="uploadBukti-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5">
                    <form class="space-y-4" method="POST" action="{{route('zakat.bayarManual', ['id' => $payment->id])}}" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <input class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50 focus:outline-none" aria-describedby="user_avatar_help" id="user_avatar" type="file" name="bukti_pembayaran">
                            <div class="mt-1 text-sm text-gray-500"  id="user_avatar_help">Upload Bukti Pembayaran Anda</div>
                        </div>

                        <button type="submit" class="w-full text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Upload</button>
                    </form>
                </div>
            </div>
        </div>
    </div>



@endif



<script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js" data-client-key="SB-Mid-client-2u1-_W8LgLes-J10"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script type="text/javascript">
    var transactionToken = ''; // Variabel untuk menyimpan token transaksi
    // Fungsi untuk menangani klik tombol pembayaran
    var payButton = document.getElementById('pay-button');
    payButton.addEventListener('click', function () {
        // Mengambil token transaksi dari server Laravel
        fetch('{{ route("midtrans.transaction.create", ["id" => $payment->id]) }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            },
            body: JSON.stringify({
                // Kirim data apa pun yang diperlukan untuk pembuatan transaksi
            })
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.status_code === 201) {
                // Jika permintaan berhasil, tangkap token transaksi
                transactionToken = data.transaction_token;

                // Gunakan token transaksi untuk menampilkan Snap popup
                window.snap.pay(transactionToken, {
                    onSuccess: function(result) {
                        console.log(result);
                        Swal.fire({
                            title: "Pembayaran Berhasil",
                            width: 300,
                            icon: "success",
                            timer: 1500
                        }).then(() => {
                            window.location.href = 'https://7c7d-139-228-106-197.ngrok-free.app/zakat-tampilan';
                        });
                    },
                    onPending: function(result) {
                        alert("Menunggu pembayaran...");
                        console.log(result);
                        window.location.reload();
                    },
                    onError: function(result) {
                        alert("Pembayaran gagal!");
                        console.log(result);
                        window.location.reload();
                    },
                    onClose: function() {
                        alert('Anda menutup popup tanpa menyelesaikan pembayaran.');
                        window.location.reload();
                    },
                });
            } else {
                alert("Terjadi kesalahan saat memproses pembayaran. Silakan coba lagi.");
            }
        })
        .catch(function(error) {
            console.error('Error:', error);
            alert("Terjadi kesalahan saat memproses pembayaran. Silakan coba lagi.");
        });
    });


</script>

<script>
    document.getElementById('panduan-pembayaran').addEventListener('click', function() {
        document.getElementById('detail-pembayaran-page').classList.remove('hidden');
    });

    function closePanduanPembayaranPage() {
        document.getElementById('detail-pembayaran-page').classList.add('hidden');
    }

    function selectPaymentMethod(imageUrl, bankName){
        fetch(`/get-bank-details/${bankName}`)
            .then(response => response.json())
            .then(data => {
                document.getElementById('nama_bank').innerText = data.nama_bank;
                document.getElementById('nama_pemilik_bank').innerText = data.nama_pemilik_bank;
                document.getElementById('nomor_rekening').value = data.nomor_rekening;
                document.getElementById('payment-method-image').src = imageUrl;
                document.getElementById('norek-details').classList.remove('hidden');
            })
        .catch(error => console.error('Error fetching bank details:', error));
    }

</script>
@endsection
