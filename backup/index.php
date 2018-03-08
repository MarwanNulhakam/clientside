<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Kinetic HTML Template</title>
<!--

Template 2090 Kinetic

http://www.tooplate.com/view/2090-kinetic

-->
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/fontAwesome.css">
        <link rel="stylesheet" href="css/tooplate-style.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <style>
            #chartcontainer {
                min-width: 400px;
                max-width: 800px;
                height: 220px;
                margin: 0 auto;
           }
           
           #chartcontainer2 {
                min-width: 400;
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
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "toolmeter";
            
            // Create connection
            $conn = mysqli_connect($servername, $username, $password);
            
            // Check connection
            if (!$conn) {
                die("Connection failed: " . mysqli_connect_error());
                echo "Database Connection Failed, please check the Database credential";
            }
        ?>
        
        <?php
            include 'highchartheader.php';
            include 'chartgenerator.php'
        ?>
        
        <div class="ct" id="t1">
          <div class="ct" id="t2">
            <div class="ct" id="t3">
              <div class="ct" id="t4">
                <section>  
                 <ul>
                   <a href="#t1"><li class="icon fa fa-home" id="uno"></li></a>
                   <a href="#t2"><li class="icon fa fa-user" id="dos"></li></a>
                   <a href="#t3"><li class="icon fa fa-image" id="tres"></li></a>
                   <a href="#t4"><li class="icon fa fa-phone" id="cuatro"></li></a>
                 </ul>
                  <div class="page" id="p1">
                     <li class="icon fa fa-home"><span class="title">Welcome To</span><h4>Kinetic</h4>
                        <p>
                            <?php
                                echo "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed varius neque non imperdiet auctor. Duis sit amet velit eu lorem sollicitudin sodales.";
                            ?>
                        </p>
                        <div class="primary-button"><a href="#t2">Discover More</a></div></li>   
                  </div>
                  <div class="page" id="p2">
                    <li class="icon fa fa-user"><span class="title">About Us</span>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="left-text">
                            <h4>We are Kinetic</h4>
                            <p>This kinetic HTML template is provided by Tooplate for free of charge. You may use this layout for your website. Please tell your friends about Tooplate. Thank you.<br><br>Cras suscipit, sem vel cursus iaculis, nibh augue placerat enim, in varius dolor turpis at augue. Nulla facilisi. In quis sem pellentesque, tristique ligula non, tincidunt ipsum. Curabitur porttitor, justo id egestas egestas, enim augue lacinia quam, et volutpat velit augue sodales velit.</p>
                            <div class="primary-button">
                              <a href="#t3">Discover More</a>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="right-image">
                            <img src="img/right-about-image.png" alt="">
                          </div>
                        </div>
                      </div>
                    </div>
                    </li>
                  </div>  
                  <div class="page" id="p3">
                    <li class="icon fa fa-image"><span class="title">Monitoring Charts</span>
                      <div class="container">
                        <div class="row">
                          <div class="col-md-3 col-md-offset-1">
                            <div class="project-item">
                              <div id="chartcontainer">
                                <?php
                                    chartgenerator("chartcontainer",$conn,"SELECT tegangan FROM merit");
                                ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-md-offset-1">
                            <div class="project-item">
                              <div id="chartcontainer2">
                                <?php
                                //    chartgenerator("chartcontainer2");
                                ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-md-offset-1">
                            <div class="project-item">
                              <div id="chartcontainer3">
                                <?php
                                    chartgenerator("chartcontainer3",$conn,"SELECT arus FROM merit");
                                ?>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-4 col-md-offset-1">
                            <div class="project-item">
                              <div id="chartcontainer4">
                                <?php
                                    chartgenerator("chartcontainer4",$conn,"SELECT intensitas FROM merit");
                                ?>
                              </div>
                            </div>
                          </div>
                          <!--<div class="col-md-3 col-md-offset-1">-->
                          <!--  <div class="project-item">-->
                          <!--    <div id="chartcontainer5">-->
                          <!--      <?php-->
                          <!--      //    chartgenerator("chartcontainer2");-->
                          <!--      ?>-->
                          <!--    </div>-->
                          <!--  </div>-->
                          <!--</div>-->
                          <div class="col-md-4 col-md-offset-1">
                            <div class="project-item">
                              <div id="chartcontainer6">
                                <?php
                                    chartgenerator("chartcontainer6",$conn,"SELECT suhu FROM merit");
                                ?>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </li>
                  </div>
                  <div class="page" id="p4">
                   <li class="icon fa fa-phone"><span class="title">Contact Us</span>
                    <div class="container">
                      <div class="row">
                        <div class="col-md-6">
                           <form id="contact" action="" method="post">
                              <div class="col-md-12">
                                <fieldset>
                                  <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <input name="email" type="email" class="form-control" id="email" placeholder="Email" required="">
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <textarea name="message" rows="6" class="form-control" id="message" placeholder="Message" required=""></textarea>
                                </fieldset>
                              </div>
                              <div class="col-md-12">
                                <fieldset>
                                  <button type="submit" id="form-submit" class="btn">Send Message</button>
                                </fieldset>
                              </div>
                            </form>
                         </div>
                         <div class="col-md-6">
                           <div class="right-info">
                              <p>Lorem ipsum dolor , consectetur adipiscing elit. Nunc purus ligula, ullamcorper idermate velit id, vestibulum auc sapien. Sed quis mauris eget semps imperdiet rhoncus.<br><br>
                              <em>120-360 Etiam mauris erat,<br>
								Vestibulum eu augue nec, 10110<br>
								Nam consequat<br></em></p>
                              <ol class="social-icons">
                                <i><a href="#"><i class="fa fa-facebook"></i></a></i>
                                <i><a href="#"><i class="fa fa-twitter"></i></a></i>
                                <i><a href="#"><i class="fa fa-linkedin"></i></a></i>
                                <i><a href="#"><i class="fa fa-rss"></i></a></i>
                                <i><a href="#"><i class="fa fa-behance"></i></a></i>
                              </ol>
                            </div>
                         </div>
                      </div>
                    </div>
                   </li>
                  </div>  
                </section>
              </div>
            </div>
           </div>
          </div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>