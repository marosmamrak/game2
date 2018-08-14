<?php

http_response_code(404);

$content = getContent('../templates/error.php');

// html vystup - layout (view)
include '../templates/layout.php';