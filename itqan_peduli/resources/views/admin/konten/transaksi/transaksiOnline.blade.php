@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">Transaksi Online</p>
                <p class="text-sm text-gray-300 font-semibold">Pantau semua donasi melalui payment gateway dan transfer</p>
            </div>
            <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                <a class="text-green-700">Export</a>
            </div>
        </div>
    </div>

    <div class="flex mt-10">
        <div class="bg-green-700 p-2 text-white font-normal rounded-t-sm">
            <span class="mx-3">Payment Gateway</span>
        </div>
        <div class="bg-white p-2 text-blue-600 font-normal">
            <a class="mx-3" href="{{route('transaksiOnlineManual')}}">Manual</a>
        </div>
    </div>
    <div class="relative overflow-x-auto sm:rounded-sm p-5">
        <table id="myTable" class="min-w-full leading-normal stripe w-full text-sm text-left rtl:text-right text-gray-500">
            <thead class="text-xs text-gray-700  bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 font-bold text-lg text-black">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nama Donatur
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nama Projek
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Tgl Transaksi
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Metode Pembayaran
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Nominal
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black">
                        Status
                    </th>
                    <th scope="col" class="px-6 py-3 font-bold text-base text-black w-32">
                        Aksi
                    </th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksi as $row)
                <tr class="odd:bg-gray-100 odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                    <td class="px-6 py-4 text-black text-base">
                        {{$loop->iteration}}
                    </td>
                    <td class="px-6 py-4 text-gray-800 text-base">
                        {{$row->order_id}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        {{$row->nama_donatur}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        {{$row->nama_program_zakat}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        {{$row->tgl_transaksi}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        <div class="text-green-500 bg-green-100 border w-full font-semibold rounded-lg text-sm px-2 py-1.5 text-center">
                            {{$row->metode_pembayaran}}
                        </div>
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        Rp {{ number_format($row->nominal_total, 0, ',','.')}}
                    </td>
                    <td class="px-6 py-4 text-black text-base">
                        @if ($row->status === 'Success' || $row->status === 'settlement')
                        <p class="text-green-500 bg-green-100 border w-full font-semibold rounded-lg text-sm px-2 py-1.5 text-center">{{$row->status}}</p>
                            @elseif ($row->status === 'pending')
                                <p class="text-yellow-500 bg-yellow-100 border w-full font-semibold rounded-lg text-sm px-2 py-1.5 text-center">{{$row->status}}</p>
                            @else
                                <p class="text-red-500 bg-red-100 border w-full font-semibold rounded-lg text-sm px-2 py-1.5 text-center">{{$row->status}}</p>
                        @endif
                    </td>
                    <td class=" text-black text-base">
                        <a href="{{route('transaksi.showDetailTransaksi', $row->id)}}" class="text-white text-sm p-1 px-2 w-11/12 text-center bg-green-700 rounded-sm md:flex-col md:flex">
                            Lihat Detail
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
