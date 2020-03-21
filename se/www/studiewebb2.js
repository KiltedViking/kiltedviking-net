/******************************************************************************
* Purpose:			Function called when page is loaded.
* Created by: 	Björn G.D. Persson, kiltedviking.net, 2011-07-19.
* Requirements:	jQuery framework
******************************************************************************/
//Function called when page loaded that waits until page is fully loaded.
$(document).ready(function()
{
	//Using anchors of class externallink, add attribute target, and append a postfix.
	 $("a.externallink").attr("target", "_blank").append("&nbsp;&gt;&gt;");
});

function oppna(fil) { window.open(fil,'Exempel', 'resizable=1,toolbar=1,status=1,scrollbars=1,width=700,height=480') }