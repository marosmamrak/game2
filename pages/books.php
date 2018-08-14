<?php

//require_once '../data/books.php';

global $books;
// get list of books
// 
if (isset($_GET['search'])) {
	$_SESSION['hladana_kniha'] = $_GET['search'];
		$books = searchBooks($_GET['search']);
	}else {
		$books = getRandomBooks( 5 );
	}

	$searchedValue = '';
if (isset($_GET['search'])) {
	 //ak teraz nieco hladal
	$searchedValue = $_GET['search'];
} else if (isset($_SESSION['hladana_kniha'])) {
	//ak hladal uz nieco predtym
	$searchedValue = $_SESSION['hladana_kniha'];
}

$data = ['books' => $books];

// get content
$content = getContent('../templates/books.php', $data);

// html vystup - layout (view)
include '../templates/layout.php';