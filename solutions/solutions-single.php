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
			<h2>Post Title</h2>
			<p>
				<span class="fst-italic">”Quotes”</span><br />
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
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque et dolor aliquam velit gravida finibus. Suspendisse at hendrerit lectus. Nulla ac tempor diam. Integer mollis risus non augue placerat, non sodales neque volutpat. Nullam consequat at est vel hendrerit. Ut vitae ornare nisl. Morbi faucibus metus molestie enim egestas, ut mollis lectus suscipit. Pellentesque sed enim finibus, facilisis lorem eu, semper quam. Aliquam erat volutpat. Morbi sem diam, cursus vitae malesuada eget, suscipit ut nunc. Donec ornare nisi tempus neque bibendum efficitur. Duis metus orci, porta sed rutrum ut, imperdiet quis arcu. Proin maximus condimentum metus ac consequat. Aenean vestibulum eu dolor ac eleifend.
								</p>
								<p>
									Proin lectus nisi, congue vel ligula et, malesuada vehicula neque. Integer mollis pellentesque nunc. Morbi eu dictum erat, vel placerat urna. Cras quis feugiat eros. Etiam convallis, tortor quis bibendum tempus, nunc leo euismod mi, eu facilisis ex quam eu dui. Sed eu mauris ante. Vivamus fringilla nulla a metus maximus, quis ultricies turpis molestie. Aliquam erat volutpat. Donec in dapibus erat, ac ornare justo.
								</p>
								<p>
									Etiam vehicula mollis aliquam. Praesent urna felis, fringilla a posuere at, volutpat vitae tortor. Sed malesuada elementum orci elementum tempus. Nam rhoncus sapien vel magna euismod vehicula. Vivamus sollicitudin eu turpis vel venenatis. Phasellus sit amet velit scelerisque, vestibulum sem non, commodo nisi. Praesent et elementum tellus. Sed quam odio, dignissim sed eleifend id, pretium vitae risus. Sed tincidunt leo ut lorem scelerisque efficitur at et tellus. Maecenas gravida dui sem, nec luctus enim rhoncus eu.
								</p>

							</div>
						</article>
					</div>

					<!-- sidebar, must be dynamic and current page must be excluded from the item list-->
					<?php include "sidebar.php"; ?>
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
	<?php include "../partials/footer.php"; ?>
	<!-- End Footer -->

	<?php include "../partials/script.php"; ?>

</body>

</html>