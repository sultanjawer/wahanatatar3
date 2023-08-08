<!DOCTYPE html>
<html lang="en">

<?php include "../config/menu.php"; ?>
<?php include "../partials/meta.php"; ?>
<?php 
	$page = null;
	if (isset($_GET['page'])) {
		$page = $_GET['page']; 
	}
	if (!$page) $page = 1;
?>
<body>
	<!-- ======= Header ======= -->
	<?php include "../partials/header.php"; ?>
	<!-- End Header -->

	<main id="">

		<!-- ======= Breadcrumbs ======= -->
		<div class="breadcrumbs">
			<div class="container">

				<div class="d-flex justify-content-between align-items-center">
					<h2>News</h2>
				</div>

			</div>
		</div><!-- End Breadcrumbs -->

		<!-- ======= Blog Section ======= -->
		<section id="news" class="blog">
			<div class="container" data-aos="fade-up">
				<div class="row g-5">

					<div class="col-lg-12">
											<?php if ($page==1)  include "page_1.php"; ?>
											<?php if ($page==2)  include "page_2.php"; ?>
					                        
											<div class="blog-pagination">
							<ul class="justify-content-center">
																	<li <?php if ($page==1) echo 'class="active"' ?> ><a href="?page=1">1</a></li>
																	<li <?php if ($page==2) echo 'class="active"' ?> ><a href="?page=2">2</a></li>
															</ul>
						</div><!-- End blog pagination -->
										</div>
				</div>

			</div>
		</section><!-- End Blog Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<?php include "../partials/footer.php"; ?>
	<!-- End Footer -->

	<?php include "../partials/script.php"; ?>

</body>

</html>