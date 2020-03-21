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
  //Tilldela v�rden till vektor (utan index)
$arrTal[3] = 1;  //index = 0
$arrTal[6] = 2;
$arrTal[2] = 3;
$arrTal[1] = 4;  //index = 3

  //H�mta antal element (positioner) i vektor)
$antal = count($arrTal);

print "Antal positioner i vektor: " . $antal . "<br>Inneh�ll i vektor:<br>";

  //Loopa �ver vektor med foreach-loop - h�mta b�de nyckel och v�rde
foreach($arrTal as $nyckel => $varde)
{
  print "\$arrTal[$nyckel] = $varde<br>";
  
}
?>

</BODY>
</HTML>