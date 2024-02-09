<?php 
session_start();
include_once "../connection/connection.php";
if (isset($_POST['Submit'])) {
    $uname=$_POST['uname'];
    $password=$_POST['pswd'];
    

$sele="SELECT * FROM register WHERE USERNAME='$uname'";  
$qy = mysqli_query($conn,$sele);
$fetch=mysqli_fetch_array($qy); 
    $_SESSION["Name"] =$uname;
    $insert=mysqli_query($conn,"INSERT INTO login VALUES(NULL,'".$uname."','".$password."')");

    if ($uname =='admin' && $password =='leon') {
      echo "<script>alert('Welcome Admin');location.href='../dashboard/dashboard.php' </script>";
    } elseif($uname!='admin' && $password !='leon'){
      echo "<script>alert('Welcome user');location.href='../user/Dashboard/dashboard.php' </script>";

    }
    
    else {
     
   
    
        if ($insert) {
            echo "<script>alert('log in successfully');
             location.href='../user/loggeduser.php' </script>";
        }
        else{ 

            echo "<script>alert('log in unsuccessfully');
            location.href='../user/loggeduser.php'
          </script>"; 
     }  

  }
}
  else
  {
   
 
 
     echo "<script>alert('You Have To Signup First');
     location.href='../register/registration.php' </script>";
 }


  ?>