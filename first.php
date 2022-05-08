<?php
$servername="localhost";
$username="root";
$password="";
$datebase_name="Feedback"; 
$conn=mysqli_connect($servername,$username,$password,$datebase_name);

if(!$conn)
  {  die("connection failed:" . mysqli_connect_error());
 }
if(isset($_POST['next']))
{
    $name =$_POST['entry'];
    $email =$_POST['Email'];
    $branch =$_POST['branch'];
    $contact =$_POST['Contact'];
    $sql_query = "INSERT INTO info (yourname,mailaddresss,presentbranch,contactno)
    VALUE ('$name','$email','$branch','$contact')";
   if(mysqli_query($conn, $sql_query))
   {
    header("Location: "secondpart.html");
       //echo "thank you for you response !";
   } 
   else {
       echo "ERROR: " . $sql ."" . mysqli_error($conn);
   }
   mysqli_close($conn);
}
?>