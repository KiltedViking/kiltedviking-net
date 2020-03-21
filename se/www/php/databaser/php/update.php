<html>
<head>
  <title>Exempel med PHP och MySQLi</title>
</head>
<body>
<h1>Exempel med PHP och MySQLi</h1>
<h2>UPDATE studenter SET namn='Pelle' WHERE persnr='9123456789'</h2>
<?
  $strServer = "localhost";
  $strAnvId = "username";
  $strLosenord = "password";
  $strDatabas = "test";

  $db = new mysqli($strServer, $strAnvId, $strLosenord, $strDatabas);

  $sql = "UPDATE studenter SET namn='Pelle' WHERE persnr='9123456789'";

  if($res = $db->query($sql))
    print("Student uppdaterades");
  else
    print("FEL: Student uppdaterades INTE. Eventuellt finns inte student.");

  $db->close();
?>
</body>
</html>