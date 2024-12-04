@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 w-full py-6 px-4 rounded-xl">
                <a href="{{ route('kegiatan.index') }}" class="text-green-700 bg-white px-4 py-2 border border-gray-300 hover:bg-gray-100 rounded-lg">
                    Kembali
                </a>
            </div>
        </div>

        <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data" class="px-8 mt-6 bg-white rounded-lg">
            @csrf
            <div class="pt-4">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                <input type="text" name="judul" id="judul" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md w-full p-2.5" placeholder="Judul kegiatan" required>
            </div>
            <div class="pt-4">
                <label for="foto" class="block mb-2 text-sm font-medium text-gray-900">Foto</label>
                <input type="file" name="foto" id="foto" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50">
                <p class="text-sm text-yellow-500 mt-1">Rekomendasi ukuran gambar: 575x575px</p>
            </div>
            <div class="pt-4">
                <label for="konten" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                <textarea name="konten" id="konten" rows="4" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md w-full p-2.5" placeholder="Deskripsi kegiatan"></textarea>
            </div>
            <div class="pt-4">
                <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-lg hover:bg-green-800">Simpan</button>
            </div>
        </form>
    </div>
@endsection
