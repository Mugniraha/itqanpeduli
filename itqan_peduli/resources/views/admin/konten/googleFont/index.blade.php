@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">Google Font</p>
                <p class="text-sm text-gray-300 font-semibold">Kustom font yang anda gunakan di website dengan google font</p>
            </div>
        </div>
    </div>

    <div class="mb-10">
        <form action="">
            <div class="mt-8 mx-3">
                <label for="message" class="block mb-2 text-base font-base text-gray-900 dark:text-white">Kode Google Font</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500" placeholder=""></textarea>
            </div>
            <div class="flex justify-end p-2 my-14">
                <button type="button" class="text-white flex justify-end bg-green-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">SIMPAN</button>
            </div>

        </form>
    </div>

@endsection
