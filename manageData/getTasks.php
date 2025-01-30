<?php
require('./manageData/connection.php');

$result = $conn->query("SELECT * FROM messages");
$tasks = array();
if($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
        array_push($tasks, array($row['identificator'], $row['message'], $row['fecha']));
        }
}