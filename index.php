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

<?php include "includes/footer.php" ?>
