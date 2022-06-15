<?php
  // includo le classi
  require_once __DIR__ . "/Prodotto.php";
  require_once __DIR__ . "/Cibo.php";
  require_once __DIR__ . "/PetToy.php";
  require_once __DIR__ . "/Utente.php";

  // invento prodotti
  $dog_food = new Cibo("Enjoy Plus", "Crocchette di pollo", 24.99, "14/06/2024");
  $dog_toy = new PetToy("Molla l'osso!", "Osso da masticare", 9.99, "Gomma", "Beige");
  $cat_toy = new PetToy("Scappa Jerry!", "Giocattolo a forma di topo", 34.99, "Stoffa", "Grigio");

  // invento utente non registrato
  $user1 = new Utente("Davide", "Isaia", "333-1234567");
  $user1-> aggiungiCarrello($dog_food);
  $user1-> aggiungiCarrello($dog_toy);

  // utente registrato
  $user2 = new Utente("Dottor", "Dolittle", "393-9876543");
  $user2-> aggiungiCarrello($dog_food);
  $user2-> aggiungiCarrello($dog_toy);
  $user2-> aggiungiCarrello($cat_toy);

  // utente con carta scaduta
  $user3 = new Utente("Povero", "Gabbiano", "340-3456123");
  $user3-> aggiungiCarrello($dog_food);
  $user3->carta_scaduta = true;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP OOP 3</title>
  <link rel="stylesheet" href="./css/style.css">
</head>
<body>
  <div class="container">
    <h1>Animal Shopping</h1>
    <hr>
    <h3>Prodotti in pronta consegna:</h3>
    <!-- stampo la lista di prodotti -->
      <ul>
        <li><?php echo $dog_food->printInfo(); ?></li>
        <li><?php echo $dog_toy->printInfo(); ?></li>
        <li><?php echo $cat_toy->printInfo(); ?></li>
      </ul>
      <hr>

      <!-- utente non registrato -->
      <h3>Utente Ospite</h3>
      <h4><?php echo $user1->printUtente(); ?></h4>
      <hr>
      <h2>Ciao <?php echo $user1->nome; ?>. Ecco il tuo carrello:</h2>
      <ul>
        <?php foreach($user1->carrello as $item) { ?>
          <li><?php echo $item->printInfo(); ?></li>
        <?php } ?>
      </ul>
      <h3>Totale: € <?php echo $user1->getPrezzoTot(); ?></h3>
      
      <p>
        <?php
        if ($user1->canPurchase()) {
          echo "Puoi procedere all'acquisto!";
        } else {
          echo "La tua carta è scaduta. Inserire metodo di pagamento alternativo";
        }?>
      </p>
      <hr>

      <!-- utente registrato -->
      <h3>Utente Registrato</h3>
      <h4><?php echo $user2->printUtente(); ?></h4>
      <hr>
      
      <h2><?php echo $user2->registrato(); ?> Ecco il tuo carrello:</h2>
      <ul>
        <?php foreach($user2->carrello as $item) { ?>
          <li><?php echo $item->printInfo(); ?></li>
        <?php } ?>
      </ul>
      <h3>Totale: € <?php echo $user2->getPrezzoTot(); ?></h3>
      
      <p>
        <?php
        if ($user2->canPurchase()) {
          echo "Puoi procedere all'acquisto!";
        } else {
          echo "La tua carta è scaduta. Inserire metodo di pagamento alternativo";
        }?>
      </p>
      <hr>

      <!-- utente con carta scaduta -->
      <h3>Utente Ospite</h3>
      <h4><?php echo $user3->printUtente(); ?></h4>
      <hr>
      <h2>Ciao <?php echo $user3->nome; ?>. Ecco il tuo carrello:</h2>
      <ul>
        <?php foreach($user3->carrello as $item) { ?>
          <li><?php echo $item->printInfo(); ?></li>
        <?php } ?>
      </ul>
      <h3>Totale: € <?php echo $user3->getPrezzoTot(); ?></h3>  

      <p>
        <?php
        if ($user3->canPurchase()) {
          echo "Puoi procedere all'acquisto!";
        } else {
          echo "La tua carta è scaduta. Inserire metodo di pagamento alternativo";
        }?>
      </p>
  </div>  
</body>
</html>