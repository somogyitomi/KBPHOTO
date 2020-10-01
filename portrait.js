
if(window.innerWidth > 567){

function openLightbox(){
  document.getElementById('lightbox').style.display = 'table';
  document.getElementsByClassName('row')[0].style.display = 'none';
}



function closeLightbox(){
  document.getElementById('lightbox').style.display = 'none';
  document.getElementsByClassName('row')[0].style.display = 'flex';
}


var imgIndex = 1;
showImg(imgIndex);


// Next/previous controls
function plusImg(n) {
  showImg(imgIndex += n);
}


// Thumbnail image controls
function currentImg(n) {
  showImg(imgIndex = n);
}


function showImg(n) {
  var i;
  var img = document.getElementsByClassName("lightbox-image");
  if (n > img.length) {imgIndex = 1}
  if (n < 1) {imgIndex = img.length}
  for (i = 0; i < img.length; i++) {
    img[i].style.display = "none";
  }
  img[imgIndex-1].style.display = "table-cell";
  
}
  
}