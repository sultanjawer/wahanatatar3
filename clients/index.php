<!DOCTYPE html>
<html lang="en">

<?php include "../config/menu.php"; ?>
<?php include "../partials/meta.php"; ?>


<body id="about">

	<!-- ======= Header ======= -->
	<?php include "../partials/header.php"; ?>
	<!-- End Header -->

	<main id="main">
		<div class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>OUR CLIENTS</h2>
				</div>
			</div>
		</div>

		<!-- ======= Blog Section ======= -->
		<!-- ======= Featured Services Section ======= -->
		<!-- ======= Features Section ======= -->
		<section id="clients" class="features">
			<div class="container" data-aos="fade-up">
				<?php
				$folder = '../assets/img/clients/'; // Specify the directory path where your images are located
				$images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
				natcasesort($images); // Sort the images array by name
				?>

				<ul class="nav nav-tabs row gy-4 row-cols-2 row-cols-md-6 d-flex justify-content-center">
					<?php foreach ($images as $image) { ?>
						<li class="nav-item col">
							<a class="nav-link show" href="javascript:void(0)">
								<img class="img-fluid" src="<?php echo $image; ?>" />
							</a>
						</li>
					<?php } ?>
				</ul>

			</div>
		</section>
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->

	<?php include "../partials/footer.php"; ?>
	<!-- End Footer -->

	<?php include "../partials/script.php"; ?>

</body>

</html>