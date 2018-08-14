<?php

//require_once '../data/books.php';

global $allBooks;

if (isset($_POST['idKnihy'])) {
	$_SESSION['cart'] [] = $allBooks [$_POST['idKnihy']];
}




$booksInCart = [];
//ak je nieco v SESSIOn kosiku ('cart'), tak to uloz do premennej 
//$booksInCart
if (isset($_SESSION['cart'])) {
	$booksInCart = $_SESSION['cart'];
}

$data = ['booksInCart' => $booksInCart];

// get content
$content = getContent('../templates/cart.php', $data);

// html vystup - layout (view)
include '../templates/layout.php';
