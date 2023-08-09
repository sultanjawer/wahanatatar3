<!doctype html>
<html lang="en" data-bs-theme="auto">
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $menu = $path . "/config/menu.php";
   $phone = $path . "/config/phonenumber.php";
   $meta = $path . "/partials/meta.php";
   $header = $path . "/partials/header.php";
   
   include_once($menu);
   include_once($phone);
   include_once($meta);

?>

<body>
	<?php include_once($header); ?>

	<main id="main">
		<?php include "sections/slider.php"; ?>
		<?php include "sections/quote.php"; ?>
		<?php include "sections/solutions.php"; ?>
		<?php include "sections/about.php"; ?>
		<?php include "sections/our-clients.php"; ?>
		<?php include "sections/contact-us.php"; ?>

	</main>

	<?php include "partials/footer.php"; ?>

	<?php include "partials/script.php"; ?>
</body>

</html>
