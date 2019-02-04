<?php

include 'inc/header.php'; ?>

<?php 
		$id = $_GET['politics'];
		
	$query = "SELECT * FROM tbl_news WHERE id='$id'";
	$president = $db->select($query);
	if ($president) {
		while ($result = $president->fetch_assoc()) {
			$cat = $result['category'];
?>

 <div class="single_page_area_news margin_10" oncontextmenu="return false">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="page_description">
					<a href="#"><i class="fa fa-home"></i></a> /
					<a href="#"><?php echo $result['title']; ?></a>
				</div>				
			</div>
		</div>		
	</div>
	<div class="container">
		<div class="col-md-8 left_area">
			<div class="page_single_news single_page_single_news">
				<div class=" single_img_title">
					<img src="adm-pol/<?php echo $result['image']; ?>" alt="" />
					<div class="single_page_single_news_title">
						<h1 style="color: #161073;"><?php echo $result['title']; ?></h1>
					</div>
				</div>
				<div class="single_page_author_time">	

					<p><img style="width: 43px;height: 29px;border-radius: 13px;" src="adm-pol/<?php echo $result['author_image']; ?>" alt=""> <?php echo $result['author_name']; ?> </p>
					<p><i class="fa fa-clock-o"></i><?php echo $result['display_time']; ?></p>
				</div>
				<div class="page_news">					
					<div class="page_single_news_content">
						<p><?php echo $result['body']; ?>
						</p>
					</div>
				</div>								
			</div>
			<hr>
			<li style="display: inline-block;font-size: 30px;color: #005c92;float: right;padding-left: 20px;"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=thepolitics24.com/single.php?politics=<?php echo $result['id']; ?>"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>

<?php } } ?>


			<div class="comments_area" >
			<div class="comments_show_area">
			
			<?php
				if(isset($_POST['submit'])){
					$name=$_POST['name'];
					$message=$_POST['message'];					
				?> <h2> <i class="fa fa-user"></i> <?php  echo $name." : "."<br>";?></h2>
				 <i class="fa fa-comments"></i> <?php echo $message;			?>
			<?php }
			
			?>
				<button class="reply_button">Reply</button>
			</div>
			<div class="reply">
				<p><textarea name="reply" id="" cols="20" rows="3" placeholder="reply"></textarea></p>
				<input type="submit" name="reply_submit" value="Reply" />
				<input class="reply_close" type="submit" name="reply_submit_close" value="Close" />	
			</div>
			
				<div class="box">
					<form action="" method="POST">
						<p><input type="text" name="name" placeholder=" Name " /></p>
						<p><textarea name="message" id="" cols="30" rows="4" placeholder="Comments"></textarea></p>
						<p><input type="submit" name="submit" value="Comment" /></p>
					</form>
				</div>
			</div>
			
			
			
			
			
			
			
			<!--Add 1-->
<?php 

	$query = "SELECT * FROM tbl_advertisement WHERE position='Position  17' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<div class=" logo_add add_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="Position  17" />
						</div>
<?php } } ?>

		</div>
		<div class="col-md-4 right_area">
			
			<!-- right add 1-->
	
		
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#latest">সর্বশেষ</a></li>
			  <li><a data-toggle="tab" href="#popular">জনপ্রিয়</a></li>
			</ul>

			<div class="tab-content">
			  <?php include 'inc/single-tab.php'; ?>			 
			</div>
			<div class="facebook_like_box margin_10">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthepolitics24%2F&tabs=timeline&width=350&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>		
			
			<!-- right add 2-->
<?php 

	$query = "SELECT * FROM tbl_advertisement WHERE position='Position  18' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<div class=" logo_add add_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="Position  18" />
						</div>
<?php } } ?>	
			<div class="section_popular_news section_news_heading">
				<h2>এই বিভাগের জনপ্রিয় সংবাদ </h2>
<?php 
	$id = $_GET['politics'];
	$query = "SELECT * FROM tbl_news WHERE category='$cat' ";
	$president = $db->select($query);
	if ($president) {
		while ($resultt = $president->fetch_assoc()) {
	
?>
				<div class="lead_list_item">
					<div class="list_list_item_img">
						<img src="adm-pol/<?php echo $resultt['image']; ?>" alt="" />
					</div>
					<div class="list_list_item_news_head">
						<p><a href="#"><?php echo $resultt['title']; ?></a></p>
					</div>				
				</div>
<?php } } ?>
				
			</div>
		</div>
	</div>
 
 </div> 
 <?php	include 'inc/footer.php'; ?>
 