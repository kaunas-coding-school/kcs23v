<?php declare(strict_types=1);

namespace Shop\Services;

use Shop\Services\DBConnector;

class MeniuGenerator
{
    /**
     * @var DBConnector
     */
    private $conn;

    public function __construct()
    {
        $this->conn = (new DBConnector())->getConn();
    }

    public function generateMeniu($state = 1): string
    {
        $stmt = $this->conn->prepare('SELECT * FROM meniu WHERE state = :state;');
        $stmt->bindParam(':state', $state);
        $stmt->setFetchMode(\PDO::FETCH_ASSOC);
        $rez = $stmt->fetchAll();
        $menuHtml = '';

        foreach ($rez as $item) {
            $menuHtml .= '<a href="' . $item['url'] . '">' . $item['name'] . '</a>';
        }

        return $menuHtml;
    }
}