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
        <div class="col-md-4 search">
            <form action="search.php" method="get">
              <input type="text" name="news_search" placeholder=" সার্চ  " style="width: 263px;" />
              <input type="submit" name="submit" value="খুজুন" />
            </form>
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
            <div class="row" id="news_table">
                        <table class="table table-hover" >
  <thead>
    <tr>
      <th width="10%" scope="col">#</th>
      <th width="10%" scope="col">Title</th>
      <th width="10%" scope="col">Content</th>
      <th width="10%" scope="col">Category</th>
      <th width="10%" scope="col">Image</th>
      <th width="10%" scope="col">Status</th>
      <th width="10%" scope="col">Publish Time</th>
      <th width="10%" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
	$query = "SELECT * FROM tbl_news";
	$unplublish = $db->select($query);
	if ($unplublish) {
		$i = 0;
		while ($result = $unplublish ->fetch_assoc()) {
			$i++;
?>
    <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $fm->textShorten($result['title'], 100); ?></td>
      <td><?php echo $fm->textShorten($result['body'], 100); ?></td>
      <td><?php echo $result['category']; ?></td>
      <td><img style="width: 40px;height: 30px;" src="<?php echo $result['image']; ?>" alt=""></td>
      <td><?php echo $result['publish_status']; ?></td>
      
      <td><?php echo $result['display_time']; ?></td>

      <td>
        <a href="editnews.php?edit_news=<?php echo $result['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
        <a onclick="nDelete(delNews=<?php echo $result['id']; ?>)"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
      </td>
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

<script>
    function nDelete(delNews){
        var id = delNews;
        var data_Link = 'delnews.php';
        var data_string = 'id='+id;

        $.ajax({
            type : 'POST',
            url : data_Link,
            data : data_string,
            success:function(data){
                 $("#news_table").html(data);
                 //alert(data);
            }
        });

    }
</script>


<?php include 'inc/footer.php'; ?>