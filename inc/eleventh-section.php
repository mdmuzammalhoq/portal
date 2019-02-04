<!--news two section -->		
		<div class="science_nature_area margin_10 home_two_section">
				<div class="container">
					<div class="row">
						<div class="col-md-8 left_margin_grid pad_0">
							<div class="science_content">
								<div class="col-md-6  science">
									<div class="section_news_heading">
<?php 

	$query = "SELECT * FROM  tbl_title WHERE categories='Position_15' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<a href="page_prime_minister.php"><h1><?php echo $result['title']; ?></h1></a>
<?php } } ?>
															
										<ul>
<?php 
	$query = "SELECT * FROM tbl_news WHERE category='রাষ্ট্রপতি' order by id desc limit 1 ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($result = $s22->fetch_assoc()) {
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
	$query = "SELECT * FROM tbl_news WHERE category='রাষ্ট্রপতি-লিস্ট' order by id desc limit 4  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($result = $s22->fetch_assoc()) {
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
								</div>
							</div>
							<div class="nature_content">
								<div class="col-md-6 nature">
									<div class="section_news_heading">
										<?php 

	$query = "SELECT * FROM  tbl_title WHERE categories='Position_32' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<a href="page_prime_minister.php"><h1><?php echo $result['title']; ?></h1></a>
<?php } } ?>						
										<ul>
<?php 
	$query = "SELECT * FROM tbl_news WHERE category='প্রধানমন্ত্রী' order by id desc limit 1  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($result = $s22->fetch_assoc()) {
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
	$query = "SELECT * FROM tbl_news WHERE category='প্রধানমন্ত্রী-লিস্ট' order by id desc limit 4  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($result = $s22->fetch_assoc()) {
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
								</div>
							</div>
						</div>
					</div>
				</div>
				<!--Add 4-->
<?php 

	$query = "SELECT * FROM tbl_advertisement WHERE position='Position  11' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<div class=" logo_add add_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="Position  11" />
						</div>
<?php } } ?>
		</div><!--two section end-->