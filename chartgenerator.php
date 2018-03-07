<?php
  function chartgenerator($containername,$data){
    
    echo '<script type="text/javascript">';
    echo "
        Highcharts.chart('".$containername."', {
    
            title: {
                text: '".$data["chartTitle"]."'
            },
        
            subtitle: {
                text: 'Source: thesolarfoundation.com'
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
                data: ".$data["tegangan"]."
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
      </script>";
    }
?>