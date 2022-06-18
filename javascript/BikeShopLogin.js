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
        if(loggedIn) {
            myDropdown.innerHTML = "logged in";
        }
      myDropdown.classList.remove('show');
    }
    else if (myDropdown2.classList.contains('show')) {
      myDropdown2.classList.remove('show');
    }
  }
}


/*Use javascript to make check all the data
for this functionality I used 
        *Title: Building Interactive Websites
        *Author: Dr. Alena Denisova
        *Date: 2021
        *Availability: https://moodle.city.ac.uk/pluginfile.php/2237911/mod_resource/content/1/Session%2006%20-%20Javascript.pdf
*/
function $(id) {
    return document.getElementById(id)
}

var allowSubmit = false;

$("Login").addEventListener("submit", (e) => {
    if(!allowSubmit) {
        e.preventDefault();
        checkLoginData();
    } else {
        
    }
        
 })

//check if ther is an input
function checkLoginData() {
    const usernameValue = $("username").value.trim();
    const passwordValue = $("password").value.trim();
    
    if (usernameValue == "" || passwordValue == "") {
        $("usernameTag").style.display = "inline";
        $("usernameTag").innerHTML = "Please fill in this field.";
        
        $("passwordTag").style.display = "inline";
        $("passwordTag").innerHTML = "Please fill in this field.";
    } else {
        allowSubmit = true;
    }
}