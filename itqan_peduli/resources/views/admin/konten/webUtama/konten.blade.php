@extends('admin.layout.main')

@section('konten')
<div class="p-4">
    <div class="bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4">Kelola Konten</h1>

        {{-- Form untuk menyimpan konten --}}
        <form action="{{ route('konten.store') }}" method="POST" class="mb-6">
            @csrf
            <div class="mb-4">
                <label for="type" class="block text-sm font-medium text-gray-700">Jenis Konten</label>
                <select name="type" id="type" class="block w-full mt-1 border-gray-300 rounded-md shadow-sm p-3">
                    <option value="tentang_kami">Tentang Kami</option>
                    <option value="syarat_ketentuan">Syarat & Ketentuan</option>
                    <option value="pusat_bantuan">Pusat Bantuan</option>
                </select>
            </div>
            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Isi Konten</label>
                <textarea name="content" id="content" rows="6" class="block p-3 w-full mt-1 border-gray-300 rounded-md shadow-sm"></textarea>
            </div>
            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded-md hover:bg-green-800">
                Simpan
            </button>
        </form>

        {{-- Tabel untuk menampilkan konten --}}
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white border rounded-md">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">#</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Jenis Konten</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Isi Konten</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-700 uppercase tracking-wider">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($konten as $item)
                    <tr class="border-b">
                        <td class="px-6 py-4">{{ $loop->iteration }}</td>
                        <td class="px-6 py-4">{{ ucfirst(str_replace('_', ' ', $item->type)) }}</td>
                        <td class="px-6 py-4">{{ Str::limit($item->content, 50) }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <form action="{{ route('konten.destroy', $item->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus konten ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
