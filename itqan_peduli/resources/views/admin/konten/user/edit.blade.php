@extends('admin.layout.main')
@section('konten')

<div class="py-3 bg-green-700 rounded-xl">
    <div class="p-5 flex justify-between">
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

<div class="py-3 rounded-xl">
    <div class="subheader text-white my-8">
        <form action="{{ route('user.update', $user->id) }}" method="POST" class="px-8 mt-6 bg-white rounded-lg">
            @csrf
            @method('PUT') {{-- Method untuk update --}}
            <div class="pt-4">
                <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                <input type="text" name="nama" id="nama" value="{{ $user->name }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Nama" required />
            </div>
            <div class="pt-4">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Alamat Email</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Alamat Email" required />
            </div>
            <div class="pt-4">
                <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
                <input type="password" name="password" id="password"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Kosongkan jika tidak ingin mengubah password" />
            </div>
            <div class="pt-4">
                <label for="tipeuser" class="block mb-2 text-sm font-medium text-gray-900">Tipe User</label>
                <select name="tipeuser" id="tipeuser"
                    class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500 block w-full p-2.5">
                    <option disabled>Pilih Tipe User</option>
                    <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>Admin</option>
                    <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>Program</option>
                    <option value="3" {{ $user->role_id == 3 ? 'selected' : '' }}>Akunting</option>
                    <option value="4" {{ $user->role_id == 4 ? 'selected' : '' }}>Gerai</option>
                </select>
            </div>
            <div class="pt-4 flex justify-end">
                <button type="submit"
                    class="text-white bg-green-700 border border-gray-300 hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center">
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
