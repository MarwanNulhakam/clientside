<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Block Theme - Contact Us</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2042 The Block
http://www.tooplate.com/view/2042-the-block
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />
  
<!-- Arquivos utilizados pelo jQuery lightBox plugin -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.lightbox-0.5.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
<!-- / fim dos arquivos utilizados pelo jQuery lightBox plugin -->

<!-- Ativando o jQuery lightBox plugin -->
<script type="text/javascript">
$(function() {
    $('#map a').lightBox();
});
</script>

</head>
<body>
<?php
    include "callpower.php";
?>
<div id="tooplate_wrapper">

	<div id="tooplate_header">
        <div id="site_title"><h1><a href="#">The Block</a></h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.php">Total Daya</a></li>
                <li><a href="blog.php">Grafik Daya </a></li>
                <li><a href="gallery.php">Grafik V/A</a></li>
                <li><a href="contact.php" class="current">Akumulasi</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_sub">
    	<h2>Contact Information</h2>
        <p>Quisque rutrum varius bibendum. Vivamus cursus tincidunt congue. Maecenas a elementum neque. Aliquam vel interdum ante. Nullam ornare volutpat nisl. Praesent at dui dolor. Donec tempor eleifend mi in sagittis. Phasellus accumsan luctus augue nec. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
    </div> <!-- end of middle -->
    
    <div id="tooplate_content"><span class="content_top"></span>
    	
            <?php
                $containername = "con1";
                $chartprop = array(
                    "chartType" => "column",
                    "chartTitle" =>"Akumulasi Daya Bulanan",
                    "varLabel1" => "Daya Panel Surya (VA)",
                    "varLabel2" => "Daya Baterai (VA)",
                    "yLabel" => "Total Daya",
                    "xseries" => "Bulan",
                    "yseries" => "daya",
                    "tablename" => "merit", 
                    "date" => ""
                );
                accPowerchart($containername,$chartprop);
            ?> 
        
        
            
<!--        <div class="box_w330 float_r">-->
<!--            <h5>Location</h5>-->
<!--            <div id="map">-->
<!--            	<div class="image_wrapper"><span></span>-->
<!--                    <a href="images/map_big.jpg" title="Company Map">-->
<!--                        <img width="300" height="200" src="images/map_thumb.jpg" alt="Map" />-->
<!--                    </a>-->
<!--                </div>-->
<!--            </div>                -->
<!--            <div class="cleaner h30"></div>-->
<!--            -->
<!--            <h5>Address</h5>-->
<!--            <h6>Company Name</h6>-->
<!--            990-880 Ut cursus condimentum, <br />-->
<!--            Donec tristique sapien, 10110<br />-->
<!--            Vitae malesuada, diam a mollis tempor<br /><br />-->
<!--			<b>Phone:</b> 010-064-2500 <br />-->
<!--            <b>Email:</b> <a href="mailto:info@company.com">info@company.com</a> -->
<!--        </div>    	-->
        
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
    <div id="tooplate_footer">
    	Copyright © 2048 <a href="#">Company Name</a>
        <div class="cleaner"></div>
	</div>

</div> <!-- end of wrapper -->

</body>
</html>