<?php
    $admin = $_POST['admin'];
    $password = $_POST['pass'];
    $ingresso =false;

    $lines = file('Utenti.txt');
    foreach($lines as $line) {

        $User=explode(";",$line);
		//echo md5($User[1]);
        if ($User[0] == $admin && $User[1] == md5($password)) {
          echo "Bentornato $admin !<br>";
          $ingresso=true;
    
        }     
    }
    if($ingresso==false){
      header('Location: ./index.php?error=credenziali');
    }
	
	//function chkPass($pass){
		//return md5($pass);
		
	//}
?>

<form action="index.php" method="post">
<input type="submit" value="ESCI"/>
</form>