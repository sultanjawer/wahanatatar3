<!-- ======= Features Section ======= -->
<section id="clients" class="features">
	<div class="container" data-aos="fade-up">
		<div class="section-header" data-aos="zoom-out">
			<h2>Our Clients</h2>
		</div>
		<?php
		$folder = 'assets/client/';
		$images = glob($folder . '*.{jpg,jpeg,png,gif}', GLOB_BRACE);
		natcasesort($images);
		$imageChunks = array_chunk($images, 6); // Split images into chunks of 6
		?>

		<div class="clients-slider swiper">
			<div class="swiper-wrapper align-items-center">
				<?php foreach ($imageChunks[0] as $image) { ?>
					<div class="swiper-slide">
						<img class="img-fluid" src="<?php echo $image; ?>" />
					</div>
				<?php } ?>
			</div>
		</div>
		<div class="clients-slider swiper">
			<div class="swiper-wrapper align-items-center">
				<?php foreach ($imageChunks[1] as $image) { ?>
					<div class="swiper-slide">
						<img class="img-fluid" src="<?php echo $image; ?>" />
					</div>
				<?php } ?>
			</div>
		</div>

	</div>
</section>