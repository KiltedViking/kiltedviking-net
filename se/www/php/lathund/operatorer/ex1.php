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
  //Tilldela v�rden till vektor (med str�ngar som index)
$tal1 = 1;
$tal2 = "1";
$tal3 = 1;
$tal4 = 1.0;
$tal5 = "1.0";

  //J�mf�relse p� likhet
if($tal1 == $tal2)
  print "Talen 1 och 2 �r lika<br>";
else
  print "Talen 1 och 2 �r inte lika<br>";

  //J�mf�relse p� identitet
if($tal1 === $tal2)
  print "Talen 1 och 2 �r identiska<br>";
else
  print "Talen 1 och 2 �r inte identiska<br>";

  //J�mf�relse p� identitet
if($tal1 === $tal3)
  print "Talen 1 och 3 �r identiska<br>";
else
  print "Talen 1 och 3 �r inte identiska<br>";

  //J�mf�relse p� likhet
if($tal1 == $tal4)
  print "Talen 1 och 4 �r lika<br>";
else
  print "Talen 1 och 4 �r inte lika<br>";

  //J�mf�relse p� likhet
if($tal1 == $tal5)
  print "Talen 1 och 5 �r lika<br>";
else
  print "Talen 1 och 5 �r inte lika<br>";

?>

</BODY>
</HTML>