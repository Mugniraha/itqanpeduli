@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/kegiatan') }}"
                        class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                        Kembali
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('kegiatan.update', $kegiatan->id) }}" enctype="multipart/form-data" class="px-8 mt-6 bg-white rounded-lg">
                @csrf
                @method('PUT')
                
                <div class="pt-4">
                    <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                    <input type="text" id="judul" name="judul" value="{{ old('judul', $kegiatan->judul) }}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" placeholder="Judul" required />
                </div>

                <div class="pt-4">
                    <label for="foto" class="block mb-2 text-sm font-medium text-black">Foto
                        <p class="text-yellow-500">Rekomendasi ukuran gambar kegiatan: 575x575px</p>
                    </label>
                    <input class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none" id="foto" type="file" name="foto">
                    @if($kegiatan->foto)
                        <div class="mt-4">
                            <img src="{{ asset('storage/' . $kegiatan->foto) }}" width="100" alt="Foto Kegiatan">
                        </div>
                    @endif
                </div>

                <div class="pt-4">
                    <label for="konten" class="block mb-2 text-sm font-medium text-gray-900">Konten</label>
                    <textarea id="konten" name="konten" rows="4"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>{{ old('konten', $kegiatan->konten) }}</textarea>
                </div>

                <div class="mt-6 flex justify-end">
                    <button type="submit" class="text-white bg-green-700 hover:bg-green-800 font-medium rounded-lg text-sm px-5 py-2.5 focus:outline-none focus:ring-4 focus:ring-green-300">
                        Simpan Perubahan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
