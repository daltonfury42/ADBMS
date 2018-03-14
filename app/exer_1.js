document.write(5 + 6);
function showone()
{
document.getElementById("showexisting").style.display="none";
document.getElementById("shownew").style.display="none";
document.getElementById("showone").style.display="inline";
}

function shownew()
{
	document.write(5 + 7);

document.getElementById("showone").style.display="none";
document.getElementById("showexisting").style.display="none";
document.getElementById("shownew").style.display="inline";
}

function showexisting()
{
	document.write(5 + 8);

document.getElementById("showone").style.display="none";
document.getElementById("shownew").style.display="none";
document.getElementById("showexisting").style.display="inline";
}