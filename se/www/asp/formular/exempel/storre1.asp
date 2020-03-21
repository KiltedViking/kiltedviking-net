<%
  Option Explicit
  
  Dim blnSkickat  
  If Request.Form.Count > 0 Then
    blnSkickat = True
  Else
    blnSkickat = False
  End If
  
    'Deklarerar endast variabler och hämta värden om formulär skickats
  If blnSkickat Then
    Dim strFnamn, strEnamn, strSysselsattning, strBocker, strProgram, blnBocker

      'Hämta innehållet i formuläret
    strFnamn = Request.Form("fnamn")
    strEnamn = Request.Form("enamn")
    strSysselsattning = Request.Form("sysselsattning")
    strBocker = Request.Form("bocker")
    strProgram = Request.Form("program")
  End If
%>
<html>
<head>
  <title>Ett större exempel med formulär</title>
  <STYLE>
  <!--
    H1, H2 { font-family: Verdana; }
    P      { font: 10pt Verdana; }
  -->
  </STYLE>
</head>
<body>

<!-- Centrera tabell -->
<div align="center">
<center>

  <!-- Tabell används för att styra bredd på text och för att kunna centrera -->
  <!-- Tabellen innehåller endast en rad och en kolumn -->
  <table border="0" width="600">
    <tr>
      <td width="100%">

        <h1>Ett större exempel med formulär</h1>
        <p>I denna fil, STORRE1.ASP, läses innehållet från formuläret i
        filen STORRE1.HTM och visas nedan..</p>
        
        <HR>
<%
    'Om formulär skickats - visa innehållet i formuläret
  If blnSkickat Then
    Response.Write "<P>Du uppgav följande inforamtion om dig själv:</P>"
    
      'Skriv ut för- och efternamn
    Response.Write "<P><B>Förnamn:</B> " & strFnamn & "</P>"
    Response.Write "<P><B>Efternamn:</B> " & strEnamn & "</P>"
    
      'Påbörja HTML-stycke och skriv ut ledtext för sysselsättning
    Response.Write "<P><B>Du är </B>"
    
      'Om sysselsättning är studerande skriv ut texten "studerande"...
    If strSysselsattning = "studerande" Then
      Response.Write "studerande"
    Else  '... annars texten "lärare"
      Response.Write "lärare"
    End If
    
      'Avsluta HTML-stycke
    Response.Write "</P>"
    
      'Påbörja HTML-stycke och skriv ut ledtext för intresse
    Response.Write "<P><B>Du vill ha information om:</B> "
    
    If strBocker = "on" Then  
      Response.Write "läroböcker"
      blnBocker = True
    End If
    If strProgram = "on" Then
      If blnBocker then
        Response.Write " och "
      End If
      Response.Write "program"
    End If
      'Avsluta HTML-stycke
    Response.Write ".</P>"
    
  Else   '... annars meddela besökare att denne måste fylla i formuläret
    Response.Write "<P>Du måste fylla i formuläret först. Använd länk nedan.</P>"
  End If
%>
        <HR>
        <P><A HREF="storre1.htm">Visa formulär</A></P>
        <HR>
      </td>
    </tr>
  </table>

</center>
</div>

</body>
</html>