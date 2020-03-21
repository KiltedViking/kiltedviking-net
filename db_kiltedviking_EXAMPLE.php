<?php
// Rename file by removing _EXAMPLE from filename

//Change four settings below to connect to your database
$strUrl = "host_name";          //Address to database server
$strUserId = "user_name";
$strPwd = "password";
$strDbname = "database_name";    //Database to connect to
$blnNoDb = FALSE;

// Connect using original mysql connection
// if(($link = @mysql_connect($strUrl, $strUserId, $strPwd)))
// {
//   if(!mysql_select_db($strDbname))
//     $blnNoDb = TRUE;
// }

// Connect using new mysqli connection
$link = new mysqli($strUrl, $strUserId, $strPwd, $strDbname);
if($link->connect_errno) {
  $blnNoDb = TRUE;
}
?>