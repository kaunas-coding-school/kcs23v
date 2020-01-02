<?php declare(strict_types=1);

namespace Shop\Services;

class DBConnector
{
    /**
     * @var \PDO
     */
    private $conn;

    /**
     * DBConnector constructor.
     * @param \PDO $conn
     */
    public function __construct(Config $configs)
    {
        $dbConfigs = $configs->get('db');

        $host  = $dbConfigs['host'];
        $db = $dbConfigs['db'];
        $user = $dbConfigs['user'];
        $pass = $dbConfigs['pass'];

        $this->conn = new \PDO("mysql:host=$host;dbname=$db", $user, $pass);
    }


    public function getConn(): \PDO
    {
        return $this->conn;
    }
}