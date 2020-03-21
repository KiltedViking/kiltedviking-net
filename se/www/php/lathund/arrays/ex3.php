<HTML>
<HEAD>
  <TITLE>Vektorer (arrays) i PHP - Exempel 3</TITLE>
</HEAD>
<BODY>
<H1>Vektorer (arrays) i PHP - Exempel 3</H1>


<H2>Tilldelning till vektorer med strängar som index</H2>
<PRE>
$arrTal["ett"] = 1;
$arrTal["två"] = 2;
$arrTal["femtitvå"] = 3;
$arrTal["sture"] = 4;
</PRE>
<?
  //Tilldela värden till vektor (med strängar som index)
$arrTal["ett"] = 1;
$arrTal["två"] = 2;
$arrTal["femtitvå"] = 3;
$arrTal["sture"] = 4;

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