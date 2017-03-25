<?php
	
/**
 * PHP MySQL BLOB Demo
 * author : Sugam Malviya
 * github : https://github.com/Sugamm
 */

	require_once 'blob.php';

	$blobObj = new BlobDemo();
 
	// test insert gif image
	$a = $blobObj->insertBlob('default.png',"image/png");
	if ($a) {
		echo "Blob successfully updated!";
	}else{
		echo "Sorry, some problem!";
	}

?>
