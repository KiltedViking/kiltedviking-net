<html>
<head>
  <title>Exempel med PHP och MySQLi</title>
</head>
<body>
<h1>Exempel med PHP och MySQLi</h1>
<h2>SELECT * FROM studenter</h2>
<?
  $strServer = "localhost";
  $strAnvId = "username";
  $strLosenord = "password";
  $strDatabas = "test";

  $db = new mysqli($strServer, $strAnvId, $strLosenord, $strDatabas);

  $sql = "SELECT * FROM studenter";

  if($res = $db->query($sql))
  {
    while($rad = $res->fetch_assoc())
    {
      print("studentdata: ".$rad['persnr']." ".$rad['namn']."<br>");
    }
    $res->free();
  }
  else
    print("FEL: Kunde inte utföra fråga eller fråga returnerarade inga poster.");

  $db->close();
?>
</body>
</html>