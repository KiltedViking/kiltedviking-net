<HTML>
<HEAD>
  <TITLE>Funktioner - datum</TITLE>
</HEAD>
<BODY>
<H1>Funktioner - datum</H1>
<H2>getdate()</H2>
<PRE>
<?
$arrDatum = getdate();

print "\$arrDatum['hours']:       " . $arrDatum['hours'] . "<BR>";
print "\$arrDatum['minutes']:     " . $arrDatum['minutes'] . "<BR>";
print "\$arrDatum['wday']:        " . $arrDatum['wday'] . " (dag i vecka - 0 = söndag)<BR>";
?>
</PRE>
</BODY>
</HTML>
