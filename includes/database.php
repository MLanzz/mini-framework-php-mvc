<?php

$db = mysqli_connect($_ENV["db_host"], $_ENV["db_user"], $_ENV["db_pass"], $_ENV["db_name"]);

$db->set_charset("utf8");

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}