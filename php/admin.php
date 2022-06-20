<?php require_once 'connecting_db.php'?>
<? require_once 'login.php'?>
<?php
$login = $_POST['login'];
$password = $_POST['password'];

$logins = mysqli_query($connection, "SELECT `login` FROM `registration`");
$pass = mysqli_query($connection, "SELECT `password` FROM `registration`");
    $log = $logins->fetch_assoc();
    $pas = $pass->fetch_assoc();
    $name = $log['login'];
    // print_r($name);

    
        if(isset($_POST['admin_btn'])){
        if($login !== $name){
            echo ("Принято");
        }
        if($login == $name){
            echo ("логин уже используется");
            die();
        } 
        unset($value);
    }
