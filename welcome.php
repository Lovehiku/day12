<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php exercise</title>
</head>
<body>
   <h2>WELCOME  </h2> 
   <nav>
    <ul>
        <li> <a href="index.php">Home</a></li>
        <li> <a href="calculation.php">Calculation</a></li>
        <li> <a href="Registration.php">Registration</a></li>
    </ul>
   </nav>
   <?php
   if($_SERVER["REQUEST_METHOD"]=="POST"){
    $fuulname=$_POST['fullname'];
    $age=$_POST['age'];
    $email=['email'];
    $phone=['phone'];
    echo"<p>Full Name:$fullname</p>";
     echo"<p>Age:$age</p>";
      echo"<p>email:$email</p>";
       echo"<p>phone:$phone</p>";
       if($age<15){
        echo "<p>Message:You are young! Keep learning</p>";
       }
       elseif($age>=15 && $age<25){
        echo"<p>Message:you are at a great age to start bulsing</p>";
       }
       else{
        echo"<p>Message:you are at a late  age to start bulsing</p>";
       }
   }
   

   ?>  
</body>
</html>