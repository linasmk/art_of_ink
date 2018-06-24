<?php $pageTitle = "Jonas Willy"; ?>

<?php require "includes/head.php" ?>

<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">

<?php include "includes/header.php" ?>

	<main class="main--artists" id="artists">
		
		<div class="sidebarleft"></div>

		<article class="article--artists profile">
				<h2>Jonas Willy Brund-Andersen</a></h2>
				<div class="circle-container">
					<img src="img/jwilly.jpg" class="responsive-circle">
					<span class="circle-cover"></span>
					<a href="https://www.instagram.com/jonaswilly/" target="_blank"><img class="instagram-icon" src="img/instagram_icon.svg"></a>
				</div>
				<p>Jonas startede sin karriere i 2009 da HP tog ham i lære i hans studie i Odense.</p>
				<p>Der gik ikke længe før der blev besluttet at åbne endnu én shop i Århus  og Jonas flyttede med for at varetage butikken.</p>
				<p>Han er i dag medejer af Århus-shoppen og tatoverer snart på sit 10’ende år.
Han tatoverer i alle stilarter og elsker en god udfordring. Stort som småt, med en forkærlighed til traditionel tatovering.
</p>
			</article>
			<div class="sidebarright"></div>
			<article class="instabox">
				<div class='instagrid section' id='Instagram'>
					
						
								<script type='text/javascript'>

								var feed=new ody({get:"user",
									limit: 12, // Limit the number of posts shown

									resolution:"standard_resolution",
									template:'<li><a href="{{link}}" target="_blank" style="background-image:url({{image}});background-size: cover;"><img src="https://lh3.googleusercontent.com/-P-gOTAfNfZ4/V2RPSYvECxI/AAAAAAAABng/Efqy2Oxjqm4lrmDhT07PBtlgYRb_MlJ7QCCo/s576/questyerror.png"></img><div class="instagrid-z"><div class="instagrids"><span class="instagrid-outter">{{likes}} <i class="fa fa-heart"></i><br/>{{comments}} <i class="fa fa-comment"></i></span></div></div></a></li>',

								userId:6630985,
								accessToken:'6630985.a54185f.bc84369dddc041e684a26d99a4f8a1b6'
								});feed.run();
								</script>
							<div id='ody'></div>
						
					
				</div>
			
			</article>
	</main>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="js/loader.js"></script>
<script src="js/hamburger.js"></script>
<script src="js/facebook_like.js"></script>
<script src="js/date.js"></script>
<script src="js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2ED7FrptqUOzKtwuRS134pYzziGJTtQk&callback=initMap"
    async defer></script>

<?php include "includes/footer.php" ?>

