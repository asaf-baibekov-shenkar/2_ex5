CREATE TABLE tbl_100_books (
	book_id INT PRIMARY KEY AUTO_INCREMENT,
	book_name VARCHAR(255) NOT NULL,
	image_path VARCHAR(255) NOT NULL,
	description TEXT,
	price DECIMAL(10, 2),
	rating FLOAT,
	author_name VARCHAR(255),
	category VARCHAR(100)
);

INSERT INTO tbl_100_books (book_name, image_path, description, price, rating, author_name, category)
VALUES ('To Kill a Mockingbird', '/uploads/to_kill_a_mockingbird.jpg', 'To Kill a Mockingbird is a novel by Harper Lee published in 1960. It is a coming-of-age story set in the fictional town of Maycomb, Alabama, during the Great Depression. The book addresses issues of racial injustice and explores the loss of innocence.', 14.99, 4.8, 'Harper Lee', 'Fiction');

INSERT INTO tbl_100_books (book_name, image_path, description, price, rating, author_name, category)
VALUES ('The Great Gatsby', '/uploads/the_great_gatsby.jpg', 'The Great Gatsby is a novel by F. Scott Fitzgerald published in 1925. Set in the Roaring Twenties, it explores themes of decadence, idealism, and social upheaval. The book is narrated by Nick Carraway, a young man who becomes entangled in the lives of Jay Gatsby and Daisy Buchanan.', 12.99, 4.5, 'F. Scott Fitzgerald', 'Fiction');

INSERT INTO tbl_100_books (book_name, image_path, description, price, rating, author_name, category)
VALUES ('Sapiens - A Brief History of Humankind', '/uploads/sapiens.jpg', 'Sapiens - A Brief History of Humankind is a book by Yuval Noah Harari published in 2014. It offers a comprehensive overview of the history of Homo sapiens, covering topics such as biology, culture, and the impact of humans on the world. The book provides a thought-provoking perspective on our species and its place in the world.', 19.99, 4.7, 'Yuval Noah Harari', 'Non-Fiction');

INSERT INTO tbl_100_books (book_name, image_path, description, price, rating, author_name, category)
VALUES ('1984', '/uploads/1984.jpg', '1984 is a dystopian novel by George Orwell published in 1949. Set in a totalitarian society, the story follows Winston Smith as he rebels against the oppressive regime led by Big Brother. It explores themes of government surveillance, manipulation, and the loss of individual freedom.', 11.99, 4.6, 'George Orwell', 'Fiction');

INSERT INTO tbl_100_books (book_name, image_path, description, price, rating, author_name, category)
VALUES ('The Catcher in the Rye', '/uploads/the_catcher_in_the_rye.jpg', 'The Catcher in the Rye is a novel by J.D. Salinger published in 1951. It is a story narrated by Holden Caulfield, a teenager struggling with alienation and rebellion against the adult world. The book is known for its distinctive voice and its portrayal of teenage angst.', 10.99, 4.4, 'J.D. Salinger', 'Fiction');

INSERT INTO tbl_100_books (book_name, image_path, description, price, rating, author_name, category)
VALUES ('Becoming', '/uploads/becoming.jpg', 'Becoming is a memoir by Michelle Obama published in 2018. It provides an intimate and inspiring account of her life, from her childhood in Chicago to her role as First Lady of the United States. The book explores themes of identity, family, and public service, offering a personal perspective on her journey.', 16.99, 4.9, 'Michelle Obama', 'Non-Fiction');

INSERT INTO tbl_100_books (book_name, image_path, description, price, rating, author_name, category)
VALUES ('Harry Potter and the Philosopher\'s Stone', '/uploads/harry_potter.jpg', 'Harry Potter and the Philosopher\'s Stone is the first book in the Harry Potter series by J.K. Rowling. It follows the story of Harry Potter, a young wizard who discovers his magical abilities and attends Hogwarts School of Witchcraft and Wizardry. The book introduces readers to the magical world and sets the stage for Harry\'s epic adventures.', 14.99, 4.7, 'J.K. Rowling', 'Children');