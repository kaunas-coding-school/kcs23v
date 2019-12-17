<?php

class Asmuo
{
    /** @var int */
    private $asmensKodas;
    /** @var string */
    private $pavarde;
    /** @var Adresas */
    private $adresas;
    /** @var string */
    private $kitaInformacija;
    /** @var string */
    private $vardas;

    public function __construct(int $gmmd)
    {
        $this->asmensKodas = $gmmd . random_int(1000, 9999);
    }

    public function getAsmensKodas(): int
    {
        return $this->asmensKodas;
    }

    public function setAsmensKodas(int $asmensKodas): Asmuo
    {
        $this->asmensKodas = $asmensKodas;
        return $this;
    }

    public function getPavarde(): string
    {
        return $this->pavarde;
    }

    public function setPavarde(string $pavarde): Asmuo
    {
        $this->pavarde = $pavarde;
        return $this;
    }

    public function getAdresas(): Adresas
    {
        return $this->adresas;
    }

    public function setAdresas(Adresas $adresas): Asmuo
    {
        $this->adresas = $adresas;
        return $this;
    }

    public function getKitaInformacija(): string
    {
        return $this->kitaInformacija;
    }

    public function setKitaInformacija(string $kitaInformacija): Asmuo
    {
        $this->kitaInformacija = $kitaInformacija;
        return $this;
    }

    public function getVardas(): string
    {
        return $this->vardas;
    }

    public function setVardas(string $vardas): Asmuo
    {
        $this->vardas = $vardas;
        return $this;
    }
}
