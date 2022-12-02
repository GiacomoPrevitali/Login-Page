<!DOCTYPE html>
<html>
<link rel="stylesheet" href="styles.css">
<body>
<h1>Registrazione</h1>
<form action="signup.php" method="post">
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="name" placeholder="Nome" required><br>
        <input type="password" name="password" placeholder="Password" required><br>
        <input type="text" name="class" placeholder="classe" required><br>
        <div class="center">
            <button type="submit">Registrati</button>
        </div>
    </form>
    
<?php
require("functions.php");
if (isset($_POST['email'])) {
    if(register($_POST['email'], $_POST['name'], md5($_POST['password']), $_POST['class'])){
        header('Location: index.php');
    }
    else{
        header('Location: registrati.php?error=login');
    }
}

?>