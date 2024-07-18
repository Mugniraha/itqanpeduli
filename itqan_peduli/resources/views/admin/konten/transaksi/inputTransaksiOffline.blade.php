@extends('admin.layout.main')
@section('konten')

    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <div class="kanan my-auto">
                    <a type="button" href="{{route('transaksiOffline')}}"
                        class="text-green-700 bg-white p-10 border focus:outline-none hover:bg-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
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
                    <label for="nama_pendonasi" class="block mb-2 text-sm font-medium text-gray-900">Nama
                        Pendonasi</label>
                    <input type="text" id="nama_pendonasi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nama Pendonasi" required />
                </div>
                <div class=" pt-4">
                    <div class="max-w-full mx-auto">
                        <label for="program" class="block mb-2 text-sm font-medium text-gray-900">Program</label>
                        <select id="program"
                            class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500  block w-full p-2.5">
                            <option selected>Pilih Program</option>
                            <option value="US">Program Instant Zakat</option>
                            <option value="CA">Program Instant Wakaf</option>
                            <option value="FR">Program Instant Sedekah</option>
                            <option value="DE">Program Berbagi</option>
                        </select>
                    </div>
                </div>
                <div class=" pt-4">
                    <div class="max-w-full mx-auto">
                        <label for="fundraiser" class="block mb-2 text-sm font-medium text-gray-900">Fundraiser</label>
                        <select id="fundraiser"
                            class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500  block w-full p-2.5">
                            <option selected>Pilih Fundraiser</option>
                            <option value="US">Mughni</option>
                            <option value="CA">Luthfi</option>
                            <option value="FR">Farhan</option>
                            <option value="DE">Rama</option>
                        </select>
                    </div>
                </div>
                <div class=" pt-4">
                    <label for="email_pendonasi"
                        class="block mb-2 text-sm font-medium text-gray-900">Email Pendonasi</label>
                    <input type="text" id="email_pendonasi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Email Pendonasi" required />
                </div>
                <div class=" pt-4">
                    <label for="no_telfoon"
                        class="block mb-2 text-sm font-medium text-gray-900">No Telfon Pendonasi</label>
                    <input type="text" id="no_telfon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="No Telfon Pendonasi" required />
                </div>
                <div class=" pt-4">
                    <label for="jumlah_donasi"
                        class="block mb-2 text-sm font-medium text-gray-900">Jumlah Donasi</label>
                    <input type="text" id="jumlah_donasi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Jumlah Donasi" required />
                </div>
                <div class=" pt-4">
                    <label for="tanggal_donasi"
                        class="block mb-2 text-sm font-medium text-gray-900">Tanggal Donasi</label>
                    <input type="date" id="tanggal_donasi"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="" required />
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
