<HTML>
<HEAD>
  <TITLE>Utskrifter</TITLE>
</HEAD>
<BODY>
<H1>Utskrifter</H1>
<H2>Med print</H2>
<?
  print "Hej hela världen. ";
  print("Klockan är nu: " . date("H:i"));
?>

<H2>Med echo</H2>
<?
  echo "Hej hela världen. ";
  echo("Klockan är nu: " . date("H:i"));
?>

<H2>Med printf</H2>
<?
  echo "Hej hela världen. ";
  echo("Klockan är nu: " . date("H:i"));
?>


<H2>Av enstaka värden</H2>
<?
  $intTal = 5
?>
<P>Talet är <?=$intTal ?></P>
</BODY>
</HTML>
