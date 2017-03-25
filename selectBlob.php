<?php
	
/**
 * PHP MySQL BLOB Demo
 * author : Sugam Malviya
 * github : https://github.com/Sugamm
 */
	require_once 'blob.php';

	$blobObj = new BlobDemo();
 
	//this will return array of id=1;
	$a = $blobObj->selectBlob(1);
	header("Content-Type:" . $a['mime']);
	echo $a['data'];

?>



