<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="News about site of Kilted Viking - a nerd who likes Scotland, music, walking, and takes a lot of photos, when not working with computers." />
  <title>News (Kilted Viking)</title>
  <link rel="shortcut icon" href="../favicon.ico" >
	<link rel="stylesheet" href="../css/bootstrap5/bootstrap.min.css" />
	<link rel="stylesheet" href="../css/bootstrap-icons.min.css" />
	<link rel="stylesheet" href="../css/kiltedviking5.css" />
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-16929788-1']);
    _gaq.push(['_trackPageview']);
    (function() {
      var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();
  </script>
</head>
<body>
  <header class="image-header image-tyresta">
      <h1>News</h1>
      <h2 class="hidden-xs">What I've done</h2>
  </header>
  <div class="container">
      <!-- Menubar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-white" data-bs-theme="dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="../">Home</a>
				<!-- Button for when menu collapses -->
				<button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse"
					data-bs-target="#mainNavbar" aria-controls="mainNavbar"
          			aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

        <div class="collapse navbar-collapse" id="mainNavbar">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="../travels/"><i class="bi bi-backpack2 fs-4"></i> Travels</a></li>
            <li class="nav-item"><a class="nav-link" href="../walks/"><i class="bi bi-map fs-4"></i> Walks</a></li>
            <li class="nav-item"><a class="nav-link" href="../about_kv.php"><i class="bi bi-info-square fs-4"></i> About</a></li>
            <li class="nav-item"><a class="nav-link" href="../about_me.php"><i class="bi bi-person-standing fs-4"></i> Me</a></li>
            <li class="nav-item"><a class="nav-link" href="../cv/"><i class="bi bi-mortarboard fs-4"></i> CV</a></li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" 
								data-bs-toggle="dropdown" aria-expanded="false">
								<i class="bi bi-globe fs-4"></i> In Swedish
							</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="../se/"><i class="bi bi-flag fs-4"></i> Swedish site [se]</a></li>
                <li><a class="dropdown-item" href="../se/datorer.htm"><i class="bi bi-display fs-4"></i> Computers [se]</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
      <!-- *** Contents row ************************************************* -->
      <div class="row">
        <div class="col-md-6 offset-lg-2 offset-md-1"> <!-- START: Main contents column -->
          <h3 class="contentsheader mt-4">All news (so far)</h3>
<?php
require('../db_kiltedviking.php');

$rowsPerPage = 10;   // how many rows to show per page
$pageNum = 1;       // by default we show first page

// if $_GET['page'] defined, use it as page number
if(isset($_GET['page']))
    $pageNum = $_GET['page'];

$offset = ($pageNum - 1) * $rowsPerPage;    // counting the offset

/*** Print news ***************************************************************/
if($link)
{
  //Get all the news (sorted by date in reverse)
  $strSql = "SELECT ndate, npreamble, ntext, ncategory FROM news ORDER BY ndate DESC "
    ."LIMIT $offset, $rowsPerPage";

  if($res = $link->query($strSql))
  {
    while($arr = $res->fetch_assoc())
    {
      print("<h4 class=\"mt-4\">".$arr['ndate']." ".$arr['npreamble']." <small class=\"text-body-secondary\">["
        .$arr['ncategory']."]</small></h4>\n");
      if(isset($arr['ntext']))
        print("<p class=\"newstextfull\">".$arr['ntext']."</p>\n");
    }

    // mysql_free_result($res);
  }
  else
  {
    print("<p>Sorry, no news available...");
    print("<br><span class=\"smallertextlight\">(can't find table)</span>");
    print("</p>");
  }
}
else
{
  print("<p>Sorry, no news available...");
  if(!$link)
    print("<br><span class=\"smallertextlight\">(can't connect to server)</span>");
  if($blnNoDb)
    print("<br><span class=\"smallertextlight\">(can't connect to database)</span>");
  print("</p>");
}

// how many rows we have in database
$query   = "SELECT COUNT(id) AS numrows FROM news";
$result  = $link->query($query) or die('Error, query failed');
$row     = $result->fetch_array();
$numrows = $row['numrows'];

// how many pages we have when using paging?
$maxPage = ceil($numrows/$rowsPerPage);

// print the link to access each page
$self = $_SERVER['PHP_SELF'];
$nav  = '';

for($page = 1; $page <= $maxPage; $page++)
   if ($page == $pageNum)
      $nav .= " <td><a href=\"#\" class=\"btn btn-outline-success disabled\">$page</a></td>"; // no need to create a link to current page
   else
      $nav .= "<td><a href=\"$self?page=$page\" class=\"btn btn-success\">$page</a></td>";

// creating previous and next link plus the link to go straight to
// the first and last page

if ($pageNum > 1)
{
   $page  = $pageNum - 1;
   $prev  = "<td><a href=\"$self?page=$page\" class=\"btn btn-info\">Prev</a></td>";

   $first = "<td><a href=\"$self?page=1\" class=\"btn btn-primary\">First</a></td>";
}
else
{
   $prev  = "<td><a href=\"#\" class=\"btn btn-outline-primary disabled\">Prev</a></td>"; // we're on page one, don't print previous link
   $first = "<td><a href=\"#\" class=\"btn btn-outline-info disabled\">First</a></td>"; // nor the first page link
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;
   $next = "<td><a href=\"$self?page=$page\" class=\"btn btn-primary\">Next</a></td>";

   $last = "<td><a href=\"$self?page=$maxPage\" class=\"btn btn-info\">Last</a></td>";
}
else
{
   $next = "<td><a href=\"#\" class=\"btn btn-outline-primary disabled\">Next</a></td>"; // we're on the last page, don't print next link
   $last = "<td><a href=\"#\" class=\"btn btn-outline-info disabled\">Last</a></td>"; // nor the last page link
}

// print the navigation link
print "<div class=\"text-center mt-4\"><table><tr>";
print $first . $prev . $nav . $next . $last;
print "</tr></table></div>";
?>
    </div> <!-- END: Main contents column -->

    <aside class="col-md-3 col-sm-12 offset-sm-0">
      <h3 class="mt-4">News categories</h3>
<?php
/*** Print instructions about news ********************************************/
if($link)
{
  //Get the news categories (sorted by name)
  $strSql = "SELECT ncategory, ncdescription FROM newscategories ORDER BY ncategory";

  if($res = $link->query($strSql))
  {
    print("<dl>");
    
    while($arr = $res->fetch_assoc())
    {
      print("<dt><span class=\"uppercasegrey\">".$arr['ncategory'].":</span></dt><dd>"
        .$arr['ncdescription'].".</dd>\n");
    }

    print("</dl>");
    // mysql_free_result($res);
  }
  else
  {
    print("<p>Sorry, no news available...");
    print("<br><span class=\"smallertextlight\">(can't find table)</span>");
    print("</p>");
  }
}
else
{
  print("<p>Sorry, no news available...");
  if(!$link)
    print("<br><span class=\"smallertextlight\">(can't connect to server)</span>");
  if($blnNoDb)
    print("<br><span class=\"smallertextlight\">(can't connect to database)</span>");
  print("</p>");
}
?>
    </aside>
  </div>
  
    <!-- *** Footer row ****************************************************** -->
    <div class="row mt-4">
      <div class="col-md-12 text-center">
        <footer>
          <p>Created by: Bj&ouml;rn G. D. Persson. Last updated:
            <?= date("Y-m-d", filemtime($_SERVER["SCRIPT_FILENAME"])) ?>.</p>
        </footer>
      </div>
    </div>
  </div>
  <!-- Include JavaScript for Bootstrap navbar and its requirement jQuery -->
  <script src="../js/jquery-3.7.1.min.js"></script>
  <script src="../js/bootstrap5/bootstrap.bundle.min.js"></script>
</body>
</html>