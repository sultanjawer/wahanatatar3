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
		$imageCount = count($images);
		$imagesPerRow = ceil($imageCount / 2); // Calculate how many images to show per row
		?>

		<div class="clients-slider swiper">
			<div class="swiper-wrapper align-items-center">
				<?php for ($i = 0; $i < $imagesPerRow; $i++) { ?>
					<div class="swiper-slide">
						<img class="img-fluid" src="<?php echo $images[$i]; ?>" />
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="clients-slider swiper">
			<div class="swiper-wrapper align-items-center">
				<?php for ($i = $imagesPerRow; $i < $imageCount; $i++) { ?>
					<div class="swiper-slide">
						<img class="img-fluid" src="<?php echo $images[$i]; ?>" />
					</div>
				<?php } ?>
			</div>
		</div>

	</div>
</section>