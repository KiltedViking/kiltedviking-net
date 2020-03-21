<?
setlocale(LC_TIME, "se_SE");
?>
<HTML>
<HEAD>
  <TITLE>Funktioner - datum</TITLE>
</HEAD>
<BODY>
<H1>Funktioner - datum</H1>
<H2>strtotime()</H2>
<PRE>
<?
print "strtotime(\"2004-01-06\"):                    " . strtotime("2004-01-06") . " (heltal från sträng)\n";
print "date(\"Y-m-d\", strtotime(\"2004-01-06\")):     " . date("Y-m-d", strtotime("2004-01-06")) . " (datum från sträng)\n";
print "date(\"Y-m-d\", strtotime(\"now\")):            " . date("Y-m-d", strtotime("now")) . " (dagens datum)\n";
print "date(\"Y-m-d\", strtotime(\"+1 week\")):        " . date("Y-m-d", strtotime("+1 week")) . " (+1 vecka)\n";
?>
</PRE>
</BODY>
</HTML>
