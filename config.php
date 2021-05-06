<?php

ob_start();

try {

    $con = new PDO("mysql:dbname=searchThis;host=localhost","root", "");

}
catch(PDOException $e) {
    echo "Connection Failed:" . $e->getMessage();
}

?>
