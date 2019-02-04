<?php 
    include '../lib/config.php'; 
    include '../lib/db.php';
    include '../lib/helpers.php';
    include '../lib/session.php';

    $db = new Database();
    $fm = new Format();
?>

<?php 
	$id = $_POST['id'];
		$delquery = "DELETE FROM tbl_news WHERE id='$id'";
		$delNews = $db->delete($delquery);
		if ($delNews ) { 
?>
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
      <td><?php echo $fm->textShorten($result['title'], 20); ?></td>
      <td><?php echo $fm->textShorten($result['body'], 30); ?></td>
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
	<?php }else{ echo "NO"; } ?>
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