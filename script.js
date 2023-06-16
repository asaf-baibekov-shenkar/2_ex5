$(document).ready(function() {
	// Fetch and display categories
	fetchCategories();

	// Fetch and display all books initially
	fetchBooks();

	// Fetch and display books by category when a category is selected
	handleCheckboxSelection();
});

function fetchCategories() {
	$.ajax({
		url: 'get_categories.php',
		method: 'GET',
		dataType: 'json',
		success: function(response) {
			displayCategories(response);
		}
	});
}

function displayCategories(categories) {
	var categoryList = $('.category-list');
	categoryList.empty();

	// Create the "All Categories" option at the top
	var listItemAll = $('<li></li>');
	var checkboxAll = $('<input type="checkbox" value="all" checked>');
	listItemAll.append(checkboxAll);
	listItemAll.append('All Categories');
	categoryList.append(listItemAll);

	// Create checkboxes for each category
	$.each(categories, function(index, category) {
		var listItem = $('<li></li>');
		var checkbox = $('<input type="checkbox" value="' + category.category + '">');
		listItem.append(checkbox);
		listItem.append(category.category);
		categoryList.append(listItem);
	});
}

function handleCheckboxSelection() {
	$(document).on('change', '.category-list input[type="checkbox"]', function() {
		var checkbox = $(this);
		var selectedCategories = $('.category-list input[type="checkbox"]:checked')
			.map(function() { return $(this).val(); })
			.get();
		var checkboxAll = $('.category-list input[type="checkbox"][value="all"]');
		var checkboxList = $('.category-list input[type="checkbox"]:not([value="all"])');
		(checkbox.val() === 'all' ? checkboxList : checkboxAll).prop('checked', false);
		if (selectedCategories.length === 0)
			checkboxAll.prop('checked', true);
		if (checkboxAll.is(':checked'))
			fetchBooks();
		else
			fetchBooksByCategories(selectedCategories);
	});
}

function fetchBooksByCategories(categories) {
	$.ajax({
		url: 'fetch_books_by_categories.php',
		method: 'GET',
		data: { categories: categories },
		dataType: 'json',
		success: function(response) {
			displayBooks(response);
		}
	});
}

function fetchBooks() {
	$.ajax({
		url: 'fetch_books.php',
		method: 'GET',
		dataType: 'json',
		success: function(response) {
			displayBooks(response);
		}
	});
}

function fetchBooksByCategory(category) {
	$.ajax({
		url: 'fetch_books_by_category.php',
		method: 'GET',
		data: { category: category },
		dataType: 'json',
		success: function(response) {
			displayBooks(response);
		}
	});
}

function displayBooks(books) {
	var bookList = $('.book-list');
	bookList.empty();
	var bookTemplate = $('#book-template').html();
	$.each(books, function(index, book) {
		var bookHtml = bookTemplate
			.replace('{{ book_id }}', book.book_id)
			.replace('{{ image_path }}', book.image_path)
			.replace('{{ description }}', book.description)
			.replace('{{ price }}', book.price)
			.replace('{{ rating }}', book.rating)
			.replace('{{ author_name }}', book.author_name);

		bookHtml = bookHtml.replace('>{{ book_name }}<', `>${book.book_name}<`)
		bookHtml = bookHtml.replace('alt="{{ book_name }}"', `alt="${book.book_name}"`)
		bookList.append(bookHtml);
	});
}
