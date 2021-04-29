@extends('app')

@section('content')

    <div id="hero" class="w-11/12 bg-primary m-auto my-8 md:my-16 px-8 py-12 flex flex-col rounded-2xl md:flex-row">

        <div id="hero-text" class="md:w-1/2">
            <h1 class="font-primary font-bold text-3xl my-2">
                Short links & link-in-profile makes links sharing easy
            </h1>
            <p class="font-primary font-normal text-base my-2">
                Shorten your links to make them easier to share or create your customizable link-n-profile short link.
            </p>
            <h4 class="font-primary font-semibold text-xl my-2">
                Try it out
            </h4>
            <form class="flex flex-col" method="POST" action="{{ route('shorten') }}">
                @csrf
                <label for="longUrl" class="block font-primary font-light text-xs my-2">
                    Enter a long URL and experience the magic of kortiku
                </label>
                <div class="flex flex-col md:flex-row content-start">
                    <input required name="longUrl"
                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-1 my-2 border border-primary rounded-2xl md:w-1/2"
                        type="text" name="" id="">
                    <button class="block bg-vibrant content-end rounded-full text-white self-end max-w-max md:mx-8 my-2 px-6 py-2" type="submit">
                        <p>shorten</p>
                    </button>
                    
                </div>
            </form>

            @if (Session::has('user_id'))
            <div id="result" class="w-full md:w-3/4 bg-white rounded-2xl my-8 px-4 py-2">
                <h2 class="font-primary font-semibold text-2xl">kortiku.co/ <span id="slug"> {{ session('message') }} </span></h2>
                <p class="font-primary font-normal text-sm">will redirect to</p>
                <h4 class="font-primary font-medium text-base" id="longUrl">
                    https://coolors.co/a49efb-2b2926-8332ac-8d8c7c-f3f7f2</h4>
            </div>                
            @endif
        </div>
        <div id="hero-image" class="flex justify-center content-center">
            <img class="w-1/2" src="{{ asset('img/shortener.svg') }}" alt="">
        </div>

    </div>

    <div id="features" class="w-11/12 bg-primary m-auto my-8 md:my-16 px-8 py-12 flex flex-col rounded-2xl">

        <div id="header" class="">
            <h1 class="font-primary font-bold text-3xl my-2">
                Features
            </h1>
            <p class="font-primary font-normal text-base my-2">
                A minimal platform to manage and share all your desired links.
            </p>

        </div>
        <div id="features-section" class="flex flex-col md:flex-row">
            <section id="features1" class="md:w-1/2">
                <div class="feature flex flex-col my-4 md:flex-row">
                    <div class="icon p-2">
                        <img class="icon p-2 bg-white rounded-full"
                            src="{{ asset('img/icons/iconmonstr-infinity-4.svg') }}" alt="">
                    </div>
                    <div class="feature-text md:w-1/2 md:px-4">
                        <h2 class="font-primary font-semibold text-lg my-2">unlimited kortiku links</h2>
                        <p>create unlimited short links to share with friends and family</p>
                    </div>
                </div>
                <div class="feature flex flex-col my-4 md:flex-row">
                    <div class="icon p-2">
                        <img class="icon p-2 bg-white rounded-full" src="{{ asset('img/icons/iconmonstr-code-2.svg') }}"
                            alt="">
                    </div>
                    <div class="feature-text md:w-1/2 md:px-4">
                        <h2 class="font-primary font-semibold text-lg my-2">share your links anywhere</h2>
                        <p>create unlimited short links to share with friends and family</p>
                    </div>
                </div>
            </section>
            <section id="features2" class="md:w-1/2">
                <div class="feature flex flex-col my-4 md:flex-row">
                    <div class="icon p-2">
                        <img class="icon p-2 bg-white rounded-full" src="{{ asset('img/icons/iconmonstr-layer-22.svg') }}"
                            alt="">
                    </div>
                    <div class="feature-text md:w-1/2 md:px-4">
                        <h2 class="font-primary font-semibold text-lg my-2">group your links</h2>
                        <p>create unlimited short links to share with friends and family</p>
                    </div>
                </div>
                <div class="feature flex flex-col my-4 md:flex-row">
                    <div class="icon p-2">
                        <img class="icon p-2 bg-white rounded-full"
                            src="{{ asset('img/icons/iconmonstr-qr-code-1.svg') }}" alt="">
                    </div>
                    <div class="feature-text md:w-1/2 md:px-4">
                        <h2 class="font-primary font-semibold text-lg my-2">generate QR codes</h2>
                        <p>create unlimited short links to share with friends and family</p>
                    </div>
                </div>
            </section>
        </div>

    </div>


    <div id="cta" class="w-11/12 bg-primary m-auto my-8 md:my-16 px-8 py-12 flex flex-col rounded-2xl md:flex-row">

        <div class="md:w-1/2 m-auto">
            <h1 class="text-center font-primary font-bold text-4xl my-2">Ready to share your links with the world?</h1>
            <p class="text-center font-primary font-normal text-base my-2">Join the waiting list and secure your username</p>
            <form action="" method="post">
                @csrf
                <div class="w-full flex flex-row justify-center">
                <label for="shortener" class="block font-primary font-light text-xl my-2">
                    kortiku.co/
                </label>
                    <input name="shortener"
                        class="focus:ring-indigo-500 focus:border-indigo-500 block w-1/2 px-4 py-1 my-2 border border-primary rounded-2xl md:w-1/4"
                        type="text" name="" id="">
                    <button class="mx-4">
                        <img src="{{ asset('img/icons/iconmonstr-arrow-20.svg') }}" alt="" srcset="">
                    </button>
                </div>
            </form>
        </div>

    </div>


@endsection
