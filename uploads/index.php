<?php

// serve images from the uploads directory
$filename = $_GET['filename'];
$filepath = $filename;

echo $filepath;
if (file_exists($filepath)) {
	header("Content-Type: image/jpeg");
	readfile($filepath);
} else {
	header("HTTP/1.0 404 Not Found");
}

?>
