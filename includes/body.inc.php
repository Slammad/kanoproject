<?php
$error='failed to connect';
$db =mysqli_connect('localhost','root','0W7Mhgw1Qw6k','farm') or die($error);
@define('BASEURL', $_SERVER['DOCUMENT_ROOT']);
$query="SELECT * FROM settings WHERE `id`=1";
$st=$db->query($query);
$show=mysqli_fetch_assoc($st);

$sql ="SELECT * FROM product ORDER BY RAND() LIMIT 0,4";
$product=$db->query($sql);


$sql1 ="SELECT * FROM product ORDER BY RAND() LIMIT 0,4";
$product1=$db->query($sql1);



function trim_text($input, $length, $ellipses = true, $strip_html = true) {
	//strip tags, if desired
	if ($strip_html) {
			$input = strip_tags($input);
	}

	//no need to trim, already shorter than trim length
	if (strlen($input) <= $length) {
			return $input;
	}

	//find last space within length
	$last_space = strrpos(substr($input, 0, $length), ' ');
	$trimmed_text = substr($input, 0, $last_space);

	//add ellipses (...)
	if ($ellipses) {
			$trimmed_text .= '...';
	}

	return $trimmed_text;
}

?>
	<div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
		
		  <!-- Wrapper for slides -->
		  <div class="carousel-inner">
		  
			<div class="item active">
			  <img src="images/caro5.jpg">
			   <div class="carousel-caption">
				<h4><a href="#">HARD WOOD CHACOAL</a></h4>
				<p>We export hard wood charcoal of high quality from Nigeria. It is of high quality with specs as follows</p>
			  </div>
			</div><!-- End Item -->
	 
			 <div class="item">
			  <img src="images/caro4.jpg">
			   <div class="carousel-caption">
				<h4><a href="#">DRIED HIBISCUS FLOWER</a></h4>
				<p>Dried Hibiscus flower grows in various States of Nigeria including Kano , Borno, </p>
			  </div>
			</div><!-- End Item -->
			
			<div class="item">
			  <img src="images/caro3.jpg">
			   <div class="carousel-caption">
				<h4><a href="#">DRIED SPLIT GINGER</a></h4>
				<p>DRIED SPLIT GINGER is a medicinal spice</p>
			  </div>
			</div><!-- End Item -->
			
			<div class="item">
			  <img src="images/caro6.jpg">
			   <div class="carousel-caption">
				<h4><a href="#">GUM ARABIC</a></h4>
				<p>Gum Arabic is produced by the Acacia Tree and grown in the Savannah / Arid Zones of Nigeria.</p>
			  </div>
			</div><!-- End Item -->
	 
			<div class="item">
			  <img src="images/caro7.jpg">
			   <div class="carousel-caption">
				<h4><a href="#">NATURAL SESAME SEED</a></h4>
				<p>These tiny seeds ( NATURAL SESAME SEEDS) are rich in nutrition, proteins and carbohydrates. </p>
			  </div>
			</div><!-- End Item -->
					
		  </div><!-- End Carousel Inner -->
	 
	 
		<ul class="list-group col-sm-4">
		  <li data-target="#myCarousel" data-slide-to="0" class="list-group-item active"><h4>HARD WOOD CHACOAL</h4></li>
		  <li data-target="#myCarousel" data-slide-to="1" class="list-group-item"><h4>DRIED HIBISCUS FLOWER</h4></li>
		  <li data-target="#myCarousel" data-slide-to="2" class="list-group-item"><h4>DRIED SPLIT GINGER</h4></li>
		  <li data-target="#myCarousel" data-slide-to="3" class="list-group-item"><h4>GUM ARABIC</h4></li>
		  <li data-target="#myCarousel" data-slide-to="4" class="list-group-item"><h4>NATURAL SESAME SEED</h4></li>
		 
		
		</ul>
	 
		  <!-- Controls -->
		  <div class="carousel-controls">
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
			  </a>
		  </div>
	 
		</div><!-- End Carousel -->
	</div>
	<br><br>
	<div class="container">
		<div id="maindiv">
			<div id="div1">
				<img src="images/1.jpg" width="120" height="80" alt="" />
				<img src="images/2.jpg" width="120" height="80" alt="" />
				<img src="images/3.jpg" width="120" height="80" alt="" />
				<img src="images/4.jpg" width="120" height="80" alt="" />
				<img src="images/5.jpg" width="120" height="80" alt="" />
				<img src="images/6.jpg" width="120" height="80" alt="" />
				<img src="images/7.jpg" width="120" height="80" alt="" />
				<img src="images/8.jpg" width="120" height="80" alt="" />
				<img src="images/9.jpg" width="120" height="80" alt="" />
				<img src="images/10.jpg" width="120" height="80" alt="" />
				<img src="images/11.jpg" width="120" height="80" alt="" />
				<img src="images/12.jpg" width="120" height="80" alt="" />
				<img src="images/13.jpg" width="120" height="80" alt="" />
				<img src="images/14.jpg" width="120" height="80" alt="" />
				<img src="images/15.jpg" width="120" height="80" alt="" />
			</div>
			<div id="div2">
				<img src="images/1.jpg" width="120" height="80" alt="" />
				<img src="images/2.jpg" width="120" height="80" alt="" />
				<img src="images/3.jpg" width="120" height="80" alt="" />
				<img src="images/4.jpg" width="120" height="80" alt="" />
				<img src="images/5.jpg" width="120" height="80" alt="" />
				<img src="images/6.jpg" width="120" height="80" alt="" />
				<img src="images/7.jpg" width="120" height="80" alt="" />
				<img src="images/8.jpg" width="120" height="80" alt="" />
				<img src="images/9.jpg" width="120" height="80" alt="" />
				<img src="images/10.jpg" width="120" height="80" alt="" />
				<img src="images/11.jpg" width="120" height="80" alt="" />
				<img src="images/12.jpg" width="120" height="80" alt="" />
				<img src="images/13.jpg" width="120" height="80" alt="" />
				<img src="images/14.jpg" width="120" height="80" alt="" />
				<img src="images/15.jpg" width="120" height="80" alt="" />
			</div>
		</div>
	</div>
<br>
<div class="container-fluid welcome">
			<div class="row">
                 <div class="col-lg-6 col-lg-offset-3 text-center">  
                  <br>
                    <p><?=$show['wlctxt']?></p><br>
                 </div> 
            </div>  
</div>
			<section id="blog">
      <div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-globe" aria-hidden="true"></i></span></p>
				<h5>Our <span>Products</span></h5>
			</div>
            
           <div class="row">
             
			 <div id="slider" class="carousel slide" data-ride="carousel">
                        
                     <ol class="carousel-indicators">
                         <li data-target="#slider" data-slide-to="0" class="active"></li>
                         <li data-target="#slider" data-slide-to="1"></li>
                     </ol>
                            
                      
             <!-- Carousel items -->
             <div class="carousel-inner">
                    
                <div class="item active">
                	<div class="row">
									<?php while($side =mysqli_fetch_assoc($product)):
$string=$side['description'];
$id=$side['id'];

?>
                	  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						 <div class="card text-center">
							<img class="card-img-top" src="<?=$side['image']?>" alt="" width="100%">
							<div class="card-block">
								<h4 class="card-title"><?=$side['product_title']?></h4>
								<p class="card-text"><?= trim_text($string, 130, $ellipses = true, $strip_html = true);?></p>
								<a class="btn btn-default" href="single.php?pid=<?=$id?>">Read More</a>
							</div>
						 </div>
					  </div>
					  <?php endwhile;?>
					   
                	</div> <!-- row -->
                </div> <!-- item -->
                 
                <div class="item">
                	<div class="row">
									<?php while($side1 =mysqli_fetch_assoc($product1)):
$string=$side1['description'];
$id=$side1['id'];
?>   		
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
						 <div class="card text-center">
							<img class="card-img-top" src="<?=$side1['image']?>" alt="" width="100%">
							<div class="card-block">
								<h4 class="card-title"><?=$side1['product_title']?></h4>
								<p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.</p>
								<a class="btn btn-default" href="single.php?pid=<?=$id?>">Read More</a>
							</div>
						 </div>
					  </div>
					  <?php endwhile;?>
                	</div> <!-- row -->
                </div> <!-- item -->
                 
                 
				 </div>
			   </div>
			</div>
			
		</div>
	</section>
<br><br>
<div class="container-fluid serv">
<div class="w3layouts_header">
	<br>
				<p><span><i class="fa fa-globe" aria-hidden="true"></i></span></p>
				<h5>Our <span>Services</span></h5>
			</div>
			<div class="container">
	<div class="row text-center"><br>
        <div class="col-md-4 col-sm-4">
            <img src="images/sv.png" alt="" class="img-circle img-thumbnail">
            
            <p><?=$show['service1']?></p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/sv.png" alt="" class="img-circle img-thumbnail">
            
            <p><?=$show['service2']?></p>
        </div>
        <div class="col-md-4 col-sm-4">
            <img src="images/sv.png" alt="" class="img-circle img-thumbnail">
            
            <p><?=$show['service3']?></p>
        </div>
	</div>
</div>
<br><br>
</div>


  