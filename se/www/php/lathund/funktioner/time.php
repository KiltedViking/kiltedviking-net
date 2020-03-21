<?
setlocale(LC_TIME, "se_SE");
?>
<HTML>
<HEAD>
  <TITLE>Funktioner - datum</TITLE>
</HEAD>
<BODY>
<H1>Funktioner - datum</H1>
<H2>time()</H2>
<PRE>
<?
print "time():                      " . time() . " (heltal motsvarande aktuellt datum och tid)\n";
print "date(\"Y-m-d H:i\", time()):   " . date("Y-m-d H:i", time()) . " (aktuellt datum och tid)\n";
?>
</PRE>
</BODY>
</HTML>
