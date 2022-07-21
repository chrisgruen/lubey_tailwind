@extends('layouts.backend_tailwind')
@section('title') Chart prices @endsection
@section('content')
    <section class="container mx-auto my-5 p-5">
        <h1 class="text-2xl font-semibold mb-10">Chart-Prices File Import</h1>
        
        <div class="bg-white px-5 py-10 mb-4 w-2/3 h-full">
        	@if(count($errors) > 0)
                <div class="w-full mx-auto p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 h-auto" role="alert">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            @if(Session::has('success'))
                <div class="w-full mx-auto p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg dark:bg-red-200 dark:text-red-800 h-auto" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
            <form action="{{ route('chart.import-file') }}" method="post" enctype="multipart/form-data">
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Upload Excel-Datei für den Import
                    </label>
                    <input class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0
                    			focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none" type="file" id="formFile" name="formFile">
                </div>
                <div class="flex items-center justify-between">
                    <div></div>
                    <button type="submit" class="bg-white border border-blue-800 text-lg text-blue-800  rounded mb-3 py-1 px-5 hover:text-white hover:bg-blue-800">
                        Import data
                    </button>
                </div>
                @csrf()
            </form>
        </div>

    </section>
@endsection
