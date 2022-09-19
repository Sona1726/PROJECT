<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Registration</title>

 

    <link rel="stylesheet" href="patient_css.css">

 

    <link rel="stylesheet" href="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/css/intlTelInput.css" />

 

    <script src="https://cdn.tutorialjinni.com/intl-tel-input/17.0.8/js/intlTelInput.min.js"> </script>

    <script>

         function verify_firstname() {  

// VALIDATION FOR FIRSTNAME------------------------------------------------------------------------------------------------------------------------------------------------------------
var fname=document.myform.firstname.value;
var regex = /^[a-zA-Z\s]+$/;                
        
if(fname == ""){
document.getElementById("message").innerHTML = "**First Name  cannot be Empty**";  
return false;  
}

if((fname.length <= 2) || (fname.length > 20)) {
document.getElementById("message").innerHTML = "**First Name length must be between 2 and 20 **";  
return false;  
}

if(!isNaN(fname)){
document.getElementById("message").innerHTML = "****First Name can only contain characters ";  
return false;  
}

if(regex.test(fname) ==false) {
          document.getElementById("message").innerHTML = "****First Name can only contain characters  and no digits **";
}


// VALIDATION FOR LASTNAME-----------------------------------------------------------------------------------------------------------------------------------------------------------------------

var lname=document.myform.lastname.value;
if(lname == ""){
document.getElementById("message1").innerHTML = "****Lastname cannot be Empty **";  
return false;  
}

if((lname.length <= 2) || (lname.length > 20)) {
document.getElementById("message1").innerHTML = "****Lastname length must be between 2 and 20 **";  
return false;  
}

if(!isNaN(lname)){
document.getElementById("message1").innerHTML = "****only characters are allowed in Lastname ** ";  
return false;  
}

if(regex.test(lname) === false) {
          document.getElementById("message1").innerHTML = "***Last Name can only contain characters and  no digits ** ";
}

//VALIDATION FOR EMAIL----------------------------------------------------------------------------------------------------------------------------------------------------------
var emails=document.myform.email.value;
if(emails == ""){
document.getElementById("message2").innerHTML =" ** Please fill the email id` field **";
return false;
}

if(emails.indexOf('@') <= 0 ){
document.getElementById("message2").innerHTML =" ** @ Invalid Position **";
return false;
}

if((emails.charAt(emails.length-4)!='.') && (emails.charAt(emails.length-3)!='.')){
document.getElementById("message2").innerHTML =" ** . Invalid Position **";
return false;
}

//VALIDATION FOR DATE OF BIRTH------------------------------------------------------------------------------------------------------------------------------------------------------------------

var dobs=document.myform.dob.value;
if(dobs == ""){
document.getElementById("message3").innerHTML =" ** Please fill the date of birth field **";
return false;
}



// VALIDATION FOR PHONE NUMBER--------------------------------------------------------------------------------------------------------------------------------------------------------------------

var ph=document.myform.phone.value;
if(ph == ""){
document.getElementById("message4").innerHTML =" ** Please fill the Phone Number field **";
return false;
}

if(isNaN(ph)){
document.getElementById("message4").innerHTML = "** user must write digits only, not characters **";
return false;
}

if(ph.length!=10){
document.getElementById("message4").innerHTML =" ** Mobile Number must be 10 digits only **";
return false;
}

//VALIDATION FOR HOUSE NAME------------------------------------------------------------------------------------------------------------------------------------------------------------------------

var honame=document.myform.hname.value;
if(honame == ""){
document.getElementById("message5").innerHTML =" ** Please fill the Housename field **";
return false;
}

if(!isNaN(honame)){
document.getElementById("message5").innerHTML = "** Housename  must only contain characters **";
return false;
}


// VALIDATION FOR PLACE NAME------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

var pla=document.myform.place.value;
if(pla == ""){
document.getElementById("message6").innerHTML =" ** Please fill the  Place field **";
return false;
}

if(!isNaN(pla)){
document.getElementById("message6").innerHTML = "** Place name  must only contain characters **";
return false;
}


// VALIDATION FOR DISTRICT-------------------------------------------------------------------------------------------------------------------------------------------------------------------------

var dis=document.myform.district.value;
if(dis == ""){
document.getElementById("message7").innerHTML =" ** Please fill the District field **";
return false;
}

if(!isNaN(dis)){
document.getElementById("message7").innerHTML = "** District must only contain characters ** ";
return false;
}


//VALIDATION FOR PINCODE---------------------------------------------------------------------------------------------------------------------------------------------------------------------
var pin=document.myform.pcode.value;
if(pin == ""){
document.getElementById("message8").innerHTML =" ** Please fill the Pincode field **";
return false;
}

if(isNaN(pin)){
document.getElementById("message8").innerHTML = "** user must write digits only not characters **";
return false;
}

if(pin.length!=6){
document.getElementById("message8").innerHTML =" ** Pin Number must be 6 digits only **";
return false;
}

//VALIDATION FOR PASSWORD-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

var pass=document.myform.pswd.value;
if(pass == ""){
document.getElementById("message9").innerHTML =" ** Please fill the password field **";
return false;
}

if((pass.length <= 5) || (pass.length > 20)) {
document.getElementById("message9").innerHTML =" ** Passwords length must be between  5 and 20 **";
return false;
}


//VALIDATION FOR CONFIRM  PASSWORD-------------------------------------------------------------------------------------------------------------------------------------------------------------------------

var cf=document.myform.cfp.value;
if(cf == ""){
document.getElementById("message10").innerHTML =" ** Please fill the confirm password field **";
return false;
}

if(pass!=cf){
document.getElementById("message10").innerHTML = " ** Password does not match the confirm password **";
return false;
}


//VALIDATION FOR GENDER--------------------------------------------------------------------------------------------------------------------------------------------------------------------------


var gender = document.myform.gender;  

if (gender.value.length <= 0) {  
document.getElementById("message11").innerHTML =" ** Gender is Required ** ";

     
return false;
}

//VALIDATION FOR MARITAL STATUS---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------
var maritalstatus = document.myform.maritalstatus;  

if (maritalstatus.value.length <= 0) {  
document.getElementById("message12").innerHTML =" ** Marital Status is Required ** ";
return false;
}


//VALIDATION FOR YES NO CHECK------------------------------------------------------------------------------------------------------------------------------------------------------------------
var yesno = document.myform.yesno;  

if (yesno.value.length <= 0) {  
    document.getElementById("message13").innerHTML =" ** Yes no is Required ** ";

     
    return false;
}

}    
    </script>
</head>

 
<body>
    <div class="container">
        <form id="contact" name="myform" action="patient_connect.php" onsubmit ="return verify_firstname()" method="post">
            <h1>Registration Form</h1>
            <h3>Fill the form below and press the submit button!</h3>
            <div class="row">
                <!-- first column -->
                <div class="column">
                    <fieldset>
                        <input type="text" placeholder="First Name *" name="firstname" id="firstname"  autofocus>
                        <span id = "message" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>
                        <input type="text" placeholder="Last name *" name="lastname" id="lastname"  autofocus>
                        <span id = "message1" style="color:red"> </span>
                    </fieldset>

                    <fieldset>
                        <input type="email" placeholder="Your email *" name="email" id="email" autofocus>
                        <span id = "message2" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>      
                        <input type="text" placeholder="Date of birth *" name="dob" onfocus="(this.type = 'date')"  id="dob" autofocus>
                        <span id = "message3" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>
                        <input type="text" placeholder="Phone number*" name="phone" id="phone"  autofocus>
                        <span id = "message4" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>
                         <input type="text" placeholder="House name *" name="housename" id="hname"   autofocus>
                        <span id = "message5" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>
                        <input type="text" placeholder="Password*" name="password" id="pswd"   autofocus>
                        <span id = "message9" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>
                        <input type="password" placeholder="Confirm Password*" name="cfp" id="cfp"   autofocus>
                        <span id = "message10" style="color:blue"> </span>
                    </fieldset>

                </div>

 

                <!-- second column -->
                <div class="column">

                <fieldset>
                        <input type="text" placeholder="Place *" name="place" id="place"   autofocus>
                        <span id = "message6" style="color:blue"> </span>
                    </fieldset>
                    
                    <fieldset>
                        <input type="text" placeholder="District *" name="district" id="district"   autofocus>
                        <span id = "message7" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>
                        <input type="text" placeholder="Pin code*" name="pincode" id="pcode"   autofocus>
                        <span id = "message8" style="color:blue"> </span>
                    </fieldset>

                    <fieldset>
                        <p>What is your Gender?</p>
                        <div class="radio">
                            <input type="radio" id="male" name="gender" value="male" >
                            <label for="male">Male</label>
                        </div>
                        <div class="radio">
                            <input type="radio" id="female" name="gender" value="female" >
                            <label for="female">Female</label>
                        </div>

                        <div class="radio">
                            <input type="radio" id="other" name="gender"  value="others">
                            <label for="others">Others</label>
                        </div>
                        <span id = "message11" style="color:blue"> </span>
                    </fieldset>

 
                    <p>What is your Marital Status?</p>
                    <div class="radio">
                        <input type="radio" id="Married" name="maritalstatus" value="Married"  >
                        <label for="Married">Married</label>
                    </div>

                    <div class="radio">
                        <input type="radio" id="Unmarried" name="maritalstatus"   value="Unmarried">
                        <label for="Unmarried">Unmarried</label>
                    </div>

                    <div class="radio">

                        <input type="radio" id="Divorced" name="maritalstatus"  value="Divorced" >
                        <label for="Divorced">Divorced</label>
                    </div>
                    <br><br>
                    <span id = "message12" style="color:blue"> </span>

                    </div>
                </div>
            <fieldset>
                <button type="submit" name="submit" id="submit" >REGISTER</button>
                <button type="reset" name="reset">CANCEL</button><br />
            </fieldset>

<center> <p>By creating an account you agree to our <a href="terms.php">Terms & Privacy</a>.</p> </center>
            <center><b>Already have an account?<b> <a href="login.php">LOGIN</a></center>

        </form>
    </div>
    </script>
</body>
</html>
