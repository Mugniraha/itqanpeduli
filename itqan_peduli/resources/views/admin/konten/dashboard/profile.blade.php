@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome  bg-green-700 me-30 w-full py-6 px-2 rounded-xl">
                <div class="kanan ">
                    <p class="text-white px-2 text-2xl font-semibold">Profil Saya</p>
                    <p class="text-gray-300 px-2 text-lg">Update profil berkala untuk keamanan akun anda</p>
                </div>
            </div>
            @if (session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Sukses!</strong>
                    <span class="block sm:inline">{{ session('success') }}</span>
                </div>
            @endif
            <form action="{{ route('profile.update') }}" method="POST" class="px-8 pb-2 mt-6 bg-white rounded-lg">
                @csrf
                <div class=" pt-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Nama</label>
                    <input type="text" name="name" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="" value="{{ Auth::user()->name }}" required />
                </div>
                <div class=" pt-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Alamat Email</label>
                    <input type="email" name="email" id="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="" value="{{ Auth::user()->email }}" required />
                </div>
                <div class=" pt-4">
                    <label for="phone_number" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                    <input type="text" name="phone_number" id="phone_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="" value="{{ Auth::user()->phone_number }}" required />
                </div>
                <div class="pt-4 flex justify-end">
                    <button type="submit" 
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center">
                        Simpan
                    </button>
                </div>
                {{-- <a href="{{ url('/update-password') }}" type="button"
                    class="px-3 py-3 w-full mb-3 mt-8 text-white inline-flex items-center border border-gray-400 bg-green-50 hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 rounded-2xl text-center">
                    <p class="text-gray-600 font-semibold">Ganti Password</p>
                    <svg class="w-6 h-6 my-auto ms-auto end-0 text-gray-600" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                </a> --}}
            </form>


        </div>
    </div>
@endsection
