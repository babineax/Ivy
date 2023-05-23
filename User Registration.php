<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php

require_once('config.php');
?>

<!DOCTYPE html>
<html>
<head>
	
		
		<div class="topnav">

  <div class="float1"><h2><b>Ivy</h2>

  </div>
<div class="float"><h2><strong><b>Community</strong></h2></div>

 
  <a class="split" href="#contact">Contact Us</a>
  

</div>

	

	 <link rel="icon" href="assets/images/favicon.jpg">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no">
	<title>User Registration</title>

</head>
<body>

  <style>  
  	.topnav {
  overflow: hidden;
  background-color: #333;
  
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: right;
  padding: 30px 35px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  
  color: white;
}

/* Create a right-aligned (split) link inside the navigation bar */
.topnav a.split {
  float: right;
  background-color: #333;
  color: white;
  font-weight: bold;
}
.float1{
   color: white ;
  font-size: 60px 60px ;
 margin-left: 40px; 
 font-weight: bold;
 float: left;
 margin-top: 21px;

}
.float{

   color: red ;
  font-size: 60px 60px ;
  margin-left: 5px; 
  font-weight: bold;
  float: left;
  margin-top: 21px;
}
.error {   
color: white;  
    font-family: lato;  
    background: redpattern.jpg;  
    display: inline-block;  
    padding: 2px 10px;  
}  

.form-wrapper { 
  background-image:  url(""); 
  background-size: ; 
  background-repeat: ; 
  background-position:;
  background-attachment: ; 
} 
* {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body {  
    margin: 0 ;  
    text-align: center;  
    background-image: url('userpattern.jpg');
      font-family: Arial, Helvetica, sans-serif;
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;  
  letter-spacing: 3px;  
  color: Red;  
    text-transform: uppercase;  
}  
h2{
    float:left ;
    font-family: Arial, Helvetica,sans-serif;
 font-size: 2rem;


     }






      label {
        display: inline-block;
        width: 100px;
        text-align: left;
      }

    
input {  
    border: 2px solid #ccc;  
    font-size: 1.5rem;  
    font-weight: 100;  
    font-family: 'Lato';  
    padding: 10px;  
}  
form {  
    margin: 25px auto;  
    padding: 20px;  
    border: 5px solid #ccc;  
    width: 500px;  
    background: #f3e7e9;  
}  
  div {
        margin-bottom: 10px;
}  
input[type=submit]::after {    
  background: #fff;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;    
  color: ;    
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    
input[type=submit]::before   
{    
  background: red;    
  content: '';    
  position: absolute;    
  z-index: -1;    
}    
input[type=submit]:hover {    
  color: #1A33FF;    
}    

</style>





	<form action="insertuser.php" id="userreg" method="post">
		
			<div class="col-sm-3">
			<h1>Registration</h1>
			<p>Please complete the form</p>
			<hr class="mb-3">
			<br>
			<br>

		
				<div>

			<label name="First name "for="First name"><b>First name:</label
				>
				</div>
				<div>
			<input class="form-control" type="text" name="First name"required>
		</div>
			<br>
			
			<div>
			<label name="Last name "for="Last name">Last name:<b></label
				>
				</div><div>
			<input class="form-control"type="text" name="Last name"required>
		</div>
			<br>
			
			<div>
			<label name="Age " for="Age">Age:<b></label
				></div>
				<div>
			<input class="form-control"type="int" name="Age"required>
		</div>
			<br>
			
				
<div>
			<label for="Sex">Gender:<b></label
				></div>
			<div>
  <input type="radio" name="Sex" <?php if (isset($Sex) && $Sex=="female") echo "checked";?> value="female"> Female  
  <input type="radio" name="Sex" <?php if (isset($Sex) && $Sex=="male") echo "checked";?> value="male"> Male  
  <input type="radio" name="Sex" <?php if (isset($Sex) && $Sex=="other") echo "checked";?> value="other"> Other    
</div>
			<br>
			

<div>
			<label name="Id "for="Id">&nbsp;&nbsp;&nbsp;Id:<b></label
				></div>
				<div>
			<input class="form-control" type="varchar" name="Id"required>
		</div>

<br>
			

			<div>
			<label name="Phone number "for="Phone number">Phone number:<b></label
				></div>
				<div>
			<input class="form-control" type="int" name="Phone number"required>
		</div>
			<br>
			
			<div>
			<label for="Address">Address:<b></label
				></div>
				<div>
			<input class="form-control" type="varchar" name="Address"required>
		</div>
			<br>
			<div>
			<label name="County "for="County">County:<b></label
				></div>
				<div>
			<input class="form-control" type="text" name="County"required>
		</div>
			<br>
		
			
			<div>
			<label name="Email " for="Email">Email:<b></label
				></div>
				<div>
			<input class="form-control"type="varchar" name="Email"required>
		</div>	

			
			<br>
			
			<div>
			<label for="Password"><b>Password:</label
				></div>
				<div>
			<input class="form-control" type="varchar" name="Password"required>
		</div>
			<br>
			
			<div>
			<label for="Confirm Password">Confirm Password:<b></label
				></div>
				<div>
			<input class="form-control" type="varchar" name="Confirm Password"required>
		</div>
			<br>
			
			
			<div>
			<label for="Ivy User">Ivy User:<b></label
				></div>
				<div>
			<input type="radio" class="form-control" name="Ivy User" value="User"required>
			<hr class="mb-3">
			</div>
			<div>
			<input class="btn btn-primary" type="submit" name="submit" value="submit">
			</div>
			
		
		</div>
	</form>

</body>
</html>