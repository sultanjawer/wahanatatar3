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
										<img src="/assets/img/news/slider/FRv6ynn6WJiVlR28lA5RQyAZ7tffuDllmV9RQ8DD.jpg" alt="">
									</div>
																		<div class="swiper-slide">
										<img src="/assets/img/news/slider/Y15L3Q6bLsB0cBKF5N6Genz2gkeJIuVtLfcWxQLV.jpg" alt="">
									</div>
																		<div class="swiper-slide">
										<img src="/assets/img/news/slider/dMtkpZpQBwjRlLbY5dBk2TMYyFdWrOol77RPYo0v.jpg" alt="">
									</div>
																	</div>
								<div class="swiper-pagination"></div>
							</div>

							<h2 class="title">New Digital Knowledge Platform</h2>

							<div class="meta-top">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i>Admin</li>
									<li class="d-flex align-items-center"><i class="bi bi-clock"></i><span>Aug 03, 2023</span></li>
								</ul>
							</div><!-- End meta top -->

							<div class="content">
								<p>In response to the ongoing challenges posed by the COVID-19 pandemic, a leading edtech company has unveiled an innovative digital knowledge platform designed to enhance remote learning experiences. The platform offers a comprehensive array of educational resources, interactive learning tools, and real-time collaboration features to facilitate seamless knowledge transfer among students, educators, and institutions. With user-friendly interfaces and personalized learning pathways, the platform aims to bridge the digital divide and provide equal access to quality education for students worldwide.</p>
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