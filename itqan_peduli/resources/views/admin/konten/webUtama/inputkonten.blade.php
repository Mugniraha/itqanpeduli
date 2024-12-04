@extends('admin.layout.main')

@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 w-full py-6 px-4 rounded-xl">
                <a href="{{ route('konten.index') }}" class="text-green-700 bg-white px-4 py-2 border border-gray-300 hover:bg-gray-100 rounded-lg">
                    Kembali
                </a>
            </div>
        </div>

        <form action="{{ route('konten.store') }}" method="POST" enctype="multipart/form-data" class="px-8 mt-6 bg-white rounded-lg">
            @csrf
            <div class="pt-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" name="name" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md w-full p-2.5" placeholder="Nama" required>
            </div>
            <div class="pt-4">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                <input type="text" name="phone" id="phone" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md w-full p-2.5" placeholder="No Telepon" required>
            </div>
            <div class="pt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md w-full p-2.5" placeholder="Email" required>
            </div>
            <div class="pt-4">
                <label for="province" class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
                <input type="text" name="province" id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md w-full p-2.5" placeholder="Provinsi" required>
            </div>
            <div class="pt-4">
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Tipe</label>
                <select name="type" id="type" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md w-full p-2.5" required>
                    <option value="image">Image</option>
                    <option value="video">Video</option>
                </select>
            </div>
            <div class="pt-4">
                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">Tambah Konten</button>
            </div>
        </form>
    </div>
@endsection
