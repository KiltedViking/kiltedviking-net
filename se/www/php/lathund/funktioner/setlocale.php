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
$myLocale = "";
print "Locale is: $myLocale\n";
print strftime("%A, in Swedish is ");  //skriv ut dag i veckan p� "standardspr�k"
$myLocale = setlocale (LC_TIME, "");   //S�tt spr�k till aktuellt f�r dator
print (strftime ("%A.\n"));
print "Locale is: $myLocale\n";
?>
</PRE>
</BODY>
</HTML>
