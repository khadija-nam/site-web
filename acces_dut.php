<!DOCTYPE html>
<html>
<title>ACCES DUT</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body >
 
<?php
 require ("header.php"); 
?>
<!-- w3-content defines a container for fixed size centered content, 
and is wrapped around the whole page content, except for the footer in this example -->
<div class="w3-content" style="max-width:1120px">

<!-- Header -->
 
  <h1><b>les emplois du temps</b></h1>
  
</header>


  <!-- Posts -->
  <div class="w3-card w3-margin">
    <div class="w3-container w3-padding">
      <h4>Emplois du Temps</h4>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-50">
        
        <span class="w3-large">Filiere GI</span><br>
        <span> semestre S3/S4</span><br>
        <span> semestre S1/S2</span>
      </li>
      <li class="w3-padding-50">
        
        <span class="w3-large">Filiere TM</span><br>
        <span> semestre S3/S4</span><br>
        <span> semestre S1/S2</span><br>
      </li>  
      <li class="w3-padding-50 w3-hide-medium w3-hide-small">
        <span class="w3-large">Filiere AG</span><br>
        <span> semestre S3/S4</span><br>
        <span> semestre S1/S2</span>
      </li>  
    </ul>
  </div>
  <hr> 
 
  

<!-- END GRID -->
</div><br>

<!-- END w3-content -->
</div>


</body>
</html> 
