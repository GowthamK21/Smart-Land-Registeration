var i = 0;
var txt = 'Welcome to Smart Land Registration.This is a Block Chain Project for Automating and Securing the Land Registeration Processes.';
var speed = 50;

function typeWriter() {
  if (i < txt.length) {
    document.getElementById("welcome").innerHTML += txt.charAt(i);
    i++;
    setTimeout(typeWriter, speed);
  }
}

function launch()
{
    
    document.getElementsById("intro").style.display="none";
    alert("exited launch");
}