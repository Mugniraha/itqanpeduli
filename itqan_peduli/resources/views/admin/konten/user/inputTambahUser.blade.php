@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/admin') }}"
                        class="text-green-700 bg-white p-10 border focus:outline-none hover:bg-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
    {{-- @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mt-5" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 20 20">
                    <path
                        d="M14.348 6.652a1 1 0 011.415 0l3.657 3.656a1 1 0 010 1.415l-3.657 3.657a1 1 0 01-1.415 0L10 11.415l-4.652 4.652a1 1 0 01-1.415 0l-3.656-3.657a1 1 0 010-1.415l3.656-3.656a1 1 0 011.415 0L10 8.585l4.652-4.652a1 1 0 011.415 0l3.656 3.656a1 1 0 010 1.415l-3.656 3.656a1 1 0 01-1.415 0L10 8.585l-4.652-4.652a1 1 0 011.415 0L10 8.585l4.652-4.652a1 1 0 011.415 0z" />
                </svg>
            </span>
        </div>
    @endif --}}
    <div class="py-3 rounded-xl">
        <div class="subheader text-white my-8">
            <form action="{{ route('users.store') }}" method="POST" class="px-8 mt-6 bg-white rounded-lg">
                @csrf
                <div class=" pt-4">
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Nama" required />
                </div>
                <div class=" pt-4">
                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Alamat Email</label>
                    <input type="text" id="email" name="email"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="Alamat Email" required />
                </div>
                <div class=" pt-4">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                    <input type="text" id="password" name="password"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                        placeholder="password" required />
                </div>
                <div class=" pt-4">
                    <div class="max-w-full mx-auto">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Tipe User</label>
                        <select id="role" name="role"
                            class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500  block w-full p-2.5">
                            <option selected>Pilih Program</option>
                            <option value="admin">Admin</option>
                            <option value="user">Donatur</option>
                            <option value="fundraiser">Fundraiser</option>
                        </select>
                    </div>
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
