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


        public function insert($table,$user){

            $sql = "INSERT INTO $table(username) VALUES('$user')";
            $statement = $this -> pdo -> prepare($sql);
            $statement -> execute(); 
        }


        public function update($table, $username, $id){
            $sql = "UPDATE $table SET username = '$username' WHERE id=$id";
            $statement = $this->pdo->prepare($sql);
            $statement -> execute();
        }
    }

    

