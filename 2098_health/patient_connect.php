<?php
 if($_SERVER['REQUEST_METHOD']=='POST' && isset ($_POST['submit']))
 {
$conn=mysqli_connect('localhost','root','','hcms_project');


if ( isset($_POST['firstname']) &&
isset($_POST['lastname'])&&
isset($_POST['email'])&&
isset($_POST['date'])&& 
isset($_POST['phone'])&& 
isset($_POST['housename'])&& 
isset($_POST['place']) && 
isset($_POST['district'])&& 
isset($_POST['pincode'])&& 
isset($_POST['password'])&& 
isset($_POST['gender'])&& 
isset($_POST['maritalstatus']))
 echo"Error";
{

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$phone=$_POST['phone'];
$housename=$_POST['housename'];
$place=$_POST['place'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$maritalstatus=$_POST['maritalstatus'];


$sql="INSERT INTO `patient`( `firstname`, `lastname`, `email`, `dob`, `phone`, `housename`, `place`, `district`, `pincode`, `gender`, `maritalstatus`, `password`) 
VALUES ('$firstname','$lastname','$email','$dob','$phone','$housename','$place','$district','$pincode','$gender','$maritalstatus',password('$password'))";
//$sq="SELECT concat('pnt',patientid) from patient"; 

 $query=mysqli_query($conn,$sql);
 echo"ghg";
  
if ($query)
{
$code=rand(1000,9999);
$user_id="PTN{$code}";
$sqlqry=mysqli_query($conn, "UPDATE patient set patientid='$user_id' where firstname='$firstname'");

}
if($sqlqry)
{
//echo"Succes";
    header('location:PatientID_Display.php');
}

else
{
echo"error";
}
}
 }
