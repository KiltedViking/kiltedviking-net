<HTML>
<HEAD>
  <TITLE>Kontrollstrukturer</TITLE>
</HEAD>
<BODY>
<H1>Kontrollstrukturer</H1>
<H2>for</H2>
<?
  for($varTal = 1; $varTal <= 10; $varTal++)
    print "Talet är: $varTal <BR>";
?>

<H2>foreach</H2>
<?
  $arrVektor = array(21, 22, 23);
  
  foreach($arrVektor as $varde)
    print "$varde | ";

  print "<br>";
  
  foreach ($arrVektor as $nyckel => $varde)
    print "$nyckel : $varde<br>\n";
?>

<H2>while</H2>
<?
  $intTal = 0;

  while($intTal < 10)
  {
    print "Talet är: $intTal <BR>";
    $intTal++;
  }
?>


<H2>do...while</H2>
<?
  $intTal = 0

  do
  {
    print "Talet är: $intTal <BR>";
    $intTal++;
  } while(intTal < 10);
?>
</BODY>
</HTML>
