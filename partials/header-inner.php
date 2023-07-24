	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top bg-light shadow mb-0" data-scrollto-offset="0">
		<div class="container-fluid d-flex align-items-center justify-content-between">
			<a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
				<!-- Uncomment the line below if you also wish to use an image logo -->
				<img src="../assets/img/logo.png" alt="logo" class="navbar-logo d-block d-md-none">
				<img src="../assets/img/logo.png" alt="logo" class="navbar-logo d-none d-md-block">
				<!-- <h1>HeroBiz<span>.</span></h1> -->
			</a>
			<nav id="navbar" class="navbar">
				<ul class="small">
					<li><a class="nav-link scrollto" href="../index.php">Home</a></li>
					<li><a class="nav-link scrollto" href="../solutions/index.php">Solutions</a></li>
					<li><a class="nav-link scrollto" href="../about/index.php">Corporate</a></li>
					<li><a class="nav-link scrollto" href="../index.php#clients">Our Clients</a></li>
					<li><a class="nav-link <?php echo isPageActive('news'); ?>" href="../news">News</a></li>
					<li><a class="nav-link <?php echo isPageActive('events'); ?>" href="../events">Event & Workshop</a></li>
					<li><a class="nav-link scrollto" href="https://capabilitiesacademy.com">Login</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle d-none"></i>
			</nav>

			<?php
			// Function to check if the given page is active
			function isPageActive($pageName)
			{
				// Get the current page URL path relative to the website root
				$currentPage = $_SERVER['REQUEST_URI'];

				// Check for exact match and partial match
				if (strpos($currentPage, $pageName) !== false) {
					return 'active';
				}
				return '';
			}
			?>

		</div>
	</header>
	<!-- End Header -->