<!DOCTYPE html>
<html>
<title>Cancun Scape</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<header>

<?php
include 'navbar.php';

?>
</header>

<style>
.mySlides {display:none;}
</style>
<body>

<div class="w3-content w3-display-container">

<div class="w3-display-container mySlides">
  <img src="img\snorkel.png" style="width:100%" style="height:100%">
</div>

<div class="w3-display-container mySlides">
  <img src="img\playa.jpg" style="width:100%" style="height:100%">

</div>

</div>

<div class="w3-display-container mySlides">
  <img src="img\ruinas.jpg" style="width:100%" style="height:100%">

</div>


</div>

<button class="w3-button w3-display-left w3-black" onclick="plusDivs(-1)">&#10094;</button>
<button class="w3-button w3-display-right w3-black" onclick="plusDivs(1)">&#10095;</button>

</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>

</body>
</html>
