@extends('layouts.backend_tailwind')
@section('title') News @endsection
@section('content')
    <section class="container mx-auto my-5 p-5">
    	<h4 class="mb-5 text-2xl font-semibold text-blue-800">
            NewsId ({{ $news->id }}) bearbeiten
        </h4>
	    @if ($errors->any())
            <div class="w-full mx-auto p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 h-auto" role="alert">       
                <strong>Whoops!</strong> Daten konnten nicht aktualisiert werden.<br>      
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach       
            </div>
    	@endif
    	
    	<div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
    	    <form action="{{ route('news.update',$news->id) }}" method="POST">
    			@csrf
    			@method('PUT')
    			
			    <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    	Überschrift
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                    	   name="headline" value="{{ $news->headline }}"
                    >
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    	Unter-Überschrift
                    </label>
                    <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
        							rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
      							id="exampleFormControlTextarea1" rows="3" name="teaser"
    				>{!! $news->teaser !!}</textarea>
                </div>
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="username">
                    	Inhalt
                    </label>
                    <textarea class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300
        							rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
      							   id="exampleFormControlTextarea1" rows="6"  name="body"
    				>{!! $news->body !!}</textarea>
                </div>
                <div class="mb-4 text-right ">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                       	Ändern
                    </button>
                </div>
        	</form>
    	</div>
		
		<div class="mt-10 text-lg">
			<a href="{{ url()->previous() }}" class="btn btn-default"><< Zurück</a>
		</div>
    </section>
@endsection

