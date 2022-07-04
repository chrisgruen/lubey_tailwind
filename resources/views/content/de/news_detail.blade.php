@extends('layouts.frontend_tailwind')
@section('title')
    @lang('Newsletter - Anmeldung')
@endsection
@section('content')

    <section class="h-38 md:h-54 bg-blue-800">
        <div class="container mx-auto px-6 py-10 text-white">
            <h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
            <h2 class="text-2xl md:text-3xl">Aktuelles</h2>
        </div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <h3 class="text-xl font-semibold text-blue-800 mb-3">
            {{$news->headline}}
        </h3>
        <p class="text-blue-800 mb-5">
            {{date('d.m.Y',strtotime($news->date))}}
        </p>

        @if($news->file_path)
            <div class="grid grid-cols-1 lg:grid-cols-6 gap-3 py-1">
                <div class="col-span-4 pr-0 lg:pr-10">
                    {!! $news->body !!}
                    <a href="{{route('news')}}" class="inline-block mt-1 text-blue-500 hover:text-blue-800 hover:underline">
                        @lang('newsletter.to_overview')  <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="col-span-2">
                    @if($news->file_path)
                        <div class="cursor-zoom-in" data-toggle="modal" data-modal-toggle="articleImageModal">
                            <img class="object-cover h-full min-w-full cursor-zoom-in" src="{{url("/news_documents/" . $news->file_path )}}"/>
                        </div>
                    @endif
                </div>
            </div>
        @else
            <div class="grid grid-cols-1">
                {!! $news->body !!}
                <a href="{{route('news')}}" class="inline-block mt-5 text-blue-500 hover:text-blue-800 hover:underline">
                    @lang('newsletter.to_overview')  <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                </a>
            </div>
    @endif

    <!-- Main modal -->
        <div id="articleImageModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <!-- Modal body -->
                    <div class="p-6 space-y-6 text-right">
                        <img class="object-cover h-full min-w-full" src="{{url("/news_documents/" . $news->file_path )}}"/>
                        <button data-modal-toggle="articleImageModal" type="button" class="bg-white border border-blue-800 text-lg text-blue-800  rounded my-3 py-1 px-5 hover:text-white hover:bg-blue-800">
                            Schließen
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')

@endpush

