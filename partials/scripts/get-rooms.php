<?php 

//GET DATA 

require_once __DIR__ . '/database.php';

//Ottieni stanze 
$sql = "SELECT `id`, `room_number`  FROM `stanze`";
$result = $conn->query($sql);

if($result && $result->num_rows > 0) {
    $stanze = [];

    while($row = $result->fetch_assoc()) {
        $stanze[] = $row;
    }
} else {
    echo 'query error';
}

//Close db connection   
$conn->close();