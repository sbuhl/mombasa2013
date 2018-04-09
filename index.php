<?php
if(!empty($_POST['submit1'])){
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
		$to="isaetgautier@mombasa2013.com";
		$sujet=$nom. " a contacté le site";
		$header="From: isaetgautier@mombasa2013.com \n";
		$header.="Reply-To: $email";
		$header.= 'Content-type: text/html; charset=UTF-8' . "\r\n";
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
    
<!-- Mobile Specific Metas
================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">

<!-- CSS
================================================== -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
	<!--[if IE 8]>
	<link rel="stylesheet" type="text/css" href="css/iehuit.css" />
	<![endif]-->
	<!--[if lt IE 9]>
	<link rel="stylesheet" type="text/css" href="css/styles-iesept.css" />
	<![endif]-->
	<!--[if lte IE 8]>
	<link rel="stylesheet" type="text/css" href="css/iehuit-and-down.css" />
	<![endif]-->
	<!--[if lt IE 8]>
	<script type="text/javascript">function message(){alert("Toutes nos excuses, votre navigateur ne peut afficher correctement certains éléments du site. Vous devrez utiliser votre scroll ou les touches directionnelles pour naviguer sur le site. Pour une meilleure navigation, insaller Internet Explorer 9 ou utiliser un navigateur plus récent (Chrome, Firefox,...). Clickez sur OK pour continuer votre visite sur le site.");}</script>
	<![endif]-->
	
<!-- Favicons
================================================== -->
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
	    <link href="js/zoombox.css" rel="stylesheet" type="text/css" media="screen" />

	<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35172327-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body > 
	<!--____________-->
	<!-- Navigation -->
	<!--____________--> 
	<div class="navigation" id="ie">
		<a href="#slide1" data-slide="1" class="tooltip li_1" data-tooltip="Accueil"> <img class="nav_img" src="images/menu/li_1.png" alt="Accueil" /> </a>	
		<a href="#slide2" data-slide="2" class="tooltip li_2" data-tooltip="Photos"> <img class="nav_img" src="images/menu/li_photos.png" alt="Accueil" /> </a>	
		<a href="#slide3" data-slide="3" class="tooltip li_3" data-tooltip="Festivités"> <img class="nav_img" src="images/menu/li_1.png" alt="Festivités" /> </a>	
		<a href="#slide4" data-slide="4" class="tooltip li_4" data-tooltip="Vols"> <img class="nav_img" src="images/menu/li_2.png" alt="Vols" /> </a>	
		<a href="#slide5" data-slide="5" class="tooltip li_5" data-tooltip="Hebergements"> <img class="nav_img" src="images/menu/li_3.png" alt="Hebergements" /> </a>
		<a href="#slide6" data-slide="6" class="tooltip li_6" data-tooltip="Checklist"> <img class="nav_img" src="images/menu/li_4.png" alt="Checklist" /> </a>	
		<a href="#slide7" data-slide="7" class="tooltip li_7" data-tooltip="Faq"> <img class="nav_img" src="images/menu/li_5.png" alt="Faq" /> </a>	
		<a href="#slide8" data-slide="8" class="tooltip li_8" data-tooltip="Que faire ?"> <img class="nav_img" src="images/menu/li_6.png" alt="Que faire ?" /> </a>	
		<a href="#slide9" data-slide="9" class="tooltip li_9" data-tooltip="Contact"> <img class="nav_img" src="images/menu/li_7.png" alt="Contact" /> </a>
		<a href="#slide10" data-slide="10" class="tooltip li_10" data-tooltip="Wedding Gift"> <img class="nav_img" src="images/menu/li_8.png" alt="Wedding Gift" /> </a>
	</div>
	<ul class="navigation">
		<li data-slide="1" class="tooltip li_1" data-tooltip="Accueil"> <img class="nav_img" src="images/menu/li_1.png" alt="Accueil">	</li>
		<li data-slide="2" class="tooltip li_2" data-tooltip="Photos"> <img class="nav_img" src="images/menu/li_photos.png" alt="Festivités">	</li>
		<li data-slide="3" class="tooltip li_3" data-tooltip="Festivités"> <img class="nav_img" src="images/menu/li_1.png" alt="Festivités">	</li>
		<li data-slide="4" class="tooltip li_4" data-tooltip="Vols"> <img class="nav_img" src="images/menu/li_2.png" alt="Vols">	</li>
		<li data-slide="5" class="tooltip li_5" data-tooltip="Hebergement">	<img class="nav_img" src="images/menu/li_3.png" alt="Hebergement">	</li>
		<li data-slide="6" class="tooltip li_6" data-tooltip="Checklist">	<img class="nav_img" src="images/menu/li_4.png" alt="Checklist">	</li>
		<li data-slide="7" class="tooltip li_7" data-tooltip="Faq"> <img class="nav_img" src="images/menu/li_5.png" alt="Faq">	</li>
		<li data-slide="8" class="tooltip li_8" data-tooltip="Que faire ?">	<img class="nav_img" src="images/menu/li_6.png" alt="Que faire ?">	</li>
		<li data-slide="9" class="tooltip li_9" data-tooltip="Contact">	<img class="nav_img" src="images/menu/li_7.png" alt="Contact">	</li>
		<li data-slide="10" class="tooltip li_10" data-tooltip="Wedding Gift"> <img class="nav_img" src="images/menu/li_8.png" alt="Wedding Gift">	</li>
	</ul>

	<!--_________-->
	<!-- SLIDE 1 -->
	<!--_________-->        
	<div class="slide" id="slide1" data-slide="1" data-stellar-background-ratio="0.5">
		<div class="content">
			<!--Timer area-->
				<!-- <div class="timer-area">
				<ul id="countdown">
					<li>
						<span class="days">00</span>
						<p class="timeRefDays">jours</p>
					</li>
					<li>
						<span class="hours">00</span>
						<p class="timeRefHours">heures</p>
					</li>
					<li>
						<span class="minutes">00</span>
						<p class="timeRefMinutes">minutes</p>
					</li>
					<li>
						<span class="seconds">00</span>
						<p class="timeRefSeconds">secondes</p>
					</li>
				</ul>
			</div> <!- end timer-area -->
			<h1>Merci !</h1>
			<h1>Isabelle & Gautier</h1>
			<div class ="std">
				<img class="std" src="images/isa_gogo.png" alt="Save The Date 13 & 15 Feb 2013">
			</div>
			<h2>Mombasa<img class="img_h" src="images/drapeau_kenya.gif" alt="Drapeau Kenyan">Kenya</h2>
			<h3>North Coast</h3>
		</div>
		<span class="slidename">Wedding</span>
		<a class="button" data-slide="2" title=""></a>
	</div>
	<!--End Slide 1-->
	
	<!-- Slide Photos -->
	<div class="slide" id="slide2"  data-slide="2" data-stellar-background-ratio="0.5">
		<div class="content">
			<h1>Les Photos...</h1>
			<p>Vous désirez partager vos photos ? <a href="upload.php">C'est par ici...</a></p>
			<div class="col1">
<?php 
$dos = "images/upload/min";
$dir = opendir($dos);
while ($file = readdir($dir)) {
	$allow_ext = array("jpg","png","gif","JPG","PNG");
	$ext = strtolower(substr($file, -3));
	if(in_array($ext, $allow_ext)){
		?>
		<a class="zoombox zgallery1" href="images/upload/<?php echo $file; ?>">
			<img class="zombox" src="images/upload/min/<?php echo $file; ?>" />
		</a>
		<?php
	}

}
 ?>
</div>		</div>
		<span class="slidename">Photos</span>
		<a class="button" data-slide="3" title=""></a>
	</div>	
	<!-- End Slide PHOTOS-->
	
	<!--____INFO 13 & 15_____-->
	<!-- SLIDE 2 -->
	<!--_________-->        
	<div class="slide" id="slide3" data-slide="3" data-stellar-background-ratio="0.5">
		<div class="content">
			<div class="col2">
				<h2>Journee en Mer</h2>
				<div class="inside">
					<p><span class="festivites">Quand :</span>  Mercredi 13 Février.</p>
					<p><span class="festivites">Départ :</span> 6H00 du matin de l’hôtel Serena…. Et oui c’est un peu tôt ☺, mais vous verrez, ça vaut la peine !</p>
					<p><span class="festivites">Destination :</span> Surprise ☺. </p>
					<p><span class="festivites">Quoi :</span> Il s’agit d’une journée en mer qui consiste en la découverte d’une réserve marine dans l’océan Indien. Vous pourrez- y faire du snorkeling ou de la plongée. Suite à cela, nous nous rendrons sur une île pour le lunch. Le retour vers l’hôtel est prévu en fin d’après-midi. </p>
					<p><span class="festivites">Conseil du jour :</span> </p>
					<p>-	N’oubliez pas votre maillot et votre chapeau.</p>
					<p>-	Prévoyez des vêtements  pratiques pour le bateau. </p>
					<p>Pour ceux qui ne désirent pas nager en mer, vous pourrez toujours rester bronzer ou boire un petit verre sur le bateau. </p>
				</div>
			</div>
			<div class="col2">
				<h2>D-Day</h2>
				<div class="inside">
					<p><span class="festivites">Quand :</span> Vendredi 15 février.</p>
					<p><span class="festivites">Où :</span> </p>
					<p>TAMARIND MOMBASA</p>
					<p>Cement Silo Road, Nyali</p>
					<p>PO Box 85785, Mombasa, 80100</p>
					<p><span class="festivites">Quoi :</span> Nous vous attendons à 16h au Tamarind pour la bénédiction de notre union. La cérémonie sera suivie par un cockail, le dîner et la soirée. </p> 
					<p>Pour ceux qui le souhaitent, nous prévoyons un transport (aller-retour) entre l’hôtel Serena et le Tamarind. </p>
					<p><span class="festivites">Conseil du Jour :</span></p>
					<p>-	Prévoyez des vêtements légers et colorés… ca va chauffer  ☺</p>
					<p>-	Pas besoin de veston ou costume trois pièces pour les hommes.</p>
					<p>-	Allez dormir tôt la veille ☺ </p>
					<p>-	Be ready !!</p>

				</div>
			</div>
		</div>
		<img class="dh"src="images/dhow.jpg" alt="">
		<span class="slidename">Festivites</span>
		<a class="button" data-slide="4" title=""></a>
	</div>
	<!--End Slide "-->
	<!--_________-->
	<!--   VOLS  -->
	<!-- SLIDE 3 -->
	<!--_________-->
	<div class="slide" id="slide4" data-slide="4" data-stellar-background-ratio="0.5">
		<div class="content">
			<p>Seuls les tours opérateurs proposent des vols directs jusque Mombasa en provenance de Bruxelles. Une autre alternative pour vous rendre à Mombasa est de prendre un vol sur Nairobi suivi d’un vol interne sur Mombasa. Il existe en effet des vols presque toutes les heures entre Mombasa & Nairobi. Soyez attentifs sur l’heure de votre correspondance à Nairobi : une arrivée tardive à Nairobi vous obligerait à y passer une nuit (parfois couteuse). </p>
			
			<div class="col3">
				<h2>Tour operateur</h2>
				<div class="inside">
					<ul>
						<li><a href="http://www.jetair.be/home" target="_blank">Jet Air</a></li>
						<li><a href="http://www.sunjets.be/fr/?gclid=CNfLi8CgtLECFa4mtAod1AkAFg" target="_blank">Sun Jet</a></li>
						<li><a href="http://www.thomascook.be/voyages.aspx?s_cid=adw_tc_01_fr_brand_exact&TAgentID=B04407" target="_blank">Thomas Cook</a></li>
						<li><a href="http://www.neckermann.be/" target="_blank">Neckerman</a></li>
					</ul>
				</div>
			</div>
			<div class="col3">
				<h2>Vols avec escale</h2>
				<div class="inside">
					<h3 class="xcp">Via Nairobi ou autre</h3>
						<ul>
							<li><a href="http://www.brusselsairlines.com/fr_be/" target="_blank">Brussels Airlines</a></li>
							<li><a href="http://www.swiss.com/web/FR/Pages/index.aspx?Country=FR" target="_blank">Swissair</a></li>
							<li><a href="http://www.klm.com/travel/be_fr/index.htm" target="_blank">KLM</a></li>
							<li><a href="http://www.flyethiopian.com/en/default.aspx" target="_blank">Ethiopian</a></li>
							<li><a href="http://www.qatarairways.com/be/fr/homepage.page" target="_blank">Quatar</a></li>
							<li><a href="http://www.lufthansa.com/fr/fr/Homepage" target="_blank">Lufthansa</a></li>
							<li><a href="http://www.condor.com/fr/index.jsp" target="_blank">Condor</a></li>
							<li><a href="http://www.edelweissair.ch/fr/" target="_blank">Edelweiss</a></li>										
						</ul>
				</div>
			</div>
			<div class="col3 marge">
				<h2>NBO - MBA*</h2>
				<div class="inside">
					<ul>
						<li><a href="http://www.kenya-airways.com/" target="_blank">Kenya Airways</a></li>
						<li><a href="http://www.fly540.com/" target="_blank">Fly 540</a></li>
						<li><a href="http://www.jetlink.co.ke/" target="_blank">Jet Link</a></li>
					</ul>
				</div>
			</div>
			<p class="note">* MBA = Mombasa - NBO = Nairobi</p>
			<p>Dans le cas où vous opteriez pour un vol Brussels Airlines, sachez qu’existe la possibilité de créer un groupe, ce tarif est +/- 15% moins cher qu’un tarif en individuel. Il faut un minimum de 10 passagers. Les jours de départ de Bruxelles sont le mercredi, vendredi ou le dimanche. Les personnes du groupe ne sont pas tenues de partir le même jour.  
			<p>Les billets seront des billets séparés par passager. Néanmoins seule une personne payera la facture.  60 jours avant le départ, Brussels Airlines demandera à cette personne, le paiement d’une garantie de 30% de la valeur totale des billets (valeur hors taxes). 30 jours avant départ, le solde devra être payé par cette même personne. Si vous êtes intéressés par cette option, merci <a href="mailto:isaetgautier@mombasa2013.com">de nous envoyer un mail</a>. Nous nous occuperons de centraliser les demandes.</p>
			
			<p>Comme vous le constatez, il existe de nombreuses options pour se rendre à Mombasa. N’hésitez pas à consulter toutes les options : vous obtiendrez ainsi la meilleure alternative. Aussi ne tardez pas trop dans vos réservations car malheureusement les tarifs ne vont pas en diminuant.</p>
		</div>
		<span class="slidename">Vols</span>
		<a class="button" data-slide="5" title=""></a>
	</div>
	<!--End Slide 3-->

	<!--_________-->
	<!--Hotels-->
	<!-- SLIDE 4 -->
	<!--_________-->
	<div class="slide" id="slide5" data-slide="5" data-stellar-background-ratio="0.5">
		<div class="content">
			<p>Le mariage se déroulera sur la côte Nord de Mombasa. Bien qu’il y ait beaucoup d’hôtels, nous vous déconseillons de choisir un logement sur la côte sud de Mombasa (Diani Beach). En effet, seul un bateau permet de faire la traversée entre la côte Nord & Sud. Cette traversée peut prendre quelques minutes comme quelques heures malgré la courte distance.</p>
			<p>Les quartiers les plus proches des festivités du vendredi sont Nyali, Bamburi, Shanzu et Mtwapa (communes du nord de la ville de Mombasa). Nous vous déconseillions d'aller plus loin que Mtwapa.</p>
			<p>Il existe toute une série de modes de logement (Du backpack jusqu’aux hôtels 5 étoiles). Voici quelques pistes en fonction des budgets de chacun. Cependant, nous vous conseillons de rester dans des logements « connus », car en Afrique plus qu’ailleurs, la qualité peut varier de tout à rien...</p>
			<div class="col3">
				<h2>Backpack</h2>
				<div class="inside">
					<p>Il existe deux références pour les Backpackers sur la côte nord de Mombasa.</p>
					<ol>
						<li><a href="http://www.mombasabackpackers.com" target="_blank">Mombasa Backpackers</a> : Une bonne adresse entre 10 & 15 EUR la nuit (free-Wifi) située dans le quartier de Nyali à deux pas du « Nakumatt », la grande surface de référence au Kenya.</li>
						<li><a href="http://www.kenyabeds.com" target="_blank">Kenya Beds</a> : Situé également dans le quartier de Nyali, endroit communément appelé « backpackers Nirvana ». Créé par des backpackers pour les backpackers... il faut compter entre 10 & 18 EUR la nuit (petit déjeuner & wifi gratuit).</li>
					</ol>
					<p>Nous ne connaissons pas ces deux endroits. Néanmoins ils sont référencés dans plusieurs guides sérieux tels que le Routard et Lonely planet.</p>
				</div>
			</div>
			<div class="col3">
				<h2>Maison</h2>
				<div class="inside">
					<p>Une autre option, tout aussi intéressante financièrement est la location de maison/appartement par vous-même. Si vous voulez faire partie d’un groupe déjà organisé, prévenez nous et nous centraliserons les demandes.</p>						
				</div>
			</div>
			<div class="col3 marge3">
				<h2>Hotels</h2>
				<div class="inside">
					<ul>
						<li><a href="http://nyalibeachresort.com" target="_blank">Nyali Beach Resort</a></li>
						<li><a href="http://www.jetair.be/vacances_en_avion/Kenya/Mombasa/Mombasa--nyali-beach/ete/hotel/39629/-Voyager-Beach-Resort.htm" target="_blank">Voyager Beach Resort</a></li>
						<li><a href="http://reefhotelkenya.com/" target="_blank">Reef Hotel</a></li>
						<li><a href="www.sunriseresortkenya.com" target="_blank">Sunrise Resort Apartments & Spa</a></li>
						<li><a href="http://www.safari-hotels.com/kslh/hotels/?flag=hotels&htl=1" target="_blank">Mombasa Beach Hotel</a></li>
						<li><a href="http://www.tamarind.co.ke/tamarind-village" target="_blank">Tamarind Apartment</a></li>
						<li><a href="http://www.bamburibeachkenya.com/" target="_blank">Bamburi Beach</a></li>
						<li><a href="http://www.safari-hotels.com/kslh/hotels/?flag=hotels&htl=1" target="_blank">Mombasa Beach Hotel</a></li>
						<li><a href="http://www.sarovahotels.com/whitesands/" target="_blank">Whitesands hotel</a></li>
						<li><a href="http://www.serenahotels.com/serenabeachhotel/default-en.html" target="_blank">Serena Beach Hotel</a></li>
					</ul>
					<p>Nous n’avons logé que dans les deux derniers. Durant la semaine du mariage, nous logerons dans le Serena Beach Hotel. Mais tous les autres sont vraiment corrects. Si vous pensez réserver dans cet hôtel (Serena), il est préférable de passer soit par un tour opérateur soit via l’agence locale que nous vous conseillons.</p>
				</div>
			</div>
		</div>
		<span class="slidename">Hebergements</span>
		<a class="button" data-slide="6" title=""></a>
	</div>
	<!--End Slide 4-->

	<!--_________-->
	<!--  FAQ    -->
	<!-- SLIDE 5 -->
	<!--_________-->
	<div class="slide" id="slide6" data-slide="6" data-stellar-background-ratio="0">
		<div class="content">
			<div id="accordeon" class="Accordion" tabindex="0">
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">1. Visa</div>
				    <div class="AccordionPanelContent">
				    	<p>Visa obligatoire quelle que soit la durée du séjour. Il peut être obtenu soit :</p>
				        <ul>
				        	<li>Sur place, à l'arrivée. Vérifiez toutefois avec votre compagnie aérienne qu'elle vous embarquera bien sans visa. Sur place, pensez à vous munir d’un peu de patience et de 50 USD, les euros ne sont pas acceptés à l'aéroport.</li>
				            <li>A votre ambassade, en 3 jours ouvrables. Pour ce faire, il faudra vous munir :
				            	<ul>
				                	<li>du formulaire de demande de visa</li>
				                	<li>d'un passeport ayant une validité d'au moins 6 mois et comportant une page entièrement vierge pour l'apposition du visa</li>
				                	<li>d'une photo d'identite</li>
				                	<li>d'une attestation de billet aller-retour - de 40 EUR en espèces pour une entrée</li>               
				                </ul>
							</li>
				        </ul>
				    </div>
				  </div>
				  <div class="AccordionPanel">
				    <div class="AccordionPanelTab">2. Vaccin(s) et medicaments</div>
				    <div class="AccordionPanelContent">
				    	<p>Les vaccins suivant sont fortement recommandés :</p>
				        <ul>
				        	<li>la fièvre jaune</li>
				        	<li>Le tétanos</li>
				        	<li>L’hépatite A &B</li>
				        </ul>
				        <p>Pour les Belges, voici un <a href="http://www.vacciweb.be/fr-BE/content/vaccins-pour-voyageurs/ou-se-faire-vacciner/133/636/" target="_blank">lien internet reprenant les adresses et contacts des différents centres</a> dans lesquels vous pouvez faire votre vaccin contre la fièvre Jaune</p>
				        <p>A Bruxelles, seul le « CHU St. Pierre, site César De Paepe » permet une visite sans rendez-vous. De plus un traitement antipaludéen est vivement conseillé (Demandez conseil à votre médecin).</p>
				  </div>
				  </div>
				  <div class="AccordionPanel">
				    <div class="AccordionPanelTab">3. Passeport</div>
				    <div class="AccordionPanelContent">
				    	<p>Un passeport ayant une validité de minimum 6 mois à partir de la date de départ est obligatoire.</p>
				    </div>
				  </div>
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">4. Ambassade</div>
				    <div class="AccordionPanelContent">
				    	<p>En Belgique, l’ambassade du Kenya se trouve sur l’avenue Winston-Churchill, 208, Bruxelles 1180. Tél. : 02-340-10-40. La section consulaire est ouverte du lundi au vendredi de 9h30 à 13h et de 14h à 15h30.</p>
				    </div>
				  </div>
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">5. Monnaie</div>
				    <div class="AccordionPanelContent">
				    	<p>Le Shilling Kenyan est la monnaie locale (1 EUR ≈ 100KES). Vous pouvez payer avec des cartes de crédit dans les hôtels et les grands centres commerciaux. Pour le reste, nous vous conseillons de prendre du cash (EUR ou USD) et de les changer en Kenyan Shilling sur place. De plus, il est possible de retirer du cash via des distributeurs de billets.</p>
				    </div>
				  </div>
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">6. Transport sur place</div>
				    <div class="AccordionPanelContent">
				    	<ul>
				        	<li>
				            	<p>La location de voiture :</p>
				            	<p>Si vous pensez louer une voiture, nous vous conseillons de contacter une agence de voyage locale. En effet, il préférable de passer par des personnes de confiance, qui ont des véhicules en bon état, avec les licences et assurances requises...</p>
				                <p>Par jour il faut compter 6000 KES (+/- 60 EUR), chauffeur inclus (hors carburant, parking et autres...).</p>
				            </li>
				        	<li>
				            	<p>Le matatu :</p>
				                <p>Au Kenya, le « minibus » tel que nous le comprenons s’appelle un« matatu » et sert de taxi collectif.</p>
				                <p>Le matatu est très pratique et pas cher, et depuis la réforme de début 2004, il est (un peu) plus sûr, peu confortable et peu ponctuel.... Ils transportent 14 passagers et sont équipés de ceintures. Quant à la conduite, No comment.... Les prix quant à eux sont imbattables...</p>
				            </li>
				        	<li>
				            	<p>Le taxi :</p>
				                <p>Si vous prenez un taxi, assurez-vous qu'il a un permis et une licence, et mettez-vous d'accord sur le prix : le compteur est une rareté. Vous en trouverez principalement devant les hôtels, les restos,...</p>
				            </li>
				        	<li>
				            	<p>La conduite :</p>
				                <p>De façon générale la conduite au Kenya est spéciale...on y roule à gauche et sans réel code de la route. Comptez 60 km/h de moyenne pour les grands trajets. Sur piste, il y a moins de monde, mais l'état du revêtement réduit la moyenne à 20 ou 30 km/h. De préférence ne roulez pas la nuit : animaux sauvages, piétons invisibles et carrioles imprévisibles, nids-de-poule...</p>
				            </li>
				        </ul>
				    </div>
				  </div>
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">7. Climat / Dress code</div>
				    <div class="AccordionPanelContent">
				    	<p>Sur la côte, le climat est tropical : l'air est chaud et humide, mais les vents tempèrent le climat toute l'année (30 °C).</p>
				        <p>Du coup, nous en profitons pour vous parler du « Dress-Code » du mariage. Prévoyez des vêtements légers et colorés. Nous aimerions une ambiance décontractée et conviviale. Pas besoin de veston ou costume trois pièces pour les hommes...Il fera chaud !</p>
				  </div>
				  </div>
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">8. Hopitaux</div>
				    <div class="AccordionPanelContent">
				    	<p>Il existe plusieurs hôpitaux et centres de soins privés qui offrent des services aux standards internationaux. Vérifiez tout de même que votre assurance maladie couvre le Kenya... Mais de manière générale, ne vous inquiétez pas quant à savoir si vous allez pouvoir être soignés s'il devait par hasard vous arriver quelque chose.</p>
				        <p>Ci dessous quelques centres de soins que nous vous conseillons :</p>
				        <ul>
				        	<li><a href="http://www.aarhealth.com/" target="_blank">AAR Health</a></li>
				            <li><a href="http://www.agakhanhospitals.org/mombasa/index.asp" target="_blank">Agakhan Hospital</a></li>
				            <li><a href="http://www.mombasahospital.com" target="_blank">Mombasa Hospital</a></li>
				        </ul>
						<p>Les « Bobos » les plus courants restent les maux de tête du lendemain ou autres acclimatations à l’alimentation locale, nous vous conseillons donc de partir avec les médicaments de premier secours... Dafalgan, Immodium/Motillium...</p>
				  </div>
				  </div>
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">9. Supermarche</div>
				    <div class="AccordionPanelContent"><p>La référence en termes de supermarché au Kenya est la <a href="http://nakumat.net" target="_blank">Chaîne Nakumatt</a>.</p>
					<p>C’est notre Carrefour local. Le « Nakummat Nyali » se trouve dans un shopping center où vous trouverez tout ce dont vous pouvez avoir envie à des prix raisonnables.</p></div>
				  </div>
				<div class="AccordionPanel">
				    <div class="AccordionPanelTab">10. La langue</div>
				    <div class="AccordionPanelContent">
				    	<p>Au Kenya, on parle Anglais ou Kiswahili.</p>
				    	<p>Ci-dessous quelques mots qui peuvent parfois s’avérer utiles :</p>
				        <table>
						  <tr>
						    <td>Bienvenue</td>
						    <td>Karibu</td>
						  </tr>
						  <tr>
						    <td>Bonjour</td>
						    <td>Jambo</td>
						  </tr>
						  <tr>
						    <td>Comment ca va ?</td>
						    <td>Habari</td>
						  </tr>
						  <tr>
						    <td>Bien</td>
						    <td>Nzuri</td>
						  </tr>
						  <tr>
						    <td>Voyage</td>
						    <td>Safari</td>
						  </tr>
						  <tr>
						    <td>Lion</td>
						    <td>Simba</td>
						  </tr>
						  <tr>
						    <td>Ami</td>
						    <td>Rafiki</td>
						  </tr>
						  <tr>
						    <td>Aidez-moi, s'il vous plaît !</td>
						    <td>Nisaidie, tafadhali !</td>
						  </tr>
						  <tr>
						    <td>Au revoir</td>
						    <td>Kwaheri</td>
						  </tr>
						  <tr>
						    <td>Desole</td>
						    <td>Pole !</td>
						  </tr>
						  <tr>
						    <td>Je ne parle pas Swahili.</td>
						    <td>Siwezi kusema Kiswahili</td>
						  </tr>
						  <tr>
						    <td>Merci beaucoup</td>
						    <td>Asante Sana</td>
						  </tr>
						  <tr>
						    <td>Ok</td>
						    <td>Sawa !</td>
						  </tr>
						  <tr>
						    <td>Eau</td>
						    <td>Maji</td>
						  </tr>
						  <tr>
						    <td>Manger</td>
						    <td>(ku)la</td>
						  </tr>
						  <tr>
						    <td>Boire</td>
						    <td>(ku)nywa</td>
						  </tr>
						  <tr>
						    <td>Nuit</td>
						    <td>Usiku</td>
						  </tr>
						  <tr>
						    <td>Matin</td>
						    <td>Asubuhi</td>
						  </tr>
						  <tr>
						    <td>Apres-midi</td>
						    <td>Mchana</td>
						  </tr>
						</table>
					</div>
				  </div>
				</div>
		</div>
		<span class="slidename">FAQ</span>
		<a class="button" data-slide="7" title=""></a>
	</div>
	<!--End Slide 5-->

	<!--_________-->
	<!-- SLIDE 6 -->
	<!--_________-->
	<div class="slide" id="slide7" data-slide="7" data-stellar-background-ratio="0">
		<div class="content">
		
			<h2>A ne pas oublier !</h2>
			<div class="col3">
				<div class="checkkimg">
					<figure>
						<img class="checkbox" src="images/clipboard_03.png" alt="" />
					</figure>
				</div>
				<div class="checkk">
					
					<h3 class="chx">Avant le Depart</h3>
					<ul>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Hotel & Vol Bookes
							</label>
	    				</li>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Passeport valide pour plus de 6 mois
							</label>
						</li>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Anti malarique et vaccins à jour. 
							</label>
						</li>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Transférer plan de vols & logement à <a href="mailto:isaetgautier@mombasa2013.com">Isabelle ou Gautier</a>
								</label>
						</li>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Prévoir des vêtements légers... Il fera chaud !!!
							</label>
						</li>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> 50 USD pour payer votre visa à l’arrivée.
							</label>
						</li>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Envoyer une dizaine de vos plus belles photos par personne en version électronique à <a href="mailto:isaetgautier@mombasa2013.com">Isabelle ou Gautier</a>
							</label>
						</li>
						<li>
							<label class="label_check" for="sample-check">
								<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Apprendre quelques mots de Swahili.
							</label>
						</li>
					</ul>
				</div>
			</div>
			<div class="col3">
				<div class="checkkimg">
					<figure>
						<img class="checkbox" src="images/clipboard_03.png" alt="" />
					</figure>
				</div>
				<div class="checkk">
				<h3 class="chx">Le jour du depart</h3>
				<ul>
					<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Impression de votre confirmation de votre vol et hôtel
						</label>
    				</li>
    				<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Passeport et carnet de vaccination
						</label>
    				</li>
    				<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> 50 USD par personnes min.
						</label>
    				</li>
    				<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Maillot, crème et lunettes solaires.
						</label>
    				</li>
				</ul>	
				</div>		
			</div>
			<div class="col3 marge3">
				<div class="checkkimg">
					<figure>
						<img class="checkbox" src="images/clipboard_03.png" alt="" />
					</figure>
				</div>
				<div class="checkk">
				<h3 class="chx">Sur place</h3>
				<ul>
					<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Votre sens de l’aventure
						</label>
    				</li>
    				<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Un appétit pour des fruits frais
						</label>
    				</li>
    				<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Une soif pour des Tusker fraiches...
						</label>
    				</li>
    				<li>
						<label class="label_check" for="sample-check">
							<input name="sample-check" class="sample-check" value="1" type="checkbox" /> Votre sens (inné) de la fête et votre bonne humeur
						</label>
    				</li>
				</ul>	
				</div>		
			</div>
		</div>
		<span class="slidename">Checkbox</span>
		<a class="button" data-slide="8" title=""></a>
	</div>
	<!--End Slide 6-->
	
	<!--_________-->	
	<!--Que Faire ?-->
	<!-- SLIDE 7 -->
	<!--_________-->
	<div class="slide" id="slide8" data-slide="8" data-stellar-background-ratio="0">
		<div class="content">
			<p>Pour toutes vos excursions, safaris ou autres, nous vous conseillons de contacter l’agence de voyages suivante :</p>
			<p class="agence">CENTURION TRAVEL TOURS<br />
				OPERATION MANAGER MOMBASA SOUTH COAST <br />
				DOMINIQUE RODRIGO<br />
				TEL +254725065813<br />
				Mail: mba@centurionsafaris.com</p>
			<p>La personne de contact s'appelle Dominique. Elle connait mieux que personne le Kenya, sa côte et ses environs. Elle seule est capable de vous organiser, par exemple, une journée locale et champêtre avec un départ en pirogue au bord de la rivière Congo pour rejoindre l’océan Indien. Avec une halte dans un village local, à la rencontre de la population, suivie d’un pique nique, avec poissons grillés, langoustes, fruits et légumes frais du Kenya, ......</p>
			<p>Ci-dessous, quelques exemples de safaris et excursions à faire dans la région. Comme à chaque fois, cette liste n’est pas exhaustive. Seule Dominique pourra vous faire un projet de voyage sur mesure adapté à votre budget.</p>
			<div class="col3">
				<h2>1 à 3 jours</h2>
				<div class="inside">
					<a href="images/safari/1-a-3-jours.pdf" target="_blank"><img class="safari" src="images/safari_1.gif" alt="Elephant Lien"></a>
				</div>
			</div>
			<div class="col3">
				<h2>4 jours</h2>
				<div class="inside">
					<a href="images/safari/4-jours.pdf" target="_blank"><img class="safari" src="images/safari_2.gif" alt="Singe Lien"></a>
				</div>
			</div>
			<div class="col3 marge3">
				<h2>6 à 7 jours</h2>
				<div class="inside">
					<a href="images/safari/6-7-jours.pdf" target="_blank"><img class="safari" src="images/safari_3.gif" alt="Rhino Lien"></a>
				</div>
			</div>
			<p class="note">* imgages tirées du site de <a href="http://www.nickbrandt.com/portfolio.cfm?nK=7617&nS=0&i=176198" target="_blank">Nick Brandt</a></p>		</div>
		<span class="slidename">Que faire ?</span>
		<a class="button" data-slide="9" title=""></a>
	</div>
	<!--End Slide 7-->
	
	<!--_________-->
	<!--Contact-->
	<!-- SLIDE 8 -->
	<!--_________-->
	<div class="slide" id="slide9" data-slide="9" data-stellar-background-ratio="0">
		<div class="content">
			<div class="wrap">
				<div class="contact">
					<img class="photo" src="images/isa.jpg" alt="Isabelle Contact Photo">
					<h2>Isabelle</h2>
					<p>+32 474 22 02 32</p>
				</div>
				<div class="contact">
					<img class="photo" src="images/gogo.jpg" alt="Gautier Contact Photo">
					<h2>Gautier</h2>
					<p>+32 474 62 56 54</p>
				</div>
				<p>Pour toutes informations supplémentaires, n'hésitez pas à nous contacter via le formulaire ci-dessous.</p>
			</div>
			<div id="contact_form">
						<?php 
							if(isset($erreur)){ echo "<p>$erreur</p>";}
						?>
						<form method="post" action="index.php">
	  						<label for="nom">Nom</label>
	  						<input type="text" id="nom" name="nom" value="<?php if(isset($nom)) echo $nom; ?>" required/>
	  						<span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
	  						
							<label for="mail">Mail</label>
	  						<input type="text" id="mail" name="email" value="<?php if(isset($email)) echo $email; ?>" required/>
	  						<span class="error-message"><?php if(isset($erreuremail)) echo $erreuremail; ?></span>
	  						
	  						<label for="sujet">Sujet</label>
							<input type="text" id="sujet" name="sujet" value="<?php if(isset($sujet)) echo $sujet; ?>" required/>
	  						<span class="error-message"><?php if(isset($erreursujet)) echo $erreursujet; ?></span>
	  						
							<label for="message">Message</label>
							<textarea id="message" name="message" required><?php if(isset($message)) echo $message; ?></textarea>  
	  						<span class="error-message"><?php if(isset($erreurmessage)) echo $erreurmessage; ?></span>
							
							<input type="submit" value="Envoyer" id="envoyer" name="submit1"/>
						</form>
			</div>
		</div>
		<span class="slidename">Contact</span>
		<a class="button" data-slide="10" title=""></a>
	</div>
	<!--End Slide 8-->
	
	<!--_________-->
	<!-- SLIDE 9 -->
	<!--_________-->
	<div class="slide" id="slide10" data-slide="10" data-stellar-background-ratio="0">
		<div class="content">
			<h3>Sans votre présence cette journée n’aura pas la même saveur...</h3>
			<h3>Vous avoir à nos cotés sera le plus beau cadeau.</h3>
			<h4>Notre petit nid étant déjà bien douillet, au lieu de fleurir notre maison, merci de fleurir nos rêves d'évasion...</h4>
			<img src="images/gifgt.png" alt="Image Voyage">
			<a href="http://www.continents-insolites.com/offrir-le-monde/id/36" target="_blank">Continents Insolites</a>
			<p>Offrir un cadeau -> Nom des bénéficiaires (Esselen ou Touwaide) -> OK</p>
		</div>
		<span class="slidename">Wedding Gift</span>
		<span class="copyright">Created by <a href="mailto:s.buhl@me.com">Sébastien BÜHL</a> with friendship...</span>
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
	<script src="js/accordeon.js" type="text/javascript"></script>
	<script src="js/countdown.js" type="text/javascript"></script>
	<script type="text/javascript" src="js/respond.min.js"></script>
	<!--<script>
		$(document).ready(function(){
			$("#countdown").countdown({
				date: "13 february 2013 12:00:00",
				format: "on"
			},
			
			function() {
				// callback function
			});
		});
	</script> -->
	<!--instantiate js plugins-->
	<script src="js/whatever.js"></script>
	<script type="text/javascript">
		var Accordion1 = new Spry.Widget.Accordion("accordeon");
	</script>
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/zoombox.js"></script> 
  <script type="text/javascript">
        jQuery(function($){
            $('a.zoombox').zoombox();

            /**
            * Or You can also use specific options
            $('a.zoombox').zoombox({
                theme       : 'zoombox',        //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                opacity     : 0.8,              // Black overlay opacity
                duration    : 800,              // Animation duration
                animation   : true,             // Do we have to animate the box ?
                width       : 600,              // Default width
                height      : 400,              // Default height
                gallery     : true,             // Allow gallery thumb view
                autoplay : false                // Autoplay for video
            });
            */
        });
        </script>
</body>
</html>