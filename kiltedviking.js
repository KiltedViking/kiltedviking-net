addLoadEvent(startSetup);

//Searches for tags with class name containing searchClass, starting in DOM 
//  node startNode. Returns array with found nodes.
//Modified version from http://domscripting.com/blog/display/18
function getElementsByClass(startNode, searchClass, tag) 
{
  var classElements = new Array();
  var els = startNode.getElementsByTagName(tag);
  var elsLen = els.length;
  //var pattern = new RegExp("\b"+searchClass+"\b");
  var pattern = new RegExp(searchClass);
  
  for (i = 0, j = 0; i < elsLen; i++) 
  {
    //if ( pattern.test(els[i].className) ) 
    if ( els[i].className.match(pattern) ) 
    {
      classElements[j] = els[i];
      j++;
    }
  }
  
  return classElements;
}

function startSetup()
{
  /*** Test so that client understands methods - otherwise inform visitor and abort ***/
  if(!document.getElementById)
  {
    alert('ERROR: Your browser doesn\'t understand the method getElementById!');
    return false;
  }
  if(!document.getElementsByTagName)
  {
    alert('ERROR: Your browser doesn\'t understand the method getElementByTagName!');
    return false;
  }
  if(!document.createElement)
  {
    alert('ERROR: Your browser doesn\'t understand the method createElement!');
    return false;
  }
  
  if(!document.appendChild)
  {
    alert('ERROR: Your browser doesn\'t understand the method appendChild!');
    return false;
  }
  
  if(!document.firstChild)
  {
    alert('ERROR: Your browser doesn\'t understand the method firstChild!');
    return false;
  }

  if(!document.body.setAttribute)
  {
    alert('ERROR: Your browser doesn\'t understand the method setAttribute!');
    return false;
  }
  
  setupExternalLinks(); //Add OnClick event to external links
}

/* Create the new window (added to external links in method setupExternalLinks()).
  From http://www.456bereastreet.com/archive/200605/using_javascript_instead_of_target_to_open_new_windows/ */
function openInNewWindow() 
{
  // Change "_blank" to something like "newWindow" to load all links in the same new window
  var newWindow = window.open(this.getAttribute('href'), 'externallinks');
  newWindow.focus();
  return false;
}

/* Add the openInNewWindow function to the onclick event of links with a class name of "non-html" 
  Modified version of getNewWindowLinks() from http://www.456bereastreet.com/archive/200605/using_javascript_instead_of_target_to_open_new_windows/ */
function setupExternalLinks() 
{
  var strNewWindowAlert = " >>";  //Text to use to alert the user that a new window will be opened
  var strNewWindowClass = "externallink";
  var objWarningText;
  var strWarningText;
  var link;
  var links = document.getElementsByTagName('a'); // Find all links
  var pattern = new RegExp(strNewWindowClass);
  
  for (var i = 0; i < links.length; i++) 
  {
    link = links[i];
    //if (/\bexternallink\b/.exec(link.className)) 
    if (link.className.match(pattern)) 
    {
      // Create an em element containing the new window warning text and insert it after the link text
      objWarningText = document.createElement("em");
      strWarningText = document.createTextNode(strNewWindowAlert);
      objWarningText.appendChild(strWarningText);
      link.appendChild(objWarningText);
      link.onclick = openInNewWindow;
    }
  }
  
  objWarningText = null;
}