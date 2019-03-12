<?php
    include "includes/header.inc.php";
    $sql ="SELECT * FROM product";
$product=$db->query($sql);
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
<br>
<section id="blog">
      <div class="container">
			<div class="w3layouts_header">
				<p><span><i class="fa fa-globe" aria-hidden="true"></i></span></p>
				<h5>Our <span>Products</span></h5>
			</div>
            
           <div class="row">
             
			
                        
                    
                            
                      
             <!-- Carousel items -->
             
                    
              
                	
									<?php while($side =mysqli_fetch_assoc($product)):
$string=$side['description'];
$id=$side['id']
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
					   
            
                 
                
                 
                 
				 </div>
			   </div>
			</div>
			
		</div>
	</section>