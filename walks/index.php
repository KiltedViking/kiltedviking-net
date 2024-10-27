<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Walks by Kilted Viking</title>
    <link rel="stylesheet" href="../css/bootstrap5/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../css/kiltedviking5.css" />
</head>
<body>
    <header class="image-header image-ben-vrackie-path">
        <h1>Walks by Kilted Viking</h1>
        <h2 class="hidden-xs">A collection of short walks</h2>
    </header>

<div class="container">
    <!-- Menubar -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="../">Home</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" 
                data-bs-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" 
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="main-navbar">
                <ul class="nav navbar-nav">
                    <li class="nav-item"><a href="/travels/" class="nav-link"><i class="bi bi-backpack2 fs-4"></i> Travels</a></li>
                    <li class="nav-item"><a href="/walks/" class="nav-link active"><i class="bi bi-map fs-4"></i> Walks</a></li>
                    <li class="nav-item"><a href="/about_kv.php" class="nav-link"><i class="bi bi-info-square fs-4"></i> About</a></li>
                    <li class="nav-item"><a href="/about_me.php" class="nav-link"><i class="bi bi-person-standing fs-4"></i> Me</a></li>
                    <li class="nav-item"><a href="/cv/" class="nav-link"><i class="bi bi-mortarboard fs-4"></i> CV</a></li>
                    <li class="nav-item dropdown">
                        <a href="/se/" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="bi bi-globe fs-4"></i> In Swedish
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="/se/" class="dropdown-item"><i class="bi bi-flag fs-4"></i> Swedish site [se]</a></li>
                            <li><a href="/se/datorer.htm" class="dropdown-item"><i class="bi bi-display fs-4"></i> Computers [se]</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

        <section class="row">
            <div class="col-lg-12">
                <h3>Introduction</h3>
            </div>
            <div class="col-lg-6">
                <p class="lead">I spend a bit of time walking for exercise and I 
                    enjoy varying were I walk to keep me motivated and 
                    to enjoy new views. Below are information about short walks
                    I've taken.
                </p>
            </div>
            <div class="col-lg-6">
                <p>I use photos, videos, handhelp navigator and mobile phone for
                    information about &quot;when, what and how&quot; my walks were 
                    taken, and this page was created to help me keep track of where 
                    I've been and help me locate my photos and videos, but also hoping others 
                    might find some inspiration.
                </p>
            </div>
            <!-- *** List of walks ***************************************** -->
            <div class="col-lg-12">
                <h3>Walks</h3>
            </div>
        </section>
<?php
    // Show errors - REMOVE!!!
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // require('../db_test.php');
    require('../db_kiltedviking.php');
    $blnNewsAvailable = false;

    if($link)
    {
        $strSqlWalks = "SELECT w.wdate, w.country, w.region, w.place, w.wdescription, w.distance, w.duration, w.thumbnail, w.start, w.end, GROUP_CONCAT( CONCAT(wl.url, ';', wl.linktext, ';', wl.extratext) SEPARATOR '|' ) AS links FROM walks w LEFT OUTER JOIN walklinks wl ON w.id = wl.walkid GROUP BY w.wdate, w.country, w.region, w.place, w.wdescription, w.distance, w.duration, w.thumbnail ORDER BY w.wdate DESC";

        if($res = $link->query($strSqlWalks))
        {
            //While more news items or counter less than 4
            while(($arr = $res->fetch_assoc()))
            {
                $links = $arr['links'];
                // Extract links into an array (of concatenated link parts)
                if($links)
                    $links = explode('|', $arr['links']);
?>
        <section class="row">
            <div class="col">
                <div class="card">
                    <div class="card-header">
                        <h4><?=$arr['place']?></h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <p><b>Date:</b> <?=$arr['wdate']?><br />
                                <b>Location:</b> <?=$arr['region']?>, <?=$arr['country']?><br />
                                <b>Duration:</b> <?=$arr['duration']?><br />
                                <b>Distance:</b> <?=$arr['distance']?> km</p>
                            </div>

                            <div class="col-lg-6">
                                <p><?=$arr['wdescription']?></p>
                                <p><b>Start:</b> <?=$arr['start']?></p>
                                <p><b>End:</b> <?=$arr['end']?></p>
                            </div>

                            <div class="col-lg-3">
<?php
                if($links)
                {
                    foreach($links as $link)
                    {
                        // Extract link parts into array
                        $linkparts = explode(';', $link);
?>
                <p><a href="<?=$linkparts[0]?>" target="_blank" rel="noopener"><?=$linkparts[1]?></a> <?=$linkparts[2]?></p>                
<?php            
                    }
                }
?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<?php
            }

            // mysql_free_result($res);
        }
        else
        {
            print("<p>Sorry, no walks available...<br />");
            print("<span class=\"smallertextlight\">(can't find table)</span></p>\n");
        }
    }
?>

        <footer>
            <p>I only have one advice: use good footware with two pairs of socks 
                - one liner (inner) and one thicker. ;-)</p>
            <p><b>Created by:</b> Bj&ouml;rn G. D. Persson. <b>Updated:</b> 2023-11-18.</p>
            <p><a href="../">Back</a> to Kilted Viking.</p>
        </footer>
    </div>
	<!-- Include JavaScript for Bootstrap navbar and its requirement jQuery -->
	<!-- <script src="./js/jquery-3.7.1.min.js"></script> -->
    <script src="../js/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>