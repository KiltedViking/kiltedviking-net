<%Option Explicit%>
<HTML>
<HEAD>
  <TITLE>Utskrifter</TITLE>
</HEAD>
<BODY>
<H1>Utskrifter</H1>
<H2>Med Response.Write</H2>
<%
  Response.Write "Hej hela världen. "
  Response.Write "Klockan är nu: " & Time
%>

<H2>Av enstaka värden</H2>
<%
  Dim intTal, sngTal
  intTal = 5
%>
<P>Talet är <%=intTal%></P>
</BODY>
</HTML>
