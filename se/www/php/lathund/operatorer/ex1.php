<HTML>
<HEAD>
  <TITLE>Operatorer i PHP - Exempel 1</TITLE>
</HEAD>
<BODY>
<H1>Operatorer i PHP - Exempel 1</H1>


<H2>Skillnad mellan likhet och identitet</H2>
<PRE>
$tal1 = 1;
$tal2 = "1";
$tal3 = 1;
$tal4 = 1.0;
$tal5 = "1.0";
</PRE>
<?
  //Tilldela värden till vektor (med strängar som index)
$tal1 = 1;
$tal2 = "1";
$tal3 = 1;
$tal4 = 1.0;
$tal5 = "1.0";

  //Jämförelse på likhet
if($tal1 == $tal2)
  print "Talen 1 och 2 är lika<br>";
else
  print "Talen 1 och 2 är inte lika<br>";

  //Jämförelse på identitet
if($tal1 === $tal2)
  print "Talen 1 och 2 är identiska<br>";
else
  print "Talen 1 och 2 är inte identiska<br>";

  //Jämförelse på identitet
if($tal1 === $tal3)
  print "Talen 1 och 3 är identiska<br>";
else
  print "Talen 1 och 3 är inte identiska<br>";

  //Jämförelse på likhet
if($tal1 == $tal4)
  print "Talen 1 och 4 är lika<br>";
else
  print "Talen 1 och 4 är inte lika<br>";

  //Jämförelse på likhet
if($tal1 == $tal5)
  print "Talen 1 och 5 är lika<br>";
else
  print "Talen 1 och 5 är inte lika<br>";

?>

</BODY>
</HTML>