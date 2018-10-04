<!DOCTYPE html>
<html>

    <head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
           
	
	<link rel="stylesheet" type="text/css">
	<?php
		include("slide.php");	
     ?> 
	
    <title>Richesse</title>
	
	<style>
	
@font-face {

font-family: "titillium-web";

	src: url('police/titillium-web.ttf');

}
	
.titre {
	text-align:center;
	font-size:50px;
	font-family: "titillium-web";

	src: url('police/titillium-web.ttf');
}

.container p {
	font-family: "titillium-web";

	src: url('police/titillium-web.ttf');
}

.image {
	opacity: 1;
	display: block;
	transition: .5s ease;
	backface-visibility: hidden;
	padding-bottom : 3%;
	
}

.middle {
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 45%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%)
}

.image:hover {
  opacity: 0.3;
}

.middle:hover {
  opacity: 1;
}

.text {
  background-color: #004e79;
  color: white;
  font-size: 16px;
  padding: 16px 32px;
  margin:auto;
}

.popup-overlay {
	visibility:hidden;
	position: fixed;
	z-index: 1;
	left: 25%;
    top:20%;
    width: 50%;
	height: 100%; 
    overflow: auto; 
	}

	.popup-content {
	visibility:hidden;
	background-color: #616366;
	 margin: 15% auto;
	 padding: 20px;
    border: 1px solid #888;
	border-radius:2%;
	color: white;
	}
	
	.close{
	color: #aaa;
    font-size: 28px;
    font-weight: bold;
	}
	
	.close:hover,
	.close:focus {
    color: black;
    text-decoration: none;
    cursor: pointer;
	} 
	
	.popup-overlay.active{
	visibility:visible;
	}

	.popup-content.active {
	visibility:visible;
	}
	
	</style>	
	
	
	
	</head>
    <body>
       <div class="container">   
			<div class="row">
			 <div class="col col-lg-2 "></div>
			<div class="col-md-auto">
				<h1 class="titre">Pourquoi choisir le campus HEP ?</h1>
			</div>
<br> <br> <br>
			<div class="hep">
			<p>
			<h5>Acteur incontournable de la région Auvergne-Rhône-Alpes en matière de formation, le CAMPUS HEP Lyon – René Cassin
			est le lieu fédérant la plus grande diversité d’écoles et de centres de formation de la région avec 13 filières de compétences métiers.
			Ce lieu unique a été créé en 2004 et accueille aujourd’hui 7 200 apprenants  issus de ses 24 écoles et centres de formation
			– de Bac à Bac+5 – sur une surface totale de 22 000m2</h5>
			</p>
			</div>	
			
			<div class="col col-lg-2"></div>
			</div>
<br> <br> <br>
		<div class="row">
			<div class="col">
				 <img src="images/INFOTHEQUE.jpg" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
					<div class="middle">				
						<button class="open1 btn btn-primary" >
						INFOTHEQUE
						</button>
					</div>					
					<!--Creates the popup body-->
						<div class="popup-overlay pop1">
						<!--Creates the popup content-->
							 <div class="popup-content pop1">
								<p>
								Véritable espace de travail de 420 m2, l’infothèque du CAMPUS HEP Lyon – René Cassin propose :
								<br>-10 300 ouvrages répartis en 15 thématiques
								<br>-130 titres de presse français et internationaux consultables sur place
								<br>-un accès aux principales bases de données socio-économiques mondiales – certaines sont également consultables à travers un portable accessible à distance.
								<br><br>Pour plus de renseignements : delphine.peyret@campusservices.fr
								<br><br>Horaires d’ouverture : 
								<br>Le lundi, mardi, mercredi et vendredi de 8h30 à 19h 
								<br>Le jeudi de 10h à 19h
								</p>				  
								<button class="close close1">
								Fermer
								</button>    
							</div>
						</div>
			</div>
			
			<div class="col">
			<img src="images/LEARNING-LAB.jpg" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
				<div class="middle">				
					<button class="open2 btn btn-primary" >
					LEARNING-LAB
					</button>
				</div>
				
					<!--Creates the popup body-->
					<div class="popup-overlay pop2">
					<!--Creates the popup content-->
					 <div class="popup-content pop2">
					<p>
					Le CAMPUS HEP Lyon – René Cassin met à disposition des acteurs du campus (apprenants, formateurs, entreprises et partenaires)
					<br>Un Learning Lab permettant d’expérimenter de nouvelles pédagogies – MOOC, Business & Serious Games, Flipped Classsroom… – 
					et de tester de nouveaux matériels et de nouvelles technologies – smart board, capture vidéo, robots,… -.
					<br>Laboratoire dédié à l’innovation et à l’expérimentation pédagogique sur les nouvelles formes d’apprentissage pour tous les publics,
					en formation initiale ou continue, il aide les parties prenantes à mieux répondre aux besoins et aux modes d’apprentissage de la génération des « digital natives ».
					<br><br>Pour plus de renseignements : mroblin@groupe-igs.fr
					</p>
						<button class="close close2">
						Fermer
						</button>    
					</div>
					</div>
			</div>
			
			  
			
			<div class="col">
			<img src="images/VIE-ASSOCIATIVE.jpg" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
			<div class="middle">				
					<button class="open3 btn btn-primary" >
					VIE-ASSOCIATIVE
					</button>
				</div>
					<!--Creates the popup body-->
					<div class="popup-overlay pop3">
					<!--Creates the popup content-->
					 <div class="popup-content pop3">		
					<p>
					Le CAMPUS HEP Lyon – René Cassin accueille des événements artistiques, culturels et économiques tout au long de l’année
					et offre à ses étudiants et apprenants une vie riche et active pour favoriser l’expérimentation dans l’action,
					servir et contribuer à la vie du campus et les ouvrir sur le monde. 
					<br><br>Pour plus d’informations : caroline.danthez@campushep-lyon.com
					</p>
						<button class="close close3">
						Fermer
						</button>    
					</div>
					</div>
			</div>
			
			</div>
<br> <br> <br>
		<div class="row">
			<div class="col">
			<img src="images/CENTRE-ORIENTATION.jpg" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
			<div class="middle">				
					<button class="open4 btn btn-primary" >
					CENTRE-ORIENTATION
					</button>
				</div>
				<!--Creates the popup body-->
					<div class="popup-overlay pop4">
					<!--Creates the popup content-->
					 <div class="popup-content pop4">
			
					<p>
					S’appuyant sur l’expertise du CBIO, expert en conseil et en orientation tout public depuis 1989,
					<br>le Centre d’Orientation du CAMPUS HEP Lyon – René Cassin a pour but d’accompagner les lycéens,
					les étudiants, futurs bénéﬁciaires, dans leur choix d’orientation, voire de réorientation.
					<br>Un accompagnement personnalisé, collectif ou individuel, sous forme de bilan d’orientation ou de coaching est proposé aux futurs bénéﬁciaires.
					<br>Chaque bilan est suivi par des psychologues du travail et des coachs certiﬁés, neutres et indépendants.
					<br><br>Pour plus d’informations : orientation@campushep-lyon.com
					<br><br>Horaires d’ouverture : 
					Du lundi au vendredi : de 8h à 20h
					</p>
						<button class="close close4">
						Fermer
						</button>    
					</div>
					</div> 
			</div>
			<div class="col">
			<img src="images/MyDil.png" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
			<div class="middle">				
					<button class="open5 btn btn-primary" >
					MYDIL
					</button>
				</div>
				
			<!--Creates the popup body-->
					<div class="popup-overlay pop5">
					<!--Creates the popup content-->
					 <div class="popup-content pop5">
			
					<p>
					Un lieu où le savoir à la demande est à la portée de tous nos élèves et où le matériel modulable et high-tech
					est mis au service de l’expérimentation pédagogique
					NAO, le robot humanoïde
					<br>L’oculus rift et sa nouvelle forme d’immersion en 3D
					<br>Nouvelles technologies de réalité augmentée (hololens…)
					<br>L’impression 3D pour le prototypage
					<br>Les objets connectés (bracelets, montres, balance, tissu…)
					<br>Nouvelles interfaces homme/machine
					<br>Les drones et leurs nouvelles applications
					Des outils collaboratifs innovants comme la surface hub.
					</p>
						<button class="close close5">
						Fermer
						</button>    
					</div>
					
				</div>
			  
			  
			</div>
		
			<div class="col">
			<img src="images/CAFETERIA.jpg" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
			<div class="middle">				
					<button class="open6 btn btn-primary">
					CAFETERIA
					</button>
				</div>
			 
			<div class="popup-overlay pop6">
					<!--Creates the popup content-->
					 <div class="popup-content pop6">
			
					<p>
					Une cafétéria “Open Café” qui comprend une terrasse, plusieurs micro ondes, des machines à café,
					des distributeurs de gâteaux et une boutique vendant des sandwich, des viennoiseries et des boissons chaudes.
					</p>
						<button class="close close6">
						Fermer
						</button>    
					</div>	
			</div>
			</div>

		</div>
		
<br> <br> <br>	
		<div class="row">
			<div class="col">
			<img src="images/Amphi.jpg" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
			<div class="middle">				
					<button class="open7 btn btn-primary" >
					AMPHITHEATRE
					</button>
				</div>
				
			<div class="popup-overlay pop7">
					<!--Creates the popup content-->
					 <div class="popup-content pop7">
			
					<p>
					Un amphithéâtre de 300 places assises permettant entre autre l’organisation de conférences,
					d’évènements (comme les remises de diplômes), de cours magistraux, de fête d’anniversaire, de spectacle de magie.
					</p>
						<button class="close close7">
						Fermer
						</button>    
					</div>	
			</div>
		</div>
		
		
		<div class="col">
			<img src="images/INCUBATEUR.png" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
			<div class="middle">				
					<button class="open8 btn btn-primary" >
					INCUBATEUR
					</button>
				</div>
				
			<div class="popup-overlay pop8">
					<!--Creates the popup content-->
					 <div class="popup-content pop8">
			
					<p>
					ESPACE DE CO-WORKING DÉDIÉ AUX INCUBATEURS
					<br>Véritable espace privilégié d’ouverture et de rencontre avec les entreprises pour un lien emploi-formation,
					<br>Le campus a été conçu comme lieu d’apprentissage, de partage,  de vie et d’épanouissement personnel.
					<br>Parmi ses innovations, la « Place des Incubateurs » est un espace de plus 300 m2 exclusivement dédié aux incubateurs et au co-working.
					<br>Il accueille quatre dispositifs dédiés à l’entrepreneuriat :
					<br>RONALPIA
					<br>START’HEP
					<br>IFAGTORY
					<br>ACCélérateur IDRAC

					</p>
						<button class="close close8">
						Fermer
						</button>    
					</div>	
			</div>
		</div>
		
		<div class="col">
			<img src="images/HEP.png" alt="Generic placeholder image" class="image" style="border-radius:50%;width:300px" >
			<div class="middle">				
					<button class="open9 btn btn-primary" >
					CAMPUS HEP
					</button>
			</div>
		</div>
		
	 </div>
		
		
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script>
	
		$(".open1, .close1, .pop1").on("click", function(){
			if ($(".pop1").hasClass("active")) {
				$(".pop1").removeClass("active");
			} else {
				$(".pop1").addClass("active");
			}
		});
		
		$(".open2, .close2, .pop2").on("click", function(){
			if ($(".pop2").hasClass("active")) {
				$(".pop2").removeClass("active");
			} else {
				$(".pop2").addClass("active");
			}
		});
		
		$(".open3, .close3, .pop3").on("click", function(){
			if ($(".pop3").hasClass("active")) {
				$(".pop3").removeClass("active");
			} else {
				$(".pop3").addClass("active");
			}
		});
		
		$(".open4, .close4, .pop4").on("click", function(){
			if ($(".pop4").hasClass("active")) {
				$(".pop4").removeClass("active");
			} else {
				$(".pop4").addClass("active");
			}
		});
		
		$(".open5, .close5, .pop5").on("click", function(){
			if ($(".pop5").hasClass("active")) {
				$(".pop5").removeClass("active");
			} else {
				$(".pop5").addClass("active");
			}
		});
		
		$(".open6, .close6, .pop6").on("click", function(){
			if ($(".pop6").hasClass("active")) {
				$(".pop6").removeClass("active");
			} else {
				$(".pop6").addClass("active");
			}
		});
		
		$(".open7, .close7, .pop7").on("click", function(){
			if ($(".pop7").hasClass("active")) {
				$(".pop7").removeClass("active");
			} else {
				$(".pop7").addClass("active");
			}
		});
		
		$(".open8, .close8, .pop8").on("click", function(){
			if ($(".pop8").hasClass("active")) {
				$(".pop8").removeClass("active");
			} else {
				$(".pop8").addClass("active");
			}
		});
		
		$(".open9, .close9, .pop9").on("click", function(){
			if ($(".pop9").hasClass("active")) {
				$(".pop9").removeClass("active");
			} else {
				$(".pop9").addClass("active");
			}
		});
	
	</script>
      
    </body>
</html>