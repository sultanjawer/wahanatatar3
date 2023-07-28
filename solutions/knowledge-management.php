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
			<h2>Knowledge Management</h2>
			<p>
				<span class="fst-italic">”Knowledge Management is the creation, transfer, and exchange of organizational knowledge to achieve a competitive advantage”</span><br />Girard & Girard
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
										<img src="../assets/img/solutions/books-business-computer-459654.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="../assets/img/solutions/knowledge-management-phase2.jpg" alt="">
									</div>
								</div>
								<div class="swiper-pagination"></div>
							</div>

							<div class="content">
								<!-- jika konten ingin memiliki paragraph, text format, image, dll, maka form input harus dapat menangkap html tag seperti summernote, dll -->
								<h4>Important Pillar to build Corporate University</h4>
								<p>
									Knowledge Management is one very important pillar in implementing Corporate University. While Knowledge Management is accumulating the core and important knowledge in organization, Corporate University is the very effective way of distributing the knowledge througout the organization.
								</p>
								<h4>Our 4 Important Phases in implementing Knowledge Management</h4>
								<ol>
									<li>
										<dl>
											<dt>Analyze</dt>
											<dd>Process to analyse and assess the current condition of how organization manage their organizational knowledge.</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>Design</dt>
											<dd>Process to plan &amp; design the knowledge management system, identify the source of knowledge in the organization, and develop the blue-print to design the knowledge management in the organization.</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>Develop</dt>
											<dd>Process to develop the knowledge management, which consists of create, sharing, and implementing knowledge management, including building the knowledge sharing culture.</dd>
										</dl>
									</li>
									<li>
										<dl>
											<dt>Evaluate</dt>
											<dd>Process to develop the knowledge management, which consists of create, sharing, and implementing knowledge management, including building the knowledge sharing culture.</dd>
										</dl>
									</li>
								</ol>
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
						<?php include "../partials/whatsapp-button.php"; ?>
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