<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inset Data</title>
</head>
<body>
	
<?php
$first_name =$_POST['fname'];
$sure_name =$_POST['sname'];
$email =$_POST['email'];
$phone_number =$_POST['phnnbr'];
$password =$_POST['password'];
$date =$_POST['date'];
$month =$_POST['month'];
$year =$_POST['year'];
$gender =$_POST['gender'];

// echo "First Name: " .$first_name."<br>";
// echo "Sure Name: " .$sure_name."<br>";
// echo "Email: " .$email."<br>";
// echo "Phone Number: " .$phone_number."<br>";
// echo "Password: " .$password."<br>";
// echo "Date: " .$date."<br>";
// echo "Month: " .$month."<br>";
// echo "Year: " .$year."<br>";
// echo "Gender: " .$gender."<br>";

 if(isset($_POST['Button'])){

      include ('connection.php');	
	  
	   $img= $_FILES['image']['name'];
	   $tmp_name= $_FILES['image']['tmp_name'];
	   
	   if(isset($img)){
		 
		if($img!=""){
			
		$location="Upload/";
       
        if(move_uploaded_file($tmp_name, $location.$img))
        {
			
		echo "Upload image successfully";	
		}
		else
		{ 
		 echo "Not upload image";  
        }
         
		} 
		   
	   }
 } 
	$sql ="INSERT INTO facebook_record(First_Name,Last_Name,Email, Password,Day,Month,Year,Gender,Image)
             VALUES('$first_name','$sure_name','$email','$phone_number','$password','$date','$month','$year','$gender','$img')";
		 
		 if (mysqli_query($conn, $sql))
		 {
			echo "your data is inserted successfully";	 
		 }
		 else
		 {
		 	echo "Not inserted" . mysqli_error();
		 }
			 
		   mysqli_close($conn);
	 ?>   
</body>
</html>