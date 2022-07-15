@extends('layouts.backend_tailwind')
@section('title') News @endsection
@section('content')
    <section class="container mx-auto my-5 p-5">
    	<h4 class="mb-5 text-2xl font-semibold text-blue-800">
            {{ $news->headline }}
        </h4>
		@if (!empty($news->teaser))
    		<h4 class="mb-2 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Überschrift 2
            </h4>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    			{!! $news->teaser !!}			
    		</div>
		@endif
		
		@if (!empty($news->body))
    		<h4 class="mb-2 text-lg font-semibold text-gray-600 dark:text-gray-300">
                Inhalt
            </h4>
            <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    			{!! $news->body !!}			
    		</div>
		@endif
		
		<div class="mt-10 text-lg">
			<a href="{{ url()->previous() }}" class="btn btn-default"><< Zurück</a>
		</div>
    </section>
@endsection
