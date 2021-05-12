<?php 
class SiteResultsProvider {

    private $con;

    public function __construct($con) {
        $this->con = $con;
    }

    public function getNumResults($term) {
        $query = $this->con->prepare("")
    }
}
?>
