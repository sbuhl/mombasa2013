<?php
if(!empty($_POST)){
	extract($_POST);
	$valid = true;
	if(empty($nom)){
		$valid=false;
		$erreurnom="Vous n'avez pas rempli votre nom";
	}
	if(!preg_match("/^[a-zA-Z0-9\-_.]+@[a-zA-Z0-9\-_.]+\.[a-z]{2,3}$/i",$email)){
		$valid=false;
		$erreuremail="Votre email n'est pas valide";
		
	}
	if(empty($email)){
		$valid=false;
		$erreuremail="Vous n'avez pas rempli votre email";
	}
	if(empty($sujet)){
		$valid=false;
		$erreursujet="Vous n'avez pas rempli votre sujet";
	}
	if(empty($message)){
		$valid=false;
		$erreurmessage="Vous n'avez pas rempli votre message";
	}
	
	if($valid){
		$to="s.buhl@hotmail.com";
		$sujet=$nom. "a contacté le site";
		$header="From: isaetgautier@mombasa2013.com \n";
		$header.="Reply-To: $email";
		$message=stripslashes($message);
		$nom=stripslashes($nom);
		if(mail($to,$sujet,$message,$header)){
			$erreur="Votre message a bien été envoyé";
			unset($nom);
			unset($email);
			unset($sujet);
			unset($message);
		}
		else{
			$erreur="Une erreur est survenue et votre mail n'est pas parti"; }
		
	}	
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="fr"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="fr"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="fr"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="fr"> <!--<![endif]-->
<head>

<!-- Basic Page Needs
================================================== -->
	<meta charset="utf-8">
    <title>Isabelle et Gautier - Mombasa - 2013 - Kenya</title>
	<meta name="description" content="Mariage de Gautier et Isabelle, février 2012, Mombasa, Kenya">
	<meta name="author" content="Sébastien Bühl">
    <!--google translate widget-->
    <meta name="google-translate-customization" content="3e5390de0736079-91a539e91038edf4-ga5b119d27c2098ae-12"></meta>
    
<!-- Mobile Specific Metas
================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- CSS
================================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Favicons
================================================== -->
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

</head>
<body>

	<ul class="navigation">
		<li data-slide="1">Wedding</li>
		<li data-slide="2">Vols</li>
		<li data-slide="3">Hebergements</li>
		<li data-slide="4">FAQ</li>
		<li data-slide="5">Checklist</li>
		<li data-slide="6">Que faire ?</li>
		<li data-slide="7">Contact</li>
		<li data-slide="8">Wedding Gift</li>
	</ul>

	<!--_________-->
	<!-- SLIDE 1 -->
	<!--_________-->        
	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="content">
			<h1>Isabelle & Gautier</h1>
			<img src="images/isa_gogo.png">
			<h2>Mombassa<img class="img_h" src="images/drapeau_kenya.gif">Kenya</h2>
			<h3>North Coast</h3>
		</div>
		<span class="slideno">Wedding</span>
		<a class="button" data-slide="2" title=""></a>

	</div>
	<!--End Slide 1-->

	<!--_________-->
	<!--   VOLS  -->
	<!-- SLIDE 2 -->
	<!--_________-->
	
	<div class="slide" id="slide2" data-slide="2" data-stellar-background-ratio="0.5">
		
		<div class="content vol">
			<p>Ci-dessous vous trouverez les différentes options possibles pour vous rendre à Mombassa. N’hésitez pas à consulter toutes les options possibles : vous obtiendrez ainsi la meilleure alternative. Aussi ne tardez pas trop dans vos réservations car malheureusement les tarifs ne vont pas en diminuant.</p>
							<div class="vols" id="col1">
								<h2><a href="http://www.brusselsairlines.com/fr_be/">Brussels Airlines</a></h2>
								<div class="inside">
									<h3>Routing :</h3>
									<p>Aller : BXL - MBA</p>
									<p>Retour : MBA - NBO - BXL</p>
									<p>Prix de groupe à partir de 10 personnes : - 15%</p>
								</div>
							</div>
							<div class="vols" id="col2">
								<h2>Tour operateur</h2>
								<div class="inside">
									<ul>

										<li><a href="http://www.jetair.be/home">Jet Air</a></li>

										<li><a href="http://www.sunjets.be/fr/?gclid=CNfLi8CgtLECFa4mtAod1AkAFg">Sun Jet</a></li>

										<li><a href="http://www.thomascook.be/voyages.aspx?s_cid=adw_tc_01_fr_brand_exact&TAgentID=B04407">Thomas Cook</a></li>

										<li><a href="http://www.neckermann.be/">Neckerman</a></li>

									</ul>

								</div>
							</div>
							<div class="vols" id="col3">
								<h2>Vols avec escale</h2>
								<div class="inside">
									<h3>Via Nairobi ou autre</h3>

									<ul>

										<li><a href="http://www.swiss.com/web/FR/Pages/index.aspx?Country=FR">Swissair</a></li>

										<li><a href="http://www.klm.com/travel/be_fr/index.htm">KLM</a></li>

										<li><a href="http://www.flyethiopian.com/en/default.aspx">Ethiopian</a></li>

										<li><a href="http://www.qatarairways.com/be/fr/homepage.page">Quatar</a></li>

										<li><a href="http://www.lufthansa.com/fr/fr/Homepage">Lufthansa</a></li>

										<li><a href="http://www.condor.com/fr/index.jsp">Condor</a></li>

										<li><a href="http://www.edelweissair.ch/fr/">Edelweiss</a></li>										

									</ul>
								</div>
							</div>
							<div class="vols" id="col4">
								<h2>NBO - MBA*</h2>
								<div class="inside">

									<ul>

										<li><a href="http://www.kenya-airways.com/">Kenya Airways</a></li>

										<li><a href="http://www.fly540.com/">Fly 540</a></li>

										<li><a href="http://www.jetlink.co.ke/">Jet Link</a></li>									

									</ul>
								</div>
							</div>
			<p id="note">* MBA = Mombasa - NBO = Nairobi</p>

			<p>Nous pensons qu’une bonne option pour s’y rendre est de prendre un vol sur Nairobi suivi d’un vol interne sur Mombasa. Il existe en effet des vols presque toutes les heures entre Mombasa & Nairobi. Soyez attentifs sur l’heure de votre correspondance à Nairobi : une arrivée tardive à Nairobi vous obligerait à y passer une nuit (parfois couteuse). <br />
Dans le cas où vous opteriez pour un vol Brussels Airlines, sachez que vous pouvez obtenir un prix de groupe àpd de minimum 10 personnes voyageant le même jour au départ. Un prix groupe est +- à 15% moins cher qu’un tarif en individuel. <br />
Seules les dates de départ comptent. Chacun peut repartir au moment ou il le désire. <br />
Les billets seront des billets séparés par passager. Néanmoins seule une personne payera la facture.  60 jours avant le départ, Brussels Airlines demandera à cette personne, le paiement d’une garantie de 20% de la valeur totale des billets (valeur hors taxes). 30 jours avant départ, le solde devra être payé par cette même personne. <br />
			</p>
		</div>
		


		<span class="slideno">Vols</span>
		<a class="button" data-slide="3" title=""></a>

	</div>
	<!--End Slide 2-->




	<!--_________-->
	<!--Hotels-->
	<!-- SLIDE 3 -->
	<!--_________-->
	
	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		

		<div class="content">
			<p>Le mariage se déroulera sur la côte Nord de Mombasa. Bien qu’il y ait beaucoup d’hôtels, nous vous déconseillons de choisir un logement sur la côte sud de Mombasa. En effet, seul un bateau permet de faire la traversée entre la côte Nord & Sud. Cette traversée peut prendre quelques minutes comme quelques heures malgré la courte distance. 
Les quartiers les plus proches sont Nyali, Bamburi ou Shanzu (communes du nord de la ville de Mombasa). 
Mtwapa et Vipingo se trouvent un peu plus au Nord mais toujours à une distance raisonnable (+-25min) Nous vous déconseillions d'aller plus loin que Vipingo - Kikambala. 
Il existe toute une série de mode de logements (Du backpack jusqu’au 5 étoiles). 
Voici quelques pistes en fonction des budgets de chacun. 
			</p>
							<div class="hotels" id="col1">
								<h2>Backpack</h2>
								<div class="inside">
									<p></p>
								</div>
							</div>
							<div class="hotels" id="col2">
								<h2>Maison</h2>
								<div class="inside">
									<p>Vous pouvez louer une maison/appartement par vous-même. Si vous voulez faire partie d’un groupe déjà organisé, prévenez nous et nous centraliserons les demandes.</p>
								</div>
							</div>
							<div class="hotels" id="col3">
								<h2>Hotels</h2>
								<div class="inside">
									<ul>

										<li><a href="http://nyalibeachresort.com">Nyali Beach Resort</a></li>

										<li><a href="http://www.jetair.be/vacances_en_avion/Kenya/Mombasa/Mombasa--nyali-beach/ete/hotel/39629/-Voyager-Beach-Resort.htm">Voyager Beach Resort</a></li>

										<li><a href="http://reefhotelkenya.com/">Reef Hotel</a></li>

										<li><a href="www.sunriseresortkenya.com">Sunrise Resort Apartments & Spa</a></li>

										<li><a href="http://www.safari-hotels.com/kslh/hotels/?flag=hotels&htl=1">Mombasa Beach Hotel</a></li>

										<li><a href="http://www.sarovahotels.com/whitesands/">Whitesands hotel</a></li>

										<li><a href="http://www.serenahotels.com/serenabeachhotel/default-en.html">Serena Beach Hotel</a></li>									

									</ul>

								</div>
							</div>
		</div>

		<span class="slideno">HEbergements</span>
		<a class="button" data-slide="4" title=""></a>

	</div><!--End Slide 3-->





	<!--_________-->

	<!--  FAQ    -->
	<!-- SLIDE 4 -->
	<!--_________-->
	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0">
		
		<div class="content">
			<ol>

				<li>Visa

					<p>Visa obligatoire quelle que soit la durée du séjour. Il peut être obtenu soit :

Sur place, à l'arrivée ; vérifier toutefois avec votre compagnie aérienne qu'elle vous embarquera bien sans visa. Et, sur place, pensez à vous munir d’un peu de patience et de  50 USD, les euros ne sont pas acceptés à l'aéroport. 

A votre ambassade, en 3 jours ouvrables. ¨Pour ce faire, il faudra vous munir de 
- Le formulaire de demande de visa
- Un passeport ayant une validité d'au moins 6 mois et comportant une page entièrement vierge pour l'apposition du visa 
- Une photo d'identité 
-Une attestation de billet aller-retour 
- 40 EUR en espèces pour une entrée </p>

				</li>

				<li>Passeport

					<p>Un passeport ayant une validité de minimum 6 mois à partir de la date de départ.</p>

				</li>

				<li>Vaccin

					<p>Si vous venez d'Europe, aucun vaccin n'est obligatoire, mais la vaccination contre les vaccins suivants est recommandés :
-	 la fièvre jaune
-	Le Tetanos
-	L’ephatite A &B
Voici le lien internet reprenant les adresses et contacts des différents centres dans lesquels vous pouvez faire votre vaccin contre la fièvre Jaune
http://www.vacciweb.be/fr-BE/content/vaccins-pour-voyageurs/ou-se-faire-vacciner/centres-de-vaccination-de-voyage/162/485/50,503887/4,469936/selecteereenziekte/
A Bruxelles, seul le « CHU St. Pierre, site César De Paepe » permet une visite sans rendez-vous. 
De plus un traitement antipaludéen est vivement conseillé (Malaronne, Lariam, …)</p>

				</li>

				<li>Ambassade

					<p>

					Ambassade du Kenya : avenue Winston-Churchill, 208, Bruxelles 1180. Tél. : 02-340-10-40. Section consulaire ouverte du lundi au vendredi de 9h30 à 13h et de 14h à 15h30.

					</p>

				</li>

				<li>Monnaie

					<p>Le Shilling Kenyan est la monnaie locale. Vous pouvez de payer avec des cartes de crédit dans les hôtels et les grands centres commerciaux. Pour le reste, nous vous conseillons de prendre des USD en cash et de les changer en Kenyan Shilling sur place. De plus, il est possible de retiré du cash via des distributeurs de billets.</p>

				</li>

				<li>Location Voiture</li>

				<li>Climat / Dress Code

					<p>Sur la côte, le climat est tropical : l'air est chaud et humide, mais les vents tempèrent le climat toute l'année (30 °C).
Du coup, nous en profitons pour vous parler du « Dress-Code » du mariage. Prévoyez des vêtements légers et colorés. Nous aimerions une ambiance décontractée et conviviale. 
					</p>

				</li>

				<li>Santé / Hopitaux</li>

				<li>Carte D'identité

					<p>

					Superficie totale :580?370 km², soit un peu plus d'une fois la France 
Population : environ 38.5 millions d'habitants 
Religions : protestants (38 %), catholiques (28 %), animistes (26 %) et musulmans (6 %) 
Durée moyenne totale du vol :environ 9 heures jusqu'à Nairobi 
Visa :oui. Il peut être obtenu à l'arrivée. 
Santé : 
vaccins obligatoires?: aucun 
Vaccins conseillés?: tétanos et hépatites (A et B); 
malaria?: oui 
Quelle monnaie emporter en voyage : Des EUR ou des USD 
Electricité : adaptateur nécessaire

					</p>

				</li>

			</ol>

		</div>
		<span class="slideno">FAQ</span>
		<a class="button" data-slide="5" title=""></a>


	</div>
	<!--End Slide 4-->



	<!--_________-->
	<!-- SLIDE 5 -->
	<!--_________-->
	<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0">
		

		<div class="content">

			<div class="col2">

				<img src="images/clipboard_03.png">

			</div>
			<div class="col2">

				<img src="images/clipboard_03.png">

			</div>
		</div>
	

		<span class="slideno">Checkbox</span>
		<a class="button" data-slide="6" title=""></a>

	</div>
	<!--End Slide 5-->
	
	
	<!--_________-->	
	<!--Que Faire ?-->
	<!-- SLIDE 6 -->
	<!--_________-->
	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0">
		
		<div class="content vol">
			<p>Ci-dessous vous trouverez les différentes options possibles pour vous rendre à Mombassa. N’hésitez pas à consulter toutes les options possibles : vous obtiendrez ainsi la meilleure alternative. Aussi ne tardez pas trop dans vos réservations car malheureusement les tarifs ne vont pas en diminuant.</p>
							<div class="activite" id="col1">
							</div>
							<div class="activite" id="col2">
							</div>
							<div class="activite" id="col3">
							</div>
							<div class="activite" id="col4">
							</div>
							<div class="activite" id="col5">
							</div>

		</div>

		
		<span class="slideno">Que faire ?</span>
		<a class="button" data-slide="7" title=""></a>

	</div>
	<!--End Slide 6-->
	
	
	<!--_________-->
	<!--Contact-->
	<!-- SLIDE 7 -->
	<!--_________-->
	<div class="slide" id="slide7" data-slide="7" data-stellar-background-ratio="0">
		
		<div class="content">
			<div id="contact_form">
						<?php 
							if(isset($erreur)){ echo "<p>$erreur</p>";}
						?>
						<form method="post" action="index.php">
	  						<label for="nom">Nom</label>
	  						<input type="text" id="nom" name="nom" value="<?php if(isset($nom)) echo $nom; ?>"/>
	  						<span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
	  						
							<label for="mail">Mail</label>
	  						<input type="text" id="mail" name="email" value="<?php if(isset($email)) echo $email; ?>" />
	  						<span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>
	  						
	  						<label for="sujet">Sujet</label>
							<input type="text" id="sujet" name="sujet" value="<?php if(isset($sujet)) echo $sujet; ?>" />
	  						<span class="error-message"><?php if(isset($erreursujet)) echo $erreursujet; ?></span>

	  						
							<label for="message">Message</label>
							<textarea id="message" name="message" ><?php if(isset($message)) echo $message; ?></textarea>  
	  						<span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>
							
							<input type="submit" value="Envoyer" id="envoyer" />
							
						</form>
			</div>
		</div>
		<span class="slideno">Contact</span>
		<a class="button" data-slide="8" title=""></a>

	</div>
	<!--End Slide 7-->
	
	
	<!--_________-->
	<!-- SLIDE 8 -->
	<!--_________-->
	
	<div class="slide" id="slide8" data-slide="8" data-stellar-background-ratio="0">
		

		<span class="slideno">Wedding Gift</span>
		<a class="button top" data-slide="1" title=""></a>

	</div>
	<!--End Slide 8-->
			






<!-- JS
	================================================== -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<script type="text/javascript" src="js/js.js"></script>
	<script type="text/javascript" src="js/jquery.stellar.min.js"></script>
	<script type="text/javascript" src="js/waypoints.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
		
	<!--instantiate js plugins-->
	<script src="js/whatever.js"></script>

</body>
</html>
