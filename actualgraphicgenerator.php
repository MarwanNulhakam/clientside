<?php
function dynamicGraph($container,$properties){
echo '<script type="text/javascript">';
echo "
    Highcharts.setOptions({
        global: {
            useUTC: false
        }
    });
    
    // Create the chart
    Highcharts.stockChart(".$container.", {
        chart: {
            events: {
                load: function () {
    
                    // set up the updating of the chart each second
                    var series = this.series[0];
                    var index = 0;    
                    setInterval(function () {
                            var ajax = new XMLHttpRequest();
                            ajax.onload = function(){
                                var w = this.responseText.split(\",\"),
                                    x = w[0],
                                    y = w[1] * 1;
                                series.addPoint([x, y], true, true);
                                
                            }
                            ajax.open('get','chartdata.php?id=index',true);
                            ajax.send();
                            
                            
                    }, 1000);
                }
            }
        },
    
        rangeSelector: {
            buttons: [{
                count: 1,
                type: 'minute',
                text: '1M'
            }, {
                count: 5,
                type: 'minute',
                text: '5M'
            }, {
                type: 'all',
                text: 'All'
            }],
            inputEnabled: false,
            selected: 0
        },
    
        title: {
            text: '".$properties["chartTitle"]."'
        },
    
        exporting: {
            enabled: false
        },
    
        series: [{
            name: '".$properties["varLabel"]."',
            data: (function () {
                // generate an array of random data
                var data = [],
                    time = (new Date()).getTime(),
                    i;
    
                for (i = -99; i <= 0; i += 1) {
                    data.push([
                        time + i * 1000,
                        0
                    ]);
                }
                return data;
            }())
        }]
    });
    </script>
";
}
?>