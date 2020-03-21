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
print strftime("%A, in Swedish is ");  //skriv ut dag i veckan på "standardspråk"
$myLocale = setlocale (LC_TIME, "");   //Sätt språk till aktuellt för dator
print (strftime ("%A.\n"));
print "Locale is: $myLocale\n";
?>
</PRE>
</BODY>
</HTML>
