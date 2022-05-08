<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=>, initial-scale=1.0">
    <title>Document</title>
    
   <style>
       *{
    padding: 0%;
    margin: 0%}
    body{ text-align: center;
        background-color: aquamarine;}
      body::before{
    content: ' ';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(rgb(248, 82, 4),#f0f);
    clip-path: circle(40% at 15% 25%);}
    h1{position: relative;
        justify-content: center;
        align-items: center;
        grid-template-columns: auto;
        padding:50px;}

    </style>
</head>
</html>

<?php
$servername="localhost";
$username="root";
$password="";
$datebase_name="Feedback"; 
$conn=mysqli_connect($servername,$username,$password,$datebase_name);

if(!$conn)
  {  die("connection failed:" . mysqli_connect_error());
 }  
 if(isset($_POST['submit']))
   { 
    $f1a=$_POST['f1a'];
    $f1b =$_POST['f1b'];
    $f1c =$_POST['f1c'];
    $f2a =$_POST['f2a'];
    $f2b =$_POST['f2b'];
    $f2c =$_POST['f2c'];
    $f3a =$_POST['f3a'];
    $f3b =$_POST['f3b'];
    
    $sql_query = "INSERT INTO response (f1a,f1b,f1c,f2a,f2b,f2c,f3a,f3b)
    VALUE ('$f1a','$f1b','$f1c','$f2a','$f2b','$f2c','$f3a','$f3b')";
    if(mysqli_query($conn, $sql_query))
    {
        echo "<h1>thank you for you response !</h1>";
    } 
    else {
        echo "ERROR: " . $sql ."" . mysqli_error($conn);
    }
    mysqli_close($conn);
 }
 ?>