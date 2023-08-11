<!DOCTYPE html>
<html lang="en">

<?php include "../config/menu.php"; ?>
<?php include "../partials/meta.php"; ?>
<?php include "../config/phonenumber.php"; ?>
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
										<img src="/assets/img/news/slider/xwjPQT3qsO0GFbVNjSSPceHJwE6ZWF3jXqVQcpN9.jpg" alt="">
									</div>
																		<div class="swiper-slide">
										<img src="/assets/img/news/slider/e9HW2Ec4b6lxirKH8eu5SpyVqpHKnJbPIODFFsHd.jpg" alt="">
									</div>
																		<div class="swiper-slide">
										<img src="/assets/img/news/slider/2800NujafrC3TC79vBGd9fxfBHyQe2hJT5eC5dH3.jpg" alt="">
									</div>
																	</div>
								<div class="swiper-pagination"></div>
							</div>

							<h2 class="title">Introduction of the EcoWings</h2>

							<div class="meta-top">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i>Admin</li>
									<li class="d-flex align-items-center"><i class="bi bi-clock"></i><span>Aug 09, 2023</span></li>
								</ul>
							</div><!-- End meta top -->

							<div class="content">
								<p>The EcoWings is a state-of-the-art electric aircraft that utilizes cutting-edge technology and renewable energy sources to eliminate carbon emissions during flight. Equipped with advanced lithium-sulfur batteries and highly efficient electric motors, the plane can fly long distances without relying on fossil fuels. Its lightweight design and aerodynamic features further enhance its energy efficiency, making it a viable option for commercial aviation.</p>
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