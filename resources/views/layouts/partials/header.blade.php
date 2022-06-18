<div class="bg-blue-800">
    <div class="container flex mx-auto px-6 pt-2 pb-1 justify-end text-white text-sm">
        <a href="mailto:office@lubey.ag" target="_blank" class="px-2"><i class="fas fa-paper-plane"></i> office@lubey.ag</a>
        <a href="tel:+4934597724960" target="_blank" class="px-2"><i class="fas fa-phone-alt"></i> +49 (0)345 977 24 96 0</a>
        <a href="https://www.facebook.com/Lubey.de/" target="_blank" class="px-1 text-base"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.linkedin.com/company/lubey-ag" target="_blank" class="px-1 text-base"><i class="fab fa-linkedin"></i></a>
    </div>
</div>
<nav class="container mx-auto px-6 pt-6 pb-5 flex justify-between items-center">
    <a class="font-bold text-2xl lg:text-4xl" href="{{route('content.page',['pageID'=>'home'])}}">
    	<img src="{{ url('/img/logo_lubey.png') }}" style="width:148px" alt="logo">
	</a>
    <div class="block lg:hidden">
        <button class="flex items-center px-3 py-2 border rounded text-gray-500 border-gray-600 hover:text-gray-800 hover:border-teal-500 appearance-none focus:outline-none">
            <svg
                class="fill-current h-3 w-3"
                viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg"
            >
                <title>Menu</title>
                <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/>
            </svg>
        </button>
    </div>
    <div class="hidden lg:block">
        <div class="flex justify-end mb-2">
            <a href="{{route('content.page',['pageID'=>'new_home'])}}"
               class="bg-white border border-blue-800 text-blue-800 text-sm rounded mb-3 py-1 px-2 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                <i class="fas fa-user"></i> Login
            </a>
        </div>
        <div class="inline-flex divide-x divide-gray-600 text-sm">
            <div>
                <ul class="inline-flex mr-3">
                    <li>
                        <a class="px-4 text-blue-800 text-lg {{ Request::is('individual*') ? 'font-bold' : 'hover:text-blue-600' }}" href="{{route('content.page',['pageID'=>'individual'])}}">Digitale Lösungen</a>
                    </li>
                    <li>
                        <a class="px-4 text-blue-800 text-lg {{ Request::is('trade') ? 'font-bold' : 'hover:text-blue-600' }}" href="{{route('content.page',['pageID'=>'trade'])}}">Trade</a>
                    </li>
                    <li>
                        <a class="px-4 text-blue-800 text-lg {{ Request::is('connect*') ? 'font-bold' : 'hover:text-blue-600' }}" href="{{route('content.page',['pageID'=>'connect'])}}">Connect</a>
                    </li>
                    <li>
                        <a class="px-4 text-blue-800 text-lg {{ Request::is('consult*') ? 'font-bold' : 'hover:text-blue-600' }}" href="{{route('content.page',['pageID'=>'consult'])}}">Consult</a>
                    </li>
                    <li>
                        <a class="px-4 text-blue-800 text-lg {{ Request::is('lubey_ag*') ? 'font-bold' : 'hover:text-blue-600' }}" href="{{route('content.page',['pageID'=>'lubey_ag'])}}">Lubey AG</a>
                    </li>
                </ul>
            </div>
            <div class="pl-3">
                <button class="bg-blue-800 text-white text-base rounded ml-3 py-1 px-2 uppercase tracking-wider">
                    DE
                </button>
            </div>
        </div>
    </div>
</nav>
