@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome flex justify-between bg-green-700 w-full py-8 px-4 rounded-lg">
                <div class="kiri my-auto">
                    <p class="text-2xl font-semibold">Edit Lembaga</p>
                </div>
            </div>
        </div>
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg my-6 bg-white p-5">
            <form action="{{ route('update.lbg', $lembaga->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="program" class="block mb-2 text-sm font-medium text-gray-700">Program</label>
                    <input type="text" id="program" name="program" value="{{ $lembaga->program }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                </div>
                <div class="mb-6">
                    <label for="nominal" class="block mb-2 text-sm font-medium text-gray-700">Nominal</label>
                    <input type="text" id="nominal" name="nominal" value="{{ $lembaga->nominal }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">
                </div>
                <div class="mb-6">
                    <label for="catatan" class="block mb-2 text-sm font-medium text-gray-700">Catatan</label>
                    <textarea id="catatan" name="catatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">{{ $lembaga->catatan }}</textarea>
                </div>
                <button type="submit" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Update</button>
            </form>
        </div>
    </div>
@endsection
