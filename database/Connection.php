<?php
    
    class Connection{
        public static function make($config){
            
            try {
          
                return new PDO(
                    $config['connection'].$config['name'],
                    $config['user'],
                    $config['password']
                );

            } catch (\PDOException $th) {

                echo $th->getMessage();

            }
        }
    }

    