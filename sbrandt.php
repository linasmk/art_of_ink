<?php $pageTitle = "Simon Brandt"; ?>

<?php require "includes/head.php" ?>

<?php require "includes/loader.php" ?>

<div id="wrapper" class="wrapper d-none">

<?php include "includes/header.php" ?>

	<main class="main--artists" id="artists">
		<div class="sidebarleft"></div>
		<article class="article--artists profile">
		
				<h2>Simon Brandt</a></h2>
				<div class="circle-container">
					<img src="img/sbrandt.jpg" class="responsive-circle">
					<span class="circle-cover"></span>
					<a href="https://www.instagram.com/simonbrandt8k/" target="_blank"><img class="instagram-icon" src="img/instagram_icon.svg"></a>
			 	</div>
				<p>Simon started his career in Aarhus, shortly after the new shop opened in the city.
				</p>
				<p>
				He was taught up by HP, but spent a lot of his day to day life in company with Jonas, while also being a part of the graffiti environment, which can be seen in a lot of his earlier work. He has since then gravitated mainly towards black and grey with fine lines, dotwork, and a sense of the small details.
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

								userId:2295006613,
								accessToken:'2295006613.2c081dc.967ed1e07aaa443ab4a4cbbd0d429190'
								});feed.run();
								</script>
							<div id='ody'></div>
						
					
				</div>
			
		</article>
	</main>

<?php include "includes/footer.php" ?>
