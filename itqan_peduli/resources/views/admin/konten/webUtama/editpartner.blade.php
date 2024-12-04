@extends('admin.layout.main')

@section('konten')
<div class="p-4">
    <div class="subheader text-white my-8">
        <div class="welcome flex justify-between bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
            <div class="kiri my-auto">
                <p class="text-2xl font-semibold">Edit Partner</p>
                <p class="text-sm text-gray-300 mt-2 font-normal">Perbarui informasi partner</p>
            </div>
        </div>
    </div>

    <div class="bg-white p-5 rounded-lg shadow-md">
        <form action="{{ route('partner.update', $partner->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-6">
                <label for="gambar" class="block mb-2 text-sm font-medium text-gray-700">Gambar Partner</label>
                <input type="file" id="gambar" name="gambar" class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer focus:outline-none focus:ring focus:ring-blue-300">
                <p class="mt-2 text-sm text-gray-500">Unggah gambar berformat JPEG, PNG, atau JPG (maksimal 2MB).</p>
                @if ($partner->gambar)
                <div class="mt-4">
                    <p class="text-sm font-semibold text-gray-700">Gambar Saat Ini:</p>
                    <img src="{{ asset('storage/' . $partner->gambar) }}" alt="Gambar Partner" class="w-32 h-32 rounded-lg mt-2">
                </div>
                @endif
                @error('gambar')
                <span class="text-sm text-red-500">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" class="bg-green-700 text-white px-6 py-2 rounded-lg text-sm hover:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Perbarui Partner
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
