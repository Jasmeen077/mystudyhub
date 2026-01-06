<?php
class Config
{

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $db_name = "mystudyhub";

    protected $conn;

    //make constructor
    public function __construct()
    {
        $this->conn = new mysqli(
            $this->host,
            $this->username,
            $this->password,
            $this->db_name
        );

        if ($this->conn->connect_error) {
            die("Connection failed");
        }
    }
}
