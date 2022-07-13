<div id="chart">
    <div class="w-full lg:w-3/5 mx-auto h-20 my-5">
        <select id="familyselector" onchange="getFamiliyId()" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
            @foreach($chart_families->children as $chart_family)
                @if(!$chart_family->children->isEmpty())
                    <optgroup label="{{$chart_family->name}}">
                        @foreach($chart_family->children as $children)
                            @if(!$children->children->isEmpty())
                                <option class="fake_optgroup" disabled>{{$children->name}}</option>
                                @foreach($children->children as $grand_children)
                                    <option data-chartid="{{$grand_children->id}}" value="{{$grand_children->id}}">{{$grand_children->name}}</option>
                                @endforeach
                            @else
                                <option data-chartid="{{$children->id}}" value="{{$children->id}}">{{$children->name}}</option>
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
    </div>

    <!-- Lines chart -->
    <div class="min-w-0 p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
        <div class="flex-none w-10 text-sm text-left font-semibold mb-2">
            €/Tonne
        </div>
        <div class="w-full">
            <canvas id="chart-show" height="60"></canvas>
            <div class="flex justify-center mt-7 space-x-3 text-sm text-gray-600 dark:text-gray-400 ">
                <!-- Chart legend -->
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-[#51ADE6] rounded-full"></span>
                    <span>Kleinstmengen</span>
                </div>
                <div class="flex items-center">
                    <span class="inline-block w-3 h-3 mr-1 bg-blue-800 rounded-full"></span>
                    <span>Großmengen</span>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" defer></script>
    <script>
        let chartid = 1;
        let optValues = [];
        let find = false;
        document.addEventListener("DOMContentLoaded", function(){
            chartid = Math.floor(Math.random() * 35);
            if(chartid > 0) {
                chartid = chartid;
            }

            console.log(chartid);
            const select_family = document.querySelector('#familyselector');
            const options = Array.from(select_family.options);
            options.forEach((option, i) => {
                optValues.push(option.value);
                if (option.value == chartid) {
                    select_family.selectedIndex = i;
                    chartid = option.value;
                    find = true;
                }
            });

            if(find == true) {
                chartid = chartid;
            } else {
                chartid = 3;
            }

            console.log(chartid);
            callAjax(chartid);
        });

        function getFamiliyId() {
            if( typeof window.myChart !== 'undefined'){
                window.myChart.destroy();
            }

            select_chart = document.getElementById('familyselector');
            let chartid = select_chart.options[select_chart.selectedIndex].getAttribute('data-chartid');
            callAjax(chartid);
        }

        function callAjax(chartid){

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

                    //console.log(response.status);
                    if(response.status == 'ok'){

                        const graph_data = response.data;
                        const labels = [];
                        const data_small = [];
                        const data_large = [];

                        for (var i in graph_data) {
                            labels.push(graph_data[i].labels);
                            data_small.push(graph_data[i].small);
                            data_large.push(graph_data[i].large);
                        }

                        //console.log(graph_data);
                        const lineConfig = {
                            type: 'line',
                            data: {
                                labels: labels,
                                datasets: [
                                    {
                                        label: 'Kleinstmengen',
                                        backgroundColor: '#094992',
                                        borderColor: '#51ADE6',
                                        data: data_small,
                                        fill: '-1',
                                    },
                                    {
                                        label: 'Großmengen',
                                        fill: false,
                                        backgroundColor: '#51ADE6',
                                        borderColor: '#094992',
                                        data: data_large,
                                        fill: '-1',
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
                        const lineCtx = document.getElementById('chart-show')
                        window.myChart = new Chart(lineCtx, lineConfig)
                    }
                    //console.log(response)
                }
            };
            ajax.send(JSON.stringify(data));
        }
    </script>
@endpush
