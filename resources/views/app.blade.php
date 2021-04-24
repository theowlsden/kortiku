<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('img/favicon.ico') }}" type="image/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;600;700&display=swap" rel="stylesheet">
    <title>Kortiku</title>
</head>

<body class="bg-gray-50">


    <nav class="sticky top-0 z-10 bg-white backdrop-filter backdrop-blur-lg bg-opacity-60">
        <div class="flex justify-between content-center px-6 py-4">
            <div id="logo">
                <a href="#" class="flex content-center w-3/4">
                    <img class="w-14" src="{{ asset('img/logo.svg') }}" alt="kortiku logo">
                </a>
            </div>
            <div id="nav-links" class="hidden content-center md:block">
                <ul class="flex flex-row">
                    <li class="px-4"><a href="#">home</a></li>
                    <li class="px-4"><a href="#features">features</a></li>
                    <li class="px-4"><a href="#">login</a></li>
                    <li class="px-4">don't have an account? <a href=""> sign up here</a></li>
                </ul>
            </div>

            <div id="toggle-btn" class="md:hidden">
                <button onclick="toggleMenu()" type="button"
                    class="bg-gray-50 rounded-md p-2 focus:outline-none focus:ring-0" aria-expanded="false">
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>

                </button>
            </div>
        </div>

        <div id="mobileNav" class="hidden absolute transition transform origin-top-right top-0 inset-x-0 p-2 md:hidden ">
            <div
                class="rounded-lg shadow-md bg-white ring-1 ring-black ring-opacity-5 overflow-hidden">
                <div class="p-4 flex items-center justify-between border-b-2 border-gray-100">
                    <div id="logo">
                        <a href="#" class="flex content-center">
                            <img class="w-10" src="{{ asset('img/logo.svg') }}" alt="kortiku logo">
                        </a>
                    </div>
                    <div class="">
                        <button onclick="toggleMenu()" type="button"
                            class="bg-gray-50 rounded-md p-2 focus:outline-none focus:ring-0">
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="px-2 pt-2 pb-3 space-y-1">
                    <div id="nav-links" class="">
                        <ul class="flex flex-col">
                            <li class="px-4"><a href="#">home</a></li>
                            <li class="px-4"><a href="#features">features</a></li>
                            <li class="px-4"><a href="#">login</a></li>
                            <li class="px-4">don't have an account? <a href=""> sign up here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </nav>

    @yield('content')

    <footer class="bg-gray-200 flex justify-center">
        <p class="text-center text-sm p-2">built with &#128151; by TheOwlsDen</p>
    </footer>
</body>

<script>
    function toggleMenu() {
        var $mobile = document.getElementById('mobileNav');
        $mobile.classList.toggle('hidden');
        // $target.style.transition = "all 2s";
    }

</script>

</html>
