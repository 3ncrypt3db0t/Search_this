<?php
include("classes/DomDocumentParser.php");

function followLinks($url) {
    $parser = new DomDocumentParser($url);

    $linkList = $parser->getLinks();

    foreach($linkList == $link) {
        $href = $link->getAttribute("href");
    }
}

$startURL = "https://3ncrypt3db0t.github.io/";
followLinks($startURL);
?>
