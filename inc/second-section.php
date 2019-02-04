<!--Add 1-->
<?php 

	$query = "SELECT * FROM tbl_advertisement WHERE position='Position  2' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<div class=" logo_add add_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="Position  2" />
						</div>
<?php } } ?>
		<!--news two section -->			
		<div class="bangladesh_politics_area home_two_section">
				<div class="container">
					<div class="row">
						<div class="col-md-8 left_margin_grid pad_0">
							<div class="bangladesh_content">
								<div class="col-md-6  bangladesh">

									<div class="section_news_heading">
<?php 

	$query = "SELECT * FROM  tbl_title WHERE categories='Position_1' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<a href="page_prime_minister.php"><h1><?php echo $result['title']; ?></h1></a>
<?php } } ?>
																
										<ul>

<?php 
	$query = "SELECT * FROM tbl_news WHERE category='এই প্রজাতন্ত্র' order by id desc limit 1  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($resultt = $s22->fetch_assoc()) {
?>

<li class="lead_list_item">
	<div class="list_list_item_img">
		<img src="adm-pol/<?php echo $resultt['image']; ?>" alt="" />
	</div>
	<div class="list_list_item_news_head">
		<p><a href="single.php?politics=<?php echo $resultt['id']; ?>"><?php echo $resultt['title']; ?>  </a></p>
	</div>				
</li>

<?php } } ?>

<?php 
	$query = "SELECT * FROM tbl_news WHERE category='এই প্রজাতন্ত্র-লিস্ট' order by id desc limit 5  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($resultt = $s22->fetch_assoc()) {
?>

<li class="lead_list_item">
	<div class="list_list_item_img">
		<img src="adm-pol/<?php echo $resultt['image']; ?>" alt="" />
	</div>
	<div class="list_list_item_news_head">
		<p><a href="single.php?politics=<?php echo $resultt['id']; ?>"><?php echo $resultt['title']; ?>  </a></p>
	</div>				
</li>

<?php } } ?>
	
										</ul>
									</div>				
								</div>
							</div>
							<div class="politics_content">
								<div class="col-md-6 politics">
									<div class="section_news_heading">
<?php 

	$query = "SELECT * FROM  tbl_title WHERE categories='Position_2' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<a href="page_prime_minister.php"><h1><?php echo $result['title']; ?></h1></a>
<?php } } ?>
															
										<ul>
<?php 
	$query = "SELECT * FROM tbl_news WHERE category='অন্যদেশ' order by id desc limit 1  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($resultt = $s22->fetch_assoc()) {
?>

<li class="lead_list_item">
	<div class="list_list_item_img">
		<img src="adm-pol/<?php echo $resultt['image']; ?>" alt="" />
	</div>
	<div class="list_list_item_news_head">
		<p><a href="single.php?politics=<?php echo $resultt['id']; ?>"><?php echo $resultt['title']; ?>  </a></p>
	</div>				
</li>

<?php } } ?>

<?php 
	$query = "SELECT * FROM tbl_news WHERE category='অন্যদেশ-লিস্ট' order by id desc limit 5  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($resultt = $s22->fetch_assoc()) {
?>

<li class="lead_list_item">
	<div class="list_list_item_img">
		<img src="adm-pol/<?php echo $resultt['image']; ?>" alt="" />
	</div>
	<div class="list_list_item_news_head">
		<p><a href="single.php?politics=<?php echo $resultt['id']; ?>"><?php echo $resultt['title']; ?>  </a></p>
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
				<!--Add 2-->
<?php 

	$query = "SELECT * FROM tbl_advertisement WHERE position='Position  3' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<div class=" logo_add add_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="Position  3" />
						</div>
<?php } } ?>
			</div>	