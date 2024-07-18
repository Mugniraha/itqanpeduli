@extends('admin.layout.main')
@section('konten')
    <div class="p-4 ">
        <div class="subheader text-white my-8">
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
                <div class="kanan my-auto">
                    <a type="button" href="{{ route('banner.index') }}"
                        class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Kembali
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('banner.update', $banner->id) }}" enctype="multipart/form-data" class="px-8 mt-6 bg-white rounded-lg">
                @csrf
                @method('PUT')
                <div class=" pt-4">
                    <label for="link_target" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Link Target</label>
                    <input name="link" type="text" id="link_target"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Link Target" value="{{ $banner->link }}" required />
                </div>
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black dark:text-white"
                        for="icon">Icon
                        <p class="text-yellow-500">slider image recommendation 600x300px</p>
                    </label>
                    <input
                        name="image" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="icon" type="file" value="{{ $banner->image }}">
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
