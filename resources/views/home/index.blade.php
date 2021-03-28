@extends('app')

@section('content')
<div class="m-auto h-full flex flex-col lg:flex-row">
    <div class="py-16 lg:w-1/2">
    <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
        <div class="sm:text-center lg:text-left">
          <h1 class="text-4xl tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-6xl">
            <span class="block xl:inline">The one tool</span>
            <span class="block text-indigo-600 xl:inline">to shorten all your links.</span>
          </h1>
          <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
            Create short versions of links and share them easily.
          </p>
        </div>
      </main>
    </div>
    <div class="bg-purple-100 h-full lg:w-1/2">
    <div class="flex flex-col h-full px-16 justify-center">

        <h1 class="text-lg tracking-tight font-extrabold text-gray-900 sm:text-5xl md:text-2xl">
                <span class="block xl:inline">Give it a try</span>
              </h1>
            <form action="{{ route('shorten') }}" method="post">
              @csrf
            <label for="url" class="block text-sm font-medium text-gray-700">Enter the link you'd like to shorten.</label>
                    <input type="text" name="url" id="url" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-lg border-gray-300 rounded-md">

                    <button type="submit" class="my-4 inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Shorten
            </button>
            </form>
    </div>
    </div>
</div>

@endsection