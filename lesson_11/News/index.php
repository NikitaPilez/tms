<?php

require_once "Article.php";

$article = new Article("About patterns", "<h1>Hello world</h1>", "2023-02-03 15:00", false, "about-patterns");
$articleNew = clone $article;
print_r($articleNew);
