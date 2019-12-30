<?php declare(strict_types=1);

namespace Shop\Parser;

class PageParser implements ParserInterface
{
    /**
     * @var \PDO
     */
    private $conn;
    private $content;

    public function vykdyti($id): void
    {
        $this->conn = ''; // @TODO: Gauti DB conn

        $stmt = $this->conn->prepare('SELECT * FROM pages WHERE id = :id;');
        $stmt->bindParam(':id', $id);
        $this->content = $stmt->fetch();
    }

    public function getContent(): string
    {
        return $this->content;
    }
}