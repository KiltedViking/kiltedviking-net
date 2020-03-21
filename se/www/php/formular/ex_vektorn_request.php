<html>
<body>
<form>
<p>Fyll i ditt namn: <input type="text" name="Fornamn">
  <input type="submit" value="Skicka"></p>
</form>
<hr>
<form method="post">
<p>Fyll i ditt namn: <input type="text" name="Fornamn">
  <input type="submit" value="Skicka"></p>
</form>
<hr>
<p>
<?
   print "Ditt namn &auml;r <b>".$_REQUEST['Fornamn']."</b>.";
?>
</p>
<hr>
<p>
<?
  if(isset($_REQUEST['Fornamn']))
   print "Ditt namn &auml;r <b>" . $_REQUEST['Fornamn'] . "</b>.";
?>
</p>
</body>
</html>
