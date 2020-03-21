<%@ page language="Java" %>
<!-- START: JSP-sida som inkluderas i servlet IncServlet -->
<%
  java.util.Calendar idag = new java.util.GregorianCalendar();  
  int ar = idag.get(idag.YEAR);
  int timme = idag.get(idag.HOUR);
  int minut = idag.get(idag.MINUTE);
  String tid = timme + ":" + minut;
%>
<H1>Hello world</H1>
<P><%="Hello from JSP"%></P>
<P>I år är det <%=ar%></P>
<P>Tiden är <%=tid%></P>
<!-- SLUT: JSP-sida som inkluderas i servlet IncServlet -->