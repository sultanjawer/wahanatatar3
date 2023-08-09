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
										<img src="/assets/img/news/slider/DK4pInfaAJdPru7Z6Jlung78jqUGs90Ish0nLesE.jpg" alt="">
									</div>
																		<div class="swiper-slide">
										<img src="/assets/img/news/slider/v9QWRvkIQdkqir5RZEKiYMkvTqEcJcYXs658g8rW.jpg" alt="">
									</div>
																		<div class="swiper-slide">
										<img src="/assets/img/news/slider/f62jZPTMGxdKP0zTxvbCiRoPuXZuqDkpP2p0L6ot.jpg" alt="">
									</div>
																	</div>
								<div class="swiper-pagination"></div>
							</div>

							<h2 class="title">Global Conglomerate Partners</h2>

							<div class="meta-top">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i>Admin</li>
									<li class="d-flex align-items-center"><i class="bi bi-clock"></i><span>Aug 03, 2023</span></li>
								</ul>
							</div><!-- End meta top -->

							<div class="content">
								<p>A renowned global conglomerate has joined forces with leading universities and educational institutions to create a network of corporate universities. This collaboration aims to blend academic knowledge with real-world business practices, enabling the conglomerate's employees to gain a deeper understanding of their industry's complexities. Through this partnership, employees will have access to a diverse range of courses and research opportunities, strengthening the company's talent pool and fostering a culture of continuous learning.</p>
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