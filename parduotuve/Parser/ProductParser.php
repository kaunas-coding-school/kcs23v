<?php declare(strict_types=1);

namespace Shop\Parser;

use Shop\Services\TemplateEngine;

class ProductParser implements ParserInterface
{
    /**
     * @var \PDO
     */
    private $conn;
    private $content;

    public function vykdyti($id)
    {
        $this->conn = ($GLOBALS['container'])->get('db')->getConn();
        $state = 1;
        $stmt = $this->conn->prepare('SELECT * FROM products WHERE id = :id AND state = :state;');
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':state', $state);
        $stmt->execute();
        $this->content = $stmt->fetch();
    }

    public function getContent()
    {
        $templEngine = new TemplateEngine('product_layout.html');
        $description = $this->content['description'] ?? 'Sorry no Product here :)';
        $name = $this->content['name'];
        $id = $this->content['id'];

        $content = $templEngine->getContent([
            '{{PROD_ID}}' => $id,
            '{{DESCRIPTION}}' => $description,
            '{{NAME}}' => $name,
        ]);

        return $content;
    }

    public function getPageTitle()
    {
        return 'Produktas: '. ($this->content['name'] ?? 'Sorry no Product here :)');
    }
}