<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Block Theme - Gallery Show</title>
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
</script>

</head>
<body>
    
    <div id="#">
    <?php
        include 'callchart.php';
        $date = "1";
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
                <li><a href="blog.php">Grafik Daya </a></li>
                <li><a href="gallery.php" class="current">Grafik V/A</a></li>
                <li><a href="contact.php">Akumulasi</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
    </div> <!-- end of forever header -->
    
    <div id="tooplate_middle_sub">
    	<h2>Grafik Tegangan dan Arus</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus porta adipiscing libero, eget elementum lectus varius sed. Aliquam metus urna, dignissim quis posuere at, posuere eget mauris. Vestibulum laoreet sodales tellus nec mollis. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
    </div> <!-- end of middle -->
    
    
    
    <div id="tooplate_content"><span class="content_top"></span>
        <form action="">
            Tanggal:
            <input type="date" name="date">
            <input type="submit">
        </form>

    	<div id="gallery">    	
            
            <div class="gallery_box">
                <div class="gallery_img"><span></span>
                    <?php
                    
                        $containername = "con1";
                        $chartprop = array(
                            "chartTitle" =>"Monitor Tegangan",
                            "varLabel" => "tegangan (V)",
                            "yLabel" => "Tegangan per Menit",
                            "xseries" => "waktu",
                            "yseries" => "tegangan",
                            "tablename" => "merit", 
                            "date" => $date
                            );
                        callingchart($containername,$chartprop);
                    ?>   
                </div>
            </div>
            
                        <div class="gallery_box">
                <div class="gallery_img"><span></span>
                    <?php
                        $containername = "con2";
                        $chartprop = array(
                            "chartTitle" =>"Monitor Arus",
                            "varLabel" => "Arus (mA)",
                            "yLabel" => "Arus per Menit",
                            "xseries" => "waktu",
                            "yseries" => "arus",
                            "tablename" => "merit",
                            "date" => $date
                            );
                        callingchart($containername,$chartprop);
                    ?>   
                </div>
            </div>

        </div>
        <div class="cleaner"></div>
    </div> <!-- end of content -->
    
    <div id="tooplate_footer">
    	Copyright © 2018 <a href="#">Agus Eka Juniartha</a>
        <div class="cleaner"></div>
	</div>

</div> <!-- end of wrapper -->

</body>
</html>