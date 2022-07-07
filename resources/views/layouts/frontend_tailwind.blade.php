<!DOCTYPE html>
<html lang="{{App::getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @stack('meta')
    <meta name="description" content="@yield('description')">
    <title>{{config('app.name')}} - @yield('title',trans('messages.online-marketplace'))</title>
    <!-- Styles -->
    <link href="{{ URL::to(mix('css/app.css')) }}" rel="stylesheet">
    <link href="{{ URL::to(mix('css/custom.css')) }}" rel="stylesheet">
    @stack('css')


</head>

<body class="text-gray-700 bg-white" >
@include('layouts.partials.header')
@yield('content')
@include('layouts.partials.footer')

    <script src="{{URL::to(mix('build/js/frontend.js'))}}"></script>
    	@stack('scripts')
    <script>

    {{--
    <script>
        let gaProperty = 'UA-135917487-1';
        $(document).ready(function () {
            @if(!config('app.debug'))
            if (document.cookie.split(';').filter(function (item) {
                return item.indexOf('cookieconsent_status=allow') >= 0
            }).length) {
                loadGAonConsent();
            }
            @endif
            window.cookieconsent.initialise({
                "palette": {
                    "popup": {"background": "#07468f"},
                    "button": {"background": "#51ade6", "text": "#ffffff"}
                },
                "theme": "edgeless",
                "type": "opt-in",
                "content": {
                    @if(App::getLocale()=='de')
                    "message": "Lubey möchte Ihnen den bestmöglichen Service bieten. Dazu speichern wir Informationen über Ihren Besuch in sogenannten Cookies. Durch die Nutzung dieser Webseite erklären Sie sich mit der Verwendung von Cookies einverstanden. Detaillierte Informationen über den Einsatz von Cookies auf dieser Webseite finden Sie auf der Seite „Datenschutz“. An dieser Stelle können Sie auch der Verwendung von Cookies widersprechen und die Browsereinstellungen entsprechend anpassen. Wir nutzen ebenfalls Google Analytics, um diese Website für Sie so interessant wie möglich zu gestalten. Sind Sie damit einverstanden?",
                    "deny": "Ablehnen",
                    "allow": "OK, gerne!",
                    "link": "Datenschutz",
                    @else
                    "message": "Lubey would like to offer you the best possible service. For this purpose, we store information about your visit in so-called cookies. By using this website, you agree to the use of cookies. Detailed information about the use of cookies on this website can be found on the \"Privacy\" page. At this point you can also decline to the use of cookies and adjust your browser settings accordingly. We also use Google Analytics to make this website as interesting as possible for you. Do you agree to this?",
                    "deny": "Decline",
                    "allow": "OK, I accept!",
                    "link": "Privacy",
                    @endif
                    "href": '{{ route('content.page',["pageID"=>strtolower(trans("messages.privacy"))])}}'
                },
                onStatusChange: function (status, chosenBefore) {
                    var type = this.options.type;
                    var didConsent = this.hasConsented();
                    if (type === 'opt-in' && didConsent) {
                        // enable cookies
                        loadGAonConsent();
                    }
                }
            });
        });
        function loadGAonConsent() {
            if (navigator.doNotTrack != 1 && navigator.doNotTrack != "yes" && window.doNotTrack != 1 && navigator.msDoNotTrack != 1) {
                window.ga = window.ga || function () {
                    (ga.q = ga.q || []).push(arguments)
                };
                ga.l = +new Date;
                ga('create', gaProperty, 'auto');
                ga('set', 'anonymizeIp', true);
                ga('send', 'pageview');
                var gascript = document.createElement("script");
                gascript.async = true;
                gascript.src = "https://www.google-analytics.com/analytics.js";
                document.getElementsByTagName("head")[0].appendChild(gascript, document.getElementsByTagName("head")[0]);
            } else {
                console.log('Not loading GA-Code due to DNT-Header')
            }
        }
    </script>
    --}}

</body>
</html>
