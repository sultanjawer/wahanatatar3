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
										<img src="/assets/img/news/slider/V0WKnbtj6OzfaucH5zeYK7Y1j3bDea4u73guSKnq.jpg" alt="">
									</div>
																		<div class="swiper-slide">
										<img src="/assets/img/news/slider/fdWlAMJ1GU2jUCu1horVJSaWimPJPKcULjCc8x3y.jpg" alt="">
									</div>
																	</div>
								<div class="swiper-pagination"></div>
							</div>

							<h2 class="title">AI-Driven Fact-Checking</h2>

							<div class="meta-top">
								<ul>
									<li class="d-flex align-items-center"><i class="bi bi-person"></i>Admin</li>
									<li class="d-flex align-items-center"><i class="bi bi-clock"></i><span>Aug 03, 2023</span></li>
								</ul>
							</div><!-- End meta top -->

							<div class="content">
								<p><span style="font-family: tahoma, arial, helvetica, sans-serif;">In the battle against the rapid spread of misinformation online, tech giants and independent developers have teamed up to deploy AI-driven fact-checking tools across major digital platforms. These tools utilize natural language processing and machine learning algorithms to identify and flag misleading content in real-time, significantly reducing the dissemination of false information. The implementation of such technology not only bolsters the integrity of digital knowledge sources but also encourages responsible content sharing among users, leading to a more informed and discerning online community.</span></p>
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