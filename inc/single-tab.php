<div class="tab-content">
			  <div id="latest" class="tab-pane fade in active">	
<?php 
	$query = "SELECT * FROM tbl_news WHERE category = 'Sub-leadnews' AND position='First Section-Three-Last' ORDER BY id desc limit 10 ";
	$last = $db->select($query);
	if ($last) {
		while ($result = $last->fetch_assoc()) {
?>		
				<a href="single.php?politics=<?php echo $result['id']; ?>"><p style="color: #<?php echo $result['title_color']; ?>"><?php echo $result['title']; ?></p></a>
<?php } } ?>
										
			  </div>
			  <div id="popular" class="tab-pane fade">	

<?php 
	$query = "SELECT * FROM tbl_news WHERE position='First Section-Three-Popular' ORDER BY id desc limit 10 ";
	$last = $db->select($query);
	if ($last) {
		while ($result = $last->fetch_assoc()) {
?>		
				<a href="single.php?politics=<?php echo $result['id']; ?>"><p style="color: #<?php echo $result['title_color']; ?>"><?php echo $result['title']; ?></p></a>
<?php } } ?>		
				
			  </div>			 
			</div>