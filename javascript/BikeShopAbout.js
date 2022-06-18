/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content. Made two functions to do this
for either bikes or account
to create this functionallity I used w3schools dropdown menu in Navbar
https://www.w3schools.com/howto/howto_css_dropdown_navbar.asp
*/
function bikesDropdown() {
  document.getElementById("bikesDropdown").classList.toggle("show");
}

function accountDropdown() {
  document.getElementById("accountDropdown").classList.toggle("show");
}

function mobile() {
  var x = document.getElementById("topnav");
  var y = document.getElementById("center");
  var z = document.getElementById("account");
  if (x.className === "navbar") {
    x.className += " responsive";
  } else {
    x.className = "navbar";
  }
  if (y.className === "center") {
    y.className += " responsive";
  } else {
    y.className = "center";
  }
  if (z.className === "accountDropdown") {
    z.className += " responsive";
  } else {
    z.className = "accountDropdown";
  }
}


// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("accountDropdown");
  var myDropdown2 = document.getElementById("bikesDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
    else if (myDropdown2.classList.contains('show')) {
      myDropdown2.classList.remove('show');
    }
  }
}
/* this is the javascript from the w3shcools tutorial i used for the slideshow*/
var slideIndex = 1;
showSlides(slideIndex);

// nexttttt
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// thumbnail
function currentSlide(n) {
  showSlides(slideIndex = n);
}

//checks which slide to show
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}