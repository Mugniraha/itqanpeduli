@extends('admin.layout.main')
@section('konten')
    <div class="p-4">
        <div class="subheader text-white my-8">
            <div class="welcome bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
                <div class="kanan my-auto">
                    <a type="button" href="{{ url('/mediaBerbagi') }}"
                        class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                        Kembali
                    </a>
                </div>
            </div>
            <form class="px-8 mt-6 bg-white rounded-lg" action="{{ route('update.media', $media->id) }}" method="POST">
                @csrf
                <div class="pt-4">
                    <div class="max-w-full mx-auto">
                        <label for="program"
                            class="block mb-2 text-sm font-medium text-gray-900">Program</label>
                        <select id="program" name="program"
                            class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500  block w-full p-2.5">
                            <option value="Program Instant Zakat" {{ $media->program == 'Program Instant Zakat' ? 'selected' : '' }}>Program Instant Zakat</option>
                            <option value="Program Instant Wakaf" {{ $media->program == 'Program Instant Wakaf' ? 'selected' : '' }}>Program Instant Wakaf</option>
                            <option value="Program Instant Sedekah" {{ $media->program == 'Program Instant Sedekah' ? 'selected' : '' }}>Program Instant Sedekah</option>
                            <option value="Program Berbagi" {{ $media->program == 'Program Berbagi' ? 'selected' : '' }}>Program Berbagi</option>
                        </select>
                    </div>
                </div>
                <div class="pt-4">
                    <label for="nominal" class="block mb-2 text-sm font-medium text-gray-900">Nominal</label>
                    <div class="flex">
                        <p class="bg-gray-200 border w-10 py-1.5 rounded-l-md text-center border-gray-300 text-black">Rp</p>
                        <input type="number" id="nominal" name="nominal"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-r-md focus:ring-blue-500 focus:border-blue-500 w-full p-2.5"
                            placeholder="" value="{{ $media->nominal }}" required />
                    </div>
                </div>
                <div class="pt-4">
                    <label for="catatan" class="block mb-2 text-sm font-medium text-gray-900">Catatan</label>
                    <textarea id="catatan" name="catatan" rows="4"
                        class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500"
                        placeholder="">{{ $media->catatan }}</textarea>
                </div>
                <div class="pt-4 flex justify-end">
                    <button type="submit"
                        class="text-white bg-green-700 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-xl pt-1.5 w-24 h-11 text-center">
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
