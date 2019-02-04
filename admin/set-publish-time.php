<?php
    include 'inc/header.php'; 
    include 'inc/header-menu.php'; 
    include 'inc/side-nav.php'; 
?>
<style>
    .success{
        color: green;
        letter-spacing: 2px;
        font-size: 15px;
    }
    .error{
        color: #bd0202;
        letter-spacing: 2px;
        font-size: 15px;
    }
</style>
<?php 
        $n = '';
        $id = $_GET['update_date'];
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $title            = mysqli_real_escape_string($db->link, $_POST['title']);
      $news_date      = mysqli_real_escape_string($db->link, $_POST['date']);


      if ($news_date == "") {
        $n = "<span class='error'>You didn't write Date of news.</span>";
      }else{
          $query = "UPDATE tbl_news SET news_date = '$news_date' WHERE id='$id' ";
          $insert_news = $db->update($query);
            if ($insert_news) {
              $n = "<span class='success'>Date and time updated Successfully. </span>";
            }else {
              $n = "<span class='error'>Error occured !! Date and time not updated.</span>";
            }
      }
  }
?>
<div class="content-wrapper">
    <div class="page-title">
        <div>
            <h1><i class="fa fa-file-text"></i> ADD TIME & DATE</h1>
            <p>add news here for any page</p>
        </div>
        <?php echo $n; ?>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-file-text"></i></li>
                <li><a href="#">ADD NEWS</a></li>
            </ul>
            
        </div>
    </div>

    <div class="col-md-12">
        <div class="card">
            <div class="row">
                <div class="col-lg-12">
                    <div class="well bs-component">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">
                            <div class="form-group">
<?php 
    $id = $_GET['update_date'];
    $query = "SELECT * FROM tbl_news where id='$id'";
    $dateTime = $db->select($query);
    if ($dateTime) {
        while ($result = $dateTime->fetch_assoc()) {
?>
                                <div class="col-lg-6">
                                    <input name="date" type="text" class="form-control" value="<?php echo $result['news_date']; ?>" >
                                </div>
<?php } } ?>
                                <div class="col-lg-6">
                                    <p style="padding-top: 10px;color: #c3c3c3;">( Write date and time like:  &ensp;2017-12-19 15:00:02 ) </p>
                                </div>
                            </div>
                           <div class="form-group">
                            <div class="col-lg-12">
                                <button class="btn btn-primary btn-block">UPDATE DATE & TIME</button>
                            </div>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $( "#datepicker" ).datepicker();
</script>

<script> $(function() { $('textarea').froalaEditor() }); </script>
<?php include 'inc/footer.php'; ?>