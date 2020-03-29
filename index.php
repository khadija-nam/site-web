 
<!DOCTYPE html>
<html>
<title>Est Sidi Bnnour</title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- Content -->

<div class="w3-content" style="max-width:1000px;margin-center:40px;margin-bottom:40px">


  <div class="w3-panel">

    <h1><b><center></center></b></h1>
    
  </div>
  </head>
<body>
<?php
get_header();
?>
 
   




<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="<?php echo get_template_directory_uri().'/src/microsoft-teams.jpg'?>" style="width:1000px;height:400px";>
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="<?php echo get_template_directory_uri().'/src/est2.jpg'?>" style="width:1000px;height:400px">
  
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="<?php echo get_template_directory_uri().'/src/est.jpg'?>" style="width:1000px;height:400px">
  
</div>

</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

    
  <!-- Grid -->
  <div class="w3-row w3-container">
    <div class="w3-center w3-padding-64">
      <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">What We Offer</span>
    </div>
    <div class="w3-col l3 m6 w3-light-grey w3-container w3-padding-16">
    
      <h3> <a href= "<?php bloginfo('template_url'); ?>/acces_dut.php"><center> ACCÉS DUT</center> </a></h3>
      <p>Les emplois du temps  (provisoires si Changements Obligent)</p>
    </div>

    <div class="w3-col l3 m6 w3-grey w3-container w3-padding-20">
      <h3><center>CERTIFICATIONS</center> </h3>
      <p>HUAWEI,ORACLE JAVA,CCNA,JUNIPER NETWORK,MICROSOFT MCT,VMWERE</p>
    </div>

    <div class="w3-col l3 m6 w3-dark-grey w3-container w3-padding-20">
      <h3><center> ACCÉS À l'école</center> </h3>
      <p>la Moyenne calculée:(75% de la note du baccalauréat national + 25% de la note du baccalauréat régional)</p>
    </div>

    <div class="w3-col l3 m6 w3-black w3-container w3-padding-20">
      <h3>PLATEFORME DE SUPPORTS  EN LIGNE </h3>
      <p>Microsoft Teams </p>
    </div>
  </div>

  <!-- Grid -->



    

  <!-- Grid -->
  
         

    
  <!-- Contact -->
  <div class="w3-center w3-padding-64" id="contact">
    <span class="w3-xlarge w3-bottombar w3-border-dark-grey w3-padding-16">Contact Us</span>
  </div>

  <form class="w3-container" action="/action_page.php" target="_blank">
    <div class="w3-section">
      <label>Name</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Name" required>
    </div>
    <div class="w3-section">
      <label>Email</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" type="text" name="Email" required>
    </div>
    <div class="w3-section">
      <label>Subject</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Subject" required>
    </div>
    <div class="w3-section">
      <label>Message</label>
      <input class="w3-input w3-border w3-hover-border-black" style="width:100%;" name="Message" required>
    </div>
    <button type="submit" class="w3-button w3-block w3-black">Send</button>
  </form>

</div>

<!-- Footer -->

<footer class="w3-container w3-padding-32 w3-light-grey w3-center">
  
  <a href="#" class="w3-button w3-black w3-margin"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Designed by: <a title="W3.CSS" target="_blank" class="w3-hover-text-green">khadija nam et hajar achouj</a></p>
</footer>


<script>
// Slideshow
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
