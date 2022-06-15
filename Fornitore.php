<?php 
require_once __DIR__ . "/Indirizzo.php";

class Fornitore {
  use Indirizzo;  
  public $nome;
  public $p_iva;
  public $tipo_di_merce;
}