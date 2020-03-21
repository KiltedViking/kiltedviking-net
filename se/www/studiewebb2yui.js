/******************************************************************************
* Purpose:			Function called when page is loaded.
* Created by: 	Björn G.D. Persson, kiltedviking.net, 2012-03-10.
* Requirements:	YUI framework
******************************************************************************/
//Function called when page loaded that waits until page is fully loaded (?).
YUI().use("node", function(Y) {
  //Grab all elements of class externallink, add target attribute to them, and append >>
  Y.all(".externallink").set("target", "_blank").append("&nbsp;&gt;&gt;");
});

//Function to open target in new window
function oppna(fil) { window.open(fil,'Exempel', 'resizable=1,toolbar=1,status=1,scrollbars=1,width=700,height=480') }