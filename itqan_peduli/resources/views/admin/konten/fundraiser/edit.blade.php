@extends('admin.layout.main')

@section('konten')
<div class="p-4">
    <div class="subheader text-white my-8">
        <div class="welcome bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
            <div class="kiri my-auto">
                <p class="text-2xl font-semibold">Edit Fundraiser</p>
                <p class="text-sm text-gray-300 mt-2 font-normal">Edit data fundraiser yang dipilih</p>
            </div>
        </div>
    </div>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6 bg-white p-5">
        <form method="POST" action="{{ route('fundraisers.update', $fundraiser->id) }}">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="tipe" class="block text-sm font-medium text-gray-700">Tipe</label>
                <input type="text" id="tipe" name="tipe" value="{{ old('tipe', $fundraiser->tipe) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('tipe')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="nama" class="block text-sm font-medium text-gray-700">Nama</label>
                <input type="text" id="nama" name="nama" value="{{ old('nama', $fundraiser->nama) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('nama')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="no_telepon" class="block text-sm font-medium text-gray-700">No Telepon</label>
                <input type="text" id="no_telepon" name="no_telepon" value="{{ old('no_telepon', $fundraiser->no_telepon) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('no_telepon')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email', $fundraiser->email) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('email')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="provinsi" class="block text-sm font-medium text-gray-700">Provinsi</label>
                <input type="text" id="provinsi" name="provinsi" value="{{ old('provinsi', $fundraiser->provinsi) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('provinsi')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="kabkota" class="block text-sm font-medium text-gray-700">Kabupaten/Kota</label>
                <input type="text" id="kabkota" name="kabkota" value="{{ old('kabkota', $fundraiser->kabkota) }}" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" required>
                @error('kabkota')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password (Kosongkan jika tidak ingin mengubah)</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                @error('password')
                    <p class="text-red-600 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
            </div>
            <div class="flex justify-end">
                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection
