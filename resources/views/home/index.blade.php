@extends('app')

@section('content')

<div id="hero" class="w-11/12 bg-primary m-auto my-8 px-8 py-12 flex flex-col rounded-2xl md:flex-row">

    <div id="hero-text" class="md:w-1/2">
        <h1 class="font-primary font-bold text-3xl my-2">
            Short links & link-in-profile makes links sharing easy
        </h1>
        <p class="font-primary font-normal text-base my-2">
            Shorten your links to make them easier to share or create your customizable link-n-profile short link.
        </p>
        <h4 class="font-primary font-semibold text-xl my-2" >
            Try it out
        </h4>
        <form class="flex flex-col" method="POST" action="">
            @csrf
            <label for="shortener" class="block font-primary font-light text-xs my-2">
                Enter a long URL and experience the magic of kortiku
            </label>
            <div class="flex flex-col md:flex-row content-start">
                <input name="shortener" class="focus:ring-indigo-500 focus:border-indigo-500 block w-full px-4 py-1 border border-primary rounded-2xl md:w-1/2" type="text" name="" id="">
                <input class="block bg-vibrant rounded-full text-white mx-8 px-6 py-2" type="button" value="shorten">
            </div>
        </form>

        <div id="result" class="w-full bg-red-500 rounded-2xl my-8">
            <h2 class="font-primary font-semibold text-2xl">kortiku.co/ <span id="slug">slug </span></h2> 
            <p class="font-primary font-normal text-sm">will redirect to</p>
            <h4 class="font-primary font-medium text-base" id="longUrl">https://coolors.co/a49efb-2b2926-8332ac-8d8c7c-f3f7f2</h4>
        </div>
    </div>
    <div id="hero-image" class=""></div>
    
</div>


@endsection