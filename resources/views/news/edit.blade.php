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
    	    <form action="{{ route('news.update',$news->id) }}" class="w-full my-5" method="POST">
    			@csrf
    			@method('PUT')
                <x-forms.select id="cat-name" label="Kategorie" :optArray="$categories"/>
                <x-forms.input id="headline" label="Überschrift" :value="$news->headline"/>
                <div class="flex flex-wrap md:items-center mb-6 items-start">
                    <div class="w-full md:w-1/4 items-start">
                        <label class="block text-gray-700 font-bold md:text-right mb-1 md:mb-0 pr-4 align-top" for="headline">
                            Unter-Überschrift
                        </label>
                    </div>
                    <div class="w-full md:w-2/4">
                         <textarea name="teaser" class="border-2 border-gray-500">
                            {!! $news->teaser !!}
                        </textarea>
                    </div>
                </div>
                <div class="flex flex-wrap md:items-center mb-6 items-start">
                    <div class="w-full md:w-1/4 items-start">
                        <label class="block text-gray-700 font-bold md:text-right mb-1 md:mb-0 pr-4 align-top" for="headline">
                            Inhalt
                        </label>
                    </div>
                    <div class="w-full md:w-2/4">
                         <textarea name="body" class="border-2 border-gray-500">
                            {!! $news->body !!}
                        </textarea>
                    </div>
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

@push('scripts')
    {{-- <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>--}}
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'teaser' );
        CKEDITOR.replace( 'body' );
    </script>
@endpush

