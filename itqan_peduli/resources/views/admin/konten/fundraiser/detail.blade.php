@extends('admin.layout.main')

@section('konten')
    <div class="welcome bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
        <div class="kanan my-auto">
            <a type="button" href="{{ url('/berita') }}" class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                Kembali
            </a>
        </div>
    </div>  
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-10 p-5 bg-white">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nama Fundraiser
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Jenis Transaksi
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nominal
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Tanggal 
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Status 
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nama Bank
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Nomor Rekening
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        Kode Bank
                    </th>
                    <td class="px-6 py-4">
                        Silver
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection