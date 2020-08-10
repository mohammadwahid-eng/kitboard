<?php
class Database{

    private $connection = null;
    protected $host       = "localhost";
    protected $dbname     = "board";
    protected $username   = "root";
    protected $password   = "";
    
    public function __construct(){
        try{        
            $this->connection = new PDO("mysql:host={$this->host};dbname={$this->dbname};", $this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            $this->tables();
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }        
    }

    public function tables() {
        try{
            $sqls = [
                'CREATE TABLE IF NOT EXISTS kit_requests(
                    name VARCHAR(191) NOT NULL,
                    request INT NOT NULL DEFAULT 0,
                    date DATE NOT NULL,
                    PRIMARY KEY(name, date))',
                'CREATE TABLE IF NOT EXISTS kit_delivered(
                    name VARCHAR(191) NOT NULL PRIMARY KEY,
                    quantity INT NOT NULL DEFAULT 0,
                    date DATE NOT NULL)'
            ];
            foreach($sqls as $sql) {
                $this->connection->exec($sql);
            }
        }catch(Exception $e){
            throw new Exception($e->getMessage());
        }
    }
    
    // Insert a row/s in a Database Table
    public function insert( $statement = "" , $parameters = [] ){
        try{
            $this->executeStatement( $statement , $parameters );
            return true;
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }

    // Select a row/s in a Database Table
    public function select( $statement = "" , $parameters = [] ){
        try{            
            $stmt = $this->executeStatement( $statement , $parameters );
            return $stmt->fetchAll(PDO::FETCH_ASSOC);            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }
    
    // Update a row/s in a Database Table
    public function update( $statement = "" , $parameters = [] ){
        try{            
            $this->executeStatement( $statement , $parameters );            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }
    }
    
    // execute statement
    private function executeStatement( $statement = "" , $parameters = [] ){
        try{        
            $stmt = $this->connection->prepare($statement);
            $stmt->execute($parameters);
            return $stmt;            
        }catch(Exception $e){
            throw new Exception($e->getMessage());   
        }		
    }
    
}