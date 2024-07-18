@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">Notifikasi WhatsApp</p>
                <p class="text-sm text-gray-300 font-semibold">Kustom notifikasi WhatsApp</p>
            </div>
        </div>
    </div>


    <div class="py-3 mx-5 bg-yellow-500 rounded-xl mt-14 flex justify-center items-center">
        <div class="py-1 px-2 flex justify-between">
            <div>
                <p class="text-base text-black font-normal">! Mohon untuk menggunakan anotasi <span class="font-bold"><<@{{key}}>></span> seperti disediakan di template awal, agar pesan terbaca sistem sebagai field dinamis yang akan didapatkan dari database </p>
            </div>
        </div>
    </div>

    <div class="mb-10">
        <form action="">
            <div class="mt-8 mx-3">
                <label for="message" class="block mb-2 text-base font-base text-gray-900">Pengingat Donasi</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="">Assalaamualaikum Kakak, Bapak, Ibu </textarea>
            </div>

            <div class="mt-8 mx-5">
                <label for="message" class="block mb-2 text-base font-base text-gray-900">Donasi Berhasil</label>
                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500" placeholder="">Assalaamualaikum Kakak, Bapak, Ibu </textarea>
            </div>

            <div class="flex justify-end p-2 my-14">
                <button type="button" class="text-white flex justify-end bg-green-700 hover:bg-blue-800 font-medium rounded-md text-sm px-5 py-2.5 me-2 mb-2 focus:outline-none">SIMPAN</button>
            </div>

        </form>
    </div>

@endsection
