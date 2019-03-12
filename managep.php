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



 

<?php if(isset($_GET['view_product'])){?>

   
<div class="col-md-12 netmartuser">
  <div class="panel panel-default">
      <div class="panel-heading">
             <div class="panel-heading">
               <h2>Products</h2>
             </div>
            <div class="panel-body">
             <div class="dataTable_wrapper">
               <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                 <thead>
                   <tr>
                     <th>S.No.</th>
                     <th>Product Name</th>
                     <th>Product Desc</th>
                  
                     
                     <th>Delete</th>
                   </tr>
                 </thead>


             <?php
        
           $i=1;

           if(isset($_GET['view_product'])){

             $query="select * from product";
             $run=$db->query($query);
             
           while($row=mysqli_fetch_assoc($run)){
             $prod_id = $row['id'];
             $title = $row['product_title'];
             $detail = $row['description'];
         






           ?>
             
             
             
              <tbody>
                   <tr class="gradeC">
                 <td><?php echo $i++; ?></td>
                 <td><?php echo $title; ?></td>
                 
                 <td><?php echo $detail; ?></td>
               
                 
                 <td><a href="delete.php?del=<?php echo $prod_id;?>"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-trash">&nbsp;</span>Delete</button></a></td>
               </tr>
            </tbody>
                                           
           <?php }}} ?>

           </table>
           </div>
           </div>
           </div>
           </div>
        </div>


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

