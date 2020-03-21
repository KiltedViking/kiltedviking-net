<html>
<body>
<form>
<p>Fyll i ditt namn: <input type="text" name="Fornamn">
  <input type="submit" value="Skicka"></p>
</form>
<hr>
<p>
<?
   print "Ditt namn &auml;r <b>".$_GET['Fornamn']."</b>.";
?>
</p>
<hr>
<p>
<?
  if(isset($_GET['Fornamn']))
   print "Ditt namn &auml;r <b>" . $_GET['Fornamn'] . "</b>.";
?>
</p>
</body>
</html>
