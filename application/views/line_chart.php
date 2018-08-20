<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"/>
        <title></title>
        <!-- Load Google chart api -->
        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
        <script type="text/javascript">
            google.load("visualization", "1.1", {packages: ['bar', 'timeline']});
            google.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    [{type: 'string', label: 'Date'}, {type: 'Number', label: 'Sales'}, 'Expenses', 'Profit'],
<?php
foreach ($chart_data as $data) {
    echo '[' . $data->tanggal_berkunjung . ',' . $data->keperluan . '],';
}
?>
                ]);

                var options = {
                    chart: {
                        title: 'Company Performance',
                        subtitle: 'Sales, Expenses, and Profit: <?php echo $min_date . '-' . $max_date; ?>'
                    }
                };

                var chart = new google.charts.Bar(document.getElementById('columnchart_material'));

                chart.draw(data, options);
            }
        </script>
    </head>
    <body>        
        <div id="columnchart_material" style="width: 900px; height: 500px;"></div>
    </body>
</html>