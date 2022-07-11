@extends('layouts.backend_tailwind')
@section('title') News-Categories @endsection
@section('content')
    <section class="container mx-auto my-5 p-5">
        <h1 class="text-3xl font-semibold">News-Categories</h1>
        <div class="w-full overflow-x-auto mt-5">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Erstellt</th>
                    <th class="px-4 py-3">Aktion</th>
                </tr>
                @foreach($articles as $article)
                    <tr class="text-gray-700 dark:text-gray-400">
                        <td class="px-4 py-3">
                            {{$article->headline}}
                        </td>
                        <td class="px-4 py-3">
                            {{ \Carbon\Carbon::parse($article->created_at)->format('d.m.Y')}}
                        </td>
                        <td class="px-4 py-3">{{$article->time_formated}}
                            <i class="fa-solid fa-user-pen"></i>&nbsp;
                            <i class="fa-solid fa-trash"></i>
                        </td>
                    </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </section>
@endsection

