@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">WhatsApp Setting</p>
                <p class="text-sm text-gray-300 font-semibold">Atur integrasi ruangwa</p>
            </div>
        </div>
    </div>


    <div class="py-3 p-3 mt-14">
        <p class="text-base font-semibold">
            System WhatsApp gateway ini hanya bekerja dan terintegrasi pada <span class="text-yellow-500"> GOOWA </span > atau <span class="text-yellow-500"> GOOWA V2</span>
        </p>
    </div>

    <div class="mb-10 p-3">
        <form action="">
            <div class="mb-5">
                <label for="provider" class="block mb-2 text-md text-gray-900">Masukan WhatsApp Provider</label>
                <select id="provider" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5">

                    <option>GOOWA</option>
                    <option>GOOWA V2</option>
                </select>
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-md text-gray-900">Masukan App Key</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="" required />
            </div>
            <div class="mb-5">
                <label for="email" class="block mb-2 text-md text-gray-900">Masukan Auth Key</label>
                <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5" placeholder="" required />
            </div>
            <div class="flex justify-end p-2 my-14">
                <button type="button" class="text-white flex justify-end bg-green-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">SIMPAN</button>
            </div>
        </form>
    </div>

@endsection
