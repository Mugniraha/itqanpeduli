@extends('admin.layout.main')
@section('konten')

    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/data-bank')}}"
                        class="text-green-700 bg-white p-10 border focus:outline-none hover:bg-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="py-3 rounded-xl">
        <div class="subheader text-white my-8">
            <form action="{{route('data-bank.store')}}" method="POST" enctype="multipart/form-data" class="px-8 mt-6 bg-white rounded-lg">
                @csrf
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black" for="icon_bank">Icon Bank
                        {{-- <p class="text-yellow-500">slider image recommendation 600x300px</p> --}}
                    </label>
                    <input
                        class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none"
                        id="icon_bank" type="file">
                </div>
                <div class=" pt-4">
                    <label for="kode_bank"
                        class="block mb-2 text-sm font-medium text-gray-900">Kode Bank</label>
                    <input type="text" id="kode_bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Kode Bank" required />
                </div>
                <div class=" pt-4">
                    <label for="nama_bank" class="block mb-2 text-sm font-medium text-gray-900">Nama Bank</label>
                    <input type="text" id="nama_bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nama Bank" required />
                </div>
                <div class=" pt-4">
                    <label for="nama_pemilik_bank"
                        class="block mb-2 text-sm font-medium text-gray-900">Nama Pemilik Bank</label>
                    <input type="text" id="nama_pemilik_bank"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nama Pemilik Bank" required />
                </div>
                <div class=" pt-4">
                    <label for="no_rekening"
                        class="block mb-2 text-sm font-medium text-gray-900">Nomor Rekening</label>
                    <input type="text" id="no_rekening"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nomor Rekening" required />
                </div>

                <div class="pt-4 flex justify-end">
                    <a type="button" href="#"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center">
                        Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
