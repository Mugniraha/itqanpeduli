@extends('admin.layout.main')

@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome flex justify-between bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
                <div class="kiri my-auto">
                    <p class="text-2xl font-semibold">Edit Berita</p>
                    <p class="text-sm text-gray-300 mt-2 font-normal">Update informasi berita</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6 bg-white p-5">
            <form action="{{ route('update-berita', $berita->id) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="program" class="block text-sm font-medium text-gray-700">Program</label>
                    <input type="text" name="program" id="program" value="{{ $berita->program }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="judul" class="block text-sm font-medium text-gray-700">Judul</label>
                    <input type="text" name="judul" id="judul" value="{{ $berita->judul }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>
                <div class="mb-4">
                    <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                    <textarea name="keterangan" id="keterangan" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">{{ $berita->keterangan }}</textarea>
                </div>
                <button type="submit" class="text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update Berita</button>
            </form>
        </div>
    </div>
@endsection
