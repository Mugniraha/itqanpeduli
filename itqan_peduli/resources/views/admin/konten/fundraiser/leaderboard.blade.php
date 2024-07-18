@extends('admin.layout.main')
@section('konten')
    <div class="p-4">

        <div class="subheader text-white my-8">
            <div class="welcome flex justify-between bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
                <div class="kiri my-auto">
                    <p class="text-2xl font-semibold">Leaderboard Fundraiser</p>
                    <p class="text-sm text-gray-300 mt-2 font-normal">pantau performa fundraiser untuk campaign yang dipublikasi</p>
                </div>
                <div class="kanan my-auto">
                    <a type="button" href="{{ route('export.leaderboard') }}" class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-normal rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Export
                    </a>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6 bg-white p-5">
            <div class="atas flex justify-between mb-12">
                <div class="kiri flex">
                    <p>Show</p>
                    <form class="max-w-sm ms-2">
                        <select id="countries" class="bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-16 p-1">
                            <option selected>10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                    </form>
                </div>
                <div class="kanan">
                    <form class="flex items-center max-w-sm mx-auto">
                        <button type="submit" class="p-1.5 me-2 text-sm font-medium text-white bg-green-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                        <div class="relative w-full">
                            <input type="text" id="simple-search" class="h-8 bg-gray-50 border border-green-300 text-gray-900 text-sm rounded-lg focus:ring-green-800 focus:border-green-800 block w-full ps-2 p-1.5" required />
                        </div>
                    </form>
                </div>
            </div>
            
            @if ($leaderboardData->isEmpty())
                <p class="text-center text-gray-700">Tidak ada data leaderboard</p>
            @else
                <table class="w-full text-sm text-left rtl:text-right text-gray-700">
                    <thead class="text-md text-gray-700">
                        <tr class="font-extrabold">
                            <th scope="col" class="px-6 py-3">
                                #
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Klik
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Transaksi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Terkumpul
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($leaderboardData as $data)
                            <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                                <th scope="row" class="px-6 py-4 font-normal text-gray-700">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $data->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->clicks }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $data->transactions }}
                                </td>
                                <td class="px-6 py-4 flex">
                                    {{ $data->amount_collected }}
                                    <a href="#" class="font-normal text-blue-600 hover:underline">
                                        <svg class="w-6 h-6 text-blue-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                                            <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg class="w-6 h-6 text-red-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                           <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif
        </div>
    </div>
@endsection
