<?php declare(strict_types = 1);


Class Car {
    public $spalva;
    public $greitis;
    private $rida;
    private $vairuotojas;
    private $keleiviuKiekis;
    private $keleiviai;
    private $priedai;


    public function __construct(int $keleiviuKiekis = 5)
    {
        $this->keleiviuKiekis = $keleiviuKiekis;
    }

    public function vaziuoti($laikas): self {
        echo "Automobilis važiuoja $this->greitis greičiu";
        $this->rida += (int) $this->greitis * $laikas;
        return $this;
    }
    public function gautiRida(): int {
        return $this->rida;
    }
    public function gautiSpalva() { return $this->spalva; }

    public function getVairuotojas()
    {
        return $this->vairuotojas;
    }

    public function setVairuotojas(Asmuo $vairuotojas): self
    {
        $this->vairuotojas = $vairuotojas;
        return $this;
    }

    public function getKeleiviuKiekis(): int
    {
        return $this->keleiviuKiekis;
    }

    public function setKeleiviuKiekis(int $keleiviuKiekis):self
    {
        $this->keleiviuKiekis = $keleiviuKiekis;
        return $this;
    }

    public function getKeleiviai()
    {
        return $this->keleiviai;
    }

    public function getPriedai()
    {
        return $this->priedai;
    }

    public function setPriedai(array $priedai):self
    {
        $this->priedai = $priedai;
        return $this;
    }
}
