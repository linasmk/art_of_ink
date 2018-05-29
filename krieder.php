<?php require "includes/head.php" ?>


<?php require "includes/loader.php" ?>



				


<div id="wrapper" class="wrapper d-none">
	<?php include "includes/header.php" ?>

		<main class="main--artists" id="artists">
			<article class="article--artists profile">
				<h2>Kamilla Rieder</a></h2>
				<div class="circle-container">
					<img src="img/krieder.jpg" class="responsive-circle">
					<span class="circle-cover"></span>
						<a href="https://www.instagram.com/kamilla.ri/" target="_blank"><img class="instagram-icon" src="img/instagram_icon.svg"></a>
				</div>
				<p>Kamilla is the youngest member of the group and is currently the only woman in the shop.</p>
				<p>She came in as an apprentice in the Aarhus shop, and can be found there daily. 
				Kamilla has a fine line and does well with smaller tattoos, but enjoys doing a bit of everything. When drawing she leans towards a darker style, and is always ready to do pieces that ventures into the dark art style.
				</p>
			</article>
			
			<article class="instabox">
				<div class='instagrid section' id='Instagram'>

					
						
								<script type='text/javascript'>

								var feed=new ody({get:"user",
									limit: 12, // Limit the number of posts shown

									resolution:"standard_resolution",
									template:'<li><a href="{{link}}" target="_blank" style="background-image:url({{image}});background-size: cover;"><img src="https://lh3.googleusercontent.com/-P-gOTAfNfZ4/V2RPSYvECxI/AAAAAAAABng/Efqy2Oxjqm4lrmDhT07PBtlgYRb_MlJ7QCCo/s576/questyerror.png"></img><div class="instagrid-z"><div class="instagrids"><span class="instagrid-outter">{{likes}} <i class="fa fa-heart"></i><br/>{{comments}} <i class="fa fa-comment"></i></span></div></div></a></li>',

								userId:296365342,
								accessToken:'296365342.685f82c.881d3d27ee2c4ad1aaef83e17259776a'
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