<?php
function displayGauge($id,$value){
echo '  <div style="width: 280px; height: 140px; margin: 0 auto; float: right">
            <div id="'.$id.'" style="width: 290px; height: 140px; float: right"></div>
        </div>
';
echo '<script type="text/javascript">';
echo "
    var gaugeOptions = {
    
            chart: {
                type: 'solidgauge'
            },
        
            title: null,
        
            pane: {
                center: ['50%', '85%'],
                size: '160%',
                startAngle: -90,
                endAngle: 90,
                background: {
                    backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                    innerRadius: '60%',
                    outerRadius: '100%',
                    shape: 'arc'
                }
            },
        
            tooltip: {
                enabled: false
            },
        
            // the value axis
            yAxis: {
                stops: [
                    [0.1, '#55BF3B'], // green
                    [0.5, '#DDDF0D'], // yellow
                    [0.9, '#DF5353'] // red
                ],
                lineWidth: 0,
                minorTickInterval: null,
                tickAmount: 2,
                title: {
                    y: -70
                },
                labels: {
                    y: 16
                }
            },
        
            plotOptions: {
                solidgauge: {
                    dataLabels: {
                        y: 5,
                        borderWidth: 0,
                        useHTML: true
                    }
                }
            }
        };
        
        // The speed gauge
        var chartSpeed = Highcharts.chart('".$id."', Highcharts.merge(gaugeOptions, {
            yAxis: {
                min: 0,
                max: 200,
                title: {
                    text: 'Total Daya'
                }
            },
        
            credits: {
                enabled: false
            },
        
            series: [{
                name: 'Total Daya',
                data: [".$value."],
                dataLabels: {
                    format: '<div style=\"text-align:center\"><span style=\"font-size:12px;color:' +
                        ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '\">{y}</span><br/>' +
                           '<span style=\"font-size:12px;color:silver\">kW</span></div>'
                },
                tooltip: {
                    valueSuffix: ' kW'
                }
            }]
        
        }));
    
    ";
  echo '</script>';  
}
?>