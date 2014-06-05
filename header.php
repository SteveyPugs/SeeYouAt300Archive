<?php
$strAdd = "";
if (getcwd() != "/home/stephen/public/www.seeyouat300.com/public/") {$strAdd = "../";}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>See You At 300</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $strAdd; ?>main.css" />
	<link rel="stylesheet" type="text/css" href="orbit.css" />
	<link href="http://vjs.zencdn.net/c/video-js.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,300,700,400' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Syncopate:400,700' rel='stylesheet' type='text/css' />
	<link href='http://fonts.googleapis.com/css?family=Titillium+Web' rel='stylesheet' type='text/css' />
	
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
	<script src="scripts/jquery.orbit-1.2.3.js" type="text/javascript"></script>
	<script type="text/javascript" src="<?php echo $strAdd; ?>scripts/pagescripts.js"></script>
	<script src="http://vjs.zencdn.net/c/video.js"></script>
	</head>
<body onload="changeDate()">