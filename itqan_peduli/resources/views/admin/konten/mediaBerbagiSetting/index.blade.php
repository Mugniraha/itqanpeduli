
@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">MediaBerbagi Setting</p>
                <p class="text-sm text-gray-300 font-semibold">Atur MediaBerbagi server anda</p>
            </div>
        </div>
    </div>

    <div class="mb-10 p-3">
        <form action="">
            <div class="mb-5">
                <label for="email" class="block mb-2 text-md text-gray-900">MediaBerbagi Host</label>

                <input type="text" id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-200 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" value="www.example.com" disabled>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-md text-gray-900">MediaBerbagi Access Key</label>
                <input type="text" id="disabled-input" aria-label="disabled input" class="mb-5 bg-gray-200 border border-gray-300 text-gray-900 text-md rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 cursor-not-allowed" value="www.example.com" disabled>
            </div>
            <div class="flex justify-end p-2 my-14">
                <button type="button" class="text-white flex justify-end bg-green-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">SIMPAN</button>
            </div>
        </form>
    </div>

@endsection
