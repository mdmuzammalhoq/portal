<div class="facebook_like_box margin_10">
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fthepolitics24%2F&tabs=timeline&width=360&height=280&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="360" height="280" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
			</div>
<!--right_add_1-->
<?php 

	$query = "SELECT * FROM tbl_advertisement WHERE position='Position  15' ORDER BY id desc limit 1";
	$ads = $db->select($query);
	if ($ads) {
		while ($result = $ads->fetch_assoc()) {
	
?>
						<div class=" logo_add add_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="Position  15" />
						</div>
<?php } } ?>