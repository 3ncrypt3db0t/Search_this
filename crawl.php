<?php
include("classes/DomDocumentParser.php");

function followLinks($url) {
    $parser = new DomDocumentParser($url);
}

$startURL = "https://3ncrypt3db0t.github.io/";
followLinks($startURL);
?>
