<%Option Explicit%>
<HTML>
<HEAD>
  <TITLE>Utskrifter</TITLE>
</HEAD>
<BODY>
<H1>Utskrifter</H1>
<H2>Med Response.Write</H2>
<%
  Response.Write "Hej hela v�rlden. "
  Response.Write "Klockan �r nu: " & Time
%>

<H2>Av enstaka v�rden</H2>
<%
  Dim intTal, sngTal
  intTal = 5
%>
<P>Talet �r <%=intTal%></P>
</BODY>
</HTML>
