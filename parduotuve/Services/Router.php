<?php declare(strict_types=1);

namespace Shop\Services;

use Shop\Parser\CartParser;
use Shop\Parser\PageParser;
use Shop\Parser\ProductParser;
use Shop\Parser\ParserInterface;

class Router
{
    /**
     * @var ParserInterface
     */
    private $parser;

    public function __construct($request)
    {
        if (array_key_exists('prod_id', $request)){
            $this->parser = new ProductParser();
            $id = $request['prod_id'];
        } elseif (array_key_exists('page_id', $request)) {
            $this->parser = new PageParser();
            $id = $request['page_id'];
        } elseif (array_key_exists('buy', $request)) {
            $this->parser = new CartParser();
            $id = $request['buy'];
        } else {
            $this->parser = new PageParser();
            $id = 1;
        }

        $this->parser->vykdyti($id);
    }

    public function getParser()
    {
        return $this->parser;
    }
}
