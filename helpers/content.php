<?php

function getContent($file, $data = []) {
	foreach ($data as $key => $value) {
		$$key = $value;
	}
    ob_start();
    include($file);
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
}