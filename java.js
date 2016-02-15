function google()
{
newwin=window.open("http://www.google.com","_blank");
newwin.focus();
}
function mso(object)
{
object.style.backgroundColor="grey";
}
function msup(object)
{
object.style.backgroundColor="black";
}
function msd(object)
{
object.style.backgroundColor="white";
}
document.getElementById("click").onclick=function()
{
document.write("afd");
alert("function generated dialog");
}
function ouch()
{
element=document.getElementById("test");
element.innerHTML="ouch...dont touch me";
}
function restore()
{
document.getElementById("test").innerHTML="Dont get your mouse over here";
}
