<?php declare(strict_types=1);

namespace Shop\Services;

class TemplateEngine
{
    /**
     * @var false|string
     */
    private $layout;

    public function __construct($layoutFile)
    {
        $file = fopen($layoutFile, 'rb');
        $this->layout = fread($file,filesize($layoutFile));
        fclose($file);
    }

    public function printContent(array $data)
    {
        foreach ($data as $key => $item) {
            $this->layout = str_replace($key, $item, $this->layout);
        }

       echo $this->layout;
    }

    public function getContent(array $data)
    {
        foreach ($data as $key => $item) {
            $this->layout = str_replace($key, $item, $this->layout);
        }

        return $this->layout;
    }
}
