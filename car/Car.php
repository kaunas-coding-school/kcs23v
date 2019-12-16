<?php declare(strict_types = 1);


Class Car {
    public $spalva;
    public $greitis;
    private $rida;
    public function vaziuoti($laikas): void {
        echo "Automobilis važiuoja $this->greitis greičiu";
        $this->rida += (int) $this->greitis * $laikas;
    }
    public function gautiRida(): int {
        return $this->rida;
    }
    public function gautiSpalva() { return $this->spalva; }
}
