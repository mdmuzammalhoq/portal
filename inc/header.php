<?php 
	include 'lib/config.php'; 
	include 'lib/db.php';
	include 'lib/helpers.php';
	include 'lib/session.php';

	$db = new Database();
	$fm = new Format();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Politics24 Bd</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">	
	<link href="css/meanmenu.min.css" rel="stylesheet">	
	<link rel="stylesheet" href="style.css"/>	
	<link href="css/responsive.css" rel="stylesheet">	
     </head>
  <body>
    <div class="header_area">
    	<div class="header">
			<div class="header_top">
				<div class="container">
					<div class="col-md-4 date">
<?php
	$timezone  = +6; 
	$wt = gmdate("d-D-M-Y h:ia", time() + 3600*($timezone+date("I")));

	
?>
						<h2 style="font-size: 17px;padding-top: 8px;"> <?php echo $wt; ?> </h2>
					</div>
					<div class="col-md-4 search">
						<form action="Search.php" method="get">
							<input type="text" name="news_search" placeholder=" সার্চ  " />
							<input type="submit" name="submit" value="খুজুন" />
						</form>
					</div>
					<div class="col-md-4 header_social">
						<a target="_blank" href="https://www.facebook.com/thepolitics24/"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
					</div>
				</div>
			</div>			
		</div>
    </div>
	<div class="full_container container">
			<div class="header_middle">
				<div class="container">
					<div class="col-md-4 logo">						
							<a href="index.php"><img style="width: 381px;height: 104px;" src="images/logo.png" alt="" /></a>					
					</div>
					<div class="col-md-offset-3 col-md-5">
<?php 

	$query = "SELECT * FROM tbl_advertisement WHERE position='Position  1' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<div class=" logo_add add_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="Position  1" />
						</div>
<?php } } ?>
					</div>					
				</div>
			</div>
	
	<div class="menu_area">
		<?php require('menubar.php');?>
	</div>
	
	
