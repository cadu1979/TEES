<?php

/**
 * Referências:
 * https://www.youtube.com/watch?v=ILyf16MEvHM
 * https://www.w3schools.com/php/php_mysql_connect.asp
 */

/// nome do servidor mysql
$servername = "localhost";
/// username para acessar o servidor
$username = "root";
/// senha para acessar o servidor
$password = "";
/// nome do banco de dados
$dbName = "urna";

/// conexão ao banco de dados
$db_connection = new mysqli($servername, $username, $password, $dbName) or die("Unable to connect");

if ($db_connection->connect_error) {
    die("Connection failed: " . $conn->connect_error."\n");
}
//echo "Connected successfully\n";

?>
