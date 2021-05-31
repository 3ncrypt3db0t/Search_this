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

class ClassContents {
    function ClassContents() {
        $this->dom = "DomDocumentParser.php"; 
        $this->site = "SiteResultsProvider.php";   
    }
}

class AssetsContents {
    function AssetsContents() {
        $this->images = "assets/images";
        $this->css = "assets/css";
    }
}

class AjaxContents {
    function AjaxContents() {
        $this->dom = ""; 
        $this->site = "";   
    }
}
