<div>
<div class="mb-4">
                    <div class="card card-body bg-light border mb-2">
                        <div id="{{$graphType}}"></div>
                    </div>
</div>



@push('script')
<script>
    
    var datas = @json($graphData)

    Highcharts.chart('{{$graphType}}',{
        title: {
            text: "{{$graphTitle}}"
        },
        subtitle: {
            text: "For year " + {{date("Y")}}
        },
        xAxis: {
            categories: ["Jan","Feb","Mar","Apr","May","Jun","July","Aug","Sep","Oct","Nov","Dec"]
        },
        yAxis: {
            title: {
                text: "{{$graphyAxis}}"
            }
        },
        legend: {
            layout: "vertical",
            align: "right",
            verticalAlign: "middle"
        },
        plotOptions: {
            series: {
                allowPointSelect: true
            }
        },
        series: [{
            name: "{{$graphSeriesName}}",
            data: datas
        }],
        responsive: {
            rules: [{
                consition: {
                    maxWidth: 500
                },
                chartOptions: {
                    legend: {
                        layout:"horizontal",
                        align: "center",
                        verticalAlign: "bottom" 
                    }
                }
            }]
        }
    })
</script>

@endpush

</div>