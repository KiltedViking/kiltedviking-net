<HTML>
<HEAD>
  <TITLE>Funktioner</TITLE>
</HEAD>
<BODY>
<H1>Funktioner - str�ngar</H1>

<H2>Funktionen Join()</H2>
<%
  Dim strStrang              'Deklarera variabler
  Dim arrOrd(5)
  
  arrOrd(0) = "Ett"          'L�gg till ord till vektor
  arrOrd(1) = "annorlunda"
  arrOrd(2) = "s�tt"
  arrOrd(3) = "att"
  arrOrd(4) = "bygga"
  arrOrd(5) = "str�ngar."
  
  strStrang = Join(arrOrd)   'Sl� samman ord i vektor till en str�ng
  
  Response.Write strStrang   'Skriv ut str�ng
%>

</BODY>
</HTML>