<?php
    $newConnection = new Connection();

    Class Connection{
        private $server = "mysql:host=localhost";
        private $user = "root";
        private $pass = "";
        private $dbname = "sampledatabase";
        private $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO :: FETCH_OBJ);
        protected $con;

        public function openConnection()
        {
            try{
                $this->con = new PDO($this->server,$this->user,$this->pass,$this->options);
                return $this->con;
            }catch(PDOException $th){
                echo "There is a problem in the connection:".$th->getMessage();
            }
        }
    }
