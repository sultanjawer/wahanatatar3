<!-- ======= Features Section ======= -->
<section id="clients" class="features">
	<div class="container" data-aos="fade-up">
		<div class="section-header" data-aos="zoom-out">
			<h2>Our Clients</h2>
		</div>
		<?php
		$folder = 'assets/client/'; // Specify the directory path where your images are located
		$images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
		natcasesort($images); // Sort the images array by name
		// $imageChunks = array_chunk($images, 2);
		?>
		<ul class="nav nav-tabs row gy-4 row-cols-2 row-cols-md-6 d-flex justify-content-center">
			<?php foreach ($images as $image) { ?>
				<li class="nav-item col">
					<a class="nav-link show" href="javascript:void(0)">
						<img class="img-fluid" src="<?php echo $image; ?>" />
					</a>
				</li>
			<?php } ?>
		</ul>

		<!-- <div class="clients-slider swiper">
			<div class="swiper-wrapper align-items-center">
				< ?php foreach ($imageChunks as $index) { ?>
					<div class="swiper-slide">
						<div class="row">
							< ?php foreach ($index as $image) { ?>
								<img class="img-fluid" src="< ?php echo $image; ?>">
							< ?php } ?>
						</div>
					</div>
				< ?php } ?>
			</div>
		</div> -->

	</div>
</section>