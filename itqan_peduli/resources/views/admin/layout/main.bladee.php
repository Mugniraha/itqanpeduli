<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Document</title>
</head>
<body class="flex h-screen bg-gray-100">

    <!-- Sidebar -->
    <div id="sidebar" class="bg-gray-800 text-white w-64 min-h-screen transition-transform transform -translate-x-full md:translate-x-0">
      <div class="p-4">
        <h1 class="text-2xl font-bold">Sidebar</h1>
      </div>
      <nav class="mt-4">
        <ul>
          <li class="p-4 hover:bg-gray-700"><a href="#">Link 1</a></li>
          <li class="p-4 hover:bg-gray-700"><a href="#">Link 2</a></li>
          <li class="p-4 hover:bg-gray-700"><a href="#">Link 3</a></li>
        </ul>
      </nav>
    </div>

    <!-- Main content -->
    <div class="flex-1 flex flex-col">
      <!-- Navbar -->
      <nav class="bg-white shadow-md p-4 fixed w-full z-10">
        <div class="flex justify-between items-center">
          <button id="sidebarToggle" class="text-gray-500 focus:outline-none md:hidden">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
          </button>
          <h1 class="text-xl font-bold">Navbar</h1>
        </div>
      </nav>

      <!-- Content -->
      <main class="flex-1 mt-16 p-4">
        <h2 class="text-2xl font-bold">Main Content</h2>
        <p class="mt-4">This is the main content area.</p>
      </main>
    </div>

    <script>
      const sidebar = document.getElementById('sidebar');
      const sidebarToggle = document.getElementById('sidebarToggle');

      sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
      });
    </script>
  <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
  </body>


    {{-- <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
        }
        </script> --}}
</body>
</html>
