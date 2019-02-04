<?php error_reporting(0);
    include 'inc/header.php'; 
    include 'inc/header-menu.php'; 
    include 'inc/side-nav.php'; 
?>
<?php 
        $n = '';
        $id = $_GET['edit_cat'];
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $title  = mysqli_real_escape_string($db->link, $_POST['title']);
      $position  = mysqli_real_escape_string($db->link, $_POST['position']);
     

      if ($title == "") {
        $n = "<span class='error'>Please Add Category Name</span>";
      }else{
             
          $query = "UPDATE tbl_title SET 
          title = '$title'
          WHERE 

          id= '$id'

          ";
          $insert_news = $db->update($query);
            if ($insert_news) {
              $n = "<span class='success'>News updated Successfully. </span>";
            }else {
              $n = "<span class='error'>Error occured !! News Not updated.</span>";
            }
      }
  }
?>
<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-text"></i> ADD PAGE TITLE</h1>
            <p>add page title here for home page</p>
        </div>
        <?php echo $n; ?>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-file-text"></i></li>
                <li><a href="#">ADD PAGE TITLE</a></li>
            </ul>
            
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="well bs-component">
<?php 
    $query = "SELECT * FROM tbl_title WHERE id='$id' ";
    $fourth = $db->select($query);
    if ($fourth) {
        while ($result = $fourth->fetch_assoc()) {
?>
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">

                                <div class="col-lg-12">
                                    <input class="form-control" name="title" type="text" value="<?php echo $result['title']; ?>">
                                </div>
                            </div>

                            
                
                <div class="form-group">
                    <div class="col-lg-12">
                        <button class="btn btn-primary btn-block">UPDATE TITLE</button>
                    </div>
                </div>

                </form>
<?php } } ?>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( "#datepicker" ).datepicker();
</script>

<script> $(function() { $('textarea').froalaEditor() }); </script>
<?php include 'inc/footer.php'; ?>