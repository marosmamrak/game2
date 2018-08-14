<?php

function slug($title) {

	//kniha 1
	$slug  = str_replace(' ', '-', $title);

	return $slug;
}