<?php declare(strict_types=1);

namespace Shop\Parser;

class CartParser implements ParserInterface
{
    /**
     * @var \PDO
     */
    private $conn;
    private $content;

    public function vykdyti($id)
    {
        $this->conn = ($GLOBALS['container'])->get('db')->getConn();

        $user = '123'; //@TODO: is Sesijos gauti vartotojo ID

        /** @var \PDOStatement $stmt */
        $stmt = $this->conn->prepare('INSERT INTO cart(user, item) VALUES (:user, :item);');
        $stmt->bindParam(':user', $user);
        $stmt->bindParam(':item', $id);
        $stmt->execute();
    }

    public function getContent()
    {
        return '';
    }

    public function getPageTitle()
    {
        return '';
    }
}