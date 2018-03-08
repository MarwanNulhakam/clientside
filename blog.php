<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Block Theme - Blog Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2042 The Block
http://www.tooplate.com/view/2042-the-block
-->
<link href="css/tooplate_style.css" rel="stylesheet" type="text/css" />

</head>
<body>

<div id="#">
    <?php
        include 'callpower.php';
        $date = date("Y-m-d");
        if (isset($_GET["date"])){
            $date = $_GET['date'];
        }
    ?>
</div>

<div id="tooplate_wrapper">

	<div id="tooplate_header">
        <div id="site_title"><h1><a href="#">The Block</a></h1></div>
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.php">Total Daya</a></li>
                <li><a href="blog.php" class="current">Grafik Daya </a></li>
                <li><a href="gallery.php">Grafik V/A</a></li>
                <li><a href="contact.php">Akumulasi</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_sub">
    	<h2>Our Blog Posts</h2>
        <p>Vestibulum eleifend consequat laoreet. Pellentesque vel orci sapien. Duis lacus ipsum, pretium ut accumsan in, tempor nec mauris. Aenean accumsan placerat elit, sit amet faucibus ante commodo a. In et neque nibh, ac tristique dui. </p>
    </div> <!-- end of middle -->
    
    <div id="tooplate_content"><span class="content_top"></span>
		<form action="">
            Tanggal:
            <input type="date" name="date">
            <input type="submit">
        </form>
		<div class="gallery_img"><span></span>
			<?php
				$containername = "con2";
				$chartprop = array(
					"chartTitle" =>"Monitor Daya",
					"varLabel" => "Daya (watt)",
					"yLabel" => "Daya per Menit",
					"xseries" => "waktu",
					"yseries" => "Daya",
					"tablename" => "merit",
					"date" => $date
					);
				powerchart($containername,$chartprop);
			?>   
		</div>
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
    <div id="tooplate_footer">
    	Copyright © 2048 <a href="#">Agus Eka Juniartha</a>
        <div class="cleaner"></div>
	</div>

</div> <!-- end of wrapper -->

</body>
</html>