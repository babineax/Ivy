<?php
include_once 'userdb.php';
    
     if(isset($_POST['submit'])){
        $First_name =$_POST['First name'];
        $Last_name =$_POST['Last name'];
        $Age=$_POST['Age'];
        $Sex =$_POST['Sex'];
        $Id =$_POST['Id'];
        
        $Phone_number =$_POST['Phone number'];
        $Address =$_POST['Address']; 
        $County =$_POST['County'];
        $Email =$_POST['Email'];
        $Password =$_POST['Password'];
        
        $Ivy_User =$_POST['Ivy User'];
       
     $sql = "INSERT INTO user details (First_name, Last_name, Age, Sex, Id, Phone_number, Address, County, Email, Password, Ivy_User)
     VALUES ($First_name, $Last_name, $Age, $Sex, $Id, $Phone_number, $Address, $County, $Email, $Password, $Ivy_User)";


     if (mysqli_query($conn, $sql)) {
        echo "New user has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
