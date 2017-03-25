<?php
	
/**
 * PHP MySQL BLOB Demo
 * author : Sugam Malviya
 * github : https://github.com/Sugamm
 */

	require_once 'blob.php';

	$blobObj = new BlobDemo();
 
	//this will update a row of id=1;
	$a = $blobObj->updateBlog(1,"1.png","image/jpg");
	if ($a) {
		echo "Blob successfully updated!";
	}else{
		echo "Sorry, some problem!";
	}

?>