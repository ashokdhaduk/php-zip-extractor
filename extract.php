<?php

require_once 'pclzip.lib.php';
require_once 'Zipper.php';

$zip = new Zipper();

$file = '';
$path = dirname(__FILE__);

try {
	
	$result = $zip->unzip($file, $path);

	if($result) {
		echo "Successfully extracted.";
	} else {
		echo "Hard Luck!! Something went wrong!!!";
	}

} catch(Exception $e) {
	echo $e->getMessage();
}


?>