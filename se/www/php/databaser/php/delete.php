<html>
<head>
  <title>Exempel med PHP och MySQLi</title>
</head>
<body>
<h1>Exempel med PHP och MySQLi</h1>
<h2>DELETE FROM studenter WHERE persnr='9123456789'</h2>
<?
  $strServer = "localhost";
  $strAnvId = "username";
  $strLosenord = "password";
  $strDatabas = "test";

  $db = new mysqli($strServer, $strAnvId, $strLosenord, $strDatabas);

  $sql = "DELETE FROM studenter WHERE persnr='9123456789'";

  if($res = $db->query($sql))
    print("Student togs bort... eller inte...");
  else
    print("FEL: Student togs INTE bort. Eventuellt finns inte student.");

  $db->close();
?>
</body>
</html>