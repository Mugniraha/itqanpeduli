@extends('admin.layout.main')

@section('konten')
    <div class="welcome bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
        <div class="kanan my-auto">
            <a href="{{ url('/tranfun') }}" class="text-green-700 bg-white px-5 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg py-2.5 w-32 h-12 text-center">
                Kembali
            </a>
        </div>
    </div>  
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10 p-5 bg-white">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <tbody>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nama Fundraiser
                    </th>
                    <td class="px-6 py-4">
                        {{ $transaksi->fundraiser }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Jenis Transaksi
                    </th>
                    <td class="px-6 py-4">
                        {{ $transaksi->tipe }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nominal
                    </th>
                    <td class="px-6 py-4">
                        Rp {{ number_format($transaksi->nominal, 0, ',', '.') }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Tanggal
                    </th>
                    <td class="px-6 py-4">
                        {{ $transaksi->created_at ? $transaksi->created_at->format('d-m-Y') : '-' }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Status
                    </th>
                    <td class="px-6 py-4">
                        {{ ucfirst($transaksi->status) }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nama Bank
                    </th>
                    <td class="px-6 py-4">
                        {{ $transaksi->nama_bank }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nomor Rekening
                    </th>
                    <td class="px-6 py-4">
                        {{ $transaksi->nomor_rekening }}
                    </td>
                </tr>
                <tr class="border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Kode Bank
                    </th>
                    <td class="px-6 py-4">
                        {{ $transaksi->kode_bank }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
