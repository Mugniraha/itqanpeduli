@extends('admin.layout.main')
@section('konten')
<div class="p-4 ">
    <div class="subheader text-white my-8">
        <div class="welcome bg-green-700 me-30 w-full py-6 px-4 rounded-xl">
            <div class="kanan my-auto">
                <a type="button" href="{{ url('/berita') }}"
                    class="text-green-700 bg-white p-10 border border-gray-300 focus:outline-none hover:bg-gray-100 focus:ring-4 focus:ring-gray-100 font-semibold rounded-lg text-lg px-px py-2.5 w-32 h-12 text-center">
                    Kembali
                </a>
            </div>
        </div>
        <form class="px-8 mt-6 bg-white rounded-lg" method="POST" action="{{ url('/berita') }}">
            @csrf
            <div class="pt-4">
                <div class="max-w-full mx-auto">
                    <label for="program" class="block mb-2 text-sm font-medium text-gray-900">Program</label>
                    <select id="program" name="program"
                        class="bg-gray-50 text-gray-900 text-sm rounded-md focus:ring-blue-500 block w-full p-2.5">
                        <option selected>Pilih Program</option>
                        <option value="Program Instant Zakat">Program Instant Zakat</option>
                        <option value="Program Instant Wakaf">Program Instant Wakaf</option>
                        <option value="Program Instant Sedekah">Program Instant Sedekah</option>
                        <option value="Program Berbagi">Program Berbagi</option>
                    </select>
                </div>
            </div>
            <div class="pt-4">
                <label for="judul" class="block mb-2 text-sm font-medium text-gray-900">Judul</label>
                <input type="text" id="judul" name="judul"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-md focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="Masukan Judul" required />
            </div>
            <div class="pt-4">
                <p class="text-black text-sm font-medium my-2">Keterangan/ Judul Penyaluran</p>
                <div
                    class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
                    <div class="flex items-center justify-between px-3 py-2 border-b">
                        <div
                            class="flex flex-wrap items-center divide-gray-200 sm:divide-x sm:rtl:divide-x-reverse">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse sm:pe-4">
                                <button type="button"
                                    class="p-2 text-green-700 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 12 20">
                                        <path stroke="currentColor" stroke-linejoin="round" stroke-width="2"
                                            d="M1 6v8a5 5 0 1 0 10 0V4.5a3.5 3.5 0 1 0-7 0V13a2 2 0 0 0 4 0V6" />
                                    </svg>
                                    <span class="sr-only">Attach file</span>
                                </button>
                                <button type="button"
                                    class="p-2 text-green-700 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 16 20">
                                        <path
                                            d="M8 0a7.992 7.992 0 0 0-6.583 12.535 1 1 0 0 0 .12.183l.12.146c.112.145.227.285.326.4l5.245 6.374a1 1 0 0 0 1.545-.003l5.092-6.205c.206-.222.4-.455.578-.7l.127-.155a.934.934 0 0 0 .122-.192A8.001 8.001 0 0 0 8 0Zm0 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                    <span class="sr-only">Embed map</span>
                                </button>
                                <button type="button"
                                    class="p-2 text-green-700 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 16 20">
                                        <path
                                            d="M14.066 0H7v5a2 2 0 0 1-2 2H0v11a1.97 1.97 0 0 0 1.934 2h12.132A1.97 1.97 0 0 0 16 18V2a1.97 1.97 0 0 0-1.934-2ZM10.5 6a1.5 1.5 0 1 1 0 2.999A1.5 1.5 0 0 1 10.5 6Zm2.221 10.515a1 1 0 0 1-.858.485h-8a1 1 0 0 1-.9-1.43L5.6 10.039a.978.978 0 0 1 .936-.57 1 1 0 0 1 .858.515l2.142 3.68.871-1.62A1 1 0 0 1 11.1 11.04a.978.978 0 0 1 .935.574l1.686 3.357a1 1 0 0 1 0 .544Z" />
                                    </svg>
                                    <span class="sr-only">Upload image</span>
                                </button>
                                <button type="button"
                                    class="p-2 text-green-700 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100">
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 18 20">
                                        <path
                                            d="M0 19a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1V5H0v14ZM5 8h8a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Zm0 4h8a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2ZM3 0a1 1 0 0 0-1 1v1H0v2h18V2h-2V1a1 1 0 0 0-1-1H3Z" />
                                    </svg>
                                    <span class="sr-only">Upload video</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="px-4 py-2 bg-white rounded-b-lg">
                        <label for="keterangan" class="sr-only">Publish post</label>
                        <textarea id="keterangan" name="keterangan" rows="4"
                            class="w-full px-0 text-sm text-gray-900 bg-white border-0 focus:ring-0"
                            placeholder="Write a description..." required></textarea>
                    </div>
                </div>
            </div>
            <div class="pt-8">
                <button type="submit"
                    class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">
                    Submit
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
