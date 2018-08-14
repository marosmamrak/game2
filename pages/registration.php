<?php

$meno = isset($_POST['meno']) ? htmlentities($_POST['meno']) : '';
$priezvisko = isset($_POST['priezvisko']) ? htmlentities($_POST['meno']) : '';
$adresa = isset($_POST['adresa']) ? htmlentities($_POST['adresa']) : '';

$data = [
	"meno" => $meno,
	"priezvisko" => $priezvisko,
	"adresa" => $adresa,
];

// get content
$content = getContent('../templates/registration.php', $data);

// html vystup - layout (view)
include '../templates/layout.php';