/*******************************************************************************
* Filnamn:      addClass.js
* Innehall:     Funktion för att lägga till en CSS-klass till ett element.
* Inskriven av: Bjorn Persson (bjgu0005), bjorn(a)kiltedviking.net.nospam.
* Skapad:       2008-08-09.
* Andrad:       2008-08-??.
* Kommentar:    Denna funktion hittade jag i boken DOM Scripting av J. Keith,
*               Friends of ED, 2005.
*******************************************************************************/

function addClass(element, value)
{
  if(!element.className)
    element.className = value;
  else
  {
    var newClassName = element.className;
    newClassName += " ";
    newClassName += value;
    element.className = newClassName;
  }
}