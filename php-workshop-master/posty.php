<?php
$mysqli = new mysqli("localhost", "root", "", "blogphp");
echo $mysqli->host_info . "\n";

$result = $mysqli->query("SELECT id FROM test ORDER BY id ASC");



echo "Result set order.../n";
