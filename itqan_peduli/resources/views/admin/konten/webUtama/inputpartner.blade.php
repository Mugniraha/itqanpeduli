@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/partner') }}"
                        class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                        Kembali
                    </a>
                </div>
            </div>
            <form class="px-8 mt-6 bg-white rounded-lg">
                <div class=" pt-4">
                    <label class="block mb-2 text-sm font-medium text-black"
                        for="logo_partner">Logo Partner
                        <p class="text-yellow-500">partner image recommendation max height 4</p>
                    </label>
                    <input
                        class="block w-full text-sm text-gray-500 border border-gray-300 rounded-md cursor-pointer bg-gray-50 focus:outline-none"
                        id="logo_partner" type="file">
                </div>
                <div class="pt-4 flex justify-end">

                    <a type="button" href="#"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center">
                        Simpan
                    </a>
                </div>
            </form>
        </div>
    </div>
@endsection
