<div id="chart">
    <div class="w-full lg:w-3/5 mx-auto h-20 mt-5">
        <select id="familyselector" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
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
    </div>

    <div class="w-full lg:w-3/5 mx-auto my-5 text-sm">
        <div class="col-12">
            <div id="chartdiv"></div>
        </div>
    </div>

    <div id="chartData"></div>
    <div id="chartFrmt">
        <span class="float-left"></span>
        <div class="clearfix"></div>
    </div>
</div>
@push('scripts')
    <script src="{{asset('build/js/app.js')}}"></script>
    <script src="{{asset('build/js/chart.js')}}"></script>
    <script>
        $(document).ready(function () {
            //$('#chart i').tooltip({"html": true});
            let chart_count = $('#familyselector option:not(.fake_optgroup) ').length;
            var random = Math.floor(Math.random() * chart_count);
            $("#familyselector option:not(.fake_optgroup)").eq(random).prop('selected', true);
            updateChart();

            $('#familyselector').change(function () {
                updateChart();
            });
        });

        let chart = null;
        am4core.ready(function () {
            am4core.useTheme(am4themes_animated);
            chart = am4core.create("chartdiv", am4charts.XYChart);
            @if(App::getLocale()=='de')
                chart.language.locale = am4lang_de_DE;
            @endif
            let dateAxis = chart.xAxes.push(new am4charts.DateAxis());
            dateAxis.renderer.minGridDistance = 40;
            valueAxis = chart.yAxes.push(new am4charts.ValueAxis());
            valueAxis.title.text = "€/@lang('unit.t_singular')";
            chart.cursor = new am4charts.XYCursor();
            chart.cursor.xAxis = dateAxis;
        });

        function updateChart() {
            chart.series.clear();
            let chartid = $('#familyselector :selected').data('chartid');
            $.ajax({
                type: 'GET',
                url: "{{route('chartdata')}}",
                data: {'chartid': chartid},
                dataType: 'json',

                success: function (data) {
                    if (data.status === 'ok') {
                        createSeries(data.data);
                        $('#chartdiv').fadeIn();
                    }
                }
            });
        }

        function createSeries(raw_data) {
            chart.data = raw_data;
            let series = chart.series.push(new am4charts.LineSeries());
            series.dataFields.dateX = "date";
            series.dataFields.openValueY = "small";
            series.dataFields.valueY = "large";
            series.tooltipText = "@lang('messages.largeAmounts'): {valueY.value} €/t | @lang('messages.smallAmounts') {openValueY.value} €/t ";
            series.sequencedInterpolation = true;
            series.stroke = am4core.color("#014493");
            series.strokeWidth = 2;
            series.name = "@lang('messages.largeAmounts')";
            series.fill = am4core.color("#22aeec");
            series.fillOpacity = 0.8;

            let series2 = chart.series.push(new am4charts.LineSeries());
            series2.dataFields.dateX = "date";
            series2.dataFields.valueY = "small";
            series2.sequencedInterpolation = true;
            series2.strokeWidth = 2;
            series2.tooltip.getFillFromObject = false;
            series2.tooltip.getStrokeFromObject = true;
            series2.tooltip.label.fill = am4core.color("#000");
            series2.name = "@lang('messages.smallAmounts')";
            series2.stroke = am4core.color("#014493");
            series2.fill = am4core.color("#22aeec");
        }
    </script>

@endpush
