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
            <div class="row" id="news_table">
                        <table class="table table-hover" >
  <thead>
    <tr>

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
  $search= $_GET['news_search'];
  $query = "SELECT * FROM tbl_news WHERE title LIKE '%$search%' OR body LIKE '%$search%' OR category LIKE '%$search%'";
  $president = $db->select($query);
  if ($president) {
    while ($result = $president->fetch_assoc()) {

?>
    <tr>

      <td><?php echo $fm->textShorten($result['title'], 200); ?></td>
      <td><?php echo $fm->textShorten($result['body'], 300); ?></td>
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



<?php include 'inc/footer.php'; ?>