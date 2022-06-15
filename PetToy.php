<?php
require_once __DIR__ . "/Prodotto.php";
class PetToy extends Prodotto {
    public $materiale;
    public $colore;

    public function __construct($nome, $descrizione, $prezzo, $materiale, $colore) {
        parent::__construct($nome, $descrizione, $prezzo);
        $this->materiale = $materiale;
        $this->colore = $colore;
    }

    public function printInfo() {
        return "$this->nome | $this->descrizione | $this->prezzo € - Materiale: $this->materiale - Colore: $this->colore";
    }
}
?>