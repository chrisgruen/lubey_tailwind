<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Backend Lubey AG</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet"/>
    <link href="{{ URL::to(mix('css/app.css')) }}" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
    <script src="{{URL::to('js/init-alpine.js')}}"></script>
    {{--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
    <script src="./js/charts-lines.js"></script>
    <script src="./js/charts-pie.js"></script>
    --}}
</head>
<body>
    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('layouts.partials.sidebar_backend')
        <div class="flex flex-col flex-1 w-full">
            @include('layouts.partials.header_backend')
            <main class="h-full pb-16 overflow-y-auto">
            	@yield('content')
        	</main>
        </div>
    </div>
</body>
</html>
