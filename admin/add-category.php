<?php error_reporting(0);
    include 'inc/header.php'; 
    include 'inc/header-menu.php'; 
    include 'inc/side-nav.php'; 
?>
<?php 
        $n = '';
        $timezone  = +6; 
        $t = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $cat_name  = mysqli_real_escape_string($db->link, $_POST['category']);
     

      if ($cat_name == "") {
        $n = "<span class='error'>Please Add Category Name</span>";
      }else{
             
          $query = "INSERT INTO tbl_category(cat_name) VALUES('$cat_name')";
          $insert_news = $db->insert($query);
            if ($insert_news) {
              $n = "<span class='success'>News Added Successfully. </span>";
            }else {
              $n = "<span class='error'>Error occured !! News Not Added.</span>";
            }
      }
  }
?>
<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-text"></i> ADD CATEGORY</h1>
            <p>add news here for any page</p>
        </div>
        <?php echo $n; ?>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-file-text"></i></li>
                <li><a href="#">ADD CATEGORY</a></li>
            </ul>
            
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-8">
                    <div class="well bs-component">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">

                                <div class="col-lg-12">
                                    <input class="form-control" name="category" type="text" placeholder="Add News Title ">
                                </div>
                            </div>
                            
                
                <div class="form-group">
                    <div class="col-lg-12">
                        <button class="btn btn-primary btn-block">ADD NEWS</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( "#datepicker" ).datepicker();
</script>

<script> $(function() { $('textarea').froalaEditor() }); </script>
<?php include 'inc/footer.php'; ?>