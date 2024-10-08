@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class="p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">MediaBerbagi Setting</p>
                <p class="text-sm text-gray-300 font-semibold">Atur MediaBerbagi server anda</p>
            </div>
        </div>
    </div>

    <div class="mb-10 p-3">
        <form action="{{ route('mediaberbagi-settings.store') }}" method="POST">
            @csrf
            <div class="mb-5">
                <label for="mediaberbagi_host" class="block mb-2 text-md text-gray-900 dark:text-white">MediaBerbagi Host</label>
                <label for="mediaberbagi_host" class="block mb-2 text-md text-gray-900">MediaBerbagi Host</label>
                <input type="text" id="mediaberbagi_host" name="mediaberbagi_host"
                    value="{{ old('mediaberbagi_host', $settings->mediaberbagi_host ?? '') }}"
                    class="block w-full p-2.5 text-gray-900 border border-gray-300 rounded bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="mb-5">
                <label for="mediaberbagi_access_key" class="block mb-2 text-md text-gray-900">MediaBerbagi Access Key</label>
                <input type="text" id="mediaberbagi_access_key" name="mediaberbagi_access_key"
                    value="{{ old('mediaberbagi_access_key', $settings->mediaberbagi_access_key ?? '') }}"
                    class="block w-full p-2.5 text-gray-900 border border-gray-300 rounded bg-gray-50 text-md focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div class="flex justify-end p-2 my-14">
                <button type="submit"
                    class="text-white bg-green-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">
                    SIMPAN
                </button>
            </div>
        </form>
    </div>
@endsection
