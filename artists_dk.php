<?php $pageTitle = "Artists"; ?>

<?php require "includes/head.php" ?>

	<?php require "includes/loader.php" ?>

	<div id="wrapper" class="wrapper d-none">

		<?php include "includes/header_dk.php" ?>
			<main class="main--artists" id="artists">
				<article class="article--artists-group">
					<h1>Mød vores kunstnere</h1>
					<ul class="artists__ul">
						<li>
							<h2>Jonas Willy Brund-Andersen</h2>
							<div class="responsive-circle1 bgimg1"></div>
							<div class="list-wrapper">
							<p>Jonas startede in karriere tilbage i 2009, da HP tog ham ind som læring i sit studio i Odense.</p>
							<a href="jwilly_dk.php"><button><span>Se min profil</span></button></a>
							</div>
						</li>
						<li>
							<h2>Simon Brandt</h2>
							<div class="responsive-circle2 bgimg2"></div>
							<div class="list-wrapper">
								<p>Simon startede sin karriere i Aarhus. Han blev oplært af HP, men har brugt meget at sin dagligdag i selskab med Jonas, samtidig med at han også er en del af graffiti-fællesskabet. Dette kan ses i meget af hans tidlige arbejde.</p>
								<a href="sbrandt_dk.php"><button><span>Se min profil</span></button></a>
							</div>
						</li>
						<li>
							<h2>Kamilla Rieder</h2>
							<div class="responsive-circle3 bgimg3"></div>
							<div class="list-wrapper">
								<p>Kamilla er det yngste medlem i gruppen og er i øjeblikket den eneste kvinde i butikken.</p>
								<a href="krieder_dk.php"><button><span>Se min profil</span></button></a>
						    </div>
						</li>
					</ul>
				</article>
			
			</main>
	
<script src="js/loader.js"></script>
<script src="js/hamburger.js"></script>
<script src="js/facebook_like.js"></script>
<script src="js/date.js"></script>
<script src="js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2ED7FrptqUOzKtwuRS134pYzziGJTtQk&callback=initMap"
    async defer></script>
<?php include "includes/footer_dk.php" ?>