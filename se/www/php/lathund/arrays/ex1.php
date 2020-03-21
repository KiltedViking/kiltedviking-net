<HTML>
<HEAD>
  <TITLE>Vektorer (arrays) i PHP - Exempel 1</TITLE>
</HEAD>
<BODY>
<H1>Vektorer (arrays) i PHP - Exempel 1</H1>


<H2>Tilldelning till vektorer utan index</H2>
<PRE>
$arrTal[] = 1;
$arrTal[] = 2;
$arrTal[] = 3;
$arrTal[] = 4;
</PRE>
<?
  //Tilldela v�rden till vektor (utan index)
$arrTal[] = 1;  //index = 0
$arrTal[] = 2;
$arrTal[] = 3;
$arrTal[] = 4;  //index = 3

  //H�mta antal element (positioner) i vektor)
$antal = count($arrTal);

print "Antal positioner i vektor: " . $antal . "<br>Inneh�ll i vektor:<br>";

  //Loopa �ver vektor med for-loop
for($i = 0; $i < $antal; $i++)
{
  print "\$arrTal[$i] = " . $arrTal[$i] . "<br>";
  
}
?>

</BODY>
</HTML>