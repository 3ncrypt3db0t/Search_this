<?php
include("classes/DomDocumentParser.php");

function followLinks($url) {
    $parser = new DomDocumentParser($url);

    $linkList = $parser->getLinks();

    foreach($linkList as $link) {
        $href = $link->getAttribute("href");

        if(strpos($href, "#") !== false) {
            continue;
        } 
        echo $href . "<br>";
    }
}

$startURL = "https://3ncrypt3db0t.github.io/";
followLinks($startURL);
?>
