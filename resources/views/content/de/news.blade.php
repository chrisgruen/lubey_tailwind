@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.news')
@endsection
@section('description')Bleiben Sie immer auf dem aktuellsten Stand in der Branche. Lubey fasst alle wichtigen Neuigkeiten und Ereignisse zusammen.@endsection
@section('content')

    <section class="h-38 md:h-54 bg-blue-800">
        <div class="container mx-auto px-6 py-10 text-white">
            <h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
            <h2 class="text-2xl md:text-3xl">News</h2>
        </div>
    </section>

    <section class="container mx-auto my-5 p-5 h-96">
        @if($news->where('is_enabled',1)->count() > 0)
            <div class="row mb-3" id="category_selector">
                <div class="col-md-2 col-sm-4 mb-0 mb-sm-3"><a href="#" class="text-important"
                                                               data-category="all">@lang('newsletter.all_articles')</a>
                </div>
                @foreach($categories as $category)
                    @if($category->news->where('is_enabled',1)->count()>0)
                        <div class="col-md-2 col-sm-4 mb-0 mb-sm-3"><a href="#" class="text-important"
                                                                       data-category="{{$category->id}}">@lang($category->name)</a>
                        </div>
                    @endif
                @endforeach
            </div>
            <div id="news_container">
                <div class="row mb-5">
                    @foreach($news as $article)
                        @if($article->is_enabled == 1)
                            <div class="col-md-4 mb-4" data-category="{{$article->news_category_id}}">
                                <img src="{{ URL::to('news_documents')}}/{{$article->category->mobile_img->filename}}"
                                     class="img-fluid" alt="platzhalter">
                                <p class="mt-4 mb-1">{{date('d.m.Y',strtotime($article->date))}}</p>
                                <h4>{{$article->headline}}</h4>
                                <p>{!! $article->teaser!!}</p>
                                <p class="mb-5"></p>
                                <p class="more_link ">
                                    <a href="{{ route('news.detail',['name'=>$article->canonical_name])}}"
                                       class="text-info-link">@lang('newsletter.to_article')
                                        <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                                    </a>
                                </p>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        @else
            @lang('newsletter.noNews')
        @endif
    </section>
@endsection

@push('scripts')
    <script>
        let player;
        $(document).ready(function () {
            if (window.location.hash === "#movie") {
                filter_news();
            }
            $('#category_selector a').click(function () {
                filter_news($(this).data('category'));
            })
        });

        function filter_news(category) {
            if (category === 'all') {
                $('#news_container div.col-md-4').show();
            } else {
                $('#news_container div.col-md-4').hide();
                $('#news_container div.col-md-4[data-category="' + category + '"]').show();
            }
        }

    </script>
@endpush
