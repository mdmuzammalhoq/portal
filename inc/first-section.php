<div class="lead_news_area margin_10">
	<div class="container">	
	<div class="lead_news_content">


<?php
	$timezone  = +6; 
		$wt = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));

		$query = "SELECT * FROM tbl_news WHERE category='Lead News' Order by now_time DESC limit 1 ";
		$s1 = $db->select($query);
		if ($s1) {
			while ($result = $s1->fetch_assoc()) {
				if ($wt>=$result['display_time']) {
					?>
				<div class="col-md-5 lead_big">
					<img src="adm-pol/<?php echo $result['image']; ?>" alt="" />
					
					<a href="single.php?politics=<?php echo $result['id']; ?>"><h1 style="color: #<?php echo $result['title_color']; ?>;"><?php echo $result['title']; ?></h1></a>
					
					<p><?php echo $fm->textShorten($result['body'], 820); ?><a href="single.php?politics=<?php echo $result['id']; ?>">Read more</a></p>

				</div>
					<?php
				}else{
					$query2="SELECT * FROM tbl_news  ORDER BY id desc LIMIT 1, 1 ";
					$s2 = $db->select($query2);
					if ($s2) {
						while ($result2 = $s2->fetch_assoc()) {
							?>
					<div class="col-md-5 lead_big">
						<img src="adm-pol/<?php echo $result2['image']; ?>" alt="" />
						
						<a href="single.php?politics=<?php echo $result['id']; ?>"><h1 style="color: #<?php echo $result2['title_color']; ?>;"><?php echo $result2['title']; ?></h1></a>
						
						<p><?php echo $fm->textShorten($result2['body'], 820); ?><a href="single.php?politics=<?php echo $result['id']; ?>">Read more</a></p>

					</div>
							<?php
						}
					}
				}
			}

		}
?>



		<div class="col-md-4 lead_list">

<?php
	$timezone  = +6; 
		$wt = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));

		$query = "SELECT * FROM tbl_news WHERE category='Sub-leadnews' Order by now_time DESC limit 7 ";
		$s3 = $db->select($query);
		if ($s3) {
			while ($result = $s3->fetch_assoc()) {
				if ($wt>=$result['display_time']) { ?>
				<div class="lead_list_item">
						<div class="list_list_item_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="" />
						</div>
						<div class="list_list_item_news_head">
							<p><a href="single.php?politics=<?php echo $result['id']; ?>" style="color: #<?php echo $result['title_color']; ?>; font-weight: bold;"><?php echo $result['title']; ?></a></p>
						</div>				
					</div>

					<?php }else{

					$query3="SELECT * FROM tbl_news WHERE category='Sub-leadnews' ORDER BY id desc LIMIT 7, 7 ";
					$s4 = $db->select($query3);
					if ($s4) {
						while ($result = $s4->fetch_assoc()) {
							?>
					<div class="lead_list_item">
						<div class="list_list_item_img">
							<img src="adm-pol/<?php echo $result['image']; ?>" alt="" />
						</div>
						<div class="list_list_item_news_head">
							<p><a href="single.php?politics=<?php echo $result['id']; ?>" style="color: #<?php echo $result['title_color']; ?>; font-weight: bold;"><?php echo $result['title']; ?></a></p>
						</div>				
					</div>
							<?php
						}
					}
				}
			}

		}
?>
			
		</div>
		<div class="col-md-3 lead_right">
			
			<?php include 'popular-last.php'; ?>
		</div>
		</div>
	</div>
	
	</div>

</div>