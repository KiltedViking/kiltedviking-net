<HTML>
<HEAD>
  <TITLE>Utskrifter</TITLE>
</HEAD>
<BODY>
<H1>Utskrifter</H1>
<H2>Med print</H2>
<?
  print "Hej hela v�rlden. ";
  print("Klockan �r nu: " . date("H:i"));
?>

<H2>Med echo</H2>
<?
  echo "Hej hela v�rlden. ";
  echo("Klockan �r nu: " . date("H:i"));
?>

<H2>Med printf</H2>
<?
  echo "Hej hela v�rlden. ";
  echo("Klockan �r nu: " . date("H:i"));
?>


<H2>Av enstaka v�rden</H2>
<?
  $intTal = 5
?>
<P>Talet �r <?=$intTal ?></P>
</BODY>
</HTML>
