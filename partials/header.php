<?php include "/config/menu.php"; ?>

<!-- ======= Header ======= -->
<header id="header" class="header fixed-top bg-light shadow mb-0" data-scrollto-offset="0">
	<div class="container-fluid d-flex align-items-center justify-content-between">
		<a href="/" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
			<!-- Uncomment the line below if you also wish to use an image logo -->
			<img src="assets/img/logo.png" alt="logo" class="navbar-logo d-block d-md-none">
			<img src="assets/img/logo.png" alt="logo" class="navbar-logo d-none d-md-block">
			<!-- <h1>HeroBiz<span>.</span></h1> -->
		</a>

		<nav id="navbar" class="navbar">
			<ul class="small">
				<li><a class="nav-link scrollto" href="index.php">Home</a></li>
				<li><a class="nav-link scrollto <?php echo (activeClass($datamenu) == 'solutions') ? 'active'  : '' ?>" href="/solutions/index.php">Solutions</a></li>
				<li><a class="nav-link scrollto <?php echo (activeClass($datamenu) == 'corporate') ? 'active'  : '' ?>" href="/about/index.php">Corporate</a></li>
				<li><a class="nav-link scrollto " href="index.php#clients">Our Clients</a></li>
				<li><a class="nav-link <?php echo (activeClass($datamenu) == 'news') ? 'active'  : '' ?>" href="/news/index.php">News</a></li>
				<li><a class="nav-link <?php echo (activeClass($datamenu) == 'event') ? 'active'  : '' ?>" href="/events/index.php">Event & Workshop</a></li>
				<li><a class="nav-link scrollto" href="https://capabilitiesacademy.com">Login</a></li>
			</ul>
			<i class="bi bi-list mobile-nav-toggle d-none"></i>
		</nav><!-- .navbar -->

		<!-- <a class="btn-getstarted scrollto" href="index.html#about">Get Started</a> -->

	</div>
</header>
<!-- End Header -->