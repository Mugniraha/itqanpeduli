@extends('front.layout.main3')

@section('konten')
    <div class="bungkus">
        <div class="header flex">
            <a href="/komisi" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Data Bank</p>
        </div>
        <div class="konten">
            <div class="mx-8">
                <p class="text-lg font-semibold">Data Bank</p>
                @foreach($bankAccounts as $bankAccount)
                    <form action="{{ route('bank.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="bank_account_id" value="{{ $bankAccount->id }}">
                        <button type="submit" class="relative w-full text-left my-3 mb-1 p-4 shadow-md rounded-xl">
                            <div class="text-lg text-gray-700">{{ $bankAccount->account_name }}</div>
                            <div class="text-gray-700"><b>{{ $bankAccount->bank_name }}</b> - {{ $bankAccount->account_number }}</div>
                        </button>
                    </form>
                @endforeach



                <!-- Form to Add New Bank -->
                <form action="{{ route('bank.storeBankAccount') }}" method="POST">
                    <p class="font-semibold text-lg mt-5">Tambah Bank</p>
                    @csrf
                    <input type="hidden" name="fundraiser_id" value="{{ $fundraiserId }}">
                    <div class="relative mt-6">
                        <label for="bank_name" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nama Bank</label>
                        <input type="text" id="bank_name" name="bank_name" placeholder="Masukan nama bank" class="w-full py-3 px-4 text-sm border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" required>
                    </div>
                    <div class="relative mt-6">
                        <label for="account_number" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Nomor Rekening</label>
                        <input type="text" id="account_number" name="account_number" placeholder="Masukan nomor rekening" class="w-full py-3 px-4 text-sm border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" required>
                    </div>
                    <div class="relative mt-6">
                        <label for="account_name" class="absolute -top-3 left-3 bg-white px-1 font-semibold text-sm text-gray-600">Pemilik Rekening</label>
                        <input type="text" id="account_name" name="account_name" placeholder="Masukan nama pemilik rekening" class="w-full py-3 px-4 text-sm border border-gray-300 rounded-xl focus:outline-none focus:ring-1 focus:ring-green-600 focus:border-transparent" required>
                    </div>
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 my-4 w-full focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Tambah Bank</button>
                </form>
            </div>
        </div>
    </div>
@endsection
