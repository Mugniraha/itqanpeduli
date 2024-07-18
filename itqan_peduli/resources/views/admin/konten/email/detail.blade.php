@extends('admin.layout.main')
@section('konten')
<div class="py-3 bg-green-700 rounded-xl">
    <div class="p-5 flex justify-between">
        <div>
            <div class="kanan my-auto">
                <a type="button" href="{{ route('notifications.index') }}"
                   class="text-green-700 bg-white p-10 border focus:outline-none hover:bg-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                    Kembali
                </a>
            </div>
        </div>
    </div>
</div>
<div class="p-4">
    <div class="bg-white shadow-md p-5 rounded-lg">
        <p class="text-2xl font-semibold text-gray-800">{{ $notification->judul }}</p>
        <p class="text-sm font-normal my-2">{{ $notification->konten }}</p>
    </div>
</div>
@endsection
