<?php
 class Dump{
      private $title;
      private $content;
      private $connection;

      function __constructor(){
        $database = Database::getSingleton();
        $this->connection = $database->connection;
      }



      // CRUD Functions
      private function createDump(){}
      private function updateDump(){}
      private function deleteDump(){}
      private function getDump(){}


      // Request Handler
      private function handleRequest($arg1, $arg2) {
            $requestMethod= $_SERVER['REQUEST_METHOD'];
            switch($requestMethod){
                case "POST":
                    $this->createDump(){}
                    break;
                case "GET":
                    $this->getDump(){}
                    break;
                case "PUT":
                    $this->updateDump(){}
                    break;
                case "DELETE":
                    $this->deleteDump(){}
                    break;
            }
      }




}









?>