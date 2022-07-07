<div class="bg-blue-800">
    <div class="container flex mx-auto px-6 pt-2 pb-1 justify-end text-white text-sm">
        <a href="mailto:office@lubey.ag" target="_blank" class="px-2"><i class="fas fa-paper-plane"></i> office@lubey.ag</a>
        <a href="tel:+4934597724960" target="_blank" class="px-2"><i class="fas fa-phone-alt"></i> +49 (0)345 977 24 96 0</a>
        <a href="https://www.facebook.com/Lubey.de/" target="_blank" class="px-1 text-base"><i class="fab fa-facebook-square"></i></a>
        <a href="https://www.linkedin.com/company/lubey-ag" target="_blank" class="px-1 text-base"><i class="fab fa-linkedin"></i></a>
    </div>
</div>

<nav class="bg-white border-gray-200 px-2 sm:px-4 py-3 rounded dark:bg-gray-800">
    <div class="container relative flex flex-wrap justify-between items-center mx-auto py-3">
        <a class="font-bold text-2xl lg:text-4xl ml-6" href="{{route('home')}}">
            <img src="{{ url('/img/logo_lubey.png') }}" style="width:148px" alt="logo">
        </a>
        <button data-collapse-toggle="mobile-menu" type="button" class="inline-flex items-center p-2 mr-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
        <div class="absolute hidden md:block top-3 right-3">
            @if(Auth::check())
                <a href="{{route('bay.index')}}" class="bg-white border border-blue-800 text-blue-800 text-sm rounded py-2 px-3 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                    <i class="fas fa-user"></i> zum Arbeitsbereich
                </a>
                <a href="{{route('user.logout') }}" class="bg-white border border-blue-800 text-blue-800 text-sm rounded py-2 px-3 mx-3 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                    <i class="fas fa-user"></i> Logout
                </a>
            @else
                <a href="{{route('user.signin') }}" class="bg-white border border-blue-800 text-blue-800 text-sm rounded py-2 px-3 uppercase tracking-wider hover:text-white hover:bg-blue-800">
                    <i class="fas fa-user"></i> Login
                </a>
            @endif
        </div>
        <div class="hidden w-full md:block md:w-auto" id="mobile-menu">
            <div class="flex">
                <div class="w-full">
                    <ul class="flex flex-col mt-4 ml-6 md:flex-row md:space-x-8 md:mt-12 md:text-sm md:font-medium md:text-lg">
                        <li>
                            <a href="{{route('content.page',['pageID'=>'individual'])}}"
                               class="block py-2 px-4 border-b border-gray-100 hover:bg-blue-800 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 md:text-blue-800 md:hover:text-blue-600 {{ Request::is('individual*') ? 'font-bold bg-blue-800 text-white md:bg-transparent md:text-blue-800' : 'md:hover:text-blue-600' }}">
                                Digitale Lösungen
                            </a>
                        </li>
                        <li>
                            <a href="{{route('content.page',['pageID'=>'trade'])}}"
                               class="block py-2 px-4 border-b border-gray-100 hover:bg-blue-800 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 md:text-blue-800 md:hover:text-blue-600 {{ Request::is('trade*') ? 'font-bold bg-blue-800 text-white md:bg-transparent md:text-blue-800' : 'md:hover:text-blue-600' }}">
                                Trade
                            </a>
                        </li>
                        <li>
                            <a href="{{route('content.page',['pageID'=>'connect'])}}"
                               class="block py-2 px-4 border-b border-gray-100 hover:bg-blue-800 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 md:text-blue-800 md:hover:text-blue-600 {{ Request::is('connect') ? 'font-bold bg-blue-800 text-white md:bg-transparent md:text-blue-800' : 'md:hover:text-blue-600' }}">
                                Connect
                            </a>
                        </li>
                        <li>
                            <a href="{{route('content.page',['pageID'=>'consult'])}}"
                               class="block py-2 px-4 border-b border-gray-100 hover:bg-blue-800 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 md:text-blue-800 md:hover:text-blue-600 {{ Request::is('consult') ? 'font-bold bg-blue-800 text-white md:bg-transparent md:text-blue-800' : 'md:hover:text-blue-600' }}">
                                Consult
                            </a>
                        </li>
                        <li>
                            <a href="{{route('content.page',['pageID'=>'lubey_ag'])}}"
                               class="block py-2 px-4 border-b border-gray-100 hover:bg-blue-800 hover:text-white md:hover:bg-transparent md:border-0 md:p-0 md:text-blue-800 md:hover:text-blue-600 {{ Request::is('lubey_ag') ? 'font-bold bg-blue-800 text-white md:bg-transparent md:text-blue-800' : 'md:hover:text-blue-600' }}">
                                Lubey AG
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="pl-3 hidden md:mt-12 md:block w-24">
                    |
                    <button class="bg-blue-800 text-white text-base rounded ml-3 py-1 px-2 uppercase tracking-wider">
                        DE
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

