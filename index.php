 <!DOCTYPE html>
<html>
<body>

<h2>LOGIN</h2>

<form action="Server.php" method="post">
  <label for="admin">Login</label><br>
  <input type="text" id="admin" name="admin" ><br>
  <label for="pass">Password</label><br>
  <input type="password" id="pass" name="pass" ><br><br>
  <input type="submit" value="INVIA">
</form> 
<?php
  if (isset($_GET['error'])) {
    if($_GET['error']=="credenziali"){
      echo '<br><b style="color: red">Credenziali non valide</b>';
    }
    
  }
?>
</body>
</html>

