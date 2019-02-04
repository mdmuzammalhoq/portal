<?php include 'inc/header.php'; ?>
<?php include 'inc/header-menu.php'; ?>
<?php include 'inc/side-nav.php'; ?>
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
            <h1><i class="fa fa-dashboard"></i> ALL TITLES</h1>
            <p>All title are shown here</p>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">ALL TITLES</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <table class="table table-hover">
  <thead>
    <tr>
      <th width="10%" scope="col">#</th>
      <th width="40%" scope="col">Category Name</th>
      <th width="20%" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
<?php 
  $query = "SELECT * FROM tbl_title";
  $cat = $db->select($query);
  if ($cat) {
    $i=0;
    while ($result = $cat->fetch_assoc()) {
      $i++;
?>
    <tr>
      <th><?php echo $i; ?></th>
      <td><?php echo $result['title']; ?></td>
      <td><a style="font-size: 18px;" href="edit-title.php?edit_cat=<?php echo $result['id']; ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
    </tr>
<?php } } ?>
  </tbody>
</table>
            </div>
          </div>
        </div>
      </div>

<?php include 'inc/footer.php'; ?>