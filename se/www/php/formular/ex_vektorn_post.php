<html>
<body>
<form method="post">
<p>Fyll i ditt namn: <input type="text" name="Fornamn">
  <input type="submit" value="Skicka"></p>
</form>
<hr>
<p>
<?
   print "Ditt namn &auml;r <b>".$_POST['Fornamn']."</b>.";
?>
</p>
<hr>
<p>
<?
  if(isset($_POST['Fornamn']))
   print "Ditt namn &auml;r <b>" . $_POST['Fornamn'] . "</b>.";
?>
</p>
</body>
</html>
