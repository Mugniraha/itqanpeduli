@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
                <div class="kiri my-auto">
                    <p class="text-2xl font-semibold">List Transaksi Fundraiser</p>
                    <p class="text-sm text-gray-300 mt-2 font-normal">semua fundraiser yang terdaftar</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6 bg-white p-5">
            @if($transaksiFundraisers->isEmpty())
                <p class="text-center text-gray-700 font-semibold text-lg">Tidak ada data transaksi</p>
            @else
                <table class="w-full text-sm text-left rtl:text-right text-gray-700">
                    <thead class="text-md text-gray-700">
                        <tr class="font-extrabold">
                            <th scope="col" class="px-6 py-3">#</th>
                            <th scope="col" class="px-6 py-3">Fundraiser</th>
                            <th scope="col" class="px-6 py-3">Nominal</th>
                            <th scope="col" class="px-6 py-3">Tipe</th>
                            <th scope="col" class="px-6 py-3">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($transaksiFundraisers as $transaksi)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                                <th scope="row" class="px-6 py-4 font-normal text-gray-700">{{ $loop->iteration }}</th>
                                <td class="px-6 py-4">{{ $transaksi->fundraiser }}</td>
                                <td class="px-6 py-4">{{ $transaksi->nominal }}</td>
                                <td class="px-6 py-4">{{ $transaksi->tipe }}</td>
                                <td class="px-6 py-4 flex">
                                    <a href="/detail-transaksi" class="font-normal text-white bg-green-700 px-3 py-1">Lihat Detail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
                    <span class="text-sm font-normal text-gray-500 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900">1-10</span> of <span class="font-semibold text-gray-900">1000</span></span>
                    <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">Previous</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">1</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700">3</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                        </li>
                        <li>
                            <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                        </li>
                    </ul>
                </nav>
            @endif
        </div>
    </div>
@endsection
