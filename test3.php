<?php

include("vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$table = new UsersTable(new MySQL);

$id = $table->insert([
    "name" => "TOM",
    "email" => "tom@gmail.com",
    "phone" => "2456819",
    "address" => "Address",
    "password" => "password",
]);

echo $id . "<br><br>";

print_r($table->getAll());