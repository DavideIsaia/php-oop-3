<?php
class Prodotto {
  public $nome;
  public $descrizione;
  public $prezzo;
  public $in_stock = true;

  function __construct($_nome, $_descrizione, $_prezzo) {
    $this->nome = $_nome;
    $this->descrizione = $_descrizione;
    $this->prezzo = $_prezzo;
  }

  public function printInfo() {
    return "$this->nome | $this->descrizione | $this->prezzo €";
  }
}
?>