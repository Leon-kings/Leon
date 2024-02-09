 <?php
 session_start();
include_once "../connection/connection.php";
if (isset($_POST['submit'])) {
    $fname=$_POST['fname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $pass=$_POST['pswd'];
    $_SESSION['Name']=$uname;
    $select2=mysqli_query($conn,"SELECT * FROM register WHERE USERNAME='$uname'OR EMAIL='$email' ");
    $fetch=mysqli_fetch_array($select2);
    if ($fetch) {
        echo "<script>alert('Opps have taken');location.href='registration.php' </script>";
    }
    else{
    $ins="INSERT INTO register  VALUES (NULL, '".$fname."', '".$uname." ', '".$email."', '".$pass."')";
    $insert=mysqli_query($conn,$ins);
    if ($insert) {
        echo "<script>alert('Registration successfully'); location.href='../logs/login.php' </script>";

    }else{ 
       echo "<script>alert('Registration unsuccessfully');</script>";
    }
    }

}

  ?>