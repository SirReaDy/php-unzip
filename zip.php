<?php 

$archive = "xyz.zip";
$directory = $_SERVER['DOCUMENT_ROOT'];
exec( "zip -r $archive $directory");

 ?>