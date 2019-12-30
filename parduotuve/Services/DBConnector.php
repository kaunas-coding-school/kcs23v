<?php declare(strict_types=1);

namespace Shop\Services;

class DBConnector
{
    /**
     * @var \PDO
     */
    private $conn;

    public function getConn(): \PDO
    {
        $this->conn = new \PDO('mysql:host=localhost;dbname=KCS23V', 'root', '');

        return $this->conn;
    }
}