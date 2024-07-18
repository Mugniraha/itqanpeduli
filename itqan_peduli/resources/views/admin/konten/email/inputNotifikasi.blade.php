@extends('admin.layout.main')
@section('konten')

<div class="py-3 bg-green-700 rounded-xl">
    <div class="p-5 flex justify-between">
        <div>
            <div class="kanan my-auto">
                <a type="button" href="{{ route('notifications.index') }}"
                   class="text-green-700 bg-white p-10 border focus:outline-none hover:bg-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>

<div class="py-3 rounded-xl">
    <div class="subheader text-white my-8">
        <form action="{{ route('notifications.store') }}" method="POST" class="px-8 mt-6 bg-white rounded-lg">
            @csrf
            <div class="pt-4">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Judul</label>
                <input type="text" id="judul" name="judul"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Judul" required />
            </div>
            <div class="pt-4">
                <p class="text-black text-sm font-medium my-2">Konten</p>
                <div
                    class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-700 dark:border-gray-600">
                    <div class="px-4 py-2 bg-white rounded-b-lg dark:bg-gray-800">
                        <label for="konten" class="sr-only">Konten</label>
                        <textarea id="konten" name="konten" rows="8"
                                  class="block w-full px-0 text-sm text-gray-800 bg-white border-0 dark:bg-gray-800 focus:ring-0 dark:text-white dark:placeholder-gray-400"
                                  placeholder="Write an article..." required></textarea>
                    </div>
                </div>
            </div>
            <div class="pt-4 flex justify-end">
                <button type="submit"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
