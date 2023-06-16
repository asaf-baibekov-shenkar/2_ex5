<?php
include 'db_connection.php';

$query = "SELECT * FROM tbl_100_books";
$result = mysqli_query($conn, $query);

$books = array();
while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}

header('Content-Type: application/json');
echo json_encode($books);
?>
