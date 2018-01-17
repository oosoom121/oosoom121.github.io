<!-- Hide scripts
var arrayLength;
TodaysDate = new Date();

DOW = new Array("Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday","Saturday");

Mnths = new Array("January","February","March","April","May","June","July","August","September","October","November","December");


DispDate = new Array(6);
DispDate[0] = TodaysDate.getDay();
DispDate[1] = TodaysDate.getMonth();
DispDate[2] = TodaysDate.getDate();
DispDate[3] = TodaysDate.getFullYear();
DispDate[4] = TodaysDate.getHours();
DispDate[5] = TodaysDate.getMinutes();

arrayLength = DispDate.length;

//var daymonth = 
document.write(DOW[DispDate[0]] + ", " + Mnths[DispDate[1]] + " " + DispDate[2] + ", " + DispDate[3] );

// stop hidding scripts -->