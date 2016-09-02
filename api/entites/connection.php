<?php

final class Database
{
    private $connection;
    private $servername = "localhost";
    private $username = "shubhgh8_dumper";
    private $password = "dump#@!";
    private $dbname = "shubhgh8_dumpingbin";

    public static function getSingleton()
    {
        static $inst = null;
        if ($inst === null) {
            $inst = new Database();
        }
        return $inst;
    }


    private function __construct()
    {
        $this->connection = mysqli_connect(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname
        );
    }
}
?>