<!DOCTYPE html>
<html lang="en">

<?php include "../config/menu.php"; ?>
<?php include "../partials/meta.php"; ?>

<body>

	<!-- ======= Header ======= -->
	<?php include "../partials/header.php"; ?>
 
	<!-- End Header -->

	<main id="main">
		<!-- ======= Portfolio Details Section ======= -->
		<section id="news" class="blog mt-5">
			<div class="container" data-aos="fade-up">
				<div class="row gy-4">
					<div class="col-lg-8">
						<article class="blog-details">
							<div class="post-img portfolio-details-slider swiper">
								<div class="swiper-wrapper align-items-center" style="max-height: 450px;">
                                    									<div class="swiper-slide">
										<img src="/assets/img/news/slider/Ru9zegvLbKD9OJIMhGnLKJN7xbBLathYLu1CyAnR.jpg" alt="">
									</div>
																	</div>
								<div class="swiper-pagination"></div>
							</div>

							<h2 class="title">Tech Giant Launches State-of-the-Art</h2>

							<div class="meta-top">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i>Admin</li>
									<li class="d-flex align-items-center"><i class="bi bi-clock"></i><span>03-08-2023 13:46:02</span></li>
								</ul>
							</div><!-- End meta top -->

							<div class="content">
								<p>In a bid to nurture its workforce and stay at the forefront of innovation, a prominent tech giant has unveiled its cutting-edge corporate university. The new facility offers employees access to a wide range of training programs, workshops, and certifications tailored to their roles and career aspirations. By investing in continuous learning and skill development, the company aims to empower its employees with the knowledge and expertise required to drive the organization's success in the ever-evolving tech landscape.</p>
							</div>

						</article>
					</div>

					<?php include "sidebar.php"; ?>

				</div>

			</div>
		</section>
		<!-- End Portfolio Details Section -->

	</main><!-- End #main -->
	<!-- Modal -->
	<!-- ======= Footer ======= -->
	<?php include "../partials/footer.php"; ?>
	<!-- End Footer -->

	<?php include "../partials/script.php"; ?>


</body>

</html>