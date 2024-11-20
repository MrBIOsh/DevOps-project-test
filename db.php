<?php
$HOST = $_ENV['DB_HOST'];
$USERNAME = $_ENV['DB_USER'];
$PASSWORD = $_ENV['DB_PASS'];
$DBNAME = $_ENV['DB_NAME'];

//echo "Servername: $HOST\n";
//echo "Username: $USERNAME\n";
//echo "Pass: $PASSWORD\n";
//echo "DBname: $DBNAME\n";


$dbcon = new mysqli($HOST, $USERNAME, $PASSWORD, $DBNAME);

if ($dbcon->connect_error) {
  die("connect error: " . $dbcon->connect_error);
}

?>
