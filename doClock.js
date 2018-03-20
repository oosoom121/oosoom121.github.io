<!--
/*
Credit must stay intact for use
Java-scripts.net and http://wsabstract.com 
for this script
*/

function doClock() {
   window.setTimeout( "doClock()", 1000);
   today = new Date();
   self.status = today.toString();
}

doClock()
//-->
