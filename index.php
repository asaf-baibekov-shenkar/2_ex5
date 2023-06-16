
<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Book Boutique</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script defer src="script.js"></script>
</head>
<body>
<header>
	<h1>Book Boutique</h1>
</header>

<div class="container">
	<div class="row">
		<div class="col-md-3">
			<h2>Categories</h2>
			<ul class="category-list"></ul>
		</div>
		<div class="col-md-9">
			<h2>Books</h2>
			<div class="book-list"></div>
		</div>
	</div>
</div>

<script id="book-template" type="text/template">
	<a href="book.php?id={{ book_id }}">
		<div class="book card">
			<img class="card-img-top" src="http://se.shenkar.ac.il/students/2022-2023/web1/dev_100/exercises/ex5{{ image_path }}" alt="{{ book_name }}">
			<div class="card-body">
				<h5 class="card-title">{{ book_name }}</h5>
			</div>
		</div>
	</a>
</script>

</body>
</html>