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
					<h2>ABOUT US</h2>
				</div>

			</div>
		</div>

		<!-- ======= Blog Section ======= -->
		<!-- ======= Featured Services Section ======= -->
		<section id="about" class="featured-services hero mt-0" style="background-image: url(../assets/img/slider/slider-1.jpg);">
			<div class="container text-white">
				<div class="section-header" data-aos="zoom-out">
					<h2 class="text-white">About Us</h2>
				</div>
				<div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5">
					<div class="col-md-5 d-flex flex-column align-items-start gap-2">
						<p class=" text-white">
							Wahana Tatar Wirakelola is Corporate Learning Specialist, founded by professionals who have deep passion and focus to help and educate organizations to develop comprehensive corporate education and training, which is called Corporate University, to be more efficient and strategic.
						</p>
						<?php include "../partials/whatsapp-button.php"; ?>
					</div>

					<div class="col-md-7">
						<div class="row row-cols-1 row-cols-md-3 g-4">
							<div class="col">
								<div class="d-flex flex-column h-100">
									<div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-white fs-1 rounded-3">
										<i class="bi bi-person icon text-white"></i>
									</div>
									<h4 class="text-center fw-semibold mb-0">People in Wahana Tatar</h4>
									<p class="text-center text-white">Professionals who have a passion and focus to help your organizations build Corporate Learning.</p>
									<div class="mt-auto text-center">
										<a href="board-of-directors.php" class="btn btn-info btn-sm">Learn More</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="d-flex flex-column h-100">
									<div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-white fs-1 rounded-3">
										<i class="bi bi-compass icon text-white"></i>
									</div>
									<h4 class="text-center fw-semibold mb-0">Vision &amp; Mission</h4>
									<p class="text-center text-white">Committed to serving the passion and focus to be the "Home for Learning Professionals".</p>
									<div class="mt-auto text-center">
										<a href="vision-mission.php" class="btn btn-info btn-sm">Learn More</a>
									</div>
								</div>
							</div>
							<div class="col">
								<div class="d-flex flex-column h-100">
									<div class="feature-icon-small d-inline-flex align-items-center justify-content-center text-white fs-1 rounded-3">
										<i class="bi bi-shield icon text-white"></i>
									</div>
									<h4 class="text-center fw-semibold mb-0">Proven Methodology</h4>
									<p class="text-center text-white">With more than 15 years of experience, we understand the best practices of Corporate Learning in Indonesia.</p>
									<div class="mt-auto text-center">
										<a href="proven-methodology.php" class="btn btn-info btn-sm">Learn More</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main><!-- End #main -->

	<!-- ======= Footer ======= -->

	<?php include "../partials/footer.php"; ?>
	<!-- End Footer -->

	<?php include "../partials/script.php"; ?>

</body>

</html>