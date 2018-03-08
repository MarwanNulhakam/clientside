<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>System Monitoring</title>

        <style>
            .table .tr{
                text-align: center;
            }
            
            #dynamicContainer{
                min-width: 400px;
                max-width: 600px;
                height: 300px;
            }
            
            #chartcontainer {
                min-width: 600px;
                max-width: 800px;
                height: 400px;
                margin: 0 auto;
           }
           
           #chartcontainer2 {
                min-width: 600px;
                max-width: 200px;
                height: 400px;
                margin: 0 auto
           }
           
        </style>        
    </head>
    <body>
        <?php
            include 'highchartheader.php';
            include 'chartgenerator.php';
            include 'actualgraphicgenerator.php';
            include 'dbmodel.php';
        ?>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id=>
        <table>
            <tr>
                <td>
                    <?php
                        include 'callchart.php';
                    ?>            
                </td>
                <td>
                    <?php
                        include 'callchart2.php';
                    ?>
                </td>
            </tr>
        
        </table>
        
    </body>
</html>