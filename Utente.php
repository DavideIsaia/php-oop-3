<?php
class Utente {
  public $nome;
  public $cognome;
  public $tel;
  public $carta_scaduta = false;
  public $carrello = [];
  public $registrato = false;

  function __construct($nome, $cognome, $tel) {
    $this->nome = $nome;
    $this->cognome = $cognome;
    $this->tel = $tel;
  }

  public function printUtente() {
    return "$this->nome $this->cognome - <small>Numero di tel: $this->tel</small>";
  }

  public function aggiungiCarrello($_prodotto) {
    if ($_prodotto->in_stock) {
      $this->carrello[] = $_prodotto;
      return true;
    } else {
      return false;
    }
  }

  public function registrato() {
    $this->registrato = true;
    return "Bentornato " . $this->nome ." " . $this->cognome . "! hai effettuato l'accesso :)";
  }

  public function getPrezzoTot() {
    $prezzo_tot = 0;
    foreach($this->carrello as $item) {
      $prezzo_tot += $item->prezzo;
    }
    if ($this->registrato) {
      return  number_format((float)$prezzo_tot*0.8, 2, '.', '') . " (sconto del 20% applicato!)";
    } else {
      return number_format((float)$prezzo_tot, 2, '.', '');
    }
  }

  public function canPurchase() {
    return !$this->carta_scaduta;
  }
}
