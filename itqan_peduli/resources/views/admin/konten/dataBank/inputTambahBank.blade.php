@extends('admin.layout.main')
@section('konten')

    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/data-bank')}}"
                        class="text-green-700 bg-white p-10 border focus:outline-none hover:bg-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3 rounded-xl">
        <div class="subheader text-white my-8">
            <form class="px-8 mt-6 bg-white rounded-lg">
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black dark:text-white" for="icon_bank">Icon Bank
                        {{-- <p class="text-yellow-500">slider image recommendation 600x300px</p> --}}
                    </label>
                    <input
                        class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400"
                        id="icon_bank" type="file">
                </div>
                <div class=" pt-4">
                    <label for="kode_bank"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kode Bank</label>
                    <input type="text" id="kode_bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Kode Bank" required />
                </div>
                <div class=" pt-4">
                    <label for="nama_bank" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Bank</label>
                    <input type="text" id="nama_bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nama Bank" required />
                </div>
                <div class=" pt-4">
                    <label for="nama_pemilik_bank"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Pemilik Bank</label>
                    <input type="text" id="nama_pemilik_bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nama Pemilik Bank" required />
                </div>
                <div class=" pt-4">
                    <label for="no_rekening"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nomor Rekening</label>
                    <input type="text" id="no_rekening"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nomor Rekening" required />
                </div>

                <div class="pt-4 flex justify-end">
                    <a type="button" href="#"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center dark:bg-gray-800 dark:text-white dark:border-gray-600 dark:hover:bg-gray-700 dark:hover:border-gray-600 dark:focus:ring-gray-700">
                        Simpan
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection