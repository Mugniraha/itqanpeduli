@extends('admin.layout.main')
@section('konten')
    <div class="p-4 ">
        <div class="subheader text-white my-8">
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/kategori') }}"
                        class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                        Kembali
                    </a>
                </div>
            </div>
            <form method="POST" action="{{ route('kategori.store') }}" class="px-8 mt-6 bg-white rounded-lg" enctype="multipart/form-data">
                @csrf
                <div class=" pt-4">
                    <label for="nama_kategori" class="block mb-2 text-sm font-medium text-gray-900">Nama Kategori</label>
                    <input type="text" id="nama_kategori" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nama Kategori" required />
                </div>
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black"
                        for="file_input">Icon
                        <p class="text-yellow-500">campaign image recommendation 58x58px</p>
                    </label>
                    <input
                        name="icon" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none"
                        id="file_input" type="file">
                </div>
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black"
                        for="file_input">Foto Background
                        <p class="text-yellow-500">campaign image recommendation 254x87px</p>
                    </label>
                    <input
                        name="photo" class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none"
                        id="file_input" type="file">
                </div>

                <div class="pt-4 flex justify-end">

                    <button type="submit"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
