<?php
define('homepagePath', 'index.html');

$pagePath = $_GET['page'];

# If the page wasn't specified, go to the home page
if ($pagePath == null) {
    $pagePath = homepagePath;
}

$pagePath = 'pages/' . $pagePath;

$page = file_get_contents($pagePath);
echo $page;
?>