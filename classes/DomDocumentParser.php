<?php

class DomDocumentParser {

    private $doc;

    public function __construct($url) {
        echo "URL: $url";

        $options = array(
            'http'=>array('method'=>"GET", 'header'=>"User-Agent: searchthisBot/1.0\n")
        );

        $context = stream_context_create($options);

        $this->doc = new DomDocument();

        @$this->doc->loadHTML(file_get_contents($url, false, $context));
    }
}

?>
