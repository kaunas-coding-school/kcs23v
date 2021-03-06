<?php declare(strict_types=1);

namespace Shop\Parser;

class PageParser implements ParserInterface
{
    /**
     * @var \PDO
     */
    private $conn;
    private $content;

    public function vykdyti($id)
    {
        $this->conn = ($GLOBALS['container'])->get('db')->getConn();

        /** @var \PDOStatement $stmt */
        $stmt = $this->conn->prepare('SELECT * FROM pages WHERE id = :id;');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $this->content = $stmt->fetch();
    }

    public function getContent()
    {
        return $this->content['content'];
    }

    public function getPageTitle()
    {
        return $this->content['title'];
    }
}