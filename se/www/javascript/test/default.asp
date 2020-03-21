<% Option Explicit %>
<html>
<head>
  <meta http-equiv="Content-Language" content="sv">
  <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Index of files in directory JavaScript</title>
  <link rel="stylesheet" type="text/css" href="../../stilar/stilmall.css">
  <BASE TARGET="_blank">
</head>
<body>
    <table border="0" width="425">
      <tr>
        <td width="100%">
          <h1>Test (av diverse...)</h1>
          <H2>Filer i denna mapp</H2>
          <P>Klicka på ett filnamn nedan för att se hemsidan. Hemsidan kommer
          öppnas i ett separat fönster. För att se koden kan du högerklicka
          mitt i dokumentet och välja &quot;Visa källa&quot; (eller vad det
          heter i din webbläsare..:-).</P>
          <hr>
          <%
              'Declare variables
            Dim objFSO, objFolder, objFile, strFilePath, strParentFolder
              ' Create a FileSystemObject instance
            Set objFSO = Server.CreateObject("Scripting.FileSystemObject")
              ' Get a reference to the folder where file resides
              '************************************************************
              'First exampel shows entering path to folder with file in.
            'Set objFolder = objFSO.GetFolder("D:\Inetpub\wwwroot\asp2")

              '************************************************************
              'Second exampel shows how PATH_TRANSLATED can be used to
              ' get the full path to file from Request object and then
              ' extract the path to folder where file resides.
              ' This version makes it possible to move or copy this file to
              ' any folder on a web server _without_ editing the file.
            'strFilePath = Request.ServerVariables("PATH_TRANSLATED")
            'strParentFolder = objFSO.GetParentFolderName(strFilePath)

              '************************************************************
              'Third exampel uses method MapPath in object Server. Using
              ' this method is the most flexible way to get current folder.
            strParentFolder = Server.MapPath("./")

            Set objFolder = objFSO.GetFolder(strParentFolder)
              ' Iterate through all the files in the folder
            For Each objFile In objFolder.Files
                'Dont show this file
              If objFile.Name <> "default.asp" Then
                Response.Write "<a href=""" & objFile.Name & """>" & objFile.Name & "</a><br>"
              End If
            Next
          %>
          <hr>
          <p align="center"><b>Skapad av:</b> Björn G D Persson. <b>Uppdaterad:</b>
            2001-07-07. </p>
        </td>
      </tr>
    </table>
</body>
</html>
