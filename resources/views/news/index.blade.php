@extends('layouts.backend_tailwind')
@section('title') News @endsection
@section('content')
    <section class="container mx-auto my-5 p-5">
        <h1 class="text-3xl font-semibold">News</h1>
        <div class="text-right">
        	<a href="{{ route('news.create') }}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white rounded mb-3 py-3 px-5 hover:text-white hover:bg-blue-800">
                Neuen Artikel anlegen
            </a>
		</div>
        <div class="w-full overflow-x-auto mt-5">
            <table class="w-full whitespace-no-wrap mb-5">
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
                        	<form action="{{ route('news.destroy',$article->id) }}" method="POST">
                            	<a href="{{ route('news.show', $article) }}">
                            		<i class="fa-solid fa-magnifying-glass"></i>
                    			</a>&nbsp;
                    			<a href="{{ route('news.edit', $article) }}">
                            		<i class="fa-solid fa-user-pen"></i>
                    			</a>&nbsp;
                                
                                @csrf
								@method('DELETE')
								<button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </thead>
            </table>
            
            {!! $articles->links() !!}
        </div>
    </section>
@endsection

