!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php exercise</title>
</head>
<body>
   <h2>REGSTRATION </h2> 
   <nav>
    <ul>
        <li> <a href="index.php">Home</a></li>
        <li> <a href="calculation.php">Calculation</a></li>
        <li> <a href="Registration.php">Registration</a></li>
    </ul>
   </nav>
   <nav>
   <form action="welcome.php" method="post">
      <label for="fullname"> fullname:</label>
      <input type="text" name="fullname" id="fullname" required>
      <label for="age"> age:</label>
      <input type="number" name="age" id="age" required>
      <label for="email">email:</label>
      <input type="email" name="email" id="email" required>
      <label for="phone">phone:</label>
      <input type="tel" name="phone" id="phone" required>
      <input type="submit" value="Register">
</form>
   </nav>
</body>
</html>