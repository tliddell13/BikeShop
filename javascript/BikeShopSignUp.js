
 
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


/*Use javascript to make check all the data
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

//use an event listener to check if the form should be submitted
$("signUp").addEventListener("submit", (e) => {
    if (!allowSubmit) {
        e.preventDefault();
        checkSignUpData();
    } else {
        
    }
})

function checkSignUpData() {
    //get all the values so they can be checked
    const firstNameValue = $("fname").value.trim();
    const lastNameValue = $("lname").value.trim();
    const usernameValue = $("username").value.trim();
    const DOBValue = $("DOB").value.trim();
    const numberValue = $("number").value.trim();
    const emailValue = $("email").value.trim();
    const passwordValue = $("password").value.trim();
    const password2Value = $("password2").value.trim();
    
    //check the format of the name and password to make sure they are acceptabl
    var name_valid = /^[A-Za-z]+$/;
    var pass_valid = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{6,15}$/; 

    
    //makes sure a value is given for first and last names and make sure its only letters
    var fnameValid = false;
    if (firstNameValue == "") {
        $("fnameTag").style.display = "inline";
        $("fnameTag").innerHTML = "Please fill in this field";
    } else if (!firstNameValue.match(name_valid)) {
        $("fnameTag").style.display = "inline";
        $("fnameTag").innerHTML = "Alphabetical characters only.";
    } else {
        $("fnameTag").style.display = "none";
        fnameValid = true;
    }
    
    var lnameValid = false;
    if (lastNameValue == "") {
        $("lnameTag").style.display = "inline";
        $("lnameTag").innerHTML = "Please fill in this field";
    } else if (!lastNameValue.match(name_valid)) {
        $("lnameTag").style.display = "inline";
        $("lnameTag").style.innerHTML = "Alphabetical characters only.";
    } else {
        $("lnameTag").style.display = "none";
        lnameValid = true;
    }
    
    //check for username
    var usernameValid = false;
    if (usernameValue =="") {
        $("usernameTag").style.display = "inline";
        $("usernameTag").innerHTML = "Please fill in this field";
    } else {
        $("usernameTag").style.display = "none";
        usernameValid = true;
    }
    
    //check for DOB
    var DOBValid = false;
    if (DOBValue == "") {
        $("DOBTag").style.display = "inline";
        $("DOBTag").innerHTML = "Please fill in this field";
    } else {
        $("DOBTag").style.display = "none";
        DOBValid = true;
    }
    
    //check for uk phone number 
    var numberValid = false;
    if (numberValue == "") {
        $("numberTag").style.display = "inline";
        $("numberTag").innerHTML = "Please fill in this field";
    } else if(numberValue.length != 11) {
        $("numberTag").style.display = "inline";
        $("numberTag").innerHTML = "Please enter an 11 digit phone number";  
    } else {
        $("numberTag").style.display = "none";
        numberValid = true;
    }
    
    //check for a valid email format
    var emailValid = false;
    if (emailValue == "") {
        $("emailTag").style.display = "inline";
        $("emailTag").innerHTML = "Please fill in this field";
    } else if((!emailValue.includes("@") && (!emailValue.includes(".com"))) || (!emailValue.includes("@") || !emailValue.includes(".com"))) {
        $("emailTag").style.display = "inline";
        $("emailTag").innerHTML = "Please enter a valid email";  
    } else {
        $("emailTag").style.display = "none";
        emailValid = true;
    }
    
    //check for a valide password format
    var passwordValid = false;
    if (passwordValue == "") {
        $("passwordTag").style.display = "inline";
        $("passwordTag").innerHTML = "Please fill in this field";
    } else if(!passwordValue.match(pass_valid)) {
        $("passwordTag").style.display = "inline";
        $("passwordTag").innerHTML = "Password must be 6-15 characters with at least one uppercase, one lowercase letters, one number and a special character.";  
    } else {
        $("passwordTag").style.display = "none";
        passwordValid = true;
    }
    
    //passwords must match
    var password2Valid = false;
    if (password2Value == "") {
        $("password2Tag").style.display = "inline";
        $("password2Tag").innerHTML = "Please fill in this field";
    } else if(password2Value != passwordValue) {
        $("password2Tag").style.display = "inline";
        $("password2Tag").innerHTML = "Passwords do not match";  
    } else {
        $("password2Tag").style.display = "none";
        password2Valid = true;
    }
    
    //this function checks that all the above is good
    function isValid() {
        if(fnameValid && lnameValid && usernameValid && DOBValid && numberValid && emailValid && passwordValid && password2Valid) {
            allowSubmit = true;
        }
    }
    isValid();
}












