<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico')}}" type="image/x-icon">
        <title>Kortiku</title>
    </head>
    <body class="h-screen">

    
    <nav class="flex flex-row justify-between content-center">
                <a href="#" class="flex content-center w-3/4">
                    <img class="w-48" src="{{asset('img/logo-small.png')}}" alt="kortiku logo">
                </a>
            <div  class="hidden w-1/4 justify-around items-center sm:flex">
                <a disabled class="disabled nav-link" href="#">About</a>
                <a href="#">Log in</a>
                
            </div>


            <div class="m-2 flex items-center md:hidden">
                <button onclick="toggleMenu()" type="button" class="navbar-burger bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" aria-expanded="false">
                  <span class="sr-only">Open main menu</span>
                  <!-- Heroicon name: outline/menu -->
                  <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                  </svg>
                </button>
              </div>
        
        
        
        
        
              <div id="main-nav" class="hidden absolute top-0 inset-x-0 p-2 transition transform origin-top-right md:hidden">
       
       
              <div class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
          <div class="px-5 pt-4 flex items-center justify-between">
            <div>
            <img class="w-48" src="{{asset('img/logo-small.png')}}" alt="kortiku logo">
            </div>
            <div class="-mr-2">
              <button onclick="toggleMenu()" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
          </div>
          <div class="px-2 pt-2 pb-3 space-y-1">
            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">About</a>

            <a href="#" class="block px-3 py-2 rounded-md text-base font-medium text-gray-700 hover:text-gray-900 hover:bg-gray-50">Log in</a>

            </div>
        </div>
      </div>
    
    
    </nav>
    
    @yield('content')
</body>

<script>
function toggleMenu(){
    var $target = document.getElementById('main-nav');
      $target.classList.toggle('hidden');
}
</script>
</html>