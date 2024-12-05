@extends('front.layout.main3')

@section('konten')
    <div class="p-4 bg-white">

        <div class="flex my-6">
            <a href="{{ url('/akun') }}" type="button"
                class="text-white ms-0 bg-white shadow-lg hover:bg-gray-400 focus:ring-4 focus:outline-none focus:ring-gray-100 font-medium rounded-lg text-sm p-2.5 text-center inline-flex items-center me-2">
                <svg class="w-4 h-4 text-green-700" aria-hidden="true"
                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 12h14M5 12l4-4m-4 4 4 4" />
                </svg>
            </a>
            <p class="text-center mx-36 font-semibold text-xl">{{ $konten->type == 'syarat_ketentuan' ? 'Syarat & Ketentuan' : '' }}</p>
        </div>

        <div class="hubungi kami">
            <!-- Display the dynamic content from the database -->
            <p class="font-semibold text-xl text-justify ms-0">{{ $konten->content }}</p>
        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
@endSection
