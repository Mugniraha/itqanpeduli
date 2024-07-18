@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-2 rounded-xl">
                <div class="kanan ">
                    <p class="text-white px-2 text-2xl font-semibold">Facebook Pixel</p>
                    <p class="text-gray-300 px-2 text-lg">tambahkan Facebook Pixel ke website anda</p>
                </div>
            </div>
            <form class="px-8 mt-6 bg-white rounded-lg">
                <div class=" pt-4">
                    <label for="id_pixel" class="block mb-2 text-sm font-medium text-gray-900">ID Pixel</label>
                    <input type="text" id="id_pixel"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="ID Pixel" required />
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
