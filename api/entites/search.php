class Search{

      private $query;
      private $connection;

      function __constructor(){
        $database = Database::getSingleton();
        $this->connection = $database->connection;
      }

      function doSearch(){

      }



      // Request Handler
      private function handleRequest() {
            $requestMethod= $_SERVER['REQUEST_METHOD'];
            if($requestMethod == "GET"){
                    $this->doSearch();
            }else{

            }
      }



}