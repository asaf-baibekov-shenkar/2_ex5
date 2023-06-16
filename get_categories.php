<?php
include 'db_connection.php';

$query = "SELECT DISTINCT category FROM tbl_100_books";
$result = mysqli_query($conn, $query);

$categories = array();
while ($row = mysqli_fetch_assoc($result)) {
    $categories[] = $row;
}

header('Content-Type: application/json');
echo json_encode($categories);
?>
