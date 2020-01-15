<?php 

class database {
    private $dbServername;
    private $dbUserName;
    private $dbPassword;
    private $dbName;

    protected function connect() {
        $this->dbServername = "localhost";
        $this->dbUserName = "root";
        $this->dbPassword = "";
        $this->dbName = "product_list";

        $conn = new mysqli($this->dbServername, $this->dbUserName, $this->dbPassword, $this->dbName);
        return $conn;
    }
}