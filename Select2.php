<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="assets/images/favicon.jpg">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url('redpattern.jpg');
}

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

}
.float{

   color: red ;
  font-size: 60px 60px ;
  margin-left: 5px; 
  font-weight: bold;
}
.space {
   width:800px; margin: auto;
  height: ;
  margin-top: 100px;
  text-align:center;
   margin-left: 700px;
 
 

}

.button{
  width: 300px;
  padding: 40px 25px;
  font-size: 30px;
  background-color:black;
  color: white;
  font-weight: bold;
}

</style>
</head>
<body>

<div class="topnav">

  <div class="float1" style="float:left"><h1>Ivy</h1></div>
<div class="float" style="float:left"><h1><strong>Community</strong></h1></div>

 
  <a class="split" href="#contact">Contact Us</a>
  

</div>


<div > 
<div class="space"> 
  <a href='Helper Registration.php'>
  <button class="button">
    Helper
  </div>
  </button>


  <div class="space">
  <a href='User Registration.php'>
   <button class="button">
    Electrician
    </div >
     </button>
  
    
 
<div class="space">
<a href='Plumber Registration.php'>
 <button class="button">
  Plumber
</div>
  </button>
  


</body>
</html>
