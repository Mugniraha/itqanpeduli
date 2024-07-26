@extends('front.layout.main3')

@section('konten')
    <div class="bungkus bg-white min-h-screen overflow-auto">
        <div class="header flex">
            <a href="/akun-fundraiser/{id}" class="m-5">
                <svg class="w-8 h-8 text-green-600 p-0.5 rounded-full shadow-md bg-gray-100" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4"/>
                </svg>
            </a>
            <p class="my-auto font-bold">Penarikan Komisi</p>
        </div>
        <div class="konten m-5">
            <!-- Saldo Tersedia -->
            <div class="card shadow-md rounded-xl p-3 my-5 border-2 border-gray-300 bg-green-50">
                <p class="text-lg font-medium">Saldo Tersedia</p>
                <p class="text-lg font-bold text-green-700 my-1">
                    {{ number_format($totalKomisi, 2, ',', '.') }}
                </p>
                <p class="text-sm">Tarik komisi yang anda dapatkan dari link referral</p>
            </div>

            <!-- Tujuan Penarikan -->
            <div class="bank mt-10">
                <div class="atas flex justify-between">
                    <p class="text-sm font-semibold">Tujuan Penarikan</p>
                    <a href="/pilih-bank/{id}" class="text-sm font-semibold cursor-pointer">Ubah Bank</a>
                </div>
                <div class="relative w-full my-3 mb-8 p-4 border border-gray-400 rounded-xl flex justify-between">
                    <div id="isi-data">
                        @if(session('selectedBankAccount'))
                            @php $selectedBankAccount = session('selectedBankAccount'); @endphp
                            <div class="text-lg text-gray-700">{{ $selectedBankAccount->account_name }}</div>
                            <div class="text-gray-700"><b>{{ $selectedBankAccount->bank_name }}</b> - {{ $selectedBankAccount->account_number }}</div>
                        @else
                            <p class="text-gray-700">No bank accounts available.</p>
                        @endif
                    </div>
                </div>
            </div>
            <form action="{{ route('penarikan.komisi') }}" method="POST">
                @csrf
                <div class="relative">
                    <input type="text" name="amount" 
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" 
                        placeholder="Masukkan nominal" />
                    <label for="amount" 
                        class="absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-4 scale-75 left-2 top-2 z-10 origin-[0] bg-white dark:bg-gray-900 px-2 peer-focus:px-2 peer-focus:text-blue-600 peer-focus:dark:text-blue-500">
                        Masukkan Nominal Penarikan
                    </label>
                </div>
                <button type="submit" class="bg-green-700 text-white text-center w-full my-4 py-2 rounded-md font-semibold shadow-md">Tarik Komisi</button>
            </form>

            <!-- Riwayat Penarikan -->
            <div class="riwayat my-20 mx">
                <p class="font-bold text-lg my-2">Riwayat Penarikan</p>
                @forelse($transactionHistory as $transaction)
                    <div class="card flex justify-between mt-6 border-b-2 pb-2">
                        <div class="kiri">
                            <p class="text-xs text-gray-400">{{ $transaction->id }}</p>
                            <p class="my-1.5 font-semibold">Penarikan Komisi</p>
                            <p class="text-xs text-gray-400">{{ $transaction->created_at->format('d/m/y H:i') }}</p>
                        </div>
                        <div class="kanan my-auto text-right">
                            <p class="text-lg font-bold">{{ number_format($transaction->amount, 2, ',', '.') }}</p>
                            <p class="text-sm {{ $transaction->status == 'completed' ? 'text-green-700' : 'text-yellow-700' }} font-semibold">{{ ucfirst($transaction->status) }}</p>
                        </div>
                    </div>
                @empty
                    <p class="text-center text-gray-700">Tidak ada riwayat transaksi.</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection
