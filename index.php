<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
<body>
<h1>Login</h1>
<form action="index.php" method="post">
  <label>Username:</label><br>
  <input type="text" name="username" required><br>
  <label>Password:</label><br>
  <input type="password" name="password" required><br>

  <div class="center">
    <button type="submit">Accedi</button><br><br>
  </div>
  <a href="signup.php">REGISTRATI</a>

<?php
    require('functions.php');
  if (isset($_POST['username']) && isset($_POST['password'])){
      if(login($_POST['username'], $_POST['password'])==true){
        header("Location: Home.php");
      }
      else{
        header('Location: ' . $_SERVER['PHP_SELF'] . '?error=login');
      }
  }
      if (isset($_GET['error'])) {
        if ($_GET['error'] == 'login') {
          echo '<br><b style="color: red">Credenziali non valide</b>';
        } else {
            $form = form('C\'è stato un errore, prova più tardi');
        }
      }

    
  
  
  
?>
</form> 
</body>
</html>