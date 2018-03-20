window.onload = function () {
	DisplayCurrentTime();
};
function DisplayCurrentTime() {
	window.setTimeout("DisplayCurrentTime()", 1000);
	var date = new Date();
	var hours = date.getHours() > 12 ? date.getHours() - 12 : date.getHours();
	var am_pm = date.getHours() >= 12 ? "PM" : "AM";
	hours = hours < 10 ? "0" + hours : hours;
	var minutes = date.getMinutes() < 10 ? "0" + date.getMinutes() : date.getMinutes();
	var seconds = date.getSeconds() < 10 ? "0" + date.getSeconds() : date.getSeconds();
	time = hours + ":" + minutes + ":" + seconds + " " + am_pm;
	var lblTime = document.getElementById("lblTime");
	lblTime.innerHTML = time;
};