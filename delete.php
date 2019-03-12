<?php
include 'core/init.php';


$delete_id = $_GET['del'];

$delete_query = "delete from product where id='$delete_id'";
$run=$db->query($delete_query);
if($run){
	header("location: managep.php?view_product=view_product");
	
	}
	
	
	
?>