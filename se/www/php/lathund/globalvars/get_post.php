<HTML>
<HEAD>
  <TITLE>Globala variabler</TITLE>
</HEAD>
<BODY>
<H1>Globala variabler</H1>
<H2>$_GET och $_POST</H2>
<PRE>
<?
  print "\$_GET['namn'] :         " . @$_GET['namn'] . "\n";
  print "\$_POST['namn'] :        " . @$_POST['namn'] . "\n";
?>
</PRE>
<H2>Formul�r som skickas med HTTP-GET</H2>
<form>
  <p>Namn: <input type="text" name="namn">
  <input type="submit" value="skicka"></p>
</form>
<font size="-1">
<p>(V�rdet f�r $_GET beh�lls om v�rdet finns kvar i URL:en/adressen.)</p>
</font>
<H2>Formul�r som skickas med HTTP-POST</H2>
<form method="post">
  <p>Namn: <input type="text" name="namn">
  <input type="submit" value="skicka"></p>
</form>

</BODY>
</HTML>
