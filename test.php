<?php

include("vendor/autoload.php");

use Faker\Factory as Faker;

use Helpers\Auth;
use Helpers\HTTP;
use Libs\Database\MySQL;
use Libs\Database\UsersTable;

$faker = Faker::create();
echo $faker->name .  "<br>";

Auth::check();
echo "<br>";

HTTP::redirect();
echo "<br>";

$db = new MySQL;
$db->connect();
echo "<br>";

$table = new UsersTable;
$table->insert();
