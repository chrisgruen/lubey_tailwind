<footer class="bg-blue-800 text-white">
    <div class="container mx-auto px-6 pt-10 pb-6">
        <div class="flex flex-wrap">
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class=" mb-6 text-lg font-semibold">Lubey AG</h5>
                <ul class="mb-4 font-extralight">
                    <li class="">
                        Große Nikolaistraße 8</span><br>
                        06108 Halle (Saale)<br>
                        Telefon: 0345 977 24 96 0<br>
                        E-Mail: office@lubey.ag
                    </li>

                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class=" mb-6 text-lg font-semibold">Produkte</h5>
                <ul class="mb-4 font-extralight">
                    <li class="">
                        <a href="/" class="hover:underline ">Digitale Lösungen</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'trade'])}}" class="hover:underline ">Lubey Trade</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'connect'])}}" class="hover:underline ">Lubey Connect</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'consult'])}}" class="hover:underline ">Lubey Consulting</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class=" mb-6 text-lg font-semibold">Lubey AG</h5>
                <ul class="mb-4 font-extralight">
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'lubey_ag'])}}" class="hover:underline ">Über Lubey</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'forschung_und_entwicklung'])}}" class="hover:underline ">Forschung & Entwicklung</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'news'])}}" class="hover:underline ">Aktuelles</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'karriere'])}}" class="hover:underline ">Karriere</a>
                    </li>
                </ul>
            </div>
            <div class="w-full md:w-1/4 text-center md:text-left ">
                <h5 class=" mb-6 text-lg font-semibold">Rechtliches</h5>
                <ul class="mb-4 font-extralight">
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'agb'])}}" class="hover:underline ">AGB</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'teilnahmebedingungen'])}}" class="hover:underline ">Teilnahmebedingungen</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'impressum'])}}" class="hover:underline ">Impressum</a>
                    </li>
                    <li class="">
                        <a href="{{route('content.page',['pageID'=>'datenschutz'])}}" class="hover:underline ">Datenschutz</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<div class="container mx-auto px-6 pt-10 pb-6">
    <div class="text-xs text-blue-800">
        &copy; Lubey AG {{date('Y')}}
    </div>
</div>