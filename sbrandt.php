<?php require "includes/head.php" ?>

<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">
	<?php include "includes/header.php" ?>

		<main class="main--artists" id="artists">
			<article class="article--artists profile">
				<h2>Simon Brandt</a></h2>
				<div class="responsive-circle2 bgimg2"></div>
				<p>Simon started his career in Aarhus, shortly after the new shop opened in the city.
				</p>
				<p>
				He was taught up by HP, but spent a lot of his day to day life in company with Jonas, while also being a part of the graffiti environment, which can be seen in a lot of his earlier work. He has since then gravitated mainly towards black and grey with fine lines, dotwork, and a sense of the small details.
				</p>
			</article>
			
			<article class="instabox">
				<div class='instagrid section' id='Instagram'>
					
						
								<script type='text/javascript'>

								var feed=new ody({get:"user",
									limit: 12, // Limit the number of posts shown

									resolution:"standard_resolution",
									template:'<li><a href="{{link}}" target="_blank" style="background-image:url({{image}});background-size: cover;"><img src="https://lh3.googleusercontent.com/-P-gOTAfNfZ4/V2RPSYvECxI/AAAAAAAABng/Efqy2Oxjqm4lrmDhT07PBtlgYRb_MlJ7QCCo/s576/questyerror.png"></img><div class="instagrid-z"><div class="instagrids"><span class="instagrid-outter">{{likes}} <i class="fa fa-heart"></i><br/>{{comments}} <i class="fa fa-comment"></i></span></div></div></a></li>',

								userId:2295006613,
								accessToken:'2295006613.2c081dc.967ed1e07aaa443ab4a4cbbd0d429190'
								});feed.run();
								</script>
							<div id='ody'></div>
						
					
				</div>
			
			</article>
		</main>

</div>

<script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
<script src="js/loader.js"></script>
<script src="js/hamburger.js"></script>
<script src="js/facebook_like.js"></script>
<script src="js/date.js"></script>
<script src="js/maps.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2ED7FrptqUOzKtwuRS134pYzziGJTtQk&callback=initMap"
    async defer></script>
<?php include "includes/footer.php" ?>
