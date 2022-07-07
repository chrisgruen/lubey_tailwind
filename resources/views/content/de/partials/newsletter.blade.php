<section id="newsletter-box" class="bg-gradient-to-b from-[#4FAAE3] to-blue-800 text-white">
	<div class="relative container mx-auto px-6 pt-10 pb-6 px-5">
		<div class="absolute top-5 left-64 w-96 z-10" >
            <img class="w-full z-0" src="{{asset('img/frontend/paperflyer.png')}}" alt="group1"/>
        </div>
		<div class="flex items-center py-4">
    		<div class="flex-grow h-px bg-white"></div>
    		<span class="flex-shrink text-3xl font-semibold px-6">NEWSLETTER</span>
            <div class="flex-grow h-px bg-white"></div>
        </div>
        @if(count($errors) > 0)
            <div class="w-full md:w-1/2 mx-auto p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800 h-auto" role="alert">
                @foreach($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
            </div>
        @endif
        <form method="post" id="inputForm" action="{{route('newsletter.subscribe')}}">
		<div class="flex flex-wrap mx-auto items-baseline mt-12 w-full lg:w-10/12">
			<div class="w-full xl:w-2/5 px-0 lg:px-10 mb-10 lg:mb-0">
				Ihr E-Mail Adresse<br />
				<input type="email" name="email"  class="mt-1 block w-full px-3 py-2 bg-white border border-slate-300 rounded-md text-gray-700" placeholder="E-Mail-Adresse eintragen... "/>
            	<div class="flex mt-4">
        			<div class="flex-none">
                  		<input type="checkbox" id="extra1" name="extra1"
                               class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                  	</div>
                  	<p class="text-white text-xs">
						Mit meiner Anmeldung zu dem personalisierten Newsletter willige ich ein, dass personalisierte Nutzungsprofile erstellt werden, um die Ansprache, Informationen und Angebote besser auf meine persönlichen Interessen anzupassen.
                  	</p>
                </div>
                <div class="flex mt-4">
        			<div class="flex-none">
                  		<input type="checkbox" id="accept_privacy" name="accept_privacy"
                            class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                  	</div>
                  	<p class="text-white text-xs">
						Ich habe die Datenschutzlinien gelesen und stimme Ihnen zu.
                  	</p>
                </div>
                <button class="bg-transparent text-white hover:text-white hover:bg-blue-800 py-2 px-4 mt-5 border rounded">abbonieren</button>
			</div>
			<div class="w-full xl:w-3/5 px-0 lg:px-10">
				<div>Lubey Newsletter mit auf meine Bedürfnisse zugeschnittenen <br />Informationen rund um die Themen</div>

				<div class="overflow-x-auto">
                    <div class="w-[32rem] flex space-x-4 mt-5">
                    	<div class="flex-none w-24">
                    		<span>Lubey</span><br />
                    		<span class="text-lg">Produkte</span>
                    	</div>
                    	<div class="flex-initial w-48">
                    		<div class="form-check">
                    		  <input type="checkbox" id="product_connect" name="product_connect"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    		  <label class="form-check-label inline-block text-white" for="product_connect">
                                  Connect
                    		  </label>
                    		</div>
                    		<div class="form-check mr-10">
                    		  <input type="checkbox" id="product_trade" name="product_trade"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    		  <label class="form-check-label inline-block text-white" for="product_trade">
                                  Trade
                    		  </label>
                    		</div>
                    	</div>
                    	<div class="flex-initial">
                    		<div class="form-check">
                    		  <input type="checkbox" id="product_individual" name="product_individual"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    		  <label class="form-check-label inline-block text-white" for="product_individual">
                                  Digitale Lösungen
                    		  </label>
                    		</div>
                    		<div class="form-check mr-10">
                    		  <input type="checkbox" id="product_consult" name="product_consult"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    		  <label class="form-check-label inline-block text-white" for="product_consult">
                                  Consulting
                    		  </label>
                    		</div>
                    	</div>
                    </div>
                    <div class="w-[32rem] flex space-x-4 mt-5">
                    	<div class="flex-none w-24">
                    		<span>Lubey</span><br />
                    		<span class="text-lg">Trade</span>
                    	</div>
                    	<div class="flex-initial w-48">
                    		<div class="form-check">
                    		  <input type="checkbox" id="trade_commune" name="trade_commune"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    		  <label class="form-check-label inline-block text-white" for="trade_commune">
                                  Städte & Kommunen
                    		  </label>
                    		</div>
                    		<div class="form-check mr-10">
                    		  <input type="checkbox" id="trade_trade" name="trade_trade"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    		  <label class="form-check-label inline-block text-white" for="trade_trade">
                                  Handel
                    		  </label>
                    		</div>
                    	</div>
                    	<div class="flex-initial">
                    		<div class="form-check">
                    		  <input type="checkbox" id="trade_industry" name="trade_industry"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer">
                    		  <label class="form-check-label inline-block text-white" for="trade_industry">
                                  Industrie
                    		  </label>
                    		</div>
                    		<div class="form-check mr-10">
                    		  <input type="checkbox" id="trade_disposer" name="trade_disposer"
                                  class="form-check-input appearance-none h-4 w-4 border border-gray-300 rounded-sm bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="checkbox" value="" id="flexCheckDefault">
                    		  <label class="form-check-label inline-block text-white" for="trade_disposer">
                                  Entsorger
                    		  </label>
                    		</div>
                    	</div>
                    </div>
				</div>
			</div>
            {{csrf_field()}}
            </form>
		</div>
	</div>
</section>
@push('scripts')
    <script>
        @if(count($errors) > 0)
            var scroll_element = document.getElementById("newsletter-box");
            scroll_element.scrollIntoView();
        @endif
    </script>
@endpush
