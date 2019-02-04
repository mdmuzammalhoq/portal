<?php
    include 'inc/header.php'; 
    include 'inc/header-menu.php'; 
    include 'inc/side-nav.php'; 
?>
<style>
	th{
		text-align: center;
	}
	td{
		text-align: center;
	}
</style>
<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-text"></i>PUBLISH LIST</h1>
            <p>add news here for any page</p>
        </div>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-file-text"></i></li>
                <li><a href="#">NEWS PUBLISH LIST</a></li>
            </ul>
            
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="row">
                        <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Content</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
      <th scope="col">Publish Time</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
	$query = "SELECT * FROM tbl_news WHERE publish_status='' OR publish_status='Publish Later' ";
	$unplublish = $db->select($query);
	if ($unplublish) {
		$i = 0;
		while ($result = $unplublish ->fetch_assoc()) {
			$i++;
?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $fm->textShorten($result['title'], 20); ?></td>
      <td><?php echo $fm->textShorten($result['body'], 30); ?></td>
      <td><img style="width: 40px;height: 30px;" src="<?php echo $result['image']; ?>" alt=""></td>
      <td><?php echo $result['publish_status']; ?></td>
      
      <td><?php echo $result['news_date']; ?></td>

      <td><a href="set-publish-time.php?update_date=<?php echo $result['id']; ?>">set publish time</a></td>
    </tr>
<?php } } ?>
    
  </tbody>
</table>

    </div>
</div>
<script type="text/javascript">
    $( "#datepicker" ).datepicker();
</script>

<script> $(function() { $('textarea').froalaEditor() }); </script>




<?php include 'inc/footer.php'; ?>