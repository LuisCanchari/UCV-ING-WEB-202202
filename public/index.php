<?php
/*
try {
    $mbd = new PDO('mysql:host=localhost;dbname=db_convivir7', 'root', 'P4ss_mysqlq');
    echo 'conexion exitosa';
} catch (PDOException $e) {
    print "¡Error!: " . $e->getMessage() . "<br/>";
    die();
}
*/

session_start();
require("../private/core/autoload.php");
    $app = new App();

?>
