<?php

require($_SERVER['DOCUMENT_ROOT'] . '/_config.php');

$page_title = 'Página modelo';

$page_article = "<h2>{$page_title}</h2>";

$page_aside = '<h3>Barra lateral</h3>';

require($_SERVER['DOCUMENT_ROOT'] . '/_header.php');

echo <<<HTML
<article>{$page_article}</article>
<aside>{$page_aside}</aside>
HTML;

require($_SERVER['DOCUMENT_ROOT'] . '/_footer.php');