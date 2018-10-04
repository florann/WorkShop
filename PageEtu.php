<!DOCTYPE html>
<html>

  <head> 
  <meta charset="utf-8" />
  <link rel="stylesheet" href="Include/style.css" />
  <title>heLpYON-Professionnel</title>


    <a href="PageAccueil.php"><img src="Include/images/logo-help-long.png" alt="logo-help"  style="margin-left:2%; margin-right:2%; width: auto; height: auto; max-width: 25%; max-height: 25%"></a>
  </br>
  <?php
//  include("Include/bootstrap.php");

  include("Include/slide.php");
  ?>

  <style >
  
#choix, #choix1
{
background-color : #004e79;
max-width:50%;
height:auto;
text-align:center;

}
#text
{
padding-top: 85px;
padding-bottom: 75px;
color: white;
font-family:titillium-web ;

}
#haut
{
padding-top: 200px ;

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
  </head>
  <body>
  <H1>POURQUOI CHOISIR LE CAMPUS HEP?</H1>
  <div id="cube">
    <p style="">HEP EDUCATION est une collective n&eacutee le 1er d&eacutecembre 2014
    de la volont&eacute de plusieurs &eacutecoles et centres de formation
    de se rassembler pour d&eacutefinir les fondements d&#039une p&eacutedagogie
     par les valeurs &#8722 Humanisme Entrepreneuriat Professionnalisme 
     &#8722 et pour imaginer ensemble le nouveau mod&egravele &eacuteducatif de demain. <p> 
   </div>
  <!--
    accents:
    é &eacute
    è &egrave
    ' &#039
    - &#8722
  -->
  <img src="Include\images\LEARNING-LAB-300x200.jpg" alt="VIE-ASSOCIATIVE" style="display: block;margin-left: auto;margin-right: auto ">


  

  <H2>POURQUOI CHOISIR LE CAMPUS HEP?</H2>
  <div id="cube">
   <p>
   Nous avons fixé le devoir de dépasser, pour chaque personne, le «&nbsp; strictement&nbsp; utile&nbsp;».
   </p>
   </div>
   <div id="cube">
   <p>
   Nous mettons la femme, l’homme et les valeurs humaines au centre de ce que nous faisons.
   </p>
   </div>
   <div id="cube">
   <p>
   Pour nous, la compréhension de l’être humain et de ses valeurs fait partie intégrante des apprentissages.
   </p>
   </div>
   <div id="cube">
   <p>
   Nous considérons que cela passe souvent par l’enseignement des humanités alors
    qu’on pourrait croire qu’il suffit de traiter le sujet strictement professionnel.
	 </p>
   </div>

 <H2> <a class="titre" href="PageEtudiant.php">DANS QUEL ECOLE POURSUIVRE ?</a></H2>





<div class="row">
  <div class="col-md-1 col-xs-0"></div>

<a href ="./PageEtu.php">
  <div id="choix" class="col-md-4 md-auto col-xs-5 xs-auto img-rounded img-responsive" href="./PageEtudiant.php"><p id="text">Public</p></div></a>

  <div class="col-md-2 col-xs-2"></div>
<a href ="./pagePro.php">
  <div id="choix1" class="col-md-4 md-auto col-xs-5 xs-auto img-rounded"><p id="text">Professionel</p></div>

  <div class="col-md-1 col-xs-0"></div>
 
</div>

 



<script>
  $(document).ready(function()
  {
    $("#choix").mouseover(function(){
      $("#choix").css("background-color","0082bc");

    });
    $("#choix").mouseout(function(){
      $("#choix").css("background-color","004e79");
    });
  });

  $(document).ready(function()
  {
    $("#choix1").mouseover(function(){
      $("#choix1").css("background-color","0082bc");

    });
    $("#choix1").mouseout(function(){
      $("#choix1").css("background-color","004e79");
    });
  });





</script>


  </body>
</html>