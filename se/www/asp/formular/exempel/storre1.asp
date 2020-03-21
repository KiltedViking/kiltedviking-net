<%
  Option Explicit
  
  Dim blnSkickat  
  If Request.Form.Count > 0 Then
    blnSkickat = True
  Else
    blnSkickat = False
  End If
  
    'Deklarerar endast variabler och h�mta v�rden om formul�r skickats
  If blnSkickat Then
    Dim strFnamn, strEnamn, strSysselsattning, strBocker, strProgram, blnBocker

      'H�mta inneh�llet i formul�ret
    strFnamn = Request.Form("fnamn")
    strEnamn = Request.Form("enamn")
    strSysselsattning = Request.Form("sysselsattning")
    strBocker = Request.Form("bocker")
    strProgram = Request.Form("program")
  End If
%>
<html>
<head>
  <title>Ett st�rre exempel med formul�r</title>
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

  <!-- Tabell anv�nds f�r att styra bredd p� text och f�r att kunna centrera -->
  <!-- Tabellen inneh�ller endast en rad och en kolumn -->
  <table border="0" width="600">
    <tr>
      <td width="100%">

        <h1>Ett st�rre exempel med formul�r</h1>
        <p>I denna fil, STORRE1.ASP, l�ses inneh�llet fr�n formul�ret i
        filen STORRE1.HTM och visas nedan..</p>
        
        <HR>
<%
    'Om formul�r skickats - visa inneh�llet i formul�ret
  If blnSkickat Then
    Response.Write "<P>Du uppgav f�ljande inforamtion om dig sj�lv:</P>"
    
      'Skriv ut f�r- och efternamn
    Response.Write "<P><B>F�rnamn:</B> " & strFnamn & "</P>"
    Response.Write "<P><B>Efternamn:</B> " & strEnamn & "</P>"
    
      'P�b�rja HTML-stycke och skriv ut ledtext f�r syssels�ttning
    Response.Write "<P><B>Du �r </B>"
    
      'Om syssels�ttning �r studerande skriv ut texten "studerande"...
    If strSysselsattning = "studerande" Then
      Response.Write "studerande"
    Else  '... annars texten "l�rare"
      Response.Write "l�rare"
    End If
    
      'Avsluta HTML-stycke
    Response.Write "</P>"
    
      'P�b�rja HTML-stycke och skriv ut ledtext f�r intresse
    Response.Write "<P><B>Du vill ha information om:</B> "
    
    If strBocker = "on" Then  
      Response.Write "l�rob�cker"
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
    
  Else   '... annars meddela bes�kare att denne m�ste fylla i formul�ret
    Response.Write "<P>Du m�ste fylla i formul�ret f�rst. Anv�nd l�nk nedan.</P>"
  End If
%>
        <HR>
        <P><A HREF="storre1.htm">Visa formul�r</A></P>
        <HR>
      </td>
    </tr>
  </table>

</center>
</div>

</body>
</html>