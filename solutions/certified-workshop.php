<!DOCTYPE html>
<html lang="en">

<?php include "../partials/meta-inner.php"; ?>

<body id="solutions">

	<!-- ======= Header ======= -->
	<?php include "../partials/header-inner.php"; ?>
	<!-- End Header -->
	<section id="solutions" class="hero-static d-flex align-items-center">
		<div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
			<h2>Certified Workshop</h2>
			<p>
				<span class="fst-italic">Quality of Corporate University depends on the quality and qualification of its professional that manage, design & develop learning solutions, and deliver the training, therefore the certification for Learning Facilitator, Learning Technologist, and Learning Manager play very important role.</span>
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
										<img src="../assets/img/solutions/10---core-business-solution---certificate-learning-program.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="../assets/img/solutions/leadership-management-program.jpg" alt="">
									</div>
									<div class="swiper-slide">
										<img src="../assets/img/solutions/vak-learning-style.jpg" alt="">
									</div>
								</div>
								<div class="swiper-pagination"></div>
							</div>

							<div class="content">
								<!-- jika konten ingin memiliki paragraph, text format, image, dll, maka form input harus dapat menangkap html tag seperti summernote, dll -->
								<h3>Leadership Management Program</h3>
								<p>
									There are 7 steps of of the workshop program before someone can achieve their certification. Each step of the workshop, and also assignment, writing a learning insight, attend the check point and pass each pre and post test should be accomplish by each participant to get their eligibility being a good Leader. This Leadership Management has been proven by several organization.
								</p>
								<h3>Learning Content Development Program</h3>
								<p>
									In terms of expertise for developing learning content digitally, you should need several skills, such as:
								</p>
								<ul>
									<li>Expertise in compiling Instructional System Design</li>
									<li>Ability to compose content based on VAK (Viasual - Auditory - Kinesthetic)</li>
									<li>Understand the concept of ADDIE (Analysis - Design - Development - Implementation - Employment)</li>
									<li>Expert use of various design and authoring tools</li>
								</ul>
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
						<button class="btn btn-lg btn-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us Now</button>
					</div>
				</div>
			</div>
		</section>

	</main><!-- End #main -->
	<!-- ======= Footer ======= -->
	<?php include "../partials/footer-inner.php"; ?>
	<!-- End Footer -->

	<?php include "../partials/script-inner.php"; ?>

</body>

</html>