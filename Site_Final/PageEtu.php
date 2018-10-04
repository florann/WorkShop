<?php
include('./Include/bootstrap.php');
?>
<!DOCTYPE html>
<html>

  <head> 
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="Include/style.css" />
  <title>HELP - HEP Lyon - Professionnel</title>
  <a href="PageAccueil.php"><img class="img-responsive" src="Include/images/banniere.png" alt="logo-help"  style="widht:100%";></a>
  
  </br>
  <?php
  include("Include/slide.php");
  ?>
  </head>
  <body>
  <style>


#choix, #choix1
{
background-color : #0082bc;
max-width:50%;
height:auto;
text-align:center;

}
#text
{
padding-top: 85px;
padding-bottom: 75px;
color: white;
text-align:center;
font-family:titillium-web ;
font-size: 26px;

}
#haut
{
padding-top: 2px ;
}

body
{
	background-color:#e5e5e5;
	padding-bottom: 200px;
}
.img-responsive .centree
{
	margin:0 auto;
}
#logoAc
{
width: 100%;
margin:auto;
}
</style>

  <H1>POURQUOI CHOISIR LE CAMPUS HEP?</H1>
  <div id="cube">
    <p style="">HEP EDUCATION est une collective n&eacutee le 1er d&eacutecembre 2014
    de la volont&eacute de plusieurs &eacutecoles et centres de formation
    de se rassembler pour d&eacutefinir les fondements d&#039une p&eacutedagogie
     par les valeurs &#8722 Humanisme Entrepreneuriat Professionnalisme 
     &#8722 et pour imaginer ensemble le nouveau mod&egravele &eacuteducatif de demain. <p> 
   </div>
  <!--<img class=img-responsive src="Include\images\VIE-ASSOCIATIVE-300x200.jpg" alt="VIE-ASSOCIATIVE" style=" width:100%; display: block;margin-left: auto;margin-right: auto ">-->
  <img src="Include\images\LEARNING-LAB-300x200.jpg" alt="VIE-ASSOCIATIVE" style=" display: block;margin-left: auto;margin-right: auto ">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<script>
	$(document).ready(function()
	{
		$("#choix").mouseover(function(){
			$("#choix").css("background-color","004e79");

		});
		$("#choix").mouseout(function(){
			$("#choix").css("background-color","0082bc");
		});
	});

	$(document).ready(function()
	{
		$("#choix1").mouseover(function(){
			$("#choix1").css("background-color","004e79");

		});
		$("#choix1").mouseout(function(){
			$("#choix1").css("background-color","0082bc");
		});
	});



</script>
  <div class="row">

 <div id="haut" class="container">

<div class="row">
 <div class="col-md-1 col-xs-0"></div>

<a href ="./richesse.php">
 <div id="choix" class="col-md-4 md-auto col-xs-5 xs-auto img-rounded img-responsive"><p id="text">POURQUOI CHOISIR LE CAMPUS HEP ?</p></div></a>

 <div class="col-md-2 col-xs-2"></div>
 <a href ="./PageEtudiant.php">
 <div id="choix1" class="col-md-4 md-auto col-xs-5 xs-auto img-rounded"><p id="text" >DANS QUEL ECOLE POURSUIVRE ?</p></div>
 </a>

 <div class="col-md-1 col-xs-0"></div>

</div>
</div>
</div>
  </body>
</html>