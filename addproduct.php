<?php
session_start();
include 'core/init.php';
   



if(!isset($_SESSION['user_name'])){
  header("location: login.php");
  }



?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<style>
body{
  background-image: url(images/bg.png);
}
.rege{
  background-color:#f6f6f6;
  border-radius:5px;
}
#gf{
  color:green;
  text-align:center;
  font-family:Tahoma;
}

@import url(http://fonts.googleapis.com/css?family=Open+Sans:400,700,300);
body {
    font: 12px 'Open Sans';
}
.form-control, .thumbnail {
    border-radius: 2px;
}
.btn-danger {
    background-color: #B73333;
}

/* File Upload */
.fake-shadow {
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.2);
}
.fileUpload {
    position: relative;
    overflow: hidden;
}
.fileUpload #logo-id {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 33px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
.img-preview {
    max-width: 100%;
}
</style>
<body class="hold-transition skin-blue sidebar-mini">

<br><br>
<div class="container">
    <div class="row">
<a href="logout.php" class="btn btn-danger lgt pull-right">LOGOUT</a>
</div>
</div>




<div class="container"><br><br>
      <div class="row">
        <div class="col-lg-3 col-xs-6  adp">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3></h3>

              <p>Add Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="addproduct.php" class="small-box-footer add">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3></h3>

              <p>Edit Site</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="dashboard.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3></h3>

              <p>Manage Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="managep.php?view_product=view_product" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3></h3>

              <p>About Us</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="eabout.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        
      </div>
</div>


      <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">ADD NEW PRODUCT</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="addproduct.php" method="POST"  enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Name" name="title">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <div class="box-body pad">
             
            
              
                    <textarea id="editor1" name="editor1" rows="10" cols="80">
                                           
                    </textarea><br><br>
                   
                   
            
            </div>
                </div>
                <div class="col-md-4 col-md-offset-4">
		    <div class="form-group">
              <div class="main-img-preview">
                <img class="thumbnail img-preview" src="images/upd.png" title="Preview Logo">
              </div>
              <div class="input-group">
                <input id="fakeUploadLogo" class="form-control fake-shadow" placeholder="Choose File" disabled="disabled">
                <div class="input-group-btn">
                  <div class="fileUpload btn btn-danger fake-shadow">
                    <span><i class="glyphicon glyphicon-upload"></i> Upload Picture</span>
                    <input id="logo-id" type="file" class="attachment_upload" name="photo">
                  </div>
                  
                </div>
              </div>
              <span>Picture must be cropped to 599px by 400px</span>
            </div>
		</div>
                
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-success pull-right" name="adp">Add</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
</section>    
  
 
 
 

  <?php
     if(isset($_POST['adp'])){
        
        if(isset($_FILES['photo'])){
            $title=$_POST['title'];
            $details=$_POST['editor1'];
            $dbpath='';
            if($_FILES['photo']['name']==''){
                $msg="<br>
                <div class='alert alert-success col-md-8 col-md-offset-2'>
                    <button class='close' data-dismiss='alert'>&times;</button> 
                     NOTE <strong>IMAGE must be uploaded</strong>
                 </div>";
                 echo $msg;

            }elseif($title == ''){
                $msg="<br>
                <div class='alert alert-success col-md-8 col-md-offset-2'>
                    <button class='close' data-dismiss='alert'>&times;</button> 
                     Product Name is required
                 </div>";
                 echo $msg;

            }elseif($details == ''){
                $msg="<br>
                  <div class='alert alert-success col-md-8 col-md-offset-2'>
                      <button class='close' data-dismiss='alert'>&times;</button> 
                       You Must Say Something About The Product
                   </div>";
                   echo $msg;
            }else{
        $file_name1 = $_FILES['photo']['name'];
        $file_size1 =$_FILES['photo']['size'];
        @$file_tmp1 =$_FILES['photo']['tmp_name'];
        $file_type1=$_FILES['photo']['type'];
        @$file_ext1=explode('.',$_FILES['photo']['name']) ;
        $file_ext1=end($file_ext1);
        @$file_ext1=strtolower(end(explode('.',$_FILES['photo']['name']))); 
        $uploadName1 = md5(microtime()).'.'.$file_ext1;
        $uploadPath1 = BASEURL.'/web/assets/images/'.$uploadName1;
        $dbpath1='/web/assets/images/'.$uploadName1;
        move_uploaded_file($file_tmp1,$uploadPath1);

        $q="INSERT INTO `farm`.`product` (`id`,`image`,`product_title`,`description`) VALUES (NULL,'$dbpath1', '$title','$details')" ;
        $runquery =$db->query($q); 
        if($runquery){
            $msg="<br>
                        <div class='alert alert-success col-md-8 col-md-offset-2'>
                            <button class='close' data-dismiss='alert'>&times;</button> 
                            <strong>Ad!</strong> Posted Successfully
                         </div>";
                         echo $msg;
          }else{
            $msg="<br>
            <div class='alert alert-success col-md-8 col-md-offset-2'>
                <button class='close' data-dismiss='alert'>&times;</button> 
                <strong>Ad!</strong> Posing failed
             </div>";
             echo $msg;
          }
        }
    } 
}
  ?>





<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>

$(document).ready(function() {
    var brand = document.getElementById('logo-id');
    brand.className = 'attachment_upload';
    brand.onchange = function() {
        document.getElementById('fakeUploadLogo').value = this.value.substring(12);
    };

    // Source: http://stackoverflow.com/a/4459419/6396981
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function(e) {
                $('.img-preview').attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#logo-id").change(function() {
        readURL(this);
    });
});



  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  $(document).ready( function() {
    
    $(document).on('change', '.btn-file :file', function() {
  var input = $(this),
    label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
  input.trigger('fileselect', [label]);
  });

  $('.btn-file :file').on('fileselect', function(event, label) {
      
      var input = $(this).parents('.input-group').find(':text'),
          log = label;
      
      if( input.length ) {
          input.val(log);
      } else {
          if( log ) alert(log);
      }
    
  });
  
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          
          reader.onload = function (e) {
              $('#img-upload').attr('src', e.target.result);
          }
          
          reader.readAsDataURL(input.files[0]);
      }
  }

  $("#imgInp").change(function(){
      readURL(this);
  });
  
  $("#clear").click(function(){
      $('#img-upload').attr('src','');
      $('#urlname').val('');
  });
});
</script>
</body>
</html>

