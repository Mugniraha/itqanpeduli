@extends('admin.layout.main')

@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome flex justify-between bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
                <div class="kiri my-auto">
                    <p class="text-2xl font-semibold">Penyaluran Dana</p>
                    <p class="text-sm text-gray-300 mt-2 font-normal">History penyaluran dana terkumpul</p>
                </div>
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/inputPenyaluran') }}" class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-normal rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Salurkan Dana
                    </a>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6 bg-white p-5">
            <table class="w-full text-sm text-left rtl:text-right text-gray-700">
                <thead class="text-md text-gray-700">
                    <tr class="font-extrabold">
                        <th scope="col" class="px-6 py-3">#</th>
                        <th scope="col" class="px-6 py-3">Program</th>
                        <th scope="col" class="px-6 py-3">Nominal</th>
                        <th scope="col" class="px-6 py-3">Keterangan</th>
                        <th scope="col" class="px-6 py-3">Penerima Manfaat</th>
                        <th scope="col" class="px-6 py-3">Tanggal</th>
                        <th scope="col" class="px-6 py-3">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($penyaluran as $item)
                        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b">
                            <th scope="row" class="px-6 py-4 font-normal text-gray-700">{{ $loop->iteration }}</th>
                            <td class="px-6 py-4">{{ $item->program }}</td>
                            <td class="px-6 py-4">Rp {{ number_format($item->nominal, 0, ',', '.') }}</td>
                            <td class="px-6 py-4">{{ $item->keterangan }}</td>
                            <td class="px-6 py-4">{{ $item->penerima_manfaat }} Orang</td>
                            <td class="px-6 py-4">{{ $item->created_at->format('d-m-Y') }}</td>
                            <td class="px-6 py-4 flex">
                                <a href="{{ route('penyaluran.edit', $item->id) }}" class="font-normal text-blue-600 hover:underline">
                                    <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                    </svg>
                                </a>
                                <form action="{{ route('penyaluran.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this item?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-normal text-red-600 hover:underline">
                                        <svg class="w-6 h-6 text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
