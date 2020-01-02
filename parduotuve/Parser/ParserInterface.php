<?php declare(strict_types=1);

namespace Shop\Parser;

interface ParserInterface
{
    public function vykdyti($id);

    public function getContent();

    public function getPageTitle();
}