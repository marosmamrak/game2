<?php

global $articles;

$articles = [
	(object) ['nazov' => 'Clanok 1', 'popis' => 'Popis clanku 1'],
	(object) ['nazov' => 'Clanok 2', 'popis' => 'Popis clanku 2'],
	(object) ['nazov' => 'Clanok 3', 'popis' => 'Popis clanku 3'],
	(object) ['nazov' => 'Clanok 4', 'popis' => 'Popis clanku 4'],
	(object) ['nazov' => 'Clanok 5', 'popis' => 'Popis clanku 5'],
];


/**
  * get articles list
  *
  * @param integer $limit articles limit, default 0 = unlimited
  *
  * @return array Returns the list of articles
  */
function getArticles( $limit = 0 ) {
	global $articles;

	if ($limit > 0) {
	    for ($i=0; $i < $limit; $i++) { 
	        $list[] = $articles[$i];
	    }
	} else {
		$list = $articles;
	}

    return $list;
}
