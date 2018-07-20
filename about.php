<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Block Theme - About Our Company</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2042 The Block
http://www.tooplate.com/view/2042-the-block
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
	    
</head>
<body>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/solid-gauge.js"></script>
	
<?php
	include 'powergauge.php';	
?>
<div id="tooplate_wrapper">

	<div id="tooplate_header">
        <div id="site_title"><h1><a href="#">The Block</a></h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.php" class="current">Total Daya</a></li>
                <li><a href="blog.php">Grafik Daya </a></li>
                <li><a href="gallery.php">Grafik V/A</a></li>
                <li><a href="contact.php">Akumulasi</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_sub">
    	<h2>Total Daya</h2>
        <p>Page ini akan menampilkan berapa total daya yang telah dihasilkan oleh Alat yang telah dirancang</p>
    </div> <!-- end of middle -->
    
    <div id="tooplate_content"><span class="content_top"></span>
    	<h2>Objek Penelitian</h2>
        
        <p><em>Morbi congue lorem sit amet odio iaculis tincidunt. Donec nibh, molestie nec pellentesque non, in diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</em></p>	
        <div style="padding-left: 60px;">
            <div class="image_fl"><span></span>
                <?php
			echo '<p style="text-align:center;">Total Daya 1</p>';
			displayGauge("gauge1",70.8);
		?>	
            </div>
            
            <div class="image_fl"><span></span>
                <?php
			echo '<p style="text-align:center;">Total Daya 2</p>';
			displayGauge("gauge2",70.8);
		?>	
            </div>
        </div>
        <p>Aliquam et augue et odio luctus posuere sit amet et nisi. Maecenas, est sit amet convallis consectetur, lacus ligula elementum lacus, ut fermentum elit sem et nisi. Duis eu elit tortor, sed condimentum nulla. Phasellus varius posuere adipiscing. Mauris sodales ullamcorper. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        <div class="cleaner h40"></div>
		
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
    <div id="tooplate_footer">
    	Copyright © 2048 <a href="#">Agus Eka Juniartha</a>
        <div class="cleaner"></div>
	</div>

</div> <!-- end of wrapper -->

</body>
</html>