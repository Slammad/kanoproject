<?php
    include "core/init.php";
    include "includes/header.inc.php";
    $pid = (int) trim($_GET['pid']);
$detailQ="SELECT * FROM product WHERE `id`='$pid'";
$rundetail=$db->query($detailQ);
$detailk=mysqli_fetch_assoc($rundetail);

?>
<div class="container">
	<div class="row">
	<div class="col-md-3">       
	</div>
    <div class="col-md-6"><br>
            <div class="panel panel-default">
  <div class="panel-body">
  
	 
<center>
  <img src="<?=$detailk['image']?>" class="img-responsive">
</center> 
  <hr>
  <br>
  <center>
   <h4><?=$detailk['product_title']?></h4><br>
</center>
<p><?=$detailk['description']?></p>

<div class="pull-left">

</div>



</p>
</div>
	    <div class="col-md-3">       
	</div>
	
	</div>
        
        
    </div>
	</div>
</div>

<?php
    include "includes/footer.inc.php";
?>