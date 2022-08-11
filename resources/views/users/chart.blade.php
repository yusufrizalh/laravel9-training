<x-master-layout title="User Growth Chart">
    <div class="container">
        <div class="card mt-3">
            <div class="card-header"><strong>User Growth Chart</strong></div>
            <div class="card-body">
                <div id="chartcontainer"></div>
            </div>
        </div>
    </div>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script type="text/javascript">
        var userData = <?php echo json_encode($userdata); ?>;
        Highcharts.chart('chartcontainer', {
            title: {
                text: 'New User Growth, 2022'
            },
            subtitle: {
                text: 'source: Laravel 9'
            },
            xAxis: {
                categories: [
                    'January', 'February', 'March', 'April', 
                    'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ]
            },
            yAxis: {
                title: {
                    text: 'Number of New Users'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
            plotOptions: {
                series: {
                    allowPointSelect: true
                }
            },
            series: [{
                name: 'New Users',
                data: userData
            }],
            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        });
    </script>
</x-master-layout>
