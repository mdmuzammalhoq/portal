<?php include 'inc/header.php'; ?>
<?php include 'inc/header-menu.php'; ?>
<?php include 'inc/side-nav.php'; ?>
<?php 
        $n = '';
        $id = $_GET['edit_cat'];
  if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
      $cat_name      = mysqli_real_escape_string($db->link, $_POST['category_name']);

          $query = "UPDATE tbl_category SET cat_name = '$cat_name' WHERE id='$id' ";
          $insert_news = $db->update($query);
            if ($insert_news) {
              $n = "<span class='success'>Category updated Successfully. </span>";
            }else {
              $n = "<span class='error'>Error occured !! Category not updated.</span>";
            }
      }
  
?>
      <div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-dashboard"></i> EDIT CATEGORY</h1>
            <p>Edit Category</p>
          </div>
          <?php echo $n; ?>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li><a href="#">EDIT CATEGORY</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              
<?php 
  $query = "SELECT * FROM tbl_category where id='$id' ";
  $cat=$db->select($query);
  if ($cat) {
    while ($result = $cat->fetch_assoc()) {
  
?>
              <form action="" method="post">
                <div class="form-group">
                  <input type="text" name="category_name" class="form-control" value="<?php echo $result['cat_name']; ?>">
                </div>
                <div class="form-group">
                  <button class="btn btn-primary btn-block">UPDATE CATEGORY</button>
                </div>
              </form>
<?php } } ?>
              
            </div>
          </div>
        </div>
      </div>

<?php include 'inc/footer.php'; ?>