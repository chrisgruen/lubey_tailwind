<!-- table Vergaben -->
@if(!empty($auctions))
    <section class="bg-gradient-to-b from-blue-800 to-[#4FAAE3] text-white mt-20">
        <div class="container mx-auto px-6 pt-10 pb-6 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full mt-4 text-white border-b pb-10">
                <div class="px-0">
                    <h2 class="text-3xl font-semibold">Ausgewählte Vergaben</h2>
                </div>
                <div class="mt-10 lg:mt-0">
                    <a href="{{route('user.signin')}}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg rounded mb-3 py-3 px-5 hover:text-white hover:bg-blue-800">
                        <span class="font-semibold mr-1">Jetzt</span> Anmelden und mehr Vergaben ansehen!
                    </a>
                </div>
            </div>

            <div class="overflow-x-auto">
                <div class="flex items-center mt-0 border-b">
                    <div class="flex-none w-20 mr-12 ">

                    </div>
                    <div class="flex-initial w-full relative overflow-x-auto ">
                        <table class="w-full text-base text-left text-white">
                            <thead class="text-lg font-light bg-transparent">

                            </thead>
                            <tbody>
                            @foreach($auctions as $auction)
                                <tr class="bg-transparent border-t">
                                    <td class="px-6 py-4 align-top whitespace-nowrap">
                                            <span class="text-important">@lang('auction.'.$auction->family->name): AVV {{$auction->material->avvid}} @if($auction->type !== 'pickup')
                                                    (@lang('messages.'.$auction->type.'-auction')) @endif</span> <span
                                            class="list_substances">{!! (!$auction->substances->isEmpty()?"<br>".implode(', ',$auction->substances->pluck('name')->all()):"")!!}
                                            </span>
                                    </td>
                                    <td class="px-6 py-4 align-top w-60">
                                        {{number_format($auction->quantity,2,',','.')}} @lang('unit.'.$auction->unit->name)
                                    </td>
                                    <td class="px-6 py-4 align-top whitespace-nowrap">
                                        {{substr($auction->zipcodeOrigin,0,3)."XX"}}
                                    </td>
                                    <td class="px-6 py-4 align-top whitespace-nowrap">
                                        <a class="text-info-link" href="{{route('auction.detail',['auctionName'=>$auction->name])}}">
                                            Details <i class="fas fa-chevron-right icon-small" aria-hidden="true"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
<br /><br />

@if(!empty($allocations))

    {{-- --}}
    <section class="bg-gradient-to-b from-blue-800 to-[#4FAAE3] text-white mt-20">
        <div class="container mx-auto px-6 pt-10 pb-6 px-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 h-full mt-4 text-white mb-10">
                <div class="px-0">
                    <h2 class="text-3xl font-semibold">Ausgewählte Vergaben</h2>
                </div>
                <div class="mt-10 lg:mt-0">
                    <a href="{{route('user.signin')}}" class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg rounded mb-3 py-3 px-5 hover:text-white hover:bg-blue-800">
                        <span class="font-semibold mr-1">Jetzt</span> Anmelden und mehr Vergaben ansehen!
                    </a>
                </div>
            </div>

            @foreach($allocations as $allocation)
                @if(count($allocation->lots) > 0)
                <div class="border-t-2 h-2"></div>
            	<div class="overflow-x-auto pb-10">
                    <div class="mt-2  pt-5 pb-1 w-full">
                        <table class="w-full text-xl text-center text-white mb-5">
                            <tr>
                                <td class="w-64 font-bold text-left whitespace-nowrap pr-5 lg-pr-0">
                                    Vergabe: {{$allocation->title}}
                                </td>
                                <td class="w-96 whitespace-nowrap pr-5 lg-pr-0">
                                    @lang('allocation.'.$allocation->legal_base)
                                </td>
                                <td  class="pr-5 lg-pr-0 min-w-[300px]">
                                    {{$allocation->company->company}}
                                </td>
                                <td class="px-6 py-4 align-middle text-base whitespace-nowrap">
                                    {{date('d.m.Y, H:i',strtotime($allocation->offer_limit))}} Uhr
                                </td>
                                <td class="pl-12 text-right whitespace-nowrap pr-0 lg-pr-5">
                                    <a class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg rounded py-1 px-3 hover:text-white hover:bg-blue-800 whitespace-nowrap"
                                       href="{{route('alloc.details',['allocationName'=>$allocation->name])}}">
                                        zur Vergabe
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                    @foreach($allocation->lots->sortBy('sort_order') as $lot)
                        @if(count($lot->slices) > 0)
                            <div class="flex items-center mt-0  ml-15">
                                <div class="flex-none w-20 mr-10 self-start py-5">
                                    @if(isset($lot->family->name))
                                        <img src="{{asset(App\Helpers\Helper::getFamilyImg($lot->family->name))}}"  alt="{{App\Helpers\Helper::getFamilyImg($lot->family->name)}}"/>
                                    @else
                                        <img src="{{asset('img/frontend/Alttextilien.png')}}"  alt="Alttextilien"/>
                                    @endif
                                </div>
                                <div class="flex-initial w-full relative ">
                                    <table class="w-full text-base text-left text-white mb-5">
                                        <thead class="text-lg font-light bg-transparent">
                                        <tr class="border-t border-blue-400">
                                            <th scope="col" class="px-6 pt-4 align-middle whitespace-nowrap w-48">
                                                @lang('allocation.lot') {{$lot->sort_order}}
                                            </th>
                                            <th scope="col" class="px-6 pt-4 align-middle w-[400px] min-w-[400px]">
                                                @if(isset($lot->family->name))
                                                    @lang('auction.'.$lot->family->name)
                                                @else
                                                    nicht bekannt
                                                @endif
                                            </th>
                                            <th scope="col" class="px-6 pt-4 align-middle whitespace-nowrap">
                                                {{number_format($lot->slices->sum('quantity'),2,',','.')}} @lang('unit.'.$lot->unit->name)
                                            </th>
                                            <th scope="col" class="pt-4 text-right align-middle whitespace-nowrap" colspan="2">
                                                <a class="inline-flex bg-[#51ADE6] border border-blue-300 text-white text-lg rounded py-1 px-3 hover:text-white hover:bg-blue-800 whitespace-nowrap"
                                                   href="#">
                                                    zum Los
                                                </a>
                                            </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($lot->slices as $slice)
                                            <tr class="bg-transparent">
                                                <td class="px-6 py-2 align-top">
                                                    @if(isset($slice->material->avvid))
                                                        {{$slice->material->avvid}}
                                                    @else
                                                        keine avvid
                                                    @endif
                                                </td>
                                                <td class="px-6 py-2 align-top">
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
                                                <td class="px-6 py-2 align-top whitespace-nowrap">
                                                    @if($slice->division_as_location && $slice->division)
                                                        {{$slice->division->zipcode}}, @lang('countries.'.$slice->division->get_country())
                                                    @else
                                                        {{$slice->zip_code}}, @lang('countries.'.$allocation->company->get_country())
                                                    @endif
                                                </td>
                                                <td class="px-6 py-2 align-top whitespace-nowrap">
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
                    </div>
                @endif
            @endforeach
        </div>
    </section>
@endif

