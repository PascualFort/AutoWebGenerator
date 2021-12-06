<?php
//CONEXION
$dbhost = '185.23.119.251:3306';
$dbuser = 'pascualjr';
$dbpass = 'E7d40sm_';
$dbname = 'IMPDB';
$dbh = new mysqli($dbhost,$dbuser,$dbpass,$dbname);
if ($dbh ->connect_error) {
    // echo "Error de Connexion ($dbh->connect_errno)
    // $dbh->connect_error\n";
    exit;
}
if ($dbh ->connect_errno) {
    // echo "Error de Connexion ($dbh->connect_errno)
    // $dbh->connect_errno\n";
    exit;
}
?>