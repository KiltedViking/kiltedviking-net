<HTML>
<HEAD>
  <TITLE>Kontrollstrukturer</TITLE>
</HEAD>
<BODY>
<H1>Kontrollstrukturer</H1>
<H2>break</H2>
<?
  $intTimme = date("H");  //Hämta aktuell timme
  
    //Loopa från 0 till 23...
  for($varTal = 0; $varTal < 24; $varTal++)
  {
    if($intTimme == $varTal)  //Om timme är samma som loopvariabel...
      break;				  //... avbryt loop
    print "$varTal | ";		  //Skriv ut loopvariabel
  }
  print "<BR>Timme är: $intTimme.";
?>

<H2>continue</H2>
<?
    //Loopa från 0 till 23...
  for($varTal = 0; $varTal < 24; $varTal++)
  {
    if($varTal % 2)			  //Om loopvariabel inte  är jämt delbar med 2...
      continue;				  //... hoppa till nästa loopvarv
    print "$varTal | ";		  //Skriv ut loopvariabel
  }
?>

</BODY>
</HTML>
