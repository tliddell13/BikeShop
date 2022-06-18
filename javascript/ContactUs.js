/* same javascript here as in home page When the user clicks on the button, 
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