<html>
<head>
<title>V Adithya | Home</title>
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" href="fonts.css">
<link rel="stylesheet" href="va.css">
<style>
</style>
</head>

<body class="body">
 
 <?php include('header.php'); ?>


<div class="pqote">"Photography is a way of feeling, of touching, of loving. what you have caught on film is captured forever....it remembers little things, long after you have forgotten everything."</div>
<p class="pperson">- Aaron Siskind</p>

<section class="sec">
<div id="pic26"
class="gallery">
</div>
<div id="pic27"
class="gallery">
</div>
<div id="pic28"
class="gallery">
</div>
<div class="divbox">
<a href="works.php"><i class="fas fa-chevron-circle-right" id="circle"></i>
<p class="see">See More</p></a>
</div>
</section>



<div class="sec">
<div>
<a href="https://www.facebook.com/vadithya16" target="_blank"><i class="fab fa-facebook"></a></i>
<a href="https://www.instagram.com/vadithya16" target="_blank"><i class="fab fa-instagram"></a></i>
<a href="https://www.twitter.com/vadithya16" target="_blank"><i class="fab fa-twitter"></a></i>
<a href="https://www.youtube.com/"target="_blank"><i class="fab fa-youtube"></a></i>
<a href="https://goo.gl/maps/x1KM6dJtHXRFhHA4A" target="_blank">
<i class="fas fa-map-marked-alt" id="map"></i>
<a href="callto:948252305"><i class="fas fa-mobile-alt" id="mobile"></a></i>

</div>
</div>	
<script src="js/jquery.min.js"></script>
<script>$(function() {
  var menuVisible = false;
  $('#menuBtn').click(function() {
    if (menuVisible) {
      $('#myMenu').css({'display':'none'});
      menuVisible = false;
      return;
    }
    $('#myMenu').css({'display':'block'});
    menuVisible = true;
  });
  $('#myMenu').click(function() {
    $(this).css({'display':'none'});
    menuVisible = false;
  });
});</script>
</body>
</html>