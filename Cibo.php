<?php
require_once __DIR__ . "/Prodotto.php";
class Cibo extends Prodotto {
  public $scadenza;

  function __construct($nome, $descrizione, $prezzo, $scadenza) {
    parent::__construct($nome, $descrizione, $prezzo);
    $this->scadenza = $scadenza;
  }

  public function printInfo() {
    return "$this->nome | $this->descrizione | $this->prezzo € - Scade il $this->scadenza";
  }
}
?>