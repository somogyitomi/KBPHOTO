function myFunction(x) {
  x.classList.toggle("open");
  
   var y = document.getElementById("myLinks");
  if (y.style.display === "block") {
    y.style.display = "none";
  } else {
    y.style.display = "block";
  }
}

var buttonsSize = document.getElementById('myLinks');
function resize(){
if (buttonsSize.style.display !== "none"){
buttonsSize.style.height = innerHeight - 50}
}

resize();