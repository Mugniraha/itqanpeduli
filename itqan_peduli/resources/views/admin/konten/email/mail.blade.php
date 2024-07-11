@extends('admin.layout.main')
@section('konten')
    <div class="p-4">

        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 me-30 w-full p-5 rounded-lg">
                <p class="text-2xl font-semibold">Mail Setting</p>
                <p class="text-sm text-gray-300 mt-2 font-medium">atur mail server anda</p>
            </div>
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Mailer</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Host</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Port</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Username</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Password</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail Encryption</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail From Address</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="my-8">
            <label for="small-input" class="block mb-2 text-sm text-gray-900 dark:text-white">Mail From Name</label>
            <input type="text" id="small-input"
                class="block w-full p-2 text-gray-900 border border-gray-300 rounded bg-gray-50 text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </div>
        <div class="ms-auto flex flex-row-reverse">
            <a type="button" href="#"
                class="text-green-500 bg-white p-10 border border-green-500 focus:outline-none hover:bg-green-700 hover:text-white focus:ring-4 focus:ring-gray-100 font-normal rounded-lg text-sm px-5 py-2.5 dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                Simpan
            </a>
        </div>
    </div>
@endsection
