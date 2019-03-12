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


      <section class="content hide">
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
            <form action="dashboard.php" method="POST">
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
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile" name="photo1">

                
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
  
 
 













      <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-7 col-md-offset-2">
          <!-- general form elements -->
          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">SITE SETTINGS</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form action="dashboard.php" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter Company Mail" name="email">
                 <br> <button type="submit" class="btn btn-success pull-right" name="ml">Update</button>
                </div>
          </form>

          <?php
                  if(isset($_POST['ml'])){
                    $email=$_POST['email'];

                    $q="UPDATE `farm`.`settings` SET `email` = '$email' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }


                  }
          ?>

<form action="dashboard.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Tell</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="tell" name="tell1">
                  <br> <button type="submit" class="btn btn-success pull-right" name="phone1">Update</button>
                </div>
</form>

 <?php
                  if(isset($_POST['phone1'])){
                    $phone1=$_POST['tell1'];

                    $q="UPDATE `farm`.`settings` SET `tell1` = '$phone1' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }

  

                  }
          ?>
<form action="dashboard.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Phone</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Phone" name="tell2">
                  <br> <button type="submit" class="btn btn-success pull-right" name="phone2">Update</button>
                </div>
</form>

          <?php
                  if(isset($_POST['phone2'])){
                    $phone1=$_POST['tell2'];

                    $q="UPDATE `farm`.`settings` SET `tell2` = '$phone1' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }

  

                  }
          ?>

<form action="dashboard.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Welcome Message</label>
                  <textarea class="form-control" placeholder="Enter Welcome Message" name="welcmsg"></textarea>
                  <br> <button type="submit" class="btn btn-success pull-right" name="txt1">Update</button>
                </div>
</form>


     <?php
                  if(isset($_POST['txt1'])){
                    $txt1=$_POST['welcmsg'];

                    $q="UPDATE `farm`.`settings` SET `wlctxt` = '$txt1' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }

  

                  }
          ?>

          <form action="dashboard.php" method="POST">
                <div class="form-group">
                  <label for="exampleInputEmail1">Slider Text</label>
                  <textarea class="form-control" placeholder="Enter Slider Text" name="txt2"></textarea>
                  <br> <button type="submit" class="btn btn-success pull-right" name="wlc2">Update</button>
                </div>
          </form>


               <?php
                  if(isset($_POST['wlc2'])){
                    $txt2=$_POST['txt2'];

                    $q="UPDATE `farm`.`settings` SET `txtslide` = '$txt2' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }

  

                  }
          ?>

 <form action="dashboard.php" method="POST">
                 <div class="form-group">
                  <label for="exampleInputEmail1">Service 1</label>
                  <textarea class="form-control" placeholder="Enter Service" name="serv1"></textarea>
                  <br> <button type="submit" class="btn btn-success pull-right" name="note1">Update</button>
                </div>
</form>


          <?php
                  if(isset($_POST['note1'])){
                    $service1=$_POST['serv1'];

                    $q="UPDATE `farm`.`settings` SET `service1` = '$service1' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }

  

                  }
          ?>

<form action="dashboard.php" method="POST">
<div class="form-group">
                  <label for="exampleInputEmail1">Service 2</label>
                  <textarea class="form-control" placeholder="Enter Service" name="serv2"></textarea>
                  <br> <button type="submit" class="btn btn-success pull-right" name="note2">Update</button>
                </div>
</form>

          <?php
                  if(isset($_POST['note2'])){
                    $service2=$_POST['serv2'];

                    $q="UPDATE `farm`.`settings` SET `service2` = '$service2' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }


                  }
          ?>

     <form action="dashboard.php" method="POST">
<div class="form-group">
                  <label for="exampleInputEmail1">Service 3</label>
                  <textarea class="form-control" placeholder="Enter Service" name="serv3"></textarea>
                  <br> <button type="submit" class="btn btn-success pull-right" name="note3">Update</button>
                </div>
</form>

          <?php
                  if(isset($_POST['note3'])){
                    $service3=$_POST['serv3'];

                    $q="UPDATE `farm`.`settings` SET `service3` = '$service3' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }

  

                  }
          ?>

<form action="dashboard.php" method="POST">
              <div class="form-group">
                  <label for="exampleInputEmail1">RCC</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="RCC" name="rcc">
                  <br> <button type="submit" class="btn btn-success pull-right" name="rcc1">Update</button>
                </div>
                
              </div>
  </form>


       <?php
                  if(isset($_POST['rcc1'])){
                    $rcc=$_POST['rcc'];

                    $q="UPDATE `farm`.`settings` SET `rcc` = '$rcc' WHERE id=1;" ;
                     $runquery =$db->query($q); 

                     if($runquery){
                     
                      echo "<script>window.alert('successful');</script>";
       }

  

                  }
          ?>
              <!-- /.box-body -->

          
          </div>
          <!-- /.box -->
</section>    
  
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

