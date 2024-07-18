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
            <p class="text-2xl font-semibold">Program Instan</p>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Sedekah</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Tidak Terikat</p>
                    <div class="duit flex justify-between mt-5">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Wakaf</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Tidak Terikat</p>
                    <div class="duit flex justify-between mt-5">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Zakat
                    <p class="text-sm font-normal ms-3 text-green-600">Tidak Terikat</p>
                    <div class="duit flex justify-between mt-5">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="terikat">
            <p class="text-2xl font-semibold">Program Terikat</p>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Agar Tenang , Tunaikan Sekarang!</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Wakaf Al-Qur'an Plus</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Donasi Semeru</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Beasiswa Paket C</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Awali Hari Dengan Sedekah, Insyaallah Berkah...</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Buka Pintu Rezeki Dengan Berinfaq Dhuha</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Berbagi Berkah FIdyah Untuk Yatim & Dhuafa</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Sedekah Sarana Masjid Di Plosok</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Itqan Quranic Center</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <div class="bg-white w-full my-3 flex p-5 rounded-lg" style="box-shadow: 0 2px 3px 0 gray;">
                <img src="/images/dts.jpg" alt="" class="w-28 h-28 my-auto rounded-md" >
                <div class="teks w-full">
                    <a href="/detail-dana" class="text-2xl font-semibold ms-3 text-gray-800">Pray For Bogor</a>
                    <p class="text-sm font-normal ms-3 text-green-600">Program</p>
                    <div class="bg-green-600 h-4 rounded w-full ms-3 mt-4"></div>
                    <div class="duit flex justify-between">
                        <p class="text-sm font-normal ms-3 text-green-600">13.250.500</p>
                        <p class="text-sm font-normal ms-3 text-gray-600">49 Donatur</p>
                    </div>
                </div>
            </div>
            <nav aria-label="Page navigation">
                <ul class="flex items-center -space-x-px h-8 text-sm my-10">
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Previous</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight active-page bg-green-600 border border-gray-300">1</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">3</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">4</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">
                            <span class="sr-only">Next</span>
                            <svg class="w-2.5 h-2.5 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection
