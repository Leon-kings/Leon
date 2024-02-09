
<?php 
include('../../connection/connection.php'); 
 session_start();
   
         ?>

<?php

if (isset($_POST['submit'])) {

	$name=$_POST['name'];
	$size=$_POST['size'];
	$cat=$_POST['cat'];
	
	$price=$_POST['price'];
	$photo=$_FILES['PHOTO']['name'];
	$tempname=$_FILES['PHOTO']['tmp_name'];
	$path='../../upload/'.$photo;
	$color=$_POST['color'];
	
		$se="SELECT * FROM product WHERE Name='$name' OR PHOTO='$photo'";	
		$selec=mysqli_query($conn,$se);
		$fetch=mysqli_fetch_assoc($selec);
	if ($fetch) {
		echo "<script>alert('product already exists');
 </script> ";
	}
	else{
	
		
		$file=move_uploaded_file($tempname,$path );
		
$inse="INSERT INTO product VALUES(NULL,'".$name."','".$size."',
'".$photo."','".$color."','".$cat."','".$price."','".$_SESSION['Name']."' )";
	$insert=mysqli_query($conn,$inse);

		if ($insert){
		 
		echo "<script>alert('Well inserted');
		location.href='../../products/products.php'
		</script>";
		}

else{
 
	echo "<script>alert('Opps please fill the blank space') 
	      </script>";  
	  }
 }
	
}
 ?>