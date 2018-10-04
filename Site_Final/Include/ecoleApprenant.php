<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Include/style.css" />
    <title>heLpYON-Choisir une Ecole</title>

    <a href="PageAcceuil.php"><img src="Include/images/logo-help-long.png" alt="logo-help"  style="margin-left:2%; margin-right:2%; width: auto; height: auto; max-width: 25%; max-height: 25%"></a>
    </br>
    <?php
    include("Include/Slide.php");
    ?>
    </head>
    <body>
    <H1>DANS QUEL ECOLE RECRUTER UN APPRENANT?</H1>

    <H2>Dans quel secteur cherchez vous un apprenant?</H2>

<style>
@font-face {
font-family: "titillium-web";
	src: url('Include/police/titillium-web.ttf');
}
    img.logo
    {
    position:inline;
    margin:2%;
	width: auto; 
    height: 100px; 
    border-radius:50%;
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
    background-color: #eee;
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


</style>
<form name="metier" action="" method="post">
<label class="container">
   <input type="checkbox" name="metier[]" value="Marketing" />Marketing<br>Management<br>Commerce
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Communication" />Communication
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Architecture" />Architecture<br>Art<br>Design
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Informatique" />Informatique<br>web<br>Digital
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Internationnal" />Internationnal
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="RH" />Ressources Humaines
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="DD" />Développement durable
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Agriculture" />Agriculture<br>Environnement Urbanisme
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Journalisme" />Journalisme<br>Production
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Droit" />Droit<br>Sciences Politique<br>Humanités
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Entrepreneuriat" />Entrepreneuriat<br>Entrepreneuriat Social
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Immobilier" />Immobilier
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Finance" />Finance<br>Comptabilité<br>Gestion
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Santé" />Santé/Social
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Tourisme" />Tourisme<br>Hôtellerie
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="Pro") />Professionnaliser ses équipes<br>VAE<br>Formation continue
   <span class="checkmark"></span>
</label>
<label class="container">
   <input type="checkbox" name="metier[]" value="BilanPro") />Bilan professionnel<br>Orientation<br>Accompagnement professionnel<br>
   <span class="checkmark"></span>
</label>
   <input class="button"type="submit" value="Rechercher" />
</form>

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
foreach ($Ecoles as $value) {
 /*  //ca marche
  if (($value & $comparaison) == $comparaison) {
    echo decbin($value);
    echo "<br>";
   }*/
   if (($value['code'] & $comparaison) == $comparaison) {
       echo"<a href=\"{$value['site']}\">";
    echo "<img class=\"logo\" src=\"Include/images/logopng/{$value['img']}\" alt=\"3a\" >";
    echo "</a>";
   }
}

?>

</body>

</html>

