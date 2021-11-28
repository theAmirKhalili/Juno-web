var myIndex = 0;
slideshow();

function slideshow() {
  var i;
  var x = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  x[myIndex-1].style.display = "grid";  
  dots[myIndex-1].className += " active";
  setTimeout(slideshow, 3500);
}