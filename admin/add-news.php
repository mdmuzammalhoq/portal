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
      $section_name     = mysqli_real_escape_string($db->link, $_POST['section_name']);
      $title            = mysqli_real_escape_string($db->link, $_POST['title']);
      $title_color      = mysqli_real_escape_string($db->link, $_POST['title-color']);
      $subtitle         = mysqli_real_escape_string($db->link, $_POST['subtitle']);
      $subtitle_color   = mysqli_real_escape_string($db->link, $_POST['subtitle-color']);
      $date             = mysqli_real_escape_string($db->link, $_POST['date']);
      $category         = mysqli_real_escape_string($db->link, $_POST['newscat']);
      $cate             = implode(', ', $_POST['newscat']);
      $position         = mysqli_real_escape_string($db->link, $_POST['position']);
      $author_name         = mysqli_real_escape_string($db->link, $_POST['author_name']);
      
      
      $body             = mysqli_real_escape_string($db->link, $_POST['body']);
      $status           = mysqli_real_escape_string($db->link, $_POST['publish_status']);

      // Content Image
      $permited  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];

            $div = explode('.', $file_name);
            $file_ext = strtolower(end($div));
            $unique_image = substr(md5(time()), 0, 10).'.'.$file_ext;
            $uploaded_image = "images/".$unique_image;

     // Writer Image
            $permited2  = array('jpg', 'jpeg', 'png', 'gif');
            $file_name2 = $_FILES['author_image']['name'];
            $file_size2 = $_FILES['author_image']['size'];
            $file_temp2 = $_FILES['author_image']['tmp_name'];

            $div2 = explode('.', $file_name2);
            $file_ext2 = strtolower(end($div2));
            $unique_image2 = substr(md5(md5(time()), 0, 10)).'.'.$file_ext2;
            $uploaded_image2 = "images/".$unique_image2;

      if ($title == "") {
        $n = "<span class='error'>You didn't write title of news.</span>";
      }elseif ($cate == '') {
        $n = "<span class='error'>Please select minimum one category.</span>";
      }elseif ($body == '') {
        $n = "<span class='error'>You didn't write content of news.</span>";
      }elseif ($author_name == '') {
        $n = "<span class='error'>You didn't write author name.</span>";
      }elseif ($file_size >1048567) {
        $n = "<span class='error'>Image Size should be less then 1MB! </span>";
      } elseif (in_array($file_ext, $permited) === false) {
        $n = "<span class='error'>You can upload only:-".implode(', ', $permited)." </span> ";
      }else{
              move_uploaded_file($file_temp, $uploaded_image);
              move_uploaded_file($file_temp2, $uploaded_image2);
          $query = "INSERT INTO tbl_news(section_name, title, title_color, subtitle, subtitle_color, body, image, category, display_time, publish_status, author_name, author_image) VALUES('$section_name', '$title', '$title_color', '$subtitle', '$subtitle_color', '$body', '$uploaded_image', '$cate', '$date', '$status', '$author_name', '$uploaded_image2')";
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
            <h1><i class="fa fa-file-text"></i> ADD NEWS</h1>
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
                <div class="col-lg-8">
                    <div class="well bs-component">
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">

                                <div class="col-lg-12">
                                    <input class="form-control" name="title" type="text" placeholder="Add News Title ">
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <select name="title-color" class="form-control">
                                        <option value="">Title Color</option>
                                        <option value="ED0010">RED</option>
                                        <option value="006C6E">GREEN</option>
                                        <option value="fff">WHITE</option>
                                        <option value="666969">BLACK</option>
                                        <option value="F6FF00">YELLOW</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">

                                <div class="col-lg-12">
                                    <input name="subtitle" class="form-control" type="text" placeholder="Add News Subtitle ">
                                </div>
                            </div>

                            <div class="form-group">

                                <div class="col-lg-12">
                                    <select name="subtitle-color" id="" class="form-control">
                                        <option value="">Subtitle Color</option>
                                        <option value="ED0010">RED</option>
                                        <option value="006C6E">GREEN</option>
                                        <option value="fff">WHITE</option>
                                        <option value="666969">BLACK</option>
                                        <option value="F6FF00">YELLOW</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
<?php 
    $timezone  = +6; 
    $wt = gmdate("Y-m-j H:i:s", time() + 3600*($timezone+date("I")));
?>
                                <div class="col-lg-12">
                                    <input type="text" name="date" class="form-control" value="<?php echo $wt; ?>">
                                    
                                </div>
                            </div>
                            <div class="form-group">
                            <div class="col-lg-12">
                                <select name="publish_status" class="form-control">
                                        <option value="">--Select--</option>
                                        <option value="Publish Later">Publish Later</option>
                                    </select>
                            </div>
                            </div>
                            
                            <div class="form-group">

                                <div class="col-lg-6">
                                    <label for="">News Image <span style="color: red;"> *</span> </label>
                                    <input class="form-control" name="image" type="file" >
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Writer Image</label>
                                    <input class="form-control" name="author_image" type="file" >
                                </div>
                            </div>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="form-group" style="height: 337px;border: 2px solid #c7c5c5;overflow-y: scroll hidden;overflow-x: hidden; border-radius: 5px; background: #fff;">
                          <div style="color: #b7b7b7;text-align: center;">Select categories from here</div>
                            
<?php 
    $query = "SELECT * FROM tbl_category";
    $cate = $db->select($query);
    if ($cate) {
        while ($result = $cate->fetch_assoc()) {

?>  

    <div class="checkbox" style="margin-left: 20px;">
      <label>
            <input type="checkbox" name="newscat[]" <?php if($result['cat_name'] == $cate){foreach($_POST['newscat'] as $categ){echo $categ; } } ?> value="<?php echo $result['cat_name']; ?>"><?php echo $result['cat_name']; ?>
      </label>
    </div>
<?php  } } ?>

                            

                        </div>
                    </div>
                    
                    <div class="form-group">
                        <input type="text" name="author_name" placeholder="Add Author Name" class="form-control">
                    </div>
                </div>
                <div class="form-group">

                    <div class="col-lg-12" style="margin-bottom: 20px;z-index: 1;">
                        <textarea name="body" class="form-control"></textarea>
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