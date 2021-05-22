<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Editorial by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<?php require_once("header.php") ?>

							<!-- Banner -->
							<?php require_once("banner.php") ?>

							<!-- Section1 -->

							<?php // require_once("section1.php") ?>

							<!-- Section2 -->

								<section>
									<header class="major">
										<h2>Ipsum sed dolor</h2>
									</header>
									<div class="posts">

										<?php require_once("article1.php"); ?>
                                        <?php require_once("article2.php"); ?>
										<?php require_once("article3.php"); ?>
                                        <?php require_once("article4.php"); ?>
                                        <?php require_once("article5.php"); ?>
										<?php require_once("article6.php"); ?>
										
									</div>
								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<?php require_once("sidebar.php"); ?>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>