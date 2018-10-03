<?php
	include("./Include/bootstrap.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
	<?php

	include("./Include/Menu.php");



//Initialisation du tableau représentant les écoles


?>
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
    font-size: 15px;
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
padding-top: 250px ;

}

body
{
	background-color:#e5e5e5;
	padding-bottom: 250px;
}
.img-responsive .centree
{
	margin:0 auto;
}

h1
{
	color:#004e79 !important;
	text-decoration: underline;
	padding-left: 25px;
}
#logo
{

max-height: 80px;
max-width: auto;
margin-bottom: 25px;
}

@font-face {
font-family: "titillium-web";
	src: url('Include/police/titillium-web.ttf');
}
    img.logo
    {
    position:center;
    margin:2%;
	width: auto; 
	height: 250px; 
	/*max-width: 200px
	max-height: 250px*/
    }
    /* The container */
.container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    font-family: "titillium-web",serif;
}
/* Hide the browser's default checkbox */
.container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
}
/* Create a custom checkbox */
.checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #616366;
}
/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #ccc;
}
/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
    background-color: #004e79;
}
/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
    content: "";
    position: absolute;
    display: none;
}
/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
    display: block;
}
/* Style the checkmark/indicator */
.container .checkmark:after {
    left: 9px;
    top: 5px;
    width: 5px;
    height: 10px;
    border: solid white;
    border-width: 0 3px 3px 0;
    -webkit-transform: rotate(45deg);
    -ms-transform: rotate(45deg);
    transform: rotate(45deg);
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    background-color: #004e79;
    font-family: "titillium-web",serif;
}
#checktext
{

	font-size: 12px !important;

}

</style>
</head>


<?php
$InfoCheck[0] = array('value'=>"Marketing" ,'affichage'=>"Marketing/Management/Commerce");
$InfoCheck[1] = array('value'=>"Communication" ,'affichage'=>"Communication");
$InfoCheck[2] = array('value'=>"Architecture" ,'affichage'=>"Architecture/Art/Design");
$InfoCheck[3] = array('value'=>"Informatique" ,'affichage'=>"Informatique/web/Digital");
$InfoCheck[4] = array('value'=>"Internationnal" ,'affichage'=>"Internationnal");
$InfoCheck[5] = array('value'=>"RH" , 'affichage'=>"Ressources Humaines");
$InfoCheck[6] = array('value'=>"DD" , 'affichage'=>"Développement durable");
$InfoCheck[7] = array('value'=>"Agriculture" , 'affichage'=>"Agriculture/Environnement Urbanisme");
$InfoCheck[8] = array('value'=>"Journalisme" , 'affichage'=>"Journalisme/Production");
$InfoCheck[9] = array('value'=>"Droit" , 'affichage'=>"Droit/Sciences Politique/Humanités");
$InfoCheck[10] = array('value'=>"Entrepreneuriat" , 'affichage'=>"Entrepreneuriat/Entrepreneuriat Social");
$InfoCheck[11] = array('value'=>"Immobilier" , 'affichage'=>"Immobilier");
$InfoCheck[12] = array('value'=>"Finance" , 'affichage'=>"Finance/Comptabilité/Gestion");
$InfoCheck[13] = array('value'=>"Santé" , 'affichage'=>"Santé/Social");
$InfoCheck[14] = array('value'=>"Tourisme" , 'affichage'=>"Tourisme/Hôtellerie");
$InfoCheck[15] = array('value'=>"Pro" , 'affichage'=>"Professionnaliser ses équipes/VAE/Formation continue");
$InfoCheck[16] = array('value'=>"BilanPro" , 'affichage'=>"Bilan professionnel/Orientation/Accompagnement professionnel");




?>

<body>

<h1 id="text">Sélectionnez :</h1>

<form name="metier" action="" method="post">

<?php
foreach ($InfoCheck as $value) {
	echo "<div class='col-md-2'> <label class='container'>";
  echo "<input type='checkbox' name='metier[]'' value='".$value['value']."'/><p id='checktext'>".$value['affichage']."</p>";
   echo "<span class='checkmark'></span></label></div>";
}




?>

<div class="row">
   <div class="col-md-5"> <input class="button"type="submit" value="Rechercher" /></div>
</div>
</form>

<script>
	
$('div.img-circle').mouseover(function(event) {
    createTooltip(event);               
}).mouseout(function(){
    // create a hidefunction on the callback if you want
    hideTooltip(); 
});
function createTooltip(event){          
    $("<div class='tooltip'>untruc</div>").appendTo('body');
    positionTooltip(event);        
};

function positionTooltip(event){
    var tPosX = event.pageX - 10;
    var tPosY = event.pageY - 100;
    $('div.tooltip').css({'position': 'absolute', 'top': tPosY, 'left': tPosX});
};

</script>


<h1 id="text">Écoles :</h1>
 
<?php

$Ecoles['3A'] = array('code'=>0b01001010000010010,'img'=>"3a.png",'site'=>"http://www.ecole3a.edu/");
$Ecoles['CBIO'] = array('code'=>0b0000000000000001,'img'=>"cbio.png",'site'=>"https://www.cbio-lyon.fr/");
$Ecoles['CEFAM'] =array('code'=>0b10001000000000010,'img'=>"cefam.png",'site'=>"http://www.cefam.fr/");
$Ecoles['CFA'] =array('code'=>0b11010000000010100,'img'=>"cfa.png",'site'=>"http://www.cfa-igslyon.com/");
$Ecoles['CIEFA'] =array('code'=>0b10010100000010000,'img'=>"ciefa.png",'site'=>"http://www.ciefa.com/");
$Ecoles['EPSI'] =array('code'=>0b00010000000000010,'img'=>"epsi.png",'site'=>"http://www.epsi.fr/");
$Ecoles['ESAIL'] =array('code'=>0b00100000000000000,'img'=>"esail.png",'site'=>"http://www.esail.fr/");
$Ecoles['ESAM'] =array('code'=>0b10001000010010000,'img'=>"esam.png",'site'=>"http://www.esam-ecoles.com/");
$Ecoles['ICL'] =array('code'=>0b10001000000000010,'img'=>"icl.png",'site'=>"http://www.icl.fr/");
$Ecoles['IDRAC_BS'] =array('code'=>0b10001000000000010,'img'=>"idracbs.png",'site'=>"http://www.ecoles-idrac.com/");
$Ecoles['IDRAC_EE'] =array('code'=>0b10011100001010100,'img'=>"idracee.png",'site'=>"http://www.fc-idrac.fr/");
$Ecoles['IEFT'] =array('code'=>0b00000000000000100,'img'=>"ieft.png",'site'=>"http://www.ieftourisme.com/");
$Ecoles['IET'] =array('code'=>0b10000011000000010,'img'=>"iet.png",'site'=>"http://www.iet.fr/");
$Ecoles['IFAG'] =array('code'=>0b11010100000010000,'img'=>"ifag.png",'site'=>"http://www.ifag.com/");
$Ecoles['IGEFI'] =array('code'=>0b00000000000010010,'img'=>"igefi.png",'site'=>"http://www.igefi.net/");
$Ecoles['IGS_FC'] =array('code'=>0b10001100000000010,'img'=>"igs.png",'site'=>"http://www.formationcontinue.groupe-igs.fr/");
$Ecoles['IGS_RH'] =array('code'=>0b00000100000000010,'img'=>"igsfc.png",'site'=>"http://www.igs-ecoles.com/");
$Ecoles['IMIS'] =array('code'=>0b10001000000001010,'img'=>"imis.png",'site'=>"http://www.imislyon.com/");
$Ecoles['IMSI'] =array('code'=>0b10000000000100010,'img'=>"imsi.png",'site'=>"http://www.imsi-formation.com/");
$Ecoles['IPI'] =array('code'=>0b00010000000000010,'img'=>"ipi.png",'site'=>"http://www.ipi-ecoles.com/");
$Ecoles['ISPCA'] =array('code'=>0b01000000100000000,'img'=>"iscpa.png",'site'=>"http://www.iscpa-ecoles.com/");
$Ecoles['OSS'] =array('code'=>0b00010000000000010,'img'=>"oss.png",'site'=>"http://www.opensourceschool.fr/");
$Ecoles['SDC'] =array('code'=>0b01000000000000010,'img'=>"sdc.png",'site'=>"http://www.ecoles-supdecom.com/");
$Ecoles['WIS'] =array('code'=>0b11010000000000000,'img'=>"wis.png",'site'=>"http://www.wis-ecoles.com/");


//Récupération des différentes spécification des écoles
/*$NombreImg = array();
if($dossier = opendir('./LogoEcoles'))
{
   while(($fichier = readdir($dossier)))
   {
      array_push($NombreImg,$fichier);
   }
}*/
//Affichage du contenu du tableau

$comparaison = 0b00000000000000000;

if(!$_POST['metier']){
    //echo "<p>Aucune corp de métier n'a été séléctionnée</p>";

 }else{
    foreach($_POST['metier'] as $valeur)
    {
        switch ($valeur) {
            case 'Marketing ':
                //echo "Marketing" ;
                $comparaison += 0b10000000000000000;
                break;
            case 'Communication':
                //echo "Communication";
                $comparaison += 0b01000000000000000;
                break;
            case 'Architecture':
                //echo " Architecture";
                $comparaison += 0b00100000000000000;
                break;
            case 'Informatique':
                //echo " Informatique";
                $comparaison += 0b00010000000000000;
                break;
            case 'Internationnal':
                //echo "Internationnal";
                $comparaison += 0b00001000000000000;
                break;
            case 'RH':
                //echo "RH";
                $comparaison += 0b00000100000000000;
                break;
            case 'DD':
                //echo "DD";
                $comparaison += 0b00000010000000000;
                break;
            case 'Agriculture':
                //echo "Agriculture";
                $comparaison += 0b00000001000000000;
                break;
            case 'Journalisme':
                //echo "Journalisme";
                $comparaison += 0b00000000100000000;
                break;
            case 'Droit':
                //echo "Droit";
                $comparaison += 0b00000000010000000;
                break;
            case 'Entrepreneuriat':
                //echo "Entrepreneuriat";
                $comparaison += 0b00000000001000000;
                break;
            case 'Immobilier':
                //echo "Immobilier";
                $comparaison += 0b00000000000100000;
                break;
            case 'Finance':
                //echo "Finance";
                $comparaison += 0b00000000000010000;
                break;
            case 'Santé':
                //echo "Santé";
                $comparaison += 0b00000000000001000;
                break;
            case 'Tourisme':
                //echo "Tourisme";
                $comparaison += 0b00000000000000100;
                break;
            case 'Pro':
                //echo "Pro";
                $comparaison += 0b00000000000000010;
                break;
            case 'BilanPro':
                //echo "BilanPro";
                $comparaison += 0b00000000000000001;
                break;
            default:
               //echo "<H1>Veuillez selectionner un ou plusieurs corps de métier</H1>";
                break;    
        }

    }  
}

// Affichage des images en logo rond

foreach ($Ecoles as $value) {
 /*  //ca marche
  if (($value & $comparaison) == $comparaison) {
    echo decbin($value);
    echo "<br>";
   }*/
   if (($value['code'] & $comparaison) == $comparaison) {
    echo "<div  class='col-md-2 col-xs-3'><a href='".$value['site']."'><img id='logo'  class='img-circle' src='Include/images/logopng/".$value['img']."'mouseover=over(this); onmouseout=out(this);></a></div>";


   }
}
?>
<script>
/*function over(element) {
element.setAttribute('src', 'Include/images/logopng/3a.PNG');
}
//Affecte l'image de départ lorsque la souris ne survole plus l'élément
function out(element) {
element.setAttribute('src', 'Include/images/logopng/igs.PNG');
}*/
</script>
</body>
</html>
<!-- Mettre dans l'url un get avec les infos de filtrage pour montrer le lien entre le site de redirection et le notre

echo "<div class='col-xs-2'></div>";
//Récupération des différentes spécification des écoles
$NombreImg = array();
if($dossier = opendir('./LogoEcoles'))
{
   while(($fichier = readdir($dossier)))
   {
      $temp = explode(".",$fichier);
      array_push($NombreImg,$temp[0],$temp[1]);
   }
}
//Affichage du contenu du tableau
print_r($NombreImg);


// Affichage des images en logo rond
$MaxImg = 3;
$Duplication = 2*$MaxImg;
$MaxImgOff = 3 + $Duplication;
for($cpt = 0; $cpt < $MaxImgOff; $cpt++)
{
	if($cpt % 2 == 0 && $cpt > 3 && $cpt < $MaxImgOff)
	{
echo "<div class='col-md-2 col-xs-3'><img id='logo' class='img-circle' src='./LogoEcoles/".$NombreImg[$cpt].".".$NombreImg[$cpt+1].".PNG'></div>";
}

 -->