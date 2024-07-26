@extends('admin.layout.main')
@section('konten')
    <div class="py-3 bg-green-700 rounded-xl">
        <div class=" p-5 flex justify-between">
            <div>
                <p class="text-2xl text-white font-semibold mb-2">Kelola User</p>
                <p class="text-sm text-gray-300 font-semibold">kelola data user aplikasi</p>
            </div>
            <div class="flex items-center justify-center text-center bg-white rounded-md my-auto px-8 h-10 hover:bg-green-50">
                <a href="{{  url('/inputTambahUser') }}" class="text-green-700">Tambah User</a>
            </div>
        </div>
    </div>

    <div class="flex mt-10">
        <div class="bg-white p-2 text-blue-600 font-normal rounded-t-sm">
            <a href="{{url('admin')}}" class="mx-3">Admin</a>
        </div>
        <div class="bg-green-700 p-2 text-white font-normal rounded-t-sm">
            <a class="mx-3" href="{{url('user-program')}}">Program</a>
        </div>
        <div class=" bg-white p-2 text-blue-600 font-normal rounded-t-sm">
            <a class="mx-3" href="{{url('akunting')}}">Akunting</a>
        </div>
        <div class="bg-white p-2 text-blue-600 font-normal rounded-t-sm">
            <a class="mx-3" href="{{url('gerai')}}">Gerai</a>
        </div>
        <div class="bg-white p-2 text-blue-600 font-normal rounded-t-sm">
            <a class="mx-3" href="{{url('user-donatur')}}">Donatur</a>
        </div>
        <div class="bg-white p-2 text-blue-600 font-normal rounded-t-sm">
            <a class="mx-3" href="{{url('fundraiserUser')}}">Fundraiser</a>
        </div>
    </div>
    <div class="p-5">
        <p class="text-2xl font-bold">Belum Ada User</p>
        <p class="text-gray-500">tambahkan user</p>
    </div>

@endsection
