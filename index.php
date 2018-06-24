<?php $pageTitle = "Art of Ink";
$menuTab = "Home";

?>

<?php require "includes/head.php" ?>

<body>

	<?php require "includes/loader.php" ?>

	<div id="wrapper" class="wrapper d-none">

		<div class="videoWrap">
			<video autoplay loop muted class="video" poster="img/bg.jpg">
					<source src="video/aoi_bg_vid.mp4" type="video/mp4">
			</video>
		</div>

			<div class="videoMargin">

			<?php require "includes/header.php" ?>
			<?php include "includes/mainpage.php" ?>

			<div class="clearfix"></div>



			</div>



			<script src="js/smoothScroll.js"></script>
			<script src="js/loader.js"></script>
			<script src="js/hamburger.js"></script>
			<script src="js/facebook_like.js"></script>
			<script src="js/date.js"></script>
			<script src="js/maps.js"></script>
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2ED7FrptqUOzKtwuRS134pYzziGJTtQk&callback=initMap"
			    async defer></script>

<?php include "includes/footer.php" ?>
