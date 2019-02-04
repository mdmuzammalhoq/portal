<?php error_reporting(0);
    include 'inc/header.php'; 
    include 'inc/header-menu.php'; 
    include 'inc/side-nav.php'; 
?>
<?php 
        $n = '';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      
      $title  = mysqli_real_escape_string($db->link, $_POST['title']);
      $position  = mysqli_real_escape_string($db->link, $_POST['position']);
     

      if ($title == "") {
        $n = "<span class='error'>Please Add Category Name</span>";
      }else{
             
          $query = "INSERT INTO tbl_title(title, categories) VALUES('$title', '$position')";
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
                        <form class="form-horizontal" action="" method="post" enctype="multipart/form-data">

                            <div class="form-group">

                                <div class="col-lg-12">
                                    <input class="form-control" name="title" type="text" placeholder="Add News Title ">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-12">
                                <select name="position" class="form-control">
                                    <option value="Position_1">Position  1</option>
                                    <option value="Position_2">Position  2</option>
                                    <option value="Position_3">Position  3</option>
                                    <option value="Position_4">Position  4</option>
                                    <option value="Position_5">Position  5</option>
                                    <option value="Position_6">Position  6</option>
                                    <option value="Position_7">Position  7</option>
                                    <option value="Position_8">Position  8</option>
                                    <option value="Position_9">Position  9</option>
                                    <option value="Position_10">Position  10</option>
                                    <option value="Position_11">Position  11</option>
                                    <option value="Position_12">Position  12</option>
                                    <option value="Position_13">Position  13</option>
                                    <option value="Position_14">Position  14</option>
                                    <option value="Position_15">Position  15</option>
                                    <option value="Position_16">Position  16</option>
                                    <option value="Position_17">Position  17</option>
                                    <option value="Position_18">Position  18</option>
                                    <option value="Position_19">Position  19</option>
                                    <option value="Position_20">Position  20</option>
                                    <option value="Position_21">Position  21</option>
                                    <option value="Position_22">Position  22</option>
                                    <option value="Position_23">Position  23</option>
                                    <option value="Position_24">Position  24</option>
                                    <option value="Position_25">Position  25</option>
                                    <option value="Position_26">Position  26</option>
                                    <option value="Position_27">Position  27</option>
                                    <option value="Position_28">Position  28</option>
                                    <option value="Position_29">Position  29</option>
                                    <option value="Position_30">Position  30</option>
                                    <option value="Position_31">Position  31</option>

                                </select>
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