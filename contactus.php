<?php
  include "includes/header.inc.php";

  
	$query5="SELECT * FROM settings WHERE `id`=1";
	$st5=$db->query($query5);
	$ct=mysqli_fetch_assoc($st5)

?>
<div class="container animated fadeIn skd">

<div class="row">

  <hr>
  <div class="col-sm-12" id="parent">
      <div class="col-sm-6">
      <iframe width="100%" height="320px;" frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d62441.5950830933!2d8.556936310770112!3d12.00217722313288!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e3!4m0!4m5!1s0x11ae80eff0fff3f1%3A0x85ff8700a3da54eb!2sKano!3m2!1d12.0021794!2d8.591956099999999!5e0!3m2!1sen!2sng!4v1523561340265" allowfullscreen></iframe>
      </div>

      <div class="col-sm-6">
          <form action="form.php" class="contact-form" method="post">
  
              <div class="form-group">
                <input type="text" class="form-control" id="name" name="nm" placeholder="Name" required="" autofocus="">
              </div>
          
          
              <div class="form-group form_left">
                <input type="email" class="form-control" id="email" name="em" placeholder="Email" required="">
              </div>
          
            <div class="form-group">
                 <input type="text" class="form-control" id="phone" onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10" placeholder="Mobile No." required="">
            </div>
            <div class="form-group">
            <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB" placeholder="Type Your Message/Feedback here..." required=""></textarea>
            <br>
              <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span> Send </button>
            </div>
           </form>
      </div>
  </div>
</div>

<div class="container second-portion">
  <div class="row">
      <!-- Boxes de Acoes -->
      <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">							
              <div class="icon">
                  <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                  <div class="info"><br>
                      <h3 class="title">MAIL & WEBSITE</h3>
                      <p>
                          <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp <?=$ct['email']?>
                          <br>
                          <br>
                          <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.tuherbiscuss.com
                      </p>
                  
                  </div>
              </div>
              <div class="space"></div>
          </div> 
      </div>
          
      <div class="col-xs-12 col-sm-6 col-lg-4">
          <div class="box">							
              <div class="icon">
                  <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                  <div class="info"><br>
                      <h3 class="title">CONTACT</h3>
                      <p>
                          <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp <?=$ct['tell1']?>
                          <br>
                          <br>
                          <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp  <?=$ct['tell2']?>
                      </p>
                  </div>
              </div>
              <div class="space"></div>
          </div> 
      </div>

      <!-- /Boxes de Acoes -->
      
      <!--My Portfolio  dont Copy this -->
      
  </div>
</div>

</div>
<br>
<?php
  include "includes/footer.inc.php";

?>

	