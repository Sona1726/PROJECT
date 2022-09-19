

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="login_css.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
<script>
	function validate()
	{
			var name=document.myform.name.value;
			//alert("validate function");


			//username validation
			//checks if the username have 7 characters
			if(name.length==7)
			{
				//alert("length matches");
				var x=name.substring(0,3);


				//checks if the pattern matches
				if(x.match("ADM"))
				{
					//alert("pattern matches");
				}
				else if(x.match("adm"))
				{
					//alert("pattern matches");
				}
				else if(x.match("DTR"))
				{
					//alert("pattern matches");
				}
				else if(x.match("dtr"))
				{
					//alert("pattern matches");
				}
				else if(x.match("PNT"))
				{
					//alert("pattern matches");
				}
				else if(x.match("pnt"))
				{
					//alert("pattern matches");
				}
				else{
					//alert("Pattern doesn't matches");
				}


				//checks if 4 digits are there, which is followed by the user code
				var y=name.substring(3,7);
				if (isNaN(y))
 				 {
    				alert("error");
				}
				else
				{
					//alert("Patern validated");
				}
			}
			else
			{
				alert("Username must contain 7 characters");
			}
	
			

		//password validation
		var correct_way=/^[A-Za-z]+$/;
		var pw=document.myform.password.value;
			if(pw == "") 
			{  
    			 alert("**Fill the password please!");
     			
 			 }  
			//minimum password length validation  
  			if(pw.length < 8)
			{  
    		 	alert("**Password length must be atleast 8 characters");  
			}
  			//maximum length of password validation  
  			if(pw.length > 15) 
			{  
    		 	alert( "**Password length must not exceed 15 characters"); 
 			} 	
			if(isNaN(pw))
			{  	
				alert( "**Password must contain atleast 1 digit"); 
 			} 	
			if(pw.match(correct_way))
			{

			}
			else
			{
				alert("**Password must contain atleast 1 Character");
			}
				
		}
</script>
</head>
<body>
	<div class="main">  	
		<div class="login">
				<form name="myform" action=# method="post"><br/><br/>
					<center> <img src="login_logo.png" alt="loginlogo" height="30%" width="30%"></center>
					<label for="chk" aria-hidden="true">LOGIN</label>
					<input type="text" name="name"  id="name" placeholder="Login ID"  ="">
					<input type="password" name="password" id="password" placeholder="******">
					<button type="submit" name="submit" onclick="validate()">LOGIN</button>
					<button type="reset"  name="reset">CANCEL</button><br/>
					<center><p>By creating an account, you agree to our <a href="terms.php">Terms & Privacy</a></p>
					<center>Dont have an Account? <a href="patient_register.php">REGISTER</a></center>
				</form>
			</div>
	</div>
</body>
</html>
