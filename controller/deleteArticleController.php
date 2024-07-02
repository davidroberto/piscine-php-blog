<?php

require_once('../config/config.php');

session_start();

if ($_SESSION['username'] !== "david") {
	header("Location: http://localhost:8888/piscine-php-tp-blog/views/connection.php");
} 

file_put_contents('../articles.txt', '');

