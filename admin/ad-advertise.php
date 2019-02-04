<?php error_reporting(0);
    include 'inc/header.php'; 
    include 'inc/header-menu.php'; 
    include 'inc/side-nav.php'; 
?>
<?php 
        $n = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $name  = mysqli_real_escape_string($db->link, $_POST['name']);
      $position  = mysqli_real_escape_string($db->link, $_POST['position']);
         $permited  = array('jpg', 'jpeg', 'png', 'gif');
                $file_name = $_FILES['image']['name'];
                $file_size = $_FILES['image']['size'];
                $file_temp = $_FILES['image']['tmp_name'];

                $div = explode('.', $file_name);
                $file_ext = strtolower(end($div));
                $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
                $uploaded_image = "images/".$unique_image;

      if ($name == "") {
        $n = "<span class='error'>Please Add advertise Name</span>";
      }else{
             move_uploaded_file($file_temp, $uploaded_image);
          $query = "INSERT INTO tbl_advertisement(name, image, position) VALUES('$name', '$uploaded_image', '$position')";
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
            <h1><i class="fa fa-file-text"></i> ADD ADVERTISE</h1>
            <p>add advertise here for any page</p>
        </div>
        <?php echo $n; ?>
        <div>
            <ul class="breadcrumb">
                <li><i class="fa fa-file-text"></i></li>
                <li><a href="#">ADD ADVERTISE</a></li>
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

                                <div class="col-lg-12">
                                    <input class="form-control" name="name" type="text" placeholder="Add advertise name ">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <input class="form-control" name="image" type="file" >
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                <select name="position" class="form-control">
                                    <option value="Position  1">Position  1</option>
                                    <option value="Position  2">Position  2</option>
                                    <option value="Position  3">Position  3</option>
                                    <option value="Position  4">Position  4</option>
                                    <option value="Position  5">Position  5</option>
                                    <option value="Position  6">Position  6</option>
                                    <option value="Position  7">Position  7</option>
                                    <option value="Position  8">Position  8</option>
                                    <option value="Position  9">Position  9</option>
                                    <option value="Position  10">Position  10</option>
                                    <option value="Position  11">Position  11</option>
                                    <option value="Position  12">Position  12</option>
                                    <option value="Position  13">Position  13</option>
                                    <option value="Position  14">Position  14</option>
                                    <option value="Position  15">Position  15</option>
                                    <option value="Position  16">Position  16</option>
                                    <option value="Position  17">Position  17</option>
                                    <option value="Position  18">Position  18</option>
                                    <option value="Position  19">Position  19</option>
                                    <option value="Position  20">Position  20</option>

                                </select>
                            </div>
                            </div>
                            
                
                <div class="form-group">
                    <div class="col-lg-12">
                        <button class="btn btn-primary btn-block">ADD ADVERTISE</button>
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