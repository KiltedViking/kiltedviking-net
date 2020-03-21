<HTML>
<HEAD>
  <TITLE>Funktioner</TITLE>
</HEAD>
<BODY>
<H1>Funktioner - strängar</H1>

<H2>Funktionen Join()</H2>
<%
  Dim strStrang              'Deklarera variabler
  Dim arrOrd(5)
  
  arrOrd(0) = "Ett"          'Lägg till ord till vektor
  arrOrd(1) = "annorlunda"
  arrOrd(2) = "sätt"
  arrOrd(3) = "att"
  arrOrd(4) = "bygga"
  arrOrd(5) = "strängar."
  
  strStrang = Join(arrOrd)   'Slå samman ord i vektor till en sträng
  
  Response.Write strStrang   'Skriv ut sträng
%>

</BODY>
</HTML>