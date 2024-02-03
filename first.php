<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sign up page</title>
</head>
<body>
    <h2>sign up form</h2>
    <form method="POST" action="profile.php">
    <label for="email">Email:</label>
    <input type="text" id="email" name="email" required><br><br>
    
    <label for="firstname">First Name:</label>
    <input type="text" id="firstname" name="firstname" required><br><br>
    
    <label for="lastName">Last Name:</label>
    <input type="text" id="lastname" name="lastname" required><br><br>
    
    <label for="age">Age:</label>
    <input type="text" id="age" name="age" required><br><br>
    
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required><br><br>
    
    <input type="submit" name="key" value="Sign Up">
  </form>

</body>
</html>
<?php

session_start();
if(isset($_post['key'])){
$_SESSION['username']= $_post['firstname'].$_post['lastname'];

}

?>
