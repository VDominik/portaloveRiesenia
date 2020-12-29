<?php

namespace classes;

class DB
{
    /**
     * @var string
     */
    private $host = "localhost";
    /**
     * @var string
     */
    private $username = "root";
    /**
     * @var string
     */
    private $password = "";
    /**
     * @var string
     */
    private $dbName = "";
    /**
     * @var int
     */
    private $port;
    /**
     * @var \PDO
     */
    private $connection;

    /**
     * DB constructor.
     * @param $host
     * @param $username
     * @param $password
     * @param $dbName
     * @param int $port
     */


    public function __construct($host, $username, $password, $dbName, $port = 3306)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->port = $port;

        try {
            $connection = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbName.";port=".$this->port, $this->username, $this->password);
            $connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            $this->connection = $connection;
        } catch (\PDOException $exception) {
            echo "Error while database connect " . $exception->getMessage();
        }
    }

    /**
     * @return \PDO
     */
    public function getConnection()
    {
        return $this->connection;
    }

    /**
     * @param $connectio
     */
    public function setConnection($connectio)
    {
        if($connectio instanceof \PDO) {
            $this->connection = $connectio;
        }
    }

    /**
     * @return array
     */
    public function getRooms()
    {
        $sql = "SELECT * FROM rooms ORDER BY id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function delete($id)
    {
        $sql = "DELETE FROM rooms WHERE id = '$id'";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }

    public function update($nazov, $cena, $popis, $imagep, $id)
    {
        $sql = "UPDATE rooms SET Nazov='$nazov',Cena='$cena',Popis='$popis',image_path='$imagep' WHERE id = '$id'";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }


    public function add($nazov, $cena, $popis, $imagep)
    {
        $sql = "INSERT INTO rooms (id,Nazov,Cena,Popis,image_path) VALUES ('NULL','$nazov','$cena','$popis','$imagep')";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }
}