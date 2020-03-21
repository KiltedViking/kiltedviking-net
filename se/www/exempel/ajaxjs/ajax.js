/*******************************************************************************
* Purpose:  
* Created by: Björn G.D. Persson (bjpe0800)
* Created:    2012-02-26
* Comments:   This class is based on the class nat.InnehallsLaddare, which was
*             supplied to students on the course Web 2.0 with AJAX at miun.se
*             (i.e. it's not my doing :-)).
*******************************************************************************/
//Create namespace
var net = net || ();
//---------------------------------------------------------------------
// Define constants for AJAX requests
net.READY_STATE_UNINITIALIZED = 0;
net.READY_STATE_LOADING = 1;
net.READY_STATE_LOADED = 2;
net.READY_STATE_INTERACTIVE = 3;
net.READY_STATE_COMPLETE = 4;

//---------------------------------------------------------------------
// Klass som hämtar innehåll från en datakälla
net.Ajax = function(url, eventHandler, errorFunction)
{
  this.url = url;
  this.XHRobjekt = null;
  this.eventHandler = eventHandler;

  if (felfunktion) 
    this.felfunk = felfunktion;
  else 
    this.felfunk = this.standardFelfunktion;
  
  this.skapaXHRochLaddaAsynkront();
}

//---------------------------------------------------------------------
net.Ajax.prototype.skapaXHRochLaddaAsynkront = function() 
{
  //skapar först ett XHR-objekt på samma sätt som i tidigare lektioner
  try 
  {
    this.XHRobjekt = new XMLHttpRequest();  // Firefox, Opera, ...
  } 
  catch(err1) 
  {
    try 
	{
      this.XHRobjekt = new ActiveXObject("Microsoft.XMLHTTP");  // Några IE ver
    } 
	catch(err2) 
	{
      try 
	  {
        this.XHRobjekt = new ActiveXObject("Msxml2.XMLHTTP");  // Några IE ver
      } 
	  catch(err3) 
	  {
        this.XHRobjekt = false;
      }
    }
  }
  
  //När XHR-objektet är skapat startar vi asynkron förfrågan
  if (this.XHRobjekt) 
  {
    try 
	{
      var dettaObjekt = this;
      this.XHRobjekt.onreadystatechange = function() 
	  {
        dettaObjekt.klartTillstand.call(dettaObjekt);  
      }
      this.XHRobjekt.open('GET', this.url, true);
      this.XHRobjekt.send(null)
    } 
    catch (err) 
	{
      this.felfunk.call(this);
    }//try catch slut
  }//if slut
}//funktionen skapaXHRochLaddaAsynkront

//---------------------------------------------------------------------
//Denna funktion startar händelseshanterare/felhanterare 
net.Ajax.prototype.klartTillstand = function() 
{
  var ettXHR = this.XHRobjekt;
  var klar = ettXHR.readyState;
  //Kollar om tilståndet är 4, dvs allt är levererat från servern och ok
  if (klar == nat.READY_STATE_COMPLETE) 
  {
    var httpStatus = ettXHR.status;
    
    //ska nu aktivera antingen händelsehanteraren eller felhantereraren
    if (httpStatus == 200 || httpStatus == 0) 
	  this.handelsefunk.call(this);
    else 
	  this.felfunk.call(this);
  }//klar-kontroll slut
}//funktionen klartTilstand slut
    
//---------------------------------------------------------------------
//En standard felfunktion som körs om ingen annan felfunktion är angiven
net.Ajax.prototype.standardFelfunktion = function() 
{
    alert("fel vid hämtning av data!"
          + "\n\nreadyState:" + this.XHRobjekt.readyState
          + "\nstatus: " + this.XHRobjekt.status
          + "\nheaders: " + this.XHRobjekt.getAllResponseHeaders()
    );// varningsrutan slut
}//standard felfunktion slut
