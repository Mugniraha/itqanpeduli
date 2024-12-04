@extends('admin.layout.main')

@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 w-full py-8 px-4 rounded-lg">
                <div class="flex justify-between items-center">
                    <p class="text-2xl font-semibold">Edit Konten</p>
                    <a href="{{ url('/konten') }}" 
                       class="text-green-700 bg-white px-4 py-2 border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg">
                        Kembali
                    </a>
                </div>
            </div>
        </div>

        <form method="POST" action="{{ route('konten.update', $konten->id) }}" enctype="multipart/form-data" class="px-8 mt-6 bg-white rounded-lg">
            @csrf
            @method('PUT')

            <div class="pt-4">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                <input type="text" id="name" name="name" value="{{ old('name', $konten->name) }}" 
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                       placeholder="Nama Konten" required />
            </div>

            <div class="pt-4">
                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                <input type="text" id="phone" name="phone" value="{{ old('phone', $konten->phone) }}" 
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                       placeholder="Nomor Telepon" required />
            </div>

            <div class="pt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $konten->email) }}" 
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                       placeholder="Email" required />
            </div>

            <div class="pt-4">
                <label for="province" class="block mb-2 text-sm font-medium text-gray-900">Provinsi</label>
                <input type="text" id="province" name="province" value="{{ old('province', $konten->province) }}" 
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                       placeholder="Provinsi" required />
            </div>

            <div class="pt-4">
                <label for="type" class="block mb-2 text-sm font-medium text-gray-900">Tipe</label>
                <select id="type" name="type" 
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" 
                        required>
                    <option value="image" {{ old('type', $konten->type) == 'image' ? 'selected' : '' }}>Image</option>
                    <option value="video" {{ old('type', $konten->type) == 'video' ? 'selected' : '' }}>Video</option>
                </select>
            </div>

            <div class="mt-6 flex justify-end">
                <button type="submit" 
                        class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none focus:ring-4 focus:ring-green-300">
                    Simpan Perubahan
                </button>
            </div>
        </form>
    </div>
@endsection
