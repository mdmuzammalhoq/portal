<?php include 'inc/header.php'; ?>
 <div class="page_area_news">
	<div class="container">
		<div class="col-md-8 left_area">
<?php 
	$query = "SELECT * FROM tbl_news WHERE category like '%House%' ORDER BY id DESC";
	$president = $db->select($query);
	if ($president) {
		while ($result = $president->fetch_assoc()) {
?>

			<div class="page_single_news">
				<div class="page_single_img">
					<img src="adm-pol/<?php echo $result['image']; ?>" alt="" />
				</div>
				<div class="page_news">
					<div class="page_single_news_title">
						<a href="single.php"><h1 style="color: #<?php echo $result['title_color']; ?>"><?php echo $result['title']; ?></h1></a>
					</div>
					<div class="page_single_news_content">
						<p><a style="color: #313131;" href="single.php?politics=<?php echo $result['id']; ?>"><?php echo $fm->textShorten($result['body'], 230); ?></a></p>
					</div>
				</div>				
				<div class="page_news_time">
					<p><?php echo $result['display_time']; ?></p>
				</div>
			</div>

<?php } } ?>
			</div>
		<div class="col-md-4 right_area">
			
			<!-- right add 1-->
			<div class="page_right_add add_img">
				<img src="images/messi.png" alt="" />
			</div>	
		
			<?php include 'inc/popular-last.php'; ?>
			
			<div class="facebook_like_box margin_10">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthepolitics24%2F&tabs=timeline&width=350&height=250&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="250" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>		
			
			<!-- right add 2-->
			
	</div>
 
 </div> 
 <?php	include 'inc/footer.php'; ?>
 