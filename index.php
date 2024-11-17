<!DOCTYPE HTML>
<html lang="en">
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-5M3PC2');</script>
	<!-- End Google Tag Manager -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="description" content="Kilted Viking - a nerd who likes Scotland, music, walking, and takes a lot of photos, when not working with computers." />
	<!-- Open Graph protocol data -->
	<meta property="og:title" content="Kilted Viking - Peace loving nerd that wishes for sustainability" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="https://kiltedviking.net/" />
	<meta property="og:image" content="https://kiltedviking.net/images/thistle.jpg" />
	<link rel="canonical" href="https://kiltedviking.net/" />
	<title>Kilted Viking</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="/css/bootstrap5/bootstrap.min.css" />
	<link rel="stylesheet" href="/css/bootstrap-icons.min.css" />
	<link rel="stylesheet" href="/css/kiltedviking5.css" />
	<!-- schema.org data -->
	<script type="application/ld+json">
	{
		"@context": "https://schema.org",
		"@type": "WebSite",
		"url": "https://www.kiltedviking.net",
		"description": "Kilted Viking - Peace loving nerd that wishes for sustainability",
		"creator": {
			"@type": "Person",
			"givenName": "Björn",
			"familyName": "Persson",
			"jobTitle": "System administrator and developer",
			"address": {
				"@type": "PostalAddress",
				"postalCode": "13331",
				"addressLocality": "Saltsjöbaden",
				"addressCountry": "Sweden"
			},
			"birthPlace": {
				"@type": "Place",
				"address": {
					"@type": "PostalAddress",
					"postalCode": "26936",
					"addressLocality": "Båstad",
					"addressCountry": "Sweden"
				}
			}
		}
	}
	</script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5M3PC2"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<header class="image-header image-thistle">
		<h1>Kilted Viking</h1>
		<h2 class="hidden-xs">Peace loving nerd that wishes for sustainability</h2>
	</header>
	<div class="container">
		<!-- Menubar -->
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white" data-bs-theme="dark">
			<div class="container-fluid">
				<a class="navbar-brand" href="./">Home</a>
				<!-- Button for when menu collapses -->
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#mainNavbar" aria-controls="mainNavbar"
          			aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="mainNavbar">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0">
						<li class="nav-item"><a class="nav-link" href="travels/"><i class="bi bi-backpack2 fs-4"></i> Travels</a></li>
						<li class="nav-item"><a class="nav-link" href="walks/"><i class="bi bi-map fs-4"></i> Walks</a></li>
						<li class="nav-item"><a class="nav-link" href="about_kv.php"><i class="bi bi-info-square fs-4"></i> About</a></li>
						<li class="nav-item"><a class="nav-link" href="about_me.php"><i class="bi bi-person-standing fs-4"></i> Me</a></li>
						<li class="nav-item"><a class="nav-link" href="cv/"><i class="bi bi-mortarboard fs-4"></i> CV</a></li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" role="button" 
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-globe fs-4"></i> In Swedish
							</a>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="se/"><i class="bi bi-flag fs-4"></i> Swedish site [se]</a></li>
								<li><a class="dropdown-item" href="se/datorer.htm"><i class="bi bi-display fs-4"></i> Computers [se]</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- *** Contents row ************************************************* -->
		<div class="row">
			<div class="col-md-6 offset-lg-2 offset-md-1">
				<h3 class="contentsheader">Introduction</h3>

				<p>These web pages, <abbr title="see 'About me' for explanation of the name">Kilted
					Viking</abbr>, are used to share things with others (where I've been and some
					knowledge about web development).</p> 
					
				<p>See Swedish version of site for computer related topics.</p>

				<p>And please, read with humour in mind. :-)</p>
				
				<h4 class="contentsheader" id="note">Please note</h4>

				<p class="instructions">... that I&lsquo;m not a linguist, i.e. my
					spelling and grammar might be a bit bad. :-)</p>

				<h4>Kakor (cookies)</h4>
				<p>Denna webbplats använder tjänster från Google för att hålla reda
					på antalet besökare och vilka sidor som besöks.
				</p>
			</div>

			<!-- *** News column ***************************************************** -->
			<div class="col-md-3 col-sm-12 offset-sm-0">
				<h3>News</h3>

			<!-- START: Code generated from PHP -->
	<?php
	require('indexnews.php'); 	// Include code for news
	?>
			<!-- END: Code generated from PHP -->
			</div>
		</div>
		<!-- *** Footer row ****************************************************** -->
		<div class="row">
      		<div class="col-md-12 text-center">
				<footer>
					<p><b>Created by:</b> Bj&ouml;rn G. D. Persson. <b>Last updated:</b>
						<?php
							date_default_timezone_set("Europe/Stockholm");
							print date("Y-m-d", filemtime($_SERVER["SCRIPT_FILENAME"])) 
						?>.</p>
				</footer>
			</div>
		</div>
	</div>
	<!-- Include JavaScript for Bootstrap navbar and its requirement jQuery -->
	<script src="./js/jquery-3.7.1.min.js"></script>
  	<script src="./js/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>