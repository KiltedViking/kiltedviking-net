<HTML>
<HEAD>
  <TITLE>Vektorer (arrays) i PHP - Exempel 3</TITLE>
</HEAD>
<BODY>
<H1>Vektorer (arrays) i PHP - Exempel 3</H1>


<H2>Tilldelning till vektorer med str�ngar som index</H2>
<PRE>
$arrTal["ett"] = 1;
$arrTal["tv�"] = 2;
$arrTal["femtitv�"] = 3;
$arrTal["sture"] = 4;
</PRE>
<?
  //Tilldela v�rden till vektor (med str�ngar som index)
$arrTal["ett"] = 1;
$arrTal["tv�"] = 2;
$arrTal["femtitv�"] = 3;
$arrTal["sture"] = 4;

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