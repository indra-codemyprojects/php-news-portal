	<?php
    include("admin/dbconnect.php");
    include("pagefunction.php");
	?>
    
   
  
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chhar Gongma Mashik Patrika</title>
<meta name="keywords" content="News Layout, free css template, free website, CSS, HTML" />
<meta name="description" content="News Website Layout - free HTML CSS template provided by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="tabcontent.css" />
<script type="text/javascript" src="tabcontent.js">
/***********************************************
* Tab Content script v2.2- © Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/
</script>

<link href="css/svwp_style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.slideViewerPro.1.0.js" type="text/javascript"></script>
<script src="js/jquery.timers.js" type="text/javascript"></script>

<!-- jquery section -->
<link rel="stylesheet" id="camera-css" href="css/camera.css" type="text/css" media="all">
    
    <style>
		body {
			margin: 0;
			padding: 0;
		}
		a {
			color: #09f;
		}
		a:hover {
			text-decoration: none;
		}
		#back_to_camera {
			clear: both;
			display: block;
			line-height: 40px;
			padding: 20px;
		}
		.fluid_container {
			margin:0px;
			max-width:1050px;
			width: 100%;
			height:100px;
		}
	</style>

 
   <script type="text/javascript" src="scripts/jquery.min.js"></script>
   <script type="text/javascript" src="scripts/jquery.mobile.customized.min.js"></script>
   <script type="text/javascript" src="scripts/jquery.easing.1.3.js"></script>
   <script type="text/javascript" src="scripts/camera.min.js"></script> 
   
   
    
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: true
			});

			
		});
	</script>
    
    <!-- Skitter Styles -->
	<link href="css/skitter.styles.css" type="text/css" media="all" rel="stylesheet" />
 
 <!-- Skitter JS -->
	<script type="text/javascript" language="javascript" src="js/jquery-1.6.3.min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.animate-colors-min.js"></script>
	<script type="text/javascript" language="javascript" src="js/jquery.skitter.min.js"></script>
	
	<!-- Init Skitter -->
    <!-- Init Skitter -->
	<script type="text/javascript" language="javascript">
		$(document).ready(function(){
			$('.box_skitter_large').skitter({label: false, numbers: false, theme: 'square'});
			$('.box_skitter_small').skitter({label: false, numbers: false, interval: 1000, theme: 'clean'});
			$('.box_skitter_medium').css({width: 500, height: 200}).skitter({show_randomly: true, dots: true, interval: 4000, numbers_align: 'center', theme: 'round'});
			$('.box_skitter_normal').css({width: 400, height: 300}).skitter({animation: 'blind', interval: 2000, hideTools: true, theme: 'minimalist'});
		});
	</script>


<!--  HTML CSS Template Designed by w w w . t e m p l a t e m o . c o m  --> 
</head>
<body bgcolor=>
<div id="templatemo_container">

	<div id="templatemo_top_panel">
        <div id="templatemo_sitetitle">
            <a href="index.php"><img src="images/logo.png" /></a>
      </div>
                <div id="templatemo_currentdate">
			<script type="text/javascript">
				<!--
				var m_names = new Array("January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December");
				var d_names = new Array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");
				
				var currentTime = new Date()
				var day = currentTime.getDay()
				var month = currentTime.getMonth() + 1
				var date = currentTime.getDate()
				var year = currentTime.getFullYear()
				document.write( d_names[day] + ", " + date + " " + m_names[month] + " " + year + ", ")
				var currentTime = new Date()
				var hours = currentTime.getHours()
				var minutes = currentTime.getMinutes()
				if (minutes < 10){
				minutes = "0" + minutes
				}
				document.write(hours + ":" + minutes + " ")
				if(hours > 11){
				document.write("PM")
				} else {
				document.write("AM")
				}
				//-->
			</script>
        </div>
    </div> <!-- end of top panel -->
   
 <?php include('header.php') ?>
<div class="newscategory">
 <?php
  if(isset($_GET['page']))
	{
    $pid = $_GET['page'];
   // echo $pid;
    $datappage = getPageContentById($pid);
   $sql="SELECT * FROM news_header_category WHERE pid='$pid'";
    $result=executequery($sql);
  while($data=mysql_fetch_assoc($result)){?>
	   <ul>
    <a href="#?catid=<?php echo $data['catid']; ?>"><h2><font color="#0066FF"> <?php echo $data['catitle'];?></font></h2></a><div><img src="headerimages/<?php echo $data['image']; ?>" height="100" width="100"/></div><p align="justify"><?php echo $data['catdescription']; ?><a href="news_article_header.php?catid=<?php echo $data['catid']; ?>">&nbsp;&nbsp;Read More</a></p>
    </ul>
	<?php }}?>
    
<div class="header">
<?php /*?><?php 

$sql="SELECT * FROM news_pages_headers where pid=$pid";
$res=executequery($sql);
while($datapage=mysql_fetch_assoc($res)){
$pid=$datapage['pid']; ?>
<?php echo $datapage['pagedesc'];?></a>

<?php }?><?php */?>

</div>





<?php /*?>	<?php if(isset($_REQUEST['aid'])){
	$id=$_REQUEST['aid'];
	
   $sql="SELECT * FROM news_articles WHERE aid='$id'";
	//echo $sql;
    $result=executequery($sql);
	$data=mysql_fetch_assoc($result);
	echo"<h2>". $data['atitle']."</h2>";
	echo $data['adesc'];
	}?>
	<?php */?>
    
    <?php include("footer1.php"); ?>   
   

