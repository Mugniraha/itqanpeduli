@extends('admin.layout.main')

@section('konten')
<div class="p-4">
    <div class="subheader text-white my-8">
        <div class="welcome bg-green-700 me-30 w-full p-5 rounded-lg">
            <p class="text-2xl font-semibold">Dana Terkumpul</p>
            <p class="text-sm text-gray-300 mt-2 font-medium">Pantau progress donasi campaign aktif</p>
        </div>
    </div>
    <div class="program">
        <p class="text-2xl font-semibold">Program Campaign</p>
        @forelse ($campaigns as $campaign)
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
            <img src="{{ asset('storage/' . $campaign->photo) }}" alt="{{ $campaign->title }}" class="h-28 w-28 bg-black rounded w-full">
            <div class="teks w-full">
                    <a href="/detail-dana/{{ $campaign->id }}" class="text-2xl font-semibold ms-3 text-gray-800">{{ $campaign->title }}</a>
                    <p class="text-sm font-normal ms-3 text-green-600">{{ $campaign->category }}</p>
                    <div class="duit flex justify-between mt-5">
                        <p class="text-sm font-normal ms-3 text-green-600">Rp {{ number_format($campaign->collected_funds, 0, ',', '.') }}</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">{{ $campaign->donors_count }} Donatur</p>
                    </div>
                </div>
            </div>
        @empty
            <p class="text-gray-600">Belum ada campaign yang aktif.</p>
        @endforelse
    </div>
</div>
@endsection
