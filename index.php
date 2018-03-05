<!doctype html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>System Monitoring</title>

        <style>
            #dynamicContainer{
                min-width: 400px;
                max-width: 600px;
                height: 300px;
            }
            
            #chartcontainer {
                min-width: 400px;
                max-width: 800px;
                height: 220px;
                margin: 0 auto;
           }
           
           #chartcontainer2 {
                min-width: 400px;
                max-width: 200px;
                height: 220px;
                margin: 0 auto
           }
           
           #chartcontainer3 {
                min-width: 400px;
                max-width: 800px;
                height: 220px;
                margin: 0 auto
           }
           
           #chartcontainer4 {
                min-width: 400px;
                max-width: 800px;
                height: 220px;
                margin: 0 auto
           }
           #chartcontainer5 {
                min-width: 400px;
                max-width: 800px;
                height: 220px;
                margin: 0 auto
           }
           #chartcontainer6 {
                min-width: 400px;
                max-width: 800px;
                height: 220px;
                margin: 0 auto
           }
        </style>        
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <?php
            include 'highchartheader.php';
            include 'chartgenerator.php';
            include 'actualgraphicgenerator.php';
            include 'dbmodel.php';
            $column = "tegangan";
            $tablename = "merit";
            $data = doQueryAsArray(generateQuery($column,$tablename,1));
        ?>
        <div id="dynamicContainer"></div>
        <?php
            //chartgenerator("chartcontainer",$data);
            dynamicGraph("dynamicContainer");
        ?>
        
    </body>
</html>