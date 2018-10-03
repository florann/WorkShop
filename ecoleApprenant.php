<!DOCTYPE html>
<html>

    <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="Include/style.css" />
    <title>heLpYON-Choisir une Ecole</title>

    <a href="PageAccueil.php"><img src="Include/images/logo-help-long.png" alt="logo-help"  style="margin-left:2%; margin-right:2%; width: auto; height: auto; max-width: 25%; max-height: 25%"></a>
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
    background-color: #909090;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
    background-color: #505050;
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
    background-color: #4CAF50; 
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

.tooltip {
    position: static;
    display: inline-block;
    font-family: "titillium-web",serif;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 100px;
    background-color: #004e79;
    color: #fff;
    text-align: center;
    border-radius: 5px;
    /*padding: 5px 0;

    /* Position the tooltip */
    position: absolute;
    z-index: 1;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
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
$Ecoles['3A'] = array('code'=>0b01001010000010010,'img'=>"3a.png",'site'=>"http://www.ecole3a.edu/",'description'=>"L’École 3A n’est pas une grande école comme les autres ! Avant l’expertise, avant les techniques, nous défendons des valeurs fortes : éthique, justice, égalité, ouverture au monde et respect du patrimoine Terre.");
$Ecoles['CBIO'] = array('code'=>0b0000000000000001,'img'=>"cbio.png",'site'=>"https://www.cbio-lyon.fr/",'description'=>"Le CBIO est un centre de bilan certifié OPQF, accrédité par de nombreux OPCA et répertorié dans le Datadock, Le CBIO accompagne et oriente, il intervient dans de nombreux secteurs : il accueille tout public : ouvriers, employés, techniciens, cadres,  indépendants,…");
$Ecoles['CEFAM'] =array('code'=>0b10001000000000010,'img'=>"cefam.png",'site'=>"http://www.cefam.fr/",'description'=>"Créé en 1986, le CEFAM forme de futurs décideurs et managers qui mettent leurs compétences au service des entreprises internationales  Très professionnalisant, notre système académique, basé sur celui des Business Schools américaines, accompagne et guide nos étudiants dans leurs choix d’avenir.");
$Ecoles['CFA'] =array('code'=>0b11010000000010100,'img'=>"cfa.png",'site'=>"http://www.cfa-igslyon.com/",'description'=>"Le CFA Lyon possède une expertise dans l'apprentissage depuis plus de 30 ans dans de nombreux domaines comme commerce, gestion, communication, assurance,..");
$Ecoles['CIEFA'] =array('code'=>0b10010100000010000,'img'=>"ciefa.png",'site'=>"http://www.ciefa.com/",'description'=>"Fort d’une expertise historique et reconnue dans la formation en alternance, le CIEFA Lyon permet aux alternants de bénéficier de tous les moyens nécessaires au succès de leur parcours dans de nombreux domaines : Commerce, Comptabilité,....");
$Ecoles['EPSI'] =array('code'=>0b00010000000000010,'img'=>"epsi.png",'site'=>"http://www.epsi.fr/",'description'=>"L’école d’ingénierie informatique. Première école d’informatique en France avoir été créée par des professionnels, première à avoir obtenu le titre niveau I RNCP (Bac+5 certifié par l’État) et résolument engagée auprès des entreprises, l’EPSI accompagne le développement des compétences informatiques depuis plus de 55 ans.");
$Ecoles['ESAIL'] =array('code'=>0b00100000000000000,'img'=>"esail.png",'site'=>"http://www.esail.fr/",'description'=>"L’école d’architecture et de décoration d’intérieur du groupe HEP. Le cursus pédagogique est conçu pour solliciter et développer la créativité, l’imagination, des compétences techniques d’aménagement de l’espace mais aussi la capacité de passer de l’abstrait au concret.");
$Ecoles['ESAM'] =array('code'=>0b10001000010010000,'img'=>"esam.png",'site'=>"http://www.esam-ecoles.com/",'description'=>"L’ESAM, l’école de management du Groupe IGS basée à Paris et à Lyon est spécialisée dans la préparation aux métiers de la Finance d’Entreprise et du Management Stratégique.Notre parcours d’études allie dimensions entrepreneuriale et internationale, excellence académique et acquisition des compétences professionnelles, indispensables aux managers et responsables financiers de demain.");
$Ecoles['ICL'] =array('code'=>0b10001000000000010,'img'=>"icl.png",'site'=>"http://www.icl.fr/",'description'=>"L’école des business developpers. L’École ICL est reconnue depuis sa création comme une grande école de commerce. Afin de renforcer son positionnement et de répondre aux besoins des entreprises, l’ICL accentue son enseignement sur la vente et la négociation de haut niveau, ces compétences étant indispensables au dispositif central des entreprises.");
$Ecoles['IDRAC_BS'] =array('code'=>0b10001000000000010,'img'=>"idracbs.png",'site'=>"http://www.ecoles-idrac.com/",'description'=>"IDRAC Business School est une école de commerce sans prépa implantée dans 10 villes : Amiens, Bordeaux, Casablanca, Grenoble, Lyon, Montpellier, Nantes, Nice, Paris et Toulouse. Elle est présente à l’international avec 6 campus associés, en Irlande (Dublin et Cork), en Espagne (Barcelone et Santander) aux Etats-Unis (New York) et en République Tchèque (Brno).");
$Ecoles['IDRAC_EE'] =array('code'=>0b10011100001010100,'img'=>"idracee.png",'site'=>"http://www.fc-idrac.fr/",'description'=>"La formation continue du groupe Idrac Business School répond aux besoins en formation des actifs : salariés, demandeurs d’emploi… Sur les thématiques du management, marketing, vente, e-commerce, achats, relation client, communication, gestion, finance …");
$Ecoles['IEFT'] =array('code'=>0b00000000000000100,'img'=>"ieft.png",'site'=>"http://www.ieftourisme.com/",'description'=>"Caractérisée par son implantation multi-campus, l’IEFT contribue activement au développement des métiers touristiques depuis plus de 25 ans.La vocation de l’IEFT est de préparer les étudiants à devenir des acteurs majeurs dans un environnement par nature international, multiculturel et évolutif.");
$Ecoles['IET'] =array('code'=>0b10000011000000010,'img'=>"iet.png",'site'=>"http://www.iet.fr/",'description'=>"Créé en 1995, l’IET forme aux métiers de l’environnement, de l’aménagement du territoire et du management en développement durable. Pionnier en la matière il associe, connaissances du monde l’entreprise et formations professionnalisantes pour des jeunes qui souhaitent s’engager dans des carrières dans l’économie verte. Les formations dispensées permettent d’articuler compétences techniques et affirmation de soi, développement.");
$Ecoles['IFAG'] =array('code'=>0b11010100000010000,'img'=>"ifag.png",'site'=>"http://www.ifag.com/",'description'=>"L'école de management pour entreprendre & innover. L'IFAG est une école de management et d'entrepreneuriat installée dans 16 campus (15 villes de métropole et 1 ville d’Outre-Mer). Elle forme les créateurs et repreneurs d'entreprises ainsi que tous ceux qui souhaitent occuper une fonction de direction. L'Ecole de management propose un cursus en 5 ans post-bac. Découvrez l'offre de formation de l'Ecole de management IFAG.");
$Ecoles['IGEFI'] =array('code'=>0b00000000000010010,'img'=>"igefi.png",'site'=>"http://www.igefi.net/",'description'=>"L’IGEFI est l’école de la comptabilité, de la gestion, de la finance, de la paie et de la gestion sociale. Ces métiers sont les supports indispensables à toutes les entreprises et à leur stratégie, dans un environnement national ou international.");
$Ecoles['IGS_FC'] =array('code'=>0b10001100000000010,'img'=>"igs.png",'site'=>"http://www.formationcontinue.groupe-igs.fr/",'description'=>"Formation diplômante. Tous nos titres certifiés (niveaux I, II et III), dont la finalité est professionnelle, sont enregistrés au Répertoire National des Certifications Professionnelles (RNCP). Ils sont reconnus de ce fait par l'Etat.");
$Ecoles['IGS_RH'] =array('code'=>0b00000100000000010,'img'=>"igsfc.png",'site'=>"http://www.igs-ecoles.com/",'description'=>"IGS RH l’école des Ressources Humaines forme depuis 40 ans des responsables de la fonction RH en entreprise. Aujourd’hui, la force de l’Institut de Gestion Sociale est de vous apporter une formation RH sous forme de programme académique de 1 à 5 années de spécialisations, reconnues par la profession.");
$Ecoles['IMIS'] =array('code'=>0b10001000000001010,'img'=>"imis.png",'site'=>"http://www.imislyon.com/",'description'=>"Depuis 1987, l’IMIS propose une spécialisation “Management et Marketing” à des profils scientifiques : Pharmaciens, biologistes, ingénieurs de la santé.");
$Ecoles['IMSI'] =array('code'=>0b10000000000100010,'img'=>"imsi.png",'site'=>"http://www.imsi-formation.com/",'description'=>"L’IMSI propose une offre de formation complète, du BTS au Cycle Mastère Professionnel, en passant par le Bachelor. L’école prépare ses étudiants afin qu’ils soient immédiatement opérationnels dans des fonctions à responsabilité dans les métiers de la gestion immobilière, la transaction, la promotion, la construction, la rénovation et l’expertise immobilière.");
$Ecoles['IPI'] =array('code'=>0b00010000000000010,'img'=>"ipi.png",'site'=>"http://www.ipi-ecoles.com/",'description'=>"L’IPI, école d’informatique du Groupe IGS, accompagne chaque année plus de 500 personnes de tous âges dans leur développement professionnel à travers des titres reconnus et accessibles par la formation initiale, l’alternance, l’apprentissage, la VAE ou la formation continue.");
$Ecoles['ISPCA'] =array('code'=>0b01000000100000000,'img'=>"iscpa.png",'site'=>"http://www.iscpa-ecoles.com/",'description'=>"Bienvenue à l’ISCPA, l’Institut Supérieur des Médias, une école du groupe IGS spécialisée dans la formation au journalisme, à la communication et à la production, de Bac à Bac+5 et implantée à Paris, Lyon et Toulouse.");
$Ecoles['OSS'] =array('code'=>0b00010000000000010,'img'=>"oss.png",'site'=>"http://www.opensourceschool.fr/",'description'=>"OSS – Open Source School est la première école informatique spécialisée dans l’enseignement open source. Elle forme des professionnels capables d’assurer la conception, la réalisation et la direction de grands projets open source dans un environnement international exigeant.");
$Ecoles['SDC'] =array('code'=>0b01000000000000010,'img'=>"sdc.png",'site'=>"http://www.ecoles-supdecom.com/",'description'=>"Votre passeport pour l’emploi parce que demain se dessine aujourd’hui. La communication est un monde en perpétuel mouvement. L’accélération des techniques apporte de nouveaux médias, de nouveaux métiers…");
$Ecoles['WIS'] =array('code'=>0b11010000000000000,'img'=>"wis.png",'site'=>"http://www.wis-ecoles.com/",'description'=>"La transformation digitale apparaît aujourd’hui comme une évidence. Le numérique a pris le contrôle de tous les secteurs d’innovation des industries et des services. Dans ce contexte, WIS se donne pour mission de former des professionnels du web et du digital, capables d’accompagner le développement des compétences des entreprises, de mener à bien la digitalisation des processus-métiers, d’assurer la transformation digitale des organisations, en France et à l’International.");





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
/*
<div class="tooltip">Hover over me
  <span class="tooltiptext">Tooltip text</span>
</div>
*/
   if (($value['code'] & $comparaison) == $comparaison) {
    echo" <div class=\"tooltip\">";
    
       echo"<a href=\"{$value['site']}\">";
    echo "<img class=\"logo\" src=\"Include/images/logopng/{$value['img']}\" alt=\"3a\" >";
    echo "</a>";
    echo"<span class=\"tooltiptext\">{$value['description']}</span>";
    echo"</div>";
   }
}

?>

</body>

</html>

