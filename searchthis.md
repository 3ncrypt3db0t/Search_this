```php
<?php
$greetingMessage = "Welcome to Search_This";
$projectYear = 2021;

class PageContents {
    function PageContents() {
        $this->index = "index.php"; 
        $this->search = "search.php";
        $this->connection = "config.php";
        $this->webcrawl = "crawl.php";
        
    }
}

// create an object
$Lightning = new Car();

// show object properties
echo $Lightning->model;
?>
