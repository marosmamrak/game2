<?php

global $books, $allBooks;

use MyClasses\Kniha;

$books = []; // empty list

for ($i=1; $i < 101; $i++) {
  $books[$i] = new Kniha;
  $books[$i]->id = $i; // 'id' => i
  $books[$i]->title = 'Kniha' . $i;
  $books[$i]->description = 'Popis Knihy ' . $i;
  $books[$i]->price = rand(1, 100);


/*
     [
  }
  'id' => $i, 
	'title' => 'Kniha ' . $i, 
	'description' => 'Popis knihy   ' . $i,
	'price' => rand(1, 100)
  ];
  */
}

$allBooks = getBooks();
/**
  * get books list
  *
  * @param integer $limit books limit, default 0 = unlimited
  *
  * @return array Returns the list of articles
  */
function getBooks( $limit = 0 ) {
	global $books;

	if ($limit > 0) {
	    for ($i=0; $i < $limit; $i++) { 
	        $list[$i] = $books[$i];
	    }
	} else {
		$list = $books;
	}
    addDolarPrice($list);
    return $list;
}


/**
  * get random books
  *
  * @param integer $limit articles limit, default 0 = unlimited
  *
  * @return array Returns the list of articles
  */
function getRandomBooks( $limit = 5 ) {
	global $books;

	$list = []; // najprv je prazdny zoznam

	// get x random keys
    $randomIndexes = array_rand($books, $limit);

    foreach ($randomIndexes as $index) {
    	$list[$index] = $books[$index];
    	//array_push($list, $books[$index]);
    }

    // add first book at the end
    $list[] = $books[  $randomIndexes[0]    ];
addDolarPrice($list);

	return $list;
}


/**
  * search books by title
  *
  * @param integer $limit articles limit, default 0 = unlimited
  *
  * @return array Returns the list of articles
  */
function searchBooks( $search ='',  $limit = 5 ) {
  //vytiahni zoznam vsetkych knih 
  //v ktorych budeme hladat
  $books = getBooks(); 
  $searchedBooks = [];

  //vyhladaj v zozname knih tu ktoru hladam
    foreach ($books as $idKnihy => $book) {
    if ( strtolower($book->title) === strtolower($search)) {
      $searchedBooks[ $idKnihy ] = $book; 
    }
}

    


  return $searchedBooks; //vrati len knihy ktore hladal niekto


}

function addDolarPrice($knihy) {
  array_map(
    function($book) {
   // $book->price = $book->price * 0.8;
    

    $book->priceInDolars = $book->price * 0.8;

    return $book;
  }
  , $knihy);
}


  
