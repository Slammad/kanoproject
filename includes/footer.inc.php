<?php
	$query2="SELECT * FROM settings WHERE `id`=1";
	$st2=$db->query($query2);
	$ft=mysqli_fetch_assoc($st2)
?>
<!-- footer -->
<div class="footer">
	<div class="container">
		<div class="col-md-3 footer-left">
			<h5><i class="fa fa-phone" aria-hidden="true"></i><?=$ft['tell1']?></h5>
			<h5><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:<?=$ft['email']?>"><?=$ft['email']?></a></h5>
			<p>Tuherbiscuss Consolidated Company.</p>
		</div>
		<div class="col-md-6 footer-center">
		<ul>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a  href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="col-md-3 footer-right">
			<h5><i class="fa fa-home" aria-hidden="true"></i>Address</h5>
			<p>Tuherbiscuss Global Nigeria Limited </p>
			<p>KM 8, DANSARAI, TOKARAWA, HADEJA ROA,KANO.</p>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //footer -->
<!-- copyright -->
<div class="copyright-agile">
	<p>&copy; 2018 Tuherbiscuss. All Rights Reserved </p>
</div>
<!-- //copyright -->
<script src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/jquery.flexisel.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
