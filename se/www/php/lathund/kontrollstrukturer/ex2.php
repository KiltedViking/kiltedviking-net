<HTML>
<HEAD>
  <TITLE>Kontrollstrukturer</TITLE>
</HEAD>
<BODY>
<H1>Kontrollstrukturer</H1>
<H2>break</H2>
<?
  $intTimme = date("H");  //H�mta aktuell timme
  
    //Loopa fr�n 0 till 23...
  for($varTal = 0; $varTal < 24; $varTal++)
  {
    if($intTimme == $varTal)  //Om timme �r samma som loopvariabel...
      break;				  //... avbryt loop
    print "$varTal | ";		  //Skriv ut loopvariabel
  }
  print "<BR>Timme �r: $intTimme.";
?>

<H2>continue</H2>
<?
    //Loopa fr�n 0 till 23...
  for($varTal = 0; $varTal < 24; $varTal++)
  {
    if($varTal % 2)			  //Om loopvariabel inte  �r j�mt delbar med 2...
      continue;				  //... hoppa till n�sta loopvarv
    print "$varTal | ";		  //Skriv ut loopvariabel
  }
?>

</BODY>
</HTML>
