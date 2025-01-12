<?php
require('db_kiltedviking.php'); 
$blnNewsAvailable = false;
/*** Print news ***************************************************************/
if($link)
{
    //Get the last three items of news
    $strSql = "SELECT ndate, npreamble, ncategory FROM news ORDER BY ndate DESC LIMIT 0, 3";

    if($res = $link->query($strSql))
    {
        $i = 0; //Counter for number of news items to show
        print("<ul class=\"list-group list-group-flush\">");
        //While more news items or counter less than 4
        while(($arr = $res->fetch_assoc()) && ($i < 4))
        {
            print("<li class=\"list-group-item\">");
            print("<h4>".$arr['ndate']."</h4>\n");
            print("<p>".$arr['npreamble']."</p>\n");
            print("</li>");
            $i++; //Increase counter
        }
        print("<li class=\"list-group-item\"><a href=\"news/\">More news ...</a></li>\n");
        print("</ul>");

        $blnNewsAvailable = true;
    }
    else
    {
        print("<p>Sorry, no news available...<br />");
        print("<span class=\"smallertextlight\">(can't find table)</span></p>\n");
    }
}
else
{
    print("<p>Sorry, no news available...<br />");
    if(!$link)
        print("<span class=\"smallertextlight\">(can't connect to server)</span>");
    if($blnNoDb)
        print("<span class=\"smallertextlight\">(can't connect to database)</span>");
    print("</p>\n");
}

// if($blnNewsAvailable)
//     print("<p><a href=\"news/\">More news ...</a></p>\n");
?>