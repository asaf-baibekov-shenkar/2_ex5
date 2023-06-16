<?php
include 'db_connection.php';

$category = $_GET['category'];

$query = "SELECT * FROM tbl_100_books WHERE category = '$category'";
$result = mysqli_query($conn, $query);

$books = array();
while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}

header('Content-Type: application/json');
echo json_encode($books);
?>
