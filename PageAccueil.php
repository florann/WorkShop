
<?php
include('./Include/bootstrap.php');
?>
<!DOCTYPE html>
<html>
<head>

<?php
	include('./Include/slide.php');
?>



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

<title>Page Title</title>
<style>


   @font-face {
    font-family: "titillium-web";
    src: url('police/titillium-web.ttf');
}

p
{
font-family: titillium-web;
    color: #white;
    
    font-weight: bold;
    box-sizing: border-box;
    line-height: 1.1;
    font-size: 26px;
}
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
font-family:titillium-web ;

}
#haut
{
padding-top: 200px ;

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
</head>

<body>

<div class="row">

 <div class="col-md-4 col-xs-4  col-xs-offset-4 col-md-offset-4 "><img id="logoAc"src="./Include/images/logoHEP.png"></div>
</div>

	<div id="haut" class="container">



<div class="row">
	<div class="col-md-1 col-xs-0"></div>

<a href ="./PageEtudiant.php">
  <div id="choix" class="col-md-4 md-auto col-xs-5 xs-auto img-rounded img-responsive" href="./PageEtudiant.php"><p id="text">Public</p></div></a>

  <div class="col-md-2 col-xs-2"></div>

  <div id="choix1" class="col-md-4 md-auto col-xs-5 xs-auto img-rounded"><p id="text" >Professionel</p></div>

  <div class="col-md-1 col-xs-0"></div>
 
</div>
</div>
</div>
</body>
</html>
<!-- couleur hep 0082bc-->