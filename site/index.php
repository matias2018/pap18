<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Food Express</title>
<link rel="stylesheet" href="estilos.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      event.preventDefault();

      var hash = this.hash;

      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){

        window.location.hash = hash;
      });
    }
  });
});
</script>
</head>

<body>
      <div class="nav">
       <div class="img">
      <a href="index.html"><img src="imagens/logotipo.png" alt="Logotipo"
 width="35%"></a>
       	</div>

        <label for="toggle">&#9776;</label>
        <input type="checkbox" id="toggle"/>
        <div class="menu">
            <a href="#page1">Home</a>
            <a href="#page2">Missão</a>
            <a href="#page3">Galeria</a>
            <a href="#page4">Sobre Nós</a>
            <a href="#page5">Contactos</a>
            <a href="http://localhost/login2ystem/site/conta.php">Conta</a>
        </div>
    </div>

<br>
       <footer id="footer">

       	<p>Designed by: EPCI</p>
 </footer>

        <script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

<script>
     function valida(){
			var mensagem="";

			if (form1.firstname.value=="")
			{
				alert("O campo Nome não pode estar vazio!");
				form1.firstname.focus();
				return false;
			}
			if (form1.lastname.value=="")
			{
				alert("O campo Apelido não pode estar vazio!");
				form1.lastname.focus();
				return false;
			}
			if (form1.email.value=="")
			{
				alert("O E-mail nome não pode estar vazio!");;
				form1.e.focus();
				return false;
			}
				else if	(form1.email.value.indexOf("@")==-1)
			{
				alert("O campo E-mail não contem o @!");;
				form1.emai.focus();
				return false;
			}

				else
				return true;
			}

</script>
<script>
$(function() {
	$('#menu').bind('click',function(event){
		var $anchor = $(this);

		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1500,'easeInOutExpo');
		/*
		if you don't want to use the easing effects:
		$('html, body').stop().animate({
			scrollTop: $($anchor.attr('href')).offset().top
		}, 1000);
		*/
		event.preventDefault();
	});
});
 </script>
<script type="text/javascript">

 </script>
 <script>
 // ===== Scroll to Top ====
 $(window).scroll(function() {
     if ($(this).scrollTop() >= 50) {        // If page is scrolled more than 50px
         $('#return-to-top').fadeIn(200);    // Fade in the arrow
     } else {
         $('#return-to-top').fadeOut(200);   // Else fade out the arrow
     }
 });
 $('#return-to-top').click(function() {      // When arrow is clicked
     $('body,html').animate({
         scrollTop : 0                       // Scroll to top of body
     }, 500);
 });
	 </script>
</body>
</html>
