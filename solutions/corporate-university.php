<!DOCTYPE html>
<html lang="en">

<?php include "../config/menu.php"; ?>
<?php include "../partials/meta.php"; ?>

<body id="solutions">

	<!-- ======= Header ======= -->
	<?php include "../partials/header.php"; ?>
	<!-- End Header -->
	<section id="solutions" class="hero-static d-flex align-items-center">
		<div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
			<h2>Corporate University</h2>
			<p>
				<span class="fst-italic">”A true corporate university (CU) has moved beyond training & education and into the daily challenge of getting results.”</span><br />Wheeler & Eileen Clegg
			</p>
		</div>
	</section>

	<main id="main">

		<!-- ======= Portfolio Details Section ======= -->
		<section class="blog">
			<div class="container" data-aos="fade-up">
				<div class="row gy-4">
					<div class="col-lg-8">
						<article class="blog-details">
							<div class="post-img portfolio-details-slider swiper">
								<div class="swiper-wrapper align-items-center" style="max-height: 450px; background-size:cover;">
									<div class="swiper-slide">
										<img src="../assets/img/services-6.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="../assets/img/services-4.jpg" alt="">
									</div>
								</div>
								<div class="swiper-pagination"></div>
							</div>

							<div class="content">
								<!-- jika konten ingin memiliki paragraph, text format, image, dll, maka form input harus dapat menangkap html tag seperti summernote, dll -->
								<p>
									In the future, corporate learning will be significantly influenced by Globalization, massive digital technology utilization, intensively confined training budget that requires creative thinking, rapid change of company business strategy, and also appearing of millennial generation of workforce.
								</p>
								<p>
									It requires a new and creative learning strategy and trigger the Next Generation Corporate University (CU 2020)
								</p>
								<p class="h6 fw-bold">
									4 KEYS SUCCESS OF CORPORATE UNIVERSITY IMPLEMENTATION
								</p>
								<p>
								<ol>
									<li>
										<dl>
											<dt>Address Business Issues</dt>
											<dd>Successful Corporate University implementation have to address the business needs & issues.</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>Management Support</dt>
											<dd>Support from top management & business leaders are the main booster for the implementation.</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>Involvement</dt>
											<dd>Corporate University is built for everyone. Deep involvement of all stakeholders of the organization is highly needed.</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>Learning Exposure</dt>
											<dd>Education is strategy. Innovative & engaging learning exposure are giving huge contribution to the successful learning.</dd>
										</dl>
									</li>
								</ol>
								</p>

							</div>
						</article>
					</div>

					<!-- sidebar, must be dynamic and current page must be excluded from the item list-->
					<?php include "../solutions/sidebar.php"; ?>
				</div>

			</div>
		</section>
		<!-- End Portfolio Details Section -->

		<!-- call to action -->
		<section>
			<div class="container">
				<div class="row justify-content-center text-center" data-aos="zoom-in">
					<h4>Need to develop your Corporate University?</h4>
					<span class="fs-6">Feel free to consult with us!</span>
					<div class="text-center mt-3">
						<?php include "partials/whatsapp-button.php"; ?>
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