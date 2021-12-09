<!-- 
- provate ad immaginare quali sono le classi necessarie per creare uno shop online; 
    ad esempio, ci saranno sicuramente dei prodotti da acquistare e degli utenti che fanno shopping.
- Strutturare le classi gestendo l’ereditarietà dove necessario; 
    ad esempio ci potrebbero essere degli utenti premium che hanno diritto a degli sconti esclusivi, 
    oppure diverse tipologie di prodotti.
- Provate a far interagire tra di loro gli oggetti: 
    ad esempio, l’utente dello shop inserisce una carta di credito...
    $c = new CreditCard(..);
    $user->insertCreditCard($c);
- BONUS:
  Gestite eventuali eccezioni che si possono verificare 
    (es: carta di credito scaduta). 
- continuare l’esercizio di venerdì, 
  aggiungendo almeno un trait a piacere 
  usando poi le eccezioni in diversi punti, come anche mostrato oggi in classe.
-->

<?php
  require_once 'classes/User.php';

  $prova = new User('feDerico', 'molINo');
  echo $prova->getName() . ' ' . $prova->getSurname();
  // var_dump($prova);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-oop-2</title>
</head>
<body>
  
</body>
</html>