<?php

class Database 
{
    private $dbh;
    private $stmt;

    // configuration
    private $host = DB_HOST;
    private $username = DB_USERNAME;
    private $password = DB_PASSWORD;
    private $name = DB_NAME;

    public function __construct()
    {
        $dsn = 'mysql:host='. $this->host .';dbname='. $this->name;

        try{
            $this->dbh = new PDO($dsn, $this->username, $this->password);
        } catch(PDOException $e){
            die($e->getMessage());
        }
    }

    public function query($query)
    {
        $this->stmt = $this->dbh->prepare($query); 
    }

    public function execute()
    {
        return $this->stmt->execute();
    }

    public function bind($param, $value, $type=null)
    {
        if(is_null($type))
        {
            switch(true)
            {
                case is_int($param):
                    $type = PDO::PARAM_INT;
                    break;
                case is_bool($param):
                    $type = PDO::PARAM_BOOL;
                    break;
                case is_null($param):
                    $type = PDO::PARAM_NULL;
                    break;
                default :
                    $type = PDO::PARAM_STR;
            }
        }

        $this->stmt->bindValue($param, $value, $type);
    }

    // return banyak
    public function resultSet()
    {
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    // return single value
    public function single()
    {
        return $this->stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function rowCount()
    {
        // rowCount dari PDO
        return $this->stmt->rowCount();
    }
}