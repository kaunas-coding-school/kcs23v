<?php declare(strict_types=1);

namespace Shop\Services;

use Shop\Parser\ParserInterface;

class ProductParser implements ParserInterface
{
    /**
     * @var \PDO
     */
    private $conn;
    private $content;

    public function vykdyti($id): void
    {
        $this->conn = ''; // @TODO: Gauti DB conn
        $state = 1;
        $stmt = $this->conn->prepare('SELECT * FROM products WHERE id = :id AND state = :state;');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':state', $state);
        $this->content = $stmt->fetch();
    }

    public function getContent(): string
    {
        return $this->content;
    }
}