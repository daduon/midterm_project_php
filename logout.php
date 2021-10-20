<?php
require 'include/init.php';

Auth::logout();
Url::redirect('/php_blog-master'); // will not work not root location
// header("location:index.php");

?>
