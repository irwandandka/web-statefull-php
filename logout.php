<?php 

session_start();
session_destroy();

// Hapus cookie
setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

header('Location: index.php');

?>