<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Include/style.css" />
    <title>heLpYON-Choisir une Ecole</title>

    <img src="Include/images/logo-help-long.png" alt="logo-help"  style="margin-left:2%; margin-right:2%; width: auto; height: auto; max-width: 25%; max-height: 25%">
    </br>
    <?php
    include("Include/Slide.php");
    ?>
    </head>
    <body>
    <H1>DANS QUEL ECOLE RECRUTER UN APPRENANT?</H1>

    <H2>Dans quel secteur cherchez vous un apprenant?</H2>

<form name="metier" action="" method="post">
   <input type="checkbox" name="metier[]" value="Marketing " />Marketing 
   <input type="checkbox" name="metier[]" value="Communication" />Communication
   <input type="checkbox" name="metier[]" value="Architecture" />Architecture<br>
   <input type="checkbox" name="metier[]" value="Informatique" />Informatique
   <input type="checkbox" name="metier[]" value="Internationnal" />Internationnal
   <input type="checkbox" name="metier[]" value="RH" />Ressources Humaines<br>
   <input type="checkbox" name="metier[]" value="DD" />Développement durable
   <input type="checkbox" name="metier[]" value="Agriculture" />Agriculture
   <input type="checkbox" name="metier[]" value="Journalisme" />Journalisme<br>
   <input type="checkbox" name="metier[]" value="Droit" />Droit
   <input type="checkbox" name="metier[]" value="Entrepreneuriat" />Entrepreneuriat
   <input type="checkbox" name="metier[]" value="Immobilier" />Immobilier<br>
   <input type="checkbox" name="metier[]" value="Finance" />Finance
   <input type="checkbox" name="metier[]" value="Santé" />Santé
   <input type="checkbox" name="metier[]" value="Tourisme" />Tourisme<br>
   <input type="checkbox" name="metier[]" value="Pro") />Professionnaliser ses équipes 
   <input type="checkbox" name="metier[]" value="BilanPro") />Bilan professionnel <br>
   <input type="submit" value="Rechercher" />
</form>
<style>
    img.logo
    {
    position:center;
    margin:2%;
	width: auto; 
	height: 250px; 
	/*max-width: 200px
	max-height: 250px*/
    }
</style>
<?php
$Ecoles['3A'] = array('code'=>0b01001010000010010,'img'=>"3a.png");
$Ecoles['CBIO'] = array('code'=>0b0000000000000001,'img'=>"cbio.png");
$Ecoles['CEFAM'] =array('code'=>0b10001000000000010,'img'=>"cefam.png");
$Ecoles['CFA'] =array('code'=>0b11010000000010100,'img'=>"cfa.png");
$Ecoles['CIEFA'] =array('code'=>0b10010100000010000,'img'=>"ciefa.png");
$Ecoles['EPSI'] =array('code'=>0b00010000000000010,'img'=>"epsi.png");
$Ecoles['EPSAIL'] =array('code'=>0b00100000000000000,'img'=>"esail.png");
$Ecoles['ESAM'] =array('code'=>0b10001000010010000,'img'=>"esam.png");
$Ecoles['ICL'] =array('code'=>0b10001000000000010,'img'=>"icl.png");
$Ecoles['IDRAC_BS'] =array('code'=>0b10001000000000010,'img'=>"idracbs.png");
$Ecoles['IDRAC_EE'] =array('code'=>0b10011100001010100,'img'=>"idracee.png");
$Ecoles['IEFT'] =array('code'=>0b00000000000000100,'img'=>"ieft.png");
$Ecoles['IET'] =array('code'=>0b10000011000000010,'img'=>"iet.png");
$Ecoles['IFAG'] =array('code'=>0b11010100000010000,'img'=>"ifag.png");
$Ecoles['IGEFI'] =array('code'=>0b00000000000010010,'img'=>"igefi.png");
$Ecoles['IGS_FC'] =array('code'=>0b10001100000000010,'img'=>"igs.png");
$Ecoles['IGS_RH'] =array('code'=>0b00000100000000010,'img'=>"igsfc.png");
$Ecoles['IMIS'] =array('code'=>0b10001000000001010,'img'=>"imis.png");
$Ecoles['IMSI'] =array('code'=>0b10000000000100010,'img'=>"imsi.png");
$Ecoles['IPI'] =array('code'=>0b00010000000000010,'img'=>"ipi.png");
$Ecoles['ISPCA'] =array('code'=>0b01000000100000000,'img'=>"iscpa.png");
$Ecoles['OSS'] =array('code'=>0b00010000000000010,'img'=>"oss.png");
$Ecoles['SDC'] =array('code'=>0b01000000000000010,'img'=>"sdc.png");
$Ecoles['WIS'] =array('code'=>0b11010000000000000,'img'=>"wis.png");





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
    echo "<a href=\"\"><img class=\"logo\" src=\"Include/images/logopng/{$value['img']}\" alt=\"3a\" ></a>";
   }
}

?>

</body>

</html>

