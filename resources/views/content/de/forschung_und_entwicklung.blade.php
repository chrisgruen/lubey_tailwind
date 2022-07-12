@extends('layouts.frontend_tailwind')
@section('title')
    @lang('messages.career')
@endsection
@section('content')
<div class="min-h-screen">
    <section class="h-38 md:h-54 bg-blue-800">
        <div class="container mx-auto px-6 py-10 text-white">
            <h2 class="text-3xl md:text-5xl font-semibold">Lubey AG</h2>
            <h2 class="text-2xl md:text-3xl">Forschung & Entwicklung</h2>
        </div>
    </section>

    <section class="container mx-auto my-5 p-5">
        <select id="familyselector" onchange="callAjax()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach($chart_families->children as $chart_family)
                @if(!$chart_family->children->isEmpty())
                    <optgroup label="{{$chart_family->name}}">
                        @foreach($chart_family->children as $children)
                            @if(!$children->children->isEmpty())
                                <option class="fake_optgroup" disabled>{{$children->name}}</option>
                                @foreach($children->children as $grand_children)
                                    <option
                                        data-chartid="{{$grand_children->id}}">{{$grand_children->name}}</option>
                                @endforeach
                            @else
                                <option data-chartid="{{$children->id}}">{{$children->name}}</option>
                            @endif
                        @endforeach
                    </optgroup>
                @else
                    <optgroup label="{{$chart_family->name}}">
                        <option data-chartid="{{$chart_family->id}}">{{$chart_family->name}} - @lang('messages.inGeneral')</option>
                    </optgroup>
                @endif
            @endforeach
        </select>

        <!-- Lines chart -->
        <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
            <h4 class="mb-4 font-semibold text-gray-800 dark:text-gray-300">
                Lines
            </h4>
            <canvas id="line"></canvas>
            <div class="flex justify-center mt-4 space-x-3 text-sm text-gray-600 dark:text-gray-400">
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-teal-500 rounded-full"></span>
                    <span>Großmengen</span>
                </div>
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-purple-600 rounded-full"></span>
                    <span>Kleinstmengen</span>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script>
        function callAjax(){

            select_chart = document.getElementById('familyselector');
            let chartid = select_chart.options[select_chart.selectedIndex].getAttribute('data-chartid');

            let url = '{{ route('chartdata') }}';
            let ajax = new XMLHttpRequest();

            ajax.open("Post", url, true);
            ajax.setRequestHeader("Content-Type", "application/json");
            ajax.setRequestHeader("X-CSRF-TOKEN", "{{csrf_token()}}");
            data = {'chartid': chartid};

            ajax.onreadystatechange = function() {
                // Check if the request is compete and was successful
                if(this.readyState === 4 && this.status === 200) {
                    // Inserting the response from server into an HTML element
                    const response = JSON.parse(this.responseText);
                    const graph_data = response.data;
                    const labels = [];
                    const data_small = [];
                    const data_large = [];

                    //console.log(response.status);
                    if(response.status == 'ok'){
                        familyselector = document.getElementById("familyselector");
                        for (var i in graph_data) {
                            labels.push(graph_data[i].labels);
                            data_small.push(graph_data[i].small);
                            data_large.push(graph_data[i].large);
                        }

                        console.log(graph_data);
                        const lineConfig = {
                            type: 'line',
                            data: {
                                labels: labels,
                                datasets: [
                                    {
                                        label: 'Kleinstmengen',
                                        backgroundColor: '#0694a2',
                                        borderColor: '#0694a2',
                                        data: data_small,
                                        fill: false,
                                    },
                                    {
                                        label: 'Großmengen',
                                        fill: false,
                                        backgroundColor: '#7e3af2',
                                        borderColor: '#7e3af2',
                                        data: data_large,
                                    },
                                ],
                            },

                            options: {
                                responsive: true,
                                /**
                                 * Default legends are ugly and impossible to style.
                                 * See examples in charts.html to add your own legends
                                 *  */
                                legend: {
                                    display: false,
                                },
                                tooltips: {
                                    mode: 'index',
                                    intersect: false,
                                },
                                hover: {
                                    mode: 'nearest',
                                    intersect: true,
                                },
                                scales: {
                                    x: {
                                        display: true,
                                        scaleLabel: {
                                            display: true,
                                            labelString: 'Month',
                                        },
                                    },
                                    y: {
                                        display: true,
                                        scaleLabel: {
                                            display: true,
                                            labelString: 'Value',
                                        },
                                    },
                                },
                            },
                        }
                        const lineCtx = document.getElementById('line')
                        window.myLine = new Chart(lineCtx, lineConfig)
                    }
                    //console.log(response)
                }
            };
            ajax.send(JSON.stringify(data));
        }
    </script>

@endpush


