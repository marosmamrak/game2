<?php

//require_once '../data/books.php';

global $books;

$_SESSION['pozerane_knihy'][] = $idKnihy;
$_SESSION['pozerane_knihy'] = array_unique($_SESSION['pozerane_knihy']);


$book = $books[ $idKnihy];

$data = ['book' => $book];

// get content
$content = getContent('../templates/book.php', $data);

// html vystup - layout (view)
include '../templates/layout.php';
