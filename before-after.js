


var divisor1 = document.getElementById("divisor1"),
    slider1 = document.getElementById("slider1"),
    divisor2 = document.getElementById("divisor2"),
    slider2 = document.getElementById("slider2"),
    divisor3 = document.getElementById("divisor3"),
    slider3 = document.getElementById("slider3");


function moveDivisor1() {
 
	divisor1.style.width = slider1.value+"%";
}

function moveDivisor2() {
 
	divisor2.style.width = slider2.value+"%";
}
function moveDivisor3() {
 
	divisor3.style.width = slider3.value+"%";
}



    moveDivisor1();  
	moveDivisor2();
    moveDivisor3();

