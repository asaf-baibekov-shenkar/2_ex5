<?php
// Book.php

// Fetch the book details from the database based on the provided book ID
$conn = mysqli_connect('148.66.138.145', 'dbusrShnkr23', 'studDBpwWeb2!', 'dbShnkr23stud2');

$bookId = $_GET['id'];
$query = "SELECT * FROM tbl_100_books WHERE book_id = '$bookId'";
$result = mysqli_query($conn, $query);

$book = mysqli_fetch_assoc($result);

// Render the book details page
?>

<!DOCTYPE html>
<html>
<head>
	<title>Book Details</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<style>
		.book-image {
			width: 300px;
			height: 400px;
			object-fit: cover;
		}
	</style>
</head>
<body>
<header>
	<h1>Book Details</h1>
</header>

<div class="container">
	<div class="row">
		<div class="col-md-6">
			<h2><?php echo $book['book_name']; ?></h2>
			<p><strong>Author:</strong> <?php echo $book['author_name']; ?></p>
			<p><strong>Category:</strong> <?php echo $book['category']; ?></p>
			<p><strong>Price:</strong> $<?php echo $book['price']; ?></p>
			<p><strong>Rating:</strong> <?php echo $book['rating']; ?></p>
			<p><?php echo $book['description']; ?></p>
		</div>
		<div class="col-md-6">
			<h2>Image</h2>
			<div class="book-images">
				<img class="book-image" src="http://se.shenkar.ac.il/students/2022-2023/web1/dev_100/exercises/ex5<?php echo $book['image_path']; ?>" alt="Book Image">
			</div>
		</div>
	</div>
</div>

</body>
</html>
