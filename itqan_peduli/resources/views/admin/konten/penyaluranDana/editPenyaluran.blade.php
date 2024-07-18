@extends('admin.layout.main')

@section('konten')
    <div class="p-4">
        <form action="{{ route('penyaluran.update', $penyaluran->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="program" class="block text-sm font-medium text-gray-700">Program</label>
                <input type="text" name="program" id="program" value="{{ old('program', $penyaluran->program) }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="nominal" class="block text-sm font-medium text-gray-700">Nominal</label>
                <input type="text" name="nominal" id="nominal" value="{{ old('nominal', $penyaluran->nominal) }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                <input type="text" name="keterangan" id="keterangan" value="{{ old('keterangan', $penyaluran->keterangan) }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <label for="penerima_manfaat" class="block text-sm font-medium text-gray-700">Penerima Manfaat</label>
                <input type="text" name="penerima_manfaat" id="penerima_manfaat" value="{{ old('penerima_manfaat', $penyaluran->penerima_manfaat) }}" class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
            </div>
            <div class="mb-4">
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Update</button>
            </div>
        </form>
    </div>
@endsection
