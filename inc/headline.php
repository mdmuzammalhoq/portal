<div class="scrool_news margin_10">
	<div class="container">
		<div class="col-md-1 scroll_head">
			<h3>শিরোনাম</h3>
		</div>
		<div class="col-md-11 scroll_li">
			<ul>
				<marquee >	
					<?php 
						$query = "SELECT * FROM tbl_news WHERE category='Headline' order by id desc limit 10";
						$headline = $db->select($query);
						if ($headline) {
							while ($result = $headline->fetch_assoc()) {
					?>
				<li><i class="fa fa-circle"></i><?php echo $result['title']; ?></li>
					<?php } } ?>
				</marquee>
			</ul>
		</div>
	</div>
</div>