/* 

When the user clicks on the button, 
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

/*Use javascript to make sure they dont try to schedule an appointment outside the allowed hours
for this functionality I used 
        *Title: Building Interactive Websites
        *Author: Dr. Alena Denisova
        *Date: 2021
        *Availability: https://moodle.city.ac.uk/pluginfile.php/2237911/mod_resource/content/1/Session%2006%20-%20Javascript.pdf
*/
var allowSubmit = false;
//get the id function
function $(id) {
    return document.getElementById(id)
}


$("appointment").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkAppointment();
    } else {
        
    }
})

function checkAppointment() {
    
    const appointmentValue = new Date($("appointmentTime").value.trim());
    const appointmentValueTime = appointmentValue.getHours();
    const appointmentValueDay = appointmentValue.getDay();
    var currentDate = new Date();
    currentDate.setHours(0,0,0,0);
        if (appointmentValue == "") {
            $("appointmentTag").style.display = "inline";
            $("appointmentTag").innerHTML = "Please fill in this field";
        } else if(appointmentValueTime > 19 || appointmentValueTime < 9 ){
            $("appointmentTag").style.display = "inline";
            $("appointmentTag").innerHTML = "Shop not open during this time. Please select another.";
        } else if(appointmentValueDay == 5 || appointmentValueDay == 6) {
            $("appointmentTag").style.display = "inline"; 
            $("appointmentTag").innerHTML = "Shop not open on this day. Please select another.";
        } else if(appointmentValue < currentDate || appointmentValue == currentDate) {
            $("appointmentTag").style.display = "inline";
            $("appointmentTag").innerHTML = "Date selected is in the past.";
        }  else {
            $("appointmentTag").style.display = "none";
            allowSubmit = true;
        }
}