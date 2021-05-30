<?php 

//GET DATABASE for single room

require_once __DIR__ . '/database.php'; 

//get room ID
$id = empty($_GET['id']) ? false : $_GET['id'];

if($id) {
    $stmt = $conn->prepare("SELECT * FROM `stanze` WHERE `id` = ?");
    $stmt->bind_param('s', $id);
    //execute
    $stmt->execute();
    //get results
    $result = $stmt->get_result();

    if($result && $result->num_rows > 0) {
        $stanza = $result->fetch_assoc();
    }
}

//close connection
$conn->close();

?>