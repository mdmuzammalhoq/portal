<div class="section_news_heading right_section_news_heading">
<?php 

	$query = "SELECT * FROM  tbl_title WHERE categories='Position_20' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<a href="page_prime_minister.php"><h1><?php echo $result['title']; ?></h1></a>
<?php } } ?>
										
				<ul>
<?php 
	$query = "SELECT * FROM tbl_news WHERE category='নির্বাচিত কলাম' order by id desc limit 1 ";
	$fourth = $db->select($query);
	if ($fourth) {
		while ($result = $fourth->fetch_assoc()) {
?>
											<li class="lead_list_item">
												<div class="list_list_item_img">
													<img src="adm-pol/<?php echo $result['image']; ?>" alt="" />
												</div>
												<div class="list_list_item_news_head">
													<p><a href="single.php?politics=<?php echo $result['id']; ?>"><?php echo $result['title']; ?> </a></p>
												</div>				
											</li>
<?php } } ?>
<?php 
	$query = "SELECT * FROM tbl_news WHERE category='নির্বাচিত কলাম-লিস্ট' order by id desc limit 5 ";
	$fourth = $db->select($query);
	if ($fourth) {
		while ($result = $fourth->fetch_assoc()) {
?>
											<li class="lead_list_item">
												<div class="list_list_item_img">
													<img src="adm-pol/<?php echo $result['image']; ?>" alt="" />
												</div>
												<div class="list_list_item_news_head">
													<p><a href="single.php?politics=<?php echo $result['id']; ?>"><?php echo $result['title']; ?> </a></p>
												</div>				
											</li>
<?php } } ?>											
				</ul>
			</div>