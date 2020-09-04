<?php
    class Database{
        private $host;
        private $dbusername;
        private $dbpassword;
        private $dbname;

        protected function connect() {
            $this->host = "localhost";
            $this->dbusername = 'root';
            $this->password = '';
            $this->dbname = 'oopcurd';

            $connection = new mysqli($this->host,$this->dbusername,$this->dbpassword,$this->dbname);

            return $connection;
        }
    }
    
?>