<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>News (Kilted Viking)</title>
  <link rel="shortcut icon" href="../favicon.ico" >
	<link href="../css/bootstrap.min.css" rel="stylesheet" />
	<link href="../css/font-awesome.min.css" rel="stylesheet" />
  <link href="../css/kiltedviking4.css" rel="stylesheet" />
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
	<!-- Hotjar Tracking Code for www.kiltedviking.net -->
	<script>
		(function(h,o,t,j,a,r){
				h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
				h._hjSettings={hjid:634269,hjsv:5};
				a=o.getElementsByTagName('head')[0];
				r=o.createElement('script');r.async=1;
				r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
				a.appendChild(r);
		})(window,document,'//static.hotjar.com/c/hotjar-','.js?sv=');
	</script>
</head>
<body>
  <header class="image-header image-tyresta">
      <h1>News</h1>
      <h2 class="hidden-xs">And rants(?)</h2>
  </header>
  <div class="container">
      <!-- Menubar -->
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <!-- Button for when menu collapses -->
          <button type="button" class="navbar-toggle collapsed" 
            data-target="#main-navbar" data-toggle="collapse">
            <!-- Add accessibility things -->
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="../">Start</a>
        </div>

        <div class="collapse navbar-collapse" id="main-navbar">
          <ul class="nav navbar-nav">
            <li><a href="../travels/"><i class="fa fa-ship"></i> Travels</a></li>
            <!-- <li class="active"><a href="photos/"><i class="fa fa-camera"></i> Photos</a></li> -->
            <li><a href="../about_kv.php"><i class="fa fa-info"></i> About</a></li>
            <li><a href="../about_me.php"><i class="fa fa-male"></i> Me</a></li>
            <li><a href="../cv/"><i class="fa fa-mortar-board"></i> CV</a></li>
            <li class="dropdown">
              <a href="../se/" class="dropdown-toggle" data-toggle="dropdown">
                  <i class="fa fa-globe"></i> In Swedish
                <i class="caret"></i>
              </a>
              <ul class="dropdown-menu">
                <li><a href="../se/"><i class="fa fa-flag"></i> Start</a></li>
                <li><a href="../se/datorer.htm"><i class="fa fa-desktop"></i> Computers</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
      
      <!-- *** Contents row ************************************************* -->
      <div class="row">
        <div class="col-sm-6 col-sm-offset-2"> <!-- START: Main contents column -->
          <h3>All news (so far)</h3>
<?php
require('../db_kiltedviking.php');

$rowsPerPage = 6;   // how many rows to show per page
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

  // if($res = mysql_query($strSql))
  if($res = $link->query($strSql))
  {
    while($arr = $res->fetch_assoc())
    {
      print("<p><b>".$arr['ndate'].":</b> <span class=\"contentsheader\">"
        .$arr['ncategory'].":</span> ".$arr['npreamble']."</p>\n");
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
// $result  = mysql_query($query) or die('Error, query failed');
$result  = $link->query($query) or die('Error, query failed');
// $row     = mysql_fetch_array($result, MYSQL_ASSOC);
$row     = $result->fetch_array();
$numrows = $row['numrows'];

// how many pages we have when using paging?
$maxPage = ceil($numrows/$rowsPerPage);

// print the link to access each page
$self = $_SERVER['PHP_SELF'];
$nav  = '';

for($page = 1; $page <= $maxPage; $page++)
   if ($page == $pageNum)
      $nav .= " <td class=\"menuitemselected\">$page</td>"; // no need to create a link to current page
   else
      $nav .= "<td class=\"menuitem\"><a href=\"$self?page=$page\" class=\"menuitem\">$page</a></td>";

// creating previous and next link plus the link to go straight to
// the first and last page

if ($pageNum > 1)
{
   $page  = $pageNum - 1;
   $prev  = "<td class=\"menuitem\">[<a href=\"$self?page=$page\" class=\"menuitem\">Prev</a>]</td>";

   $first = "<td class=\"menuitem\">[<a href=\"$self?page=1\" class=\"menuitem\">First</a>]</td>";
}
else
{
   $prev  = "<td class=\"menuitemselected\">[Prev]</td>"; // we're on page one, don't print previous link
   $first = "<td class=\"menuitemselected\">[First]</td>"; // nor the first page link
}

if ($pageNum < $maxPage)
{
   $page = $pageNum + 1;
   $next = "<td class=\"menuitem\">[<a href=\"$self?page=$page\" class=\"menuitem\">Next</a>]</td>";

   $last = "<td class=\"menuitem\">[<a href=\"$self?page=$maxPage\" class=\"menuitem\">Last</a>]</td>";
}
else
{
   $next = "<td class=\"menuitemselected\">[Next]</td>"; // we're on the last page, don't print next link
   $last = "<td class=\"menuitemselected\">[Last]</td>"; // nor the last page link
}

// print the navigation link
//print "<p class=\"centre\">".$first . $prev . $nav . $next . $last . "</p>\n";
print "<center><div align=\"center\"><table><tr>";
print $first . $prev . $nav . $next . $last;
print "</tr></table></div></center>";
?>
    </div> <!-- END: Main contents column -->

    <aside class="col-sm-2 col-sm-offset-0">
      <h3>News categories</h3>
<?php
/*** Print instructions about news ********************************************/
if($link)
{
  //Get the news categories (sorted by name)
  $strSql = "SELECT ncategory, ncdescription FROM newscategories ORDER BY ncategory";

  // if($res = mysql_query($strSql))
  if($res = $link->query($strSql))
  {
    // while($arr = mysql_fetch_assoc($res))
    while($arr = $res->fetch_assoc())
    {
      print("<b><span class=\"uppercasegrey\">".$arr['ncategory'].":</span></b> "
        .$arr['ncdescription'].".<br>\n");
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
?>
    </aside>
  </div>
  
    <!-- *** Footer row ****************************************************** -->
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <footer>
          <p>Created by: Bj&ouml;rn G. D. Persson. Last updated:
            <?= date("Y-m-d", filemtime($_SERVER["SCRIPT_FILENAME"])) ?>.</p>
        </footer>
      </div>
    </div>
  </div>
  <!-- Include JavaScript for Bootstrap navbar and its requirement jQuery -->
  <script src="../js/jquery-3.1.1.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
</body>
</html>