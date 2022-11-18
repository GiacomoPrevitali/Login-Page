<?php
    $admin = $_POST['admin'];
    $password = $_POST['pass'];
    $ingresso =false;

    $lines = file('Utenti.txt');
    foreach($lines as $line) {

        $User=explode(";",$line);
        if ($User[0] == $admin && $User[1] == $password) {
          echo "Bentornato $admin !<br>";
          $ingresso=true;
    
        }     
    }
    if($ingresso==false){
      header('Location: ./index.php?error=credenziali');
    }
?>

<form action="index.php" method="post">
<input type="submit" value="ESCI"/>
</form>