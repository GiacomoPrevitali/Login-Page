<html>
    <body>
<?php

class User {

public $email;
public $psw;
public $name;
public $class;

function __construct($email, $name, $psw, $class) {
    $this->email = $email;
    $this->psw = $psw;
    $this->name = $name;
    $this->class = $class;
}
}

function login($name, $psw){
    $file = fopen('credenziali.json', 'r');
    $json = fread($file, filesize('credenziali.json'));
    $json = json_decode($json);
    foreach($json as &$value) {
        if ($name == $value->name && md5($psw) == $value->psw) {
            return true;
        }
    }
    return false;
}

function register($email, $name, $psw, $class){

    $user = new User($email, $name, $psw, $class);
    $file = fopen('credenziali.json', 'r');
    $json = fread($file, filesize('credenziali.json'));
    $json = json_decode($json);
        array_push($json, $user);
        $json = json_encode($json);
        file_put_contents('credenziali.json', $json);
        return true;
}

function read(){
    if ($handle = opendir('./5ID')) {
        while (false !==($entry = readdir($handle))) {
            if (!is_dir($entry)){
            echo "<a href='./5ID/$entry'>$entry</a>";
            }
        }
    }
}
?>
</body>
<html>