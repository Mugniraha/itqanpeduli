@extends('admin.layout.main')
@section('konten')
        <div class="subheader my-8">
            <div class="welcome flex justify-between bg-green-700 me-30 w-full py-8 px-4 rounded-lg">
                <div class="kiri my-auto">
                    <p class="text-2xl font-semibold text-white">Notifikasi Email</p>
                    <p class="text-sm text-gray-300 mt-2 font-normal">kirim email blast ke daftar email donatur aktif</p>
                </div>
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/inputNotifikasi') }}" class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-sm px-5 py-2.5 me-2 mb-2">
                        Buat Notifikasi
                    </a>
                </div>
            </div>
        </div>
    </div>

            <div class="program my-10">
            @if($notifications->isEmpty())
            <p class="text-center text-gray-600 bg-white shadow-md p-5 rounded-lg text-lg font-semibold">Tidak ada notifikasi email</p>
            @else
            <p class="text-2xl font-semibold">Notifikasi</p>
            @foreach($notifications as $notification)
                <div class="bg-white w-full my-3 flex p-5 rounded-lg shadow-md">
                    <div class="teks w-full">
                        <p class="text-2xl font-semibold ms-3 text-gray-800">{{ $notification->judul }}</p>
                        <p class="text-sm font-normal ms-3">
                            {{ \Illuminate\Support\Str::limit($notification->konten, 100) }}
                            @if(strlen($notification->konten) > 100)
                                <a href="{{ route('notifications.show', $notification->id) }}" class="text-blue-500 hover:underline">Lihat Selengkapnya</a>
                            @endif
                        </p>
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
@endsection
