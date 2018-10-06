<?php
//starting session
   session_start();
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login template</title>

</head>
<body style="background-color:#87ceeb">

<div class="section" align="center">
    <h3>USER LOGIN</h3>
<form action="login.php" method="POST">
    <input type="text" placeholder="Username" name="uid"></br>
    <input type="password" placeholder="Enter password" name="pass"></br>
    <button type="submit">LOG IN</button>
</form>
</div>
<div class="section" align="center">
<?php
if (isset($_SESSION['id'])) {
    echo "You are logged in! :D";
} else {
    echo "You are not logged in!";
}
?>
</div>

<br><br><br>
<div class="section" align="center">
    <h2>SIGN UP AND JOIN US!</h2>

<form action="signup.php" method="POST">
    <input type="text" placeholder="Firstname" name="first"></br>
    <input type="text" placeholder="Lastname" name="last"></br>
    <input type="text" placeholder="Username" name="uid"></br>
    <input type="password" placeholder="Enter password" name="pass"></br>
    <button type="submit">SIGN UP</button>
</form>
</div>

<br><br><br>
<div class="section" align="center">
<form action="logout.php">
  <button>LOG OUT</button>
</form>
</div>

</body>

</html>