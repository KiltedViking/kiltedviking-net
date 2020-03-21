<HTML>
<HEAD>
  <TITLE>Funktioner - datum</TITLE>
</HEAD>
<BODY>
<H1>Funktioner - datum</H1>
<H2>mktime()</H2>
<PRE>
<?
print "date(\"Y-m-d\", mktime(0,0,0,1,6,2004));:         " . date("Y-m-d", mktime(0,0,0,1,6,2004)) . "<BR>";
print "date(\"Y-m-d H:i\", mktime(0,0,0,1,25,2004));:    " . date("Y-m-d H:i", mktime(0,0,0,1,25,2004)) . "<BR>";
print "date(\"Y-m-d H:i\", mktime(13,25,0,1,25,2004));:  " . date("Y-m-d H:i", mktime(13,25,0,1,25,2004)) . "<BR>";
?>
</PRE>
</BODY>
</HTML>
