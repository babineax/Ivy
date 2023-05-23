<?php
include_once 'helperdb.php';
    
     if(isset($_POST['submit'])){
        $First_name =$_POST['First name'];
        $Last_name =$_POST['Last name'];
        $Age=$_POST['Age'];
        $Sex =$_POST['Sex'];
        $Id =$_POST['Id'];
        $Phone_number =$_POST['Phone number'];
        $Address =$_POST['Address']; 
        $County =$_POST['County'];
        $Certificate_of_good_conduct =$_POST['Certificate of good conduct'];
        $Email =$_POST['Email'];
        $Password =$_POST['Password'];
        
        $Ivy_Entrepeneur =$_POST['Ivy Entrepeneur'];
       
     $sql = "INSERT INTO helper details (First_name, Last_name, Age, Sex, Id, Phone_number, Address, County, Certificate_of_good_conduct, Email, Password, Ivy_Entrepeneur)
     VALUES ($First_name, $Last_name, $Age, $Sex, $Id, $Phone_number, $Address, $County, $Certificate_of_good_conduct, $Email, $Password, Ivy_Entrepeneur)";
     if (mysqli_query($conn, $sql)) {
        echo "New user has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
