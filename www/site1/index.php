<?php
$redis = new Redis();

try {
    $redis->connect("redis","6379");
} catch (Exception $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

//phpinfo();
$dsn = 'mysql:dbname=mysql;host=mysql';
$user = 'root';
$password = '123456';


try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
   echo 'Connection failed: ' . $e->getMessage();
}
