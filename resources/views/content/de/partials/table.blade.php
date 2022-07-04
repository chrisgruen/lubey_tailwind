<!-- table Vergaben -->
<section class="bg-gradient-to-b from-blue-800 to-[#4FAAE3] text-white mt-20">
    <div class="container mx-auto px-6 pt-10 pb-6 px-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full mt-4 text-white border-b pb-10">
            <div class="px-0 lg:px-10">
                <h2 class="text-3xl font-semibold">Ausgewählte Vergaben</h2>
            </div>
            <div class="mt-10 lg:mt-0">
                <a href="{{route('user.signin')}}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg rounded mb-3 py-3 px-5 hover:text-white hover:bg-blue-800">
                    <span class="font-semibold mr-1">Jetzt</span> Anmelden und mehr Vergaben ansehen!
                </a>
            </div>
        </div>

        @if(!empty($allocations))
            <div class="overflow-x-auto pb-10">
                @foreach($allocations as $allocation)
                    @foreach($allocation->lots->sortBy('sort_order') as $lot)
                        @if(count($lot->slices) > 0)
                        <div class="flex items-center mt-0 border-b">
                            <div class="flex-none w-20 mr-12 self-start py-5">
                                @if(isset($lot->family->name))
                                    <img src="{{asset(Helper::getFamilyImg($lot->family->name))}}"  alt="{{Helper::getFamilyImg($lot->family->name)}}"/>
                                @else
                                    <img src="{{asset('img/frontend/Alttextilien.png')}}"  alt="Alttextilien"/>
                                @endif
                            </div>
                            <div class="flex-initial w-full relative overflow-x-auto ">
                                <table class="w-full text-base text-left text-white mb-5">
                                    <thead class="text-lg font-light bg-transparent">
                                    <tr class="border-b border-blue-400">
                                        <th scope="col" class="px-6 py-4 text-2xl align-middle whitespace-nowrap">
                                            @lang('allocation.lot') {{$lot->sort_order}}
                                        </th>
                                        <th scope="col" class="px-6 py-4 align-middle whitespace-nowrap">
                                            @if(isset($lot->family->name))
                                                @lang('auction.'.$lot->family->name)
                                            @else
                                                nicht bekannt
                                            @endif
                                        </th>
                                        <th scope="col" class="px-6 py-4 align-middle whitespace-nowrap">
                                            {{number_format($lot->slices->sum('quantity'),2,',','.')}} @lang('unit.'.$lot->unit->name)
                                        </th>
                                        <th scope="col" class="px-6 py-4 align-middle whitespace-nowrap">
                                            {{date('d.m.Y | H:i',strtotime($allocation->offer_limit))}} Uhr
                                        </th>
                                        <th scope="col" class="px-6 py-4 text-right align-middle whitespace-nowrap" colspan="2">
                                            <a class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg rounded py-1 px-3 hover:text-white hover:bg-blue-800" href="{{route('alloc.details',['allocationName'=>$allocation->name])}}">
                                                Details anzeigen
                                            </a>
                                        </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lot->slices as $slice)
                                        <tr class="bg-transparent">
                                            <td class="px-6 py-4 align-top">
                                                @if(isset($slice->material->avvid))
                                                    {{$slice->material->avvid}}
                                                @else
                                                    keine avvid
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 align-top w-96">
                                                @if($slice->description)
                                                    {{$slice->description}}
                                                @else
                                                    @if($slice->substances->isNotEmpty())
                                                        {{implode(', ',$slice->substances->pluck('name')->all())}}
                                                    @else
                                                        @if(isset($slice->material->name))
                                                            {{$slice->material->name}}&nbsp;
                                                        @else
                                                            keine Name
                                                        @endif
                                                    @endif
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 align-top whitespace-nowrap">
                                                @if($slice->division_as_location && $slice->division)
                                                    {{$slice->division->zipcode}}, @lang('countries.'.$slice->division->get_country())
                                                @else
                                                    {{$slice->zip_code}}, @lang('countries.'.$allocation->company->get_country())
                                                @endif
                                            </td>
                                            <td class="px-6 py-4 align-top whitespace-nowrap">
                                                &nbsp;
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        @endif
                    @endforeach
                @endforeach
            </div>
        @endif

        {{-- static table --
		<div class="overflow-x-auto">
            <div class="flex items-center mt-0 border-b">
                <div class="flex-none w-20 mr-12">
                    <img src="{{asset('img/frontend/Alttextilien.png')}}"  alt="Check"/>
                </div>
                <div class="flex-initial w-full relative overflow-x-auto ">
                    <table class="w-full text-base text-left text-white">
                        <thead class="text-lg font-light bg-transparent">
                            <tr>
                                <th scope="col" class="px-6 pt-1 pb-5 text-2xl whitespace-nowrap">
                                    Los 1
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5 whitespace-nowrap">
                                    Textilien
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5 whitespace-nowrap">
                                    40.000 Tonnen
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5 whitespace-nowrap">
                                    29.04.2022 | 12:00 Uhr
                                </th>
                                <th scope="col" class="px-6 pt-1 pb-5 text-right whitespace-nowrap" colspan="2">
                                    <button class="bg-transparent text-white hover:text-white py-2 px-4 mt-5 border">
                                        Details anzeigen
                                    </button>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-transparent border-t">
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                    AVV 200110
                                </td>
                                <td class="px-6 py-4 align-top w-60 whitespace-nowrap">
                                    Alttextilien, namentlich Bekleidung und Schuhe
                                </td>
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                    200.000 Tonnen
                                </td>
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                   DE 29664, Walsrode
                                </td>
                            </tr>
                            <tr class="bg-transparent">
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                    AVV 200110
                                </td>
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                    Alttextilien, namentlich Bekleidung und Schuhe
                                </td>
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                    200.000 Tonnen
                                </td>
                                <td class="px-6 py-4 align-top whitespace-nowrap">
                                    DE 29640, Schneverdingen
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="flex items-center mt-0 mb-7 border-b">
            <div class="flex-none w-20 mr-12">
                <img src="{{asset('img/frontend/Altholz.png')}}"  alt="Check"/>
            </div>
            <div class="flex-initial w-full relative overflow-x-auto ">
                <table class="w-full text-base text-left text-white">
                    <thead class="text-lg font-light bg-transparent">
                    <tr>
                        <th scope="col" class="px-6 pt-1 pb-5 text-2xl whitespace-nowrap">
                            Los 2
                        </th>
                        <th scope="col" class="px-6 pt-1 pb-5 whitespace-nowrap">
                            Textilien
                        </th>
                        <th scope="col" class="px-6 pt-1 pb-5 whitespace-nowrap">
                            40.000 Tonnen
                        </th>
                        <th scope="col" class="px-6 pt-1 pb-5 whitespace-nowrap">
                            29.04.2022 | 12:00 Uhr
                        </th>
                        <th scope="col" class="px-6 pt-1 pb-5 text-right whitespace-nowrap" colspan="2">
                            <button class="bg-transparent text-white hover:text-white py-2 px-4 mt-5 border">
                                Details anzeigen
                            </button>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="bg-transparent border-t">
                        <td class="px-6 py-4 align-top whitespace-nowrap">
                            AVV 200110
                        </td>
                        <td class="px-6 py-4 w-60 align-top whitespace-nowrap">
                            Alttextilien, namentlich Bekleidung und Schuhe
                        </td>
                        <td class="px-6 py-4 align-top whitespace-nowrap">
                            200.000 Tonnen
                        </td>
                        <td class="px-6 py-4 align-top whitespace-nowrap">
                            DE 29664, Walsrode
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    --}}
</section>
