<?php

session_start();

include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

$table = new UsersTable(new MySQL);

// print_r($_POST); exit();

$email = $_POST['email'];
$password = ($_POST['password']);

$user = $table->findByEmailAndPassword($email, $password);

// print_r($user); exit();

if($user) {
    if ($user->suspended) {
        
        HTTP::redirect("/index.php", "suspended=1");
    }

    $_SESSION['user'] = $user;
    HTTP::redirect('/profile.php');

} else {

    HTTP::redirect('/index.php' , 'incorrect=1');
}



