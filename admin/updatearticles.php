<?php
require_once("dbconnect.php");
$aid=$_POST['aid'];
$catid=$_POST['catid'];
$atitle=$_POST['atitle'];
$adesc=$_POST['adesc'];
$sql = "update news_articles set catid='$catid',atitle='$atitle',adesc='$adesc' where aid='$aid'";
$rescat = executequery($sql);
header("location:managearticles.php?msg=article updated successfully");
?>