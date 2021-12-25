<?php 

    class QueryBuilder{
        
        protected $pdo;
        public function __construct($pdo)
        {
            $this->pdo = $pdo;
        }
        public function select_all($table){

            $statement = $this->pdo->prepare("select * from $table");
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_OBJ);

        }
    }

    

