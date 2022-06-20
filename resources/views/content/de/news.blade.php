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
        <div id="news_container">
            <h2 class="text-3xl">Show News</h2>
        </div>
    </section>
@endsection

@push('scripts')
    <script>

    </script>
@endpush
