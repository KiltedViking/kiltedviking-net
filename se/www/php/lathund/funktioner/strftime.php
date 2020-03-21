<?
setlocale(LC_TIME, "se_SE");
?>
<HTML>
<HEAD>
  <TITLE>Funktioner - datum</TITLE>
</HEAD>
<BODY>
<H1>Funktioner - datum</H1>
<H2>strftime()</H2>
<PRE>
<?
print "strftime(\"%A är det idag\"):                                  " . strftime("%A är det idag") . "\n";
print "strftime(\"%Y-%m-%d är datumet\", mktime(0,0,0,1,6,2004)):     " . strftime("%Y-%m-%d är datumet", mktime(0,0,0,1,6,2004)) . "\n";
?>
</PRE>
</BODY>
</HTML>
