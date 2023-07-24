<!DOCTYPE html>
<html lang="en">

<?php include "../config/menu.php"; ?>
<?php include "../partials/meta.php"; ?>

<body id="solutions">

	<!-- ======= Header ======= -->
	<?php include "../partials/header.php"; ?>
	<!-- End Header -->

	<main id="main">
		<div class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>OUR SOLUTIONS</h2>
				</div>

			</div>
		</div>

		<!-- ======= Blog Section ======= -->
		<section class="blog">
			<div class="container" data-aos="fade-up">
				<div class="row g-5">
					<div class="col-lg-12">
						<?php include "indexblog.php"; ?>
						<!-- this page navigation when possible -->
						<!--nav aria-label="Page navigation example" data-aos="zoom-out">
							<ul class="pagination justify-content-center">
								<li class="page-item disabled">
									<a class="page-link">Prev</a>
								</li>
								<li class="page-item"><a class="page-link" href="#">1</a></li>
								<li class="page-item"><a class="page-link" href="#">2</a></li>
								<li class="page-item"><a class="page-link" href="#">3</a></li>
								<li class="page-item">
									<a class="page-link" href="#">Next</a>
								</li>
							</ul>
						</nav-->
					</div>
					<!-- ?php include "../solutions/sidebar.php"; ? -->

				</div>
			</div>
		</section>
		<hr>
		<!-- section class="blog">
			<div class="container" data-aos="fade-up">
				<div class="p-3 bg-body rounded shadow" data-aos="fade-up">
					<h6 class="border-bottom pb-2 mb-0">All Events</h6>
					<div class="d-flex text-body-secondary pt-3">
						<div style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;" class="bg-info rounded me-2 text-center">
							<span class="row">
								<span class="fw-bold text-white" style="font-size: 14pt;">09</span>
								<span class="text-white" style="font-size: 10pt;">Aug</span>
							</span>
						</div>

						<p class="pb-3 mb-0 small lh-sm border-bottom">
							<a href="/events/event-single.php">
								<strong class="d-block text-gray-dark">
									Event Name
								</strong>
							</a>
							Some representative content, with some information about this event. Imagine this being some sort of event update, perhaps?
						</p>
					</div>
					<div class="d-flex text-body-secondary pt-3">
						<div style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;" class="bg-info rounded me-2 text-center">
							<span class="row">
								<span class="fw-bold text-white" style="font-size: 14pt;">10</span>
								<span class="text-white" style="font-size: 10pt;">Aug</span>
							</span>
						</div>

						<p class="pb-3 mb-0 small lh-sm border-bottom">
							<a href="/events/event-single.php">
								<strong class="d-block text-gray-dark">
									Event Name
								</strong>
							</a>
							Some representative content, with some information about this event. Imagine this being some sort of event update, perhaps?
						</p>
					</div>
					<div class="d-flex text-body-secondary pt-3">
						<div style="width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;" class="bg-info rounded me-2 text-center">
							<span class="row">
								<span class="fw-bold text-white" style="font-size: 14pt;">11</span>
								<span class="text-white" style="font-size: 10pt;">Aug</span>
							</span>
						</div>

						<p class="pb-3 mb-0 small lh-sm border-bottom">
							<a href="/events/event-single.php">
								<strong class="d-block text-gray-dark">
									Event Name
								</strong>
							</a>
							Some representative content, with some information about this event. Imagine this being some sort of event update, perhaps?
						</p>
					</div>
					<!-- page navigation here -->
				</div>
			</div>
		</section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->

	<?php include "../partials/footer.php"; ?>
	<!-- End Footer -->

	<?php include "../partials/script.php"; ?>

</body>

</html>
