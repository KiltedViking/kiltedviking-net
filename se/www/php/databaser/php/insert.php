<html>
<head>
  <title>Exempel med PHP och MySQLi</title>
</head>
<body>
<h1>Exempel med PHP och MySQLi</h1>
<h2>INSERT INTO studenter VALUES('9123456789', 'Oscar')</h2>
<?
  $strServer = "localhost";
  $strAnvId = "username";
  $strLosenord = "password";
  $strDatabas = "test";

  $db = new mysqli($strServer, $strAnvId, $strLosenord, $strDatabas);

  $sql = "INSERT INTO studenter VALUES('9123456789', 'Oscar')";

  if($res = $db->query($sql))
    print("Student lades till");
  else
    print("FEL: Student lades INTE till. Eventuellt finns student redan.");

  $db->close();
?>
</body>
</html>