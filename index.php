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
	<link rel="preload" href="/fonts/fontawesome-webfont.woff2" as="font" type="font/woff2" crossorigin="anonymous"/>
	<title>Kilted Viking</title>
	<link rel="shortcut icon" href="favicon.ico" />
	<link href="/css/bootstrap.min.css" rel="stylesheet" />
	<link href="/css/font-awesome.min.css" rel="stylesheet" />
	<link href="/css/kiltedviking4.css" rel="stylesheet" />
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
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<!-- Button for when menu collapses -->
					<button type="button" class="navbar-toggle collapsed" 
						data-target="#main-navbar" data-toggle="collapse" aria-label="Home">
						<!-- Add accessibility things -->
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand active" href="./">Home</a>
				</div>

				<div class="collapse navbar-collapse" id="main-navbar">
					<ul class="nav navbar-nav">
						<li><a href="travels/"><i class="fa fa-ship"></i> Travels</a></li>
						<li><a href="walks/"><i class="fa fa-map"></i> Walks</a></li>
						<li><a href="about_kv.php"><i class="fa fa-info"></i> About</a></li>
						<li><a href="about_me.php"><i class="fa fa-male"></i> Me</a></li>
						<li><a href="cv/"><i class="fa fa-mortar-board"></i> CV</a></li>
						<li class="dropdown">
						<a href="se/" class="dropdown-toggle" data-toggle="dropdown">
							<i class="fa fa-globe"></i> In Swedish
							<i class="caret"></i>
						</a>
						<ul class="dropdown-menu">
							<li><a href="se/"><i class="fa fa-flag"></i> Swedish site [se]</a></li>
							<li><a href="se/datorer.htm"><i class="fa fa-desktop"></i> Computers [se]</a></li>
						</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		
		<!-- *** Contents row ************************************************* -->
		<div class="row">
			<div class="col-sm-6 col-sm-offset-2">
				<h2 class="contentsheader">Introduction</h2>

				<p>These web pages (<abbr title="See 'About me' for explanation of the name">Kilted
					Viking</abbr>) are now more about me, myself, than my interests. I mainly use these
					pages to distributed things to others (my whereabouts, my photos, and some
					knowledge about web development). See Swedish version of site for computer 
					related topics.</p>

				<p>And please, read with humour in mind. :-)</p>
				
				<h3 class="contentsheader" id="note">Please note</h3>

				<p class="instructions">... that I&lsquo;m not a linguist, i.e. my
					spelling and grammar might be a bit bad. :-)</p>
			</div>

			<!-- *** News column ***************************************************** -->
			<div class="col-sm-2 col-sm-offset-0">
				<h2>News</h2>

			<!-- START: Code generated from PHP -->
	<?php
	require('db_kiltedviking.php'); 
	$blnNewsAvailable = false;
	/*** Print news ***************************************************************/
	if($link)
	{
		//Get the last three items of news
		$strSql = "SELECT ndate, npreamble, ncategory FROM news ORDER BY ndate DESC LIMIT 0, 3";

		if($res = $link->query($strSql))
		{
			$i = 0; //Counter for number of news items to show

			//While more news items or counter less than 4
			while(($arr = $res->fetch_assoc()) && ($i < 4))
			{
				print("<h3>".$arr['ndate']."</h3>\n");
				print("<p>".$arr['npreamble']."</p>\n");
				$i++; //Increase counter
			}

			$blnNewsAvailable = true;
		}
		else
		{
			print("<p>Sorry, no news available...<br />");
			print("<span class=\"smallertextlight\">(can't find table)</span></p>\n");
		}
	}
	else
	{
		print("<p>Sorry, no news available...<br />");
		if(!$link)
			print("<span class=\"smallertextlight\">(can't connect to server)</span>");
		if($blnNoDb)
			print("<span class=\"smallertextlight\">(can't connect to database)</span>");
		print("</p>\n");
	}
	
	if($blnNewsAvailable)
		print("<p><a href=\"news/\">More news ...</a></p>\n");
	?>
			<!-- END: Code generated from PHP -->
			</div>
		</div>
		<!-- *** Footer row ****************************************************** -->
		<div class="row">
      		<div class="col-sm-8 col-sm-offset-2">
				<footer>
					<p><strong>Created by:</strong> Bj&ouml;rn G. D. Persson, <strong>e-mail:</strong>
						bjorn(at)kiltedviking.net.nospam. <strong>Last updated:</strong>
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
  	<script src="./js/bootstrap.min.js"></script>
</body>
</html>