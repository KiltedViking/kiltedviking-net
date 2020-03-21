<HTML>
<HEAD>
  <TITLE>Globala variabler</TITLE>
</HEAD>
<BODY>
<H1>Globala variabler</H1>
<H2>$_SERVER</H2>
<PRE>
<?
  print "\$_SERVER['PHP_SELF'] :         " . $_SERVER['PHP_SELF'] . "\n";
  print "\$_SERVER['SCRIPT_NAME'] :      " . $_SERVER['SCRIPT_NAME'] . "\n";
  print "\$_SERVER['URL'] :              " . $_SERVER['URL'] . "\n";
  print "\$_SERVER['HTTP_REFERER'] :     " . $_SERVER['HTTP_REFERER'] . "\n";
  print "\$_SERVER['REMOTE_ADDR'] :      " . $_SERVER['REMOTE_ADDR'] . "\n";
  print "\$_SERVER['REMOTE_HOST'] :      " . $_SERVER['REMOTE_HOST'] . "\n";
  print "\$_SERVER['PATH_TRANSLATED'] :  " . $_SERVER['PATH_TRANSLATED'] . "\n";
?>
</PRE>
<H2>Formulär som skickas med HTTP-GET</H2>
<form>
  <p>Namn: <input type="text" name="namn">
  <input type="submit" value="skicka"></p>
</form>

<H2>Formulär som skickas med HTTP-POST</H2>
<form method="post">
  <p>Namn: <input type="text" name="namn">
  <input type="submit" value="skicka"></p>
</form>

</BODY>
</HTML>
