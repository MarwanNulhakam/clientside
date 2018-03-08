<?php
  function chartgenerator($containername,$data){
    echo '<script type="text/javascript">';
    echo "
        $(function () {
            var chart = new Highcharts.chart('".$containername."', {    
            title: {
                text: '".$data["chartTitle"]."'
            },
        
            subtitle: {
                text: []
            },
        
            yAxis: {
                title: {
                    text: '".$data["yLabel"]."'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },
        
            xAxis: {
                categories: ".$data["waktu"].",
                rotation: [45]
            },
        
            series: [{
                name: '".$data["varLabel"]."',
                data: ".$data["series"]."
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
    });
        
      </script>";
    }
?>