<?php


class Priedas
{
    /** @var string */
    private $description;
    /** @var string */
    private $name;

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Priedas
     */
    public function setDescription(string $description): Priedas
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Priedas
     */
    public function setName(string $name): Priedas
    {
        $this->name = $name;
        return $this;
    }

    public function __toString()
    {
        return $this->name .': '.$this->description;
    }
}
