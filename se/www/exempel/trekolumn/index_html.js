/*******************************************************************************
* Filnamn:    index_html.js
* Innehall:   Kod for att lagga till handelsehanterare for fonstrets OnLoad samt
*             egna funktionerna för funktionalitet i dokument index.html.
* Skapad av:  Bjorn Persson (bjgu0005), bjorn(at)kiltedviking.net.nospam.
* Skapad:     2008-08-09.
* Andrad:     2008-08-22, 2008-08-23.
* Kommentar:  Fungerar *inte* i MSIE 7.0!
*             Jag har fortfarande en del saker att fundera på, bl.a. namnstandard
*             och om jag löst saker på det mest praktiska och effektiva sättet...
*******************************************************************************/

  //Lagg till handelsehanterare for fonstrets OnLoad mha funktionen addLoadEvent
  //  (se filen addLoadEvent.js)
addLoadEvent(setupFunction);

//Funktion som anropas nar sida laddas - lagger till JavaScript-funktionalitet
function setupFunction()
{
  /*** Testa sa att klient forstar metoder - avbryt annars ***/
  if(!document.getElementById)
  {
    alert('FEL: Din webbläsare förstår inte metoden getElementById!');
    return false;
  }
  if(!document.getElementsByTagName)
  {
    alert('FEL: Din webbläsare förstår inte metoden getElementByTagName!');
    return false;
  }
  if(!document.firstChild)
  {
    alert('FEL: Din webbläsare förstår inte egenskapen firstChild!');
    return false;
  }

  if(!document.body.setAttribute)
  {
    alert('FEL: Din webbläsare förstår inte metoden setAttribute!');
    return false;
  }

  /*** Lagg till funktionalitet i webbsida - anropa egna funktioner ***/
  skapaInnehallsforteckning2();
  kopplaFunktionerTillInnehallsforteckning(); //Koppla JavaScript till lankar i innehallsforteckning
  fixaExternaLankar();                        //Fixa sa att ext. lankar öppnas i nytt fonster
  doljAllaAvsnitt();                          //Dolj alla avsnitt
  doljAllKod();                               //Dolj all kod (XHTML och CSS)
  visaInledning();                            //Visa forsta avsnittet
}

//Funktion som skapar en innehallsforteckning (2) fran H3-rubriker (motsvarar, i
// viss man, den for att rakna rader i Lagerfeldt-uppgift)
function skapaInnehallsforteckning2()
{
  var strTemp = "";
  var elemA;
  var elemLi;
  var txt;
  //Hamta referenser till existerande element i dokument (lista och rubriker)
  var elemUl = document.getElementById("innehallsforteckning2");
  var elemH3s = document.getElementsByTagName("h3");

  //For varje rubrik, lagg till ett alternativ i lista (innehallsfortecknin 2)
  for(var i = 0; i < elemH3s.length; i++)
  {
    strTemp = elemH3s[i].id;              //Hamta id for rubrik
    elemA = document.createElement("a");  //Skapa lank

    //Lagg till attribut i lank
    elemA.setAttribute("href", "#" + strTemp);
    elemA.setAttribute("id", "visa" + strTemp.charAt(0).toUpperCase()
      + strTemp.substr(1, strTemp.length) + "2"); //Bygg strang for dess id

    //Skapa textnod for text i lank och lagg till i lank
    txt = document.createTextNode(elemH3s[i].title);
    elemA.appendChild(txt);

    //Skapa alternativ (LI) och lagg till lank som innehall
    elemLi = document.createElement("li");
    elemLi.appendChild(elemA);

    //Lagg till alternativ i lista samt ett mellanslag (for utseendets skull...)
    elemUl.appendChild(elemLi);
    elemUl.appendChild(document.createTextNode("\u0020")); //Lagg till mellanslag...
  }
}

/*
//Funktion som kopplar funktioner till handelser baserat på id - FUNGERAR INTE!!!
function koppla(id)
{
  var elemA = document.getElementById("visa" + id.charAt(0).toUpperCase()
    + id.substr(1, id.length));
  var elemA2 = document.getElementById("visa" + id.charAt(0).toUpperCase()
    + id.substr(1, id.length) + "2");
  strFunk = "visa" + id.charAt(0).toUpperCase() + id.substr(1, id.length);
  elemA.onclick = elemA2.onclick = function() {
    return strFunk();
  };
}
*/

//Kopplar handelser till lankar i innehallsforteckning (langst upp) och
//  innehallsforteckning 2 (langst ner)
function kopplaFunktionerTillInnehallsforteckning()
{
  //koppla("inledning"); //Koppla funktion till handelse (mha funktion ovan)....

  //Hamta referenser till lankar i listor (innehallsforteckningar) och koppla
  // funktion till dess handelse OnClick
  var elemA = document.getElementById("visaInledning"); //Hamta lank for att visa kod
  var elemA2 = document.getElementById("visaInledning2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaInledning();
  };
  elemA = document.getElementById("visaSidstruktur"); //Hamta lank for att visa kod
  elemA2 = document.getElementById("visaSidstruktur2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaSidstruktur();
  };
  elemA = document.getElementById("visaSidcontainer"); //Hamta lank for att visa kod
  elemA2 = document.getElementById("visaSidcontainer2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaSidcontainer();
  };
  elemA = document.getElementById("visaSidhuvud"); //Hamta lank for att visa kod
  elemA2 = document.getElementById("visaSidhuvud2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaSidhuvud();
  };
  elemA = document.getElementById("visaKolumncontainer"); //Hamta lank for att visa kod
  elemA2 = document.getElementById("visaKolumncontainer2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaKolumncontainer();
  };
  elemA = document.getElementById("visaMeny"); //Hamta lank for att visa kod
  elemA2 = document.getElementById("visaMeny2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaMeny();
  };
  elemA = document.getElementById("visaInnehall"); //Hamta lank for att visa kod
  elemA2 = document.getElementById("visaInnehall2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaInnehall();
  };
  elemA = document.getElementById("visaSidfot"); //Hamta lank for att visa kod
  elemA2 = document.getElementById("visaSidfot2"); //Hamta lank for att visa kod
  elemA.onclick = elemA2.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return visaSidfot();
  };
}

//Funktion som lagger till attributet target (=_blank) for externa lankar
function fixaExternaLankar()
{
  var elemAs = document.getElementsByTagName("a");  //Hamta alla lankar (A)
  var attrRel = null;

  for(var i = 0; i < elemAs.length; i++)
  {
    attrRel = elemAs[i].getAttribute("rel");      //Hamta ev. attribut rel
    if(attrRel != null && attrRel == "external")  //Om finns och = external
      elemAs[i].setAttribute("target", "_blank"); //Lagg till attibut target
  }
}

/*** Funktioner for att dolja element av viss kategori ************************/
//Dessa funktioner finns for att "initiera" sidas innehall att visa

//Doljer alla avsnitt i dokument
function doljAllaAvsnitt()
{
  doljInledning();
  doljSidstruktur();
  doljSidcontainer();
  doljSidhuvud();
  doljKolumncontainer();
  doljMeny();
  doljInnehall();
  doljSidfot();
}

//Doljer all kod i dokument
function doljAllKod()
{
  doljXhtml();
  doljCodeSidcontainer();
  doljCodeSidhuvud();
  doljCodeKolumncontainer();
  doljCodeMeny();
  doljCodeInnehall();
  doljCodeSidfot();
}

/*** Funktioner for att visa resp. dolja element ******************************/
//I dessa funktioner har jag valt att anvanda STYLE-attribut istallet for CLASS-
//  attribut da enklare, d.v.s. slipper manipulera strangar med X antal klasser i...

//Funktion som visar element vars id skickas som argument
function visaElement(id)
{
  var elemDiv = document.getElementById(id);        //Hamta DIV med id id
  elemDiv.setAttribute("style", "");                //Ta bort stilen som "odoljer" innehall
}

//Funktion som doljer element vars id skickas som argument
function doljElement(id)
{
  var elemDiv = document.getElementById(id);        //Hamta DIV med id id
  elemDiv.setAttribute("style", "display: none;");  //Lägg till stilen som doljer innehall
}

////////////////////////////////////////////////////////////////////////////////
/// Funktioner for att visa och dolja avsnitt i dokument ///////////////////////
////////////////////////////////////////////////////////////////////////////////

/*** Funktioner for att visa och dolja avsnittet inledning ********************/
function visaInledning()
{
  doljAllaAvsnitt();                                //Dolj alla avsnitt
  visaElement("sectionintroduction");               //Visa valt avsnitt
  return false;                                     //Avbryt handelsen onclick
}

function doljInledning()
{
  doljElement("sectionintroduction");               //Dolj avsnitt
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja avsnittet sidstruktur ******************/
function visaSidstruktur()
{
  doljAllaAvsnitt();                                      //Dolj alla avsnitt
  visaElement("sectionpagestructure");              //Visa valt avsnitt
  return false;                                     //Avbryt handelsen onclick
}

function doljSidstruktur()
{
  doljElement("sectionpagestructure");
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja avsnittet sidcontainer *****************/
function visaSidcontainer()
{
  doljAllaAvsnitt();                                      //Dolj alla avsnitt
  visaElement("sectionpagecontainer");
  return false;                                     //Avbryt handelsen onclick
}

function doljSidcontainer()
{
  doljElement("sectionpagecontainer");
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja avsnittet sidhuvud *********************/
function visaSidhuvud()
{
  doljAllaAvsnitt();                                      //Dolj alla avsnitt
  visaElement("sectionheader");                     //Visa valt avsnitt
  return false;                                     //Avbryt handelsen onclick
}

function doljSidhuvud()
{
  doljElement("sectionheader");
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja avsnittet kolumncontainer **************/
function visaKolumncontainer()
{
  doljAllaAvsnitt();                                      //Dolj alla avsnitt
  visaElement("sectioncolumncontainer");            //Visa valt avsnitt
  return false;                                     //Avbryt handelsen onclick
}

function doljKolumncontainer()
{
  doljElement("sectioncolumncontainer");
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja avsnittet meny/lankar ******************/
function visaMeny()
{
  doljAllaAvsnitt();                                      //Dolj alla avsnitt
  visaElement("sectionmenu");                       //Visa valt avsnitt
  return false;                                     //Avbryt handelsen onclick
}

function doljMeny()
{
  doljElement("sectionmenu");
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja avsnittet innehall ******************/
function visaInnehall()
{
  doljAllaAvsnitt();                                      //Dolj alla avsnitt
  visaElement("sectioncontents");                   //Visa valt avsnitt
  return false;                                     //Avbryt handelsen onclick
}

function doljInnehall()
{
  doljElement("sectioncontents");
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja avsnittet sidfot ******************/
function visaSidfot()
{
  doljAllaAvsnitt();                                      //Dolj alla avsnitt
  visaElement("sectionfooter");                     //Visa valt avsnitt
  return false;                                     //Avbryt handelsen onclick
}

function doljSidfot()
{
  doljElement("sectionfooter");
  return false;                                     //Avbryt handelsen onclick
}

////////////////////////////////////////////////////////////////////////////////
/// Funktioner for att visa och dolja kodavsnitt ///////////////////////////////
////////////////////////////////////////////////////////////////////////////////

/*** Funktioner for att visa och dolja XHTML-kod ******************************/
function visaXhtml()
{
  visaElement("xhtml");                             //Visa kodavsnitt
  var elemA = document.getElementById("visaXhtml"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  txt.nodeValue = "<<Dölj\u00a0XHML-kod>>";         //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return doljXhtml();
  };
  return false;                                     //Avbryt handelsen onclick
}

function doljXhtml()
{
  doljElement("xhtml");
  var elemA = document.getElementById("visaXhtml"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  //var txt = elemA.childNodes[0];     //Hamta forsta barnet i lank, dvs text att visa

  //Buggfix for IE7 - om textnod är tom så existerar den inte...
  if(txt == null)
  {
    txt = document.createTextNode(">>Visa\u00a0XHML-kod<<");
  }
  else
    txt.nodeValue = ">>Visa\u00a0XHML-kod<<";         //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla visa-funktion till händelse onclick
    return visaXhtml();
  };
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja CSS-kod ********************************/
function visaCodeSidcontainer()
{
  visaElement("codesidcontainer");
  var elemA = document.getElementById("visaCodeSidcontainer"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  txt.nodeValue = "<<Dölj\u00a0CSS-kod>>";                  //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return doljCodeSidcontainer();
  };
  return false;                                     //Avbryt handelsen onclick
}

function doljCodeSidcontainer()
{
  doljElement("codesidcontainer");
  var elemA = document.getElementById("visaCodeSidcontainer"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa

  if(txt == null)
    txt = document.createTextNode(">>Visa\u00a0CSS-kod<<");
  else
    txt.nodeValue = ">>Visa\u00a0CSS-kod<<";                  //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten
  elemA.onclick = function() {      //Koppla visa-funktion till händelse onclick
    return visaCodeSidcontainer();
  };
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja CSS-kod ********************************/
function visaCodeSidhuvud()
{
  visaElement("codesidhuvud");
  var elemA = document.getElementById("visaCodeSidhuvud"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  txt.nodeValue = "<<Dölj\u00a0CSS-kod>>";                  //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return doljCodeSidhuvud();
  };
  return false;                                     //Avbryt handelsen onclick
}

function doljCodeSidhuvud()
{
  doljElement("codesidhuvud");
  var elemA = document.getElementById("visaCodeSidhuvud"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa

  if(txt != null)
  {
    txt.nodeValue = ">>Visa\u00a0CSS-kod<<";                  //Andra vardet for lank
    elemA.appendChild(txt);                           //Lagg tillbaka texten
  }
  elemA.onclick = function() {      //Koppla visa-funktion till händelse onclick
    return visaCodeSidhuvud();
  };
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja CSS-kod ********************************/
function visaCodeKolumncontainer()
{
  visaElement("codekolumncontainer");
  var elemA = document.getElementById("visaCodeKolumncontainer"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  txt.nodeValue = "<<Dölj\u00a0CSS-kod>>";                  //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return doljCodeKolumncontainer();
  };
  return false;                                     //Avbryt handelsen onclick
}

function doljCodeKolumncontainer()
{
  doljElement("codekolumncontainer");
  var elemA = document.getElementById("visaCodeKolumncontainer"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa

  if(txt != null)
  {
    txt.nodeValue = ">>Visa\u00a0CSS-kod<<";                  //Andra vardet for lank
    elemA.appendChild(txt);                           //Lagg tillbaka texten
  }
  elemA.onclick = function() {      //Koppla visa-funktion till händelse onclick
    return visaCodeKolumncontainer();
  };
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja CSS-kod for meny ***********************/
function visaCodeMeny()
{
  visaElement("codemeny");
  var elemA = document.getElementById("visaCodeMeny"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  txt.nodeValue = "<<Dölj\u00a0CSS-kod>>";                  //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return doljCodeMeny();
  };
  return false;                                     //Avbryt handelsen onclick
}

function doljCodeMeny()
{
  doljElement("codemeny");
  var elemA = document.getElementById("visaCodeMeny"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa

  if(txt != null)
  {
    txt.nodeValue = ">>Visa\u00a0CSS-kod<<";                  //Andra vardet for lank
    elemA.appendChild(txt);                           //Lagg tillbaka texten
  }
  elemA.onclick = function() {      //Koppla visa-funktion till händelse onclick
    return visaCodeMeny();
  };
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja CSS-kod for innehall *******************/
function visaCodeInnehall()
{
  visaElement("codeinnehall");
  var elemA = document.getElementById("visaCodeInnehall"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  txt.nodeValue = "<<Dölj\u00a0CSS-kod>>";                  //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return doljCodeInnehall();
  };
  return false;                                     //Avbryt handelsen onclick
}

function doljCodeInnehall()
{
  doljElement("codeinnehall");
  var elemA = document.getElementById("visaCodeInnehall"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa

  if(txt != null)
  {
    txt.nodeValue = ">>Visa\u00a0CSS-kod<<";                  //Andra vardet for lank
    elemA.appendChild(txt);                           //Lagg tillbaka texten
  }
  elemA.onclick = function() {      //Koppla visa-funktion till händelse onclick
    return visaCodeInnehall();
  };
  return false;                                     //Avbryt handelsen onclick
}

/*** Funktioner for att visa och dolja CSS-kod for sidfot *********************/
function visaCodeSidfot()
{
  visaElement("codesidfot");
  var elemA = document.getElementById("visaCodeSidfot"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa
  txt.nodeValue = "<<Dölj\u00a0CSS-kod>>";                  //Andra vardet for lank
  elemA.appendChild(txt);                           //Lagg tillbaka texten

  elemA.onclick = function() {      //Koppla dolj-funktion till händelse onclick
    return doljCodeSidfot();
  };
  return false;                                     //Avbryt handelsen onclick
}

function doljCodeSidfot()
{
  doljElement("codesidfot");
  var elemA = document.getElementById("visaCodeSidfot"); //Hamta lank for att visa kod
  var txt = elemA.firstChild;     //Hamta forsta barnet i lank, dvs text att visa

  if(txt != null)
  {
    txt.nodeValue = ">>Visa\u00a0CSS-kod<<";                  //Andra vardet for lank
    elemA.appendChild(txt);                           //Lagg tillbaka texten
  }
  elemA.onclick = function() {      //Koppla visa-funktion till händelse onclick
    return visaCodeSidfot();
  };
  return false;                                     //Avbryt handelsen onclick
}