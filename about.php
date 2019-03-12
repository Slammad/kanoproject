<?php
	include "includes/header.inc.php";
	include 'core/init.php';
	$sql ="SELECT * FROM about WHERE `id`=1";
	$about=$db->query($sql);
?>
<div class="container">
<div class="row">
<div class="w3layouts_header">
	<br>
				<p><span><i class="fa fa-globe" aria-hidden="true"></i></span></p>
				<h5>About<span>Us</span></h5>
			</div>
		
</div>

</div>

</div>

<div class="container">
			<div class="row">
                 <div class="col-lg-6 col-lg-offset-3 text-center">  
                  <br>
									<?php while($side =mysqli_fetch_assoc($about)):?>
		<?=$side['about'];?>
		<?php endwhile;?>
                 </div> 
            </div>  
</div>
<br>
<?php
  include "includes/footer.inc.php";

?>
