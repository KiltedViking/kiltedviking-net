<HTML>
<HEAD>
  <TITLE>Vektorer (arrays) i PHP - Exempel 2</TITLE>
</HEAD>
<BODY>
<H1>Vektorer (arrays) i PHP - Exempel 2</H1>


<H2>Tilldelning till vektorer med index</H2>
<PRE>
$arrTal[3] = 1;
$arrTal[6] = 2;
$arrTal[2] = 3;
$arrTal[1] = 4;
</PRE>
<?
  //Tilldela värden till vektor (utan index)
$arrTal[3] = 1;  //index = 0
$arrTal[6] = 2;
$arrTal[2] = 3;
$arrTal[1] = 4;  //index = 3

  //Hämta antal element (positioner) i vektor)
$antal = count($arrTal);

print "Antal positioner i vektor: " . $antal . "<br>Innehåll i vektor:<br>";

  //Loopa över vektor med foreach-loop - hämta både nyckel och värde
foreach($arrTal as $nyckel => $varde)
{
  print "\$arrTal[$nyckel] = $varde<br>";
  
}
?>

</BODY>
</HTML>