<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@latest/Sortable.min.js"></script>
    <title>Document</title>
</head>
<body class="mx-auto m-0 p-0 w-[512px] bg-black ">
    <div class="w-full min-h-screen bg-white overflow-hidden">
        <div class="relative">
            <div class="absolute inset-0 flex justify-center items-center">
                <div class="w-[720px] h-[580px] bg-green-600 rounded-full z-0 -mx-[256px] -mt-[256px]"></div>
            </div>
        </div>

        <div class="main">
            @yield('konten')
        </div>

        <div class="fixed z-40 w-[480px] h-auto mx-auto max-w-lg -translate-x-1/2 bottom-4 left-1/2">
            <div class="flex flex-row-reverse mb-2">
                <button data-popover-target="popover-left" data-popover-placement="left" type="button" class="text-white mb-3 me-4 bg-green-600 hover:bg-green-700 font-medium rounded-full text-sm p-2 text-center">
                    <svg class="w-6 h-6 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.895 12.06l.569.718-.697 2.359 2.32-.648.379.243A8 8 0 1 0 12 4ZM2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10a9.96 9.96 0 0 1-5.016-1.347l-4.948 1.382 1.426-4.829-.006-.007-.033-.055A9.958 9.958 0 0 1 2 12Z" clip-rule="evenodd"/>
                        <path fill="currentColor" d="M16.735 13.492c-.038-.018-1.497-.736-1.756-.83a1.008 1.008 0 0 0-.34-.075c-.196 0-.362.098-.49.291-.146.217-.587.732-.723.886-.018.02-.042.045-.057.045-.013 0-.239-.093-.307-.123-1.564-.68-2.751-2.313-2.914-2.589-.023-.04-.024-.057-.024-.057.005-.021.058-.074.085-.101.08-.079.166-.182.249-.283l.117-.14c.121-.14.175-.25.237-.375l.033-.066a.68.68 0 0 0-.02-.64c-.034-.069-.65-1.555-.715-1.711-.158-.377-.366-.552-.655-.552-.027 0 0 0-.112.005-.137.005-.883.104-1.213.311-.35.22-.94.924-.94 2.16 0 1.112.705 2.162 1.008 2.561l.041.06c1.161 1.695 2.608 2.951 4.074 3.537 1.412.564 2.081.63 2.461.63.16 0 .288-.013.4-.024l.072-.007c.488-.043 1.56-.599 1.804-1.276.192-.534.243-1.117.115-1.329-.088-.144-.239-.216-.43-.308Z"/>
                    </svg>
                </button>
            </div>
            <div data-popover id="popover-left" role="tooltip" class="absolute z-10 invisible inline-block w-auto text-sm text-gray-500 transition-opacity duration-300 bg-white border border-gray-200 rounded-lg shadow-sm opacity-0">
                <div class="whitespace-nowrap px-4 py-3 bg-white border-b border-gray-200 rounded-xl">
                    <h3 class="font-semibold text-gray-900">Butuh bantuan ? Hubungi kami disini</h3>
                </div>
                <div data-popper-arrow></div>
            </div>
            <div class="bg-white border border-gray-200 rounded-xl ">

                <div class="grid h-full max-w-lg grid-cols-4 mx-auto font-medium">
                    <a href="/" type="button" class="inline-flex flex-col items-center justify-center px-5 py-4 hover:bg-gray-50 group">
                        <svg class="w-7 h-7 mb-2 text-gray-500 group-hover:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="m4 12 8-8 8 8M6 10.5V19a1 1 0 0 0 1 1h3v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h3a1 1 0 0 0 1-1v-8.5"/>
                        </svg>
                        <span class="text-xs text-gray-500 group-hover:text-green-600">Beranda</span>
                    </a>
                    <a href="/program-user" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                        <svg class="w-7 h-7 mb-2 text-gray-500 group-hover:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M17 20v-5h2v6.988H3V15h1.98v5H17Z"/>
                            <path d="m6.84 14.522 8.73 1.825.369-1.755-8.73-1.825-.369 1.755Zm1.155-4.323 8.083 3.764.739-1.617-8.083-3.787-.739 1.64Zm3.372-5.481L10.235 6.08l6.859 5.704 1.132-1.362-6.859-5.704ZM15.57 17H6.655v2h8.915v-2ZM12.861 3.111l6.193 6.415 1.414-1.415-6.43-6.177-1.177 1.177Z"/>
                        </svg>
                        <span class="text-xs text-gray-500 group-hover:text-green-600">Program</span>
                    </a>
                    <a href="/zakat" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                        <svg class="w-7 h-7 mb-2 text-gray-500 group-hover:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linejoin="round" stroke-width="1.5" d="M4 5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V5Zm16 14a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v2ZM4 13a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1v-6Zm16-2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v6Z"/>
                        </svg>
                        <span class="text-xs  text-gray-500 group-hover:text-green-600">Hitung Zakat</span>
                    </a>
                    <a href="/akun" type="button" class="inline-flex flex-col items-center justify-center px-5 hover:bg-gray-50 group">
                        <svg class="w-7 h-7 mb-2 text-gray-500 group-hover:text-green-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-width="1.5" d="M7 17v1a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1v-1a3 3 0 0 0-3-3h-4a3 3 0 0 0-3 3Zm8-9a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                        </svg>
                        <span class="text-xs text-gray-500 group-hover:text-green-600">Akun</span>
                    </a>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
</body>
</html>
