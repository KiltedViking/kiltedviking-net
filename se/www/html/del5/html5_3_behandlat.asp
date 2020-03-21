<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ditt namn &auml;r</title>
  <style>
    body { font-family: Verdana, Helvetica, sans-serif; }
  </style>
</head>
<body>
  <h1>Behandlande ASP-sida</h1>
  <p>(Om sida visar text innehållande programkod nedan så stödjer webbserver inte ASP!)</p>
  <p>Ditt namn är <b><%=Request.Form("txtNamn")%></b></p>
  <p>Din e-post är <b><%=Request.Form("txtEpost")%></b></p>
  <p>Du använder Internet <b>
  <%
    If Request.Form("radInternet") = "hemma" Then
      Response.Write "hemma"
    ElseIf Request.Form("radInternet") = "jobbet" Then
      Response.Write "på jobbet"
    ElseIf Request.Form("radInternet") = "bada" Then
      Response.Write "både hemma och på jobbet"
    End If
  %>
  </b></p>
  <p>Du vill ha information om: <b>
  <%
    If Request.Form("chkInternet") = "Ja" Then
      Response.Write "program för Internet"
    End If
    If Request.Form("chkSpel") = "Ja" Then
      Response.Write " och spel"
    End If
    If Request.Form("chkMultimedia") = "Ja" Then
      Response.Write " och multimediaprogram"
    End If
    If Request.Form("chkKontor") = "Ja" Then
      Response.Write " och kontorspaket"
    End If
  %>
  </b></p>
  <p>Och du tycker så här om vår webbplats: <b>
  <%=Request.Form("txtSynpunkter")%>
  </b></p>
  <hr />
  <h2>Koden i detta ASP-dokument</h2>
  <tt>
  <p><font color="#0000c0">&lt;html&gt;<br>
  &lt;head&gt;<br>
  &nbsp; &lt;title&gt;</font>Ditt namn &amp;auml;r<font color="#0000c0">&lt;/title&gt;<br>
  &lt;/head&gt;<br>
  &lt;body&gt;<br>
  &nbsp; &lt;h1&gt;</font><font color="#000000">Behandlande ASP-sida</font><font color="#0000c0">&lt;/h1&gt;</font></p>
  <p><font color="#0000c0">&nbsp; &lt;p&gt;</font><font color="#000000">Ditt
  namn är </font><font color="#0000c0">&lt;b&gt;</font><font color="#800000">&lt;%=Request.Form(&quot;txtNamn&quot;)%&gt;</font><font color="#0000c0">&lt;/b&gt;&lt;/p&gt;</font></p>
  <p><font color="#0000c0">&nbsp; &lt;p&gt;</font><font color="#000000">Din
  e-post är </font><font color="#0000c0">&lt;b&gt;</font><font color="#800000">&lt;%=Request.Form(&quot;txtEpost&quot;)%&gt;</font><font color="#0000c0">&lt;/b&gt;&lt;/p&gt;</font></p>
  <p><font color="#0000c0">&nbsp; &lt;p&gt;</font><font color="#000000">Du
  använder Internet </font><font color="#0000c0">&lt;b&gt;</font><br>
  &nbsp; &nbsp; <font color="#800000">&lt;%</font><font color="#800000"><br>
  &nbsp;&nbsp;&nbsp; &nbsp; If Request.Form(&quot;radInternet&quot;) =
  &quot;hemma&quot; Then</font><font color="#800000"><br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Response.Write &quot;hemma&quot;</font><font color="#800000"><br>
  &nbsp; &nbsp;&nbsp;&nbsp;
  </font><font color="#800000">ElseIf
  Request.Form(&quot;radInternet&quot;) = &quot;jobbet&quot; Then</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; </font><font color="#800000">Response.Write
  &quot;på jobbet&quot;</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ElseIf
  Request.Form(&quot;radInternet&quot;) = &quot;bada&quot; Then </font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Response.Write
  &quot;både hemma och på jobbet&quot;<br>
  &nbsp; &nbsp;&nbsp;&nbsp; </font><font color="#800000">End
  If<br>
  &nbsp;&nbsp;&nbsp; %&gt;</font><br>
  &nbsp; &nbsp; <font color="#0000c0">&lt;/b&gt;&lt;/p&gt;</font></p>
  <p><font color="#0000c0">&nbsp; &lt;p&gt;</font><font color="#000000">Du vill
  ha information om: </font><font color="#0000c0">&lt;b&gt;</font><br>
  &nbsp; &nbsp; <font color="#800000">&lt;%</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp; &nbsp; </font><font color="#800000">If
  Request.Form(&quot;chkInternet&quot;) = &quot;Ja&quot; Then</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </font><font color="#800000">Response.Write
  &quot;program för Internet&quot;<br>
  &nbsp; &nbsp;&nbsp;&nbsp;
  </font><font color="#800000">End
  If</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp; &nbsp; </font><font color="#800000">If
  Request.Form(&quot;chkSpel&quot;) = &quot;Ja&quot; Then</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </font><font color="#800000">Response.Write
  &quot; och spel&quot;<br>
  &nbsp; &nbsp;&nbsp;&nbsp;
  </font><font color="#800000">End
  If</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp; &nbsp; </font><font color="#800000">If
  Request.Form(&quot;chkMultimedia&quot;) = &quot;Ja&quot; Then</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; Response.Write
  &quot; och multimediaprogram&quot;<br>
  &nbsp; &nbsp;&nbsp;&nbsp;
  </font><font color="#800000">End
  If</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp; &nbsp; </font><font color="#800000">If
  Request.Form(&quot;chkKontor&quot;) = &quot;Ja&quot; Then</font><font color="#800000"><br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; </font><font color="#800000">Response.Write
  &quot; och kontorspaket&quot;<br>
  &nbsp; &nbsp;&nbsp;&nbsp;
  </font><font color="#800000">End
  If<br>
  </font><font color="#800000">&nbsp;&nbsp;&nbsp; %&gt; </font><br>
  &nbsp; &nbsp; <font color="#0000c0">&lt;/b&gt;&lt;/p&gt;</font></p>
  <p><font color="#0000c0">&nbsp; &lt;p&gt;</font><font color="#000000">Och du
  tycker så här om vår webbplats: </font><font color="#0000c0">&lt;b&gt;</font><br>
  &nbsp;&nbsp;&nbsp; <font color="#800000">&lt;%=Request.Form(&quot;txtSynpunkter&quot;)%&gt;</font><br>
  &nbsp;&nbsp;&nbsp; <font color="#0000c0">&lt;/b&gt;&lt;/p&gt;</font></p>
  <p><font color="#0000c0">&lt;/body&gt;<br>
  &lt;/html&gt;</font></p>
  </tt>
  <form>
    <p><input type="button" value="Stäng fonster" onclick="javascript:window.close()"></p>
  </form>
</body>
</html>
