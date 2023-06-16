<?php
include 'db_connection.php';

$categories = $_GET['categories'];
$categoryList = implode("','", $categories);

$query = "SELECT * FROM tbl_100_books WHERE category IN ('$categoryList')";
$result = mysqli_query($conn, $query);

$books = array();
while ($row = mysqli_fetch_assoc($result)) {
    $books[] = $row;
}

header('Content-Type: application/json');
echo json_encode($books);
?>
