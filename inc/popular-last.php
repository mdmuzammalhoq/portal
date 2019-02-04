
			<ul class="nav nav-tabs">
			  <li class="active"><a data-toggle="tab" href="#latest">সর্বশেষ</a></li>
			  <li><a data-toggle="tab" href="#popular">জনপ্রিয়</a></li>
			</ul>

			<div class="tab-content">
			  <div id="latest" class="tab-pane fade in active">	
<?php 
	$query = "SELECT * FROM tbl_news WHERE category='last' order by id desc limit 12  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($result = $s22->fetch_assoc()) {
?>		
				<a href="single.php?politics=<?php echo $result['id']; ?>"><p style="color: #<?php echo $result['title_color']; ?>"><?php echo $result['title']; ?></p></a>
<?php } } ?>
										
			  </div>
			  <div id="popular" class="tab-pane fade">	

<?php 
	$query = "SELECT * FROM tbl_news WHERE category='popular' order by id desc limit 12  ";
	$s22 = $db->select($query);
	if ($s22) {
		while ($result = $s22->fetch_assoc()) {
?>		
				<a href="single.php?politics=<?php echo $result['id']; ?>"><p style="color: #<?php echo $result['title_color']; ?>"><?php echo $result['title']; ?></p></a>
<?php } } ?>		
				
			  </div>			 
			</div>
		