@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.news')
@endsection
@section('description')Bleiben Sie immer auf dem aktuellsten Stand in der Branche. Lubey fasst alle wichtigen Neuigkeiten und Ereignisse zusammen.@endsection
@section('content')

    <section class="h-38 md:h-54 bg-blue-800">
        <div class="container mx-auto px-6 py-10 text-white">
            <h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
            <h2 class="text-2xl md:text-3xl">Aktuelles</h2>
        </div>
    </section>

    <section class="container mx-auto my-5 p-5">
        @if($news->where('is_enabled',1)->count() > 0)
            <div id="category_selector" class="flex flex-wrap my-10 text-xl font-semibold text-blue-800 h-full">
                <div class="w-full lg:w-1/6 px-3">
                    <a href="#" class="text-important" ata-category="all">@lang('newsletter.all_articles')</a>
                </div>
                @foreach($categories as $category)
                    @if($category->news->where('is_enabled',1)->count()>0)
                        <div class="w-full lg:w-1/6">
                            <a href="#" class="text-important" data-category="{{$category->id}}">@lang($category->name)</a>
                        </div>
                    @endif
                @endforeach
            </div>

            <div id="news_container" class="flex flex-wrap h-full">
                @foreach($news as $article)
                    @if($article->is_enabled == 1)
                        <div class="relative w-full lg:w-1/3 mb-10 px-3 min-h-[30rem]">
                            <img src="{{ URL::to('news_documents')}}/{{$article->category->mobile_img->filename}}" class="img-fluid" alt="platzhalter">
                            <p class="mt-4 mb-1">{{date('d.m.Y',strtotime($article->date))}}</p>
                            <h4 class="text-xl text-blue-600 font-semibold mb-3">
                                {{$article->headline}}
                            </h4>
                            <p class="pt-2">{!! $article->teaser!!}</p>
                            <p class="absolute more_link bottom-2 right-4">
                                <a href="{{ route('news.detail',['name'=>$article->canonical_name])}}"
                                   class="text-blue-500 hover:text-blue-800 hover:underline">@lang('newsletter.to_article')
                                    <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                                </a>
                            </p>
                        </div>
                    @endif
                @endforeach
            </div>
        @else
            <p class="text-xl font-semibold">@lang('newsletter.noNews')</p>
        @endif
    </section>
@endsection

@push('scripts')

@endpush
