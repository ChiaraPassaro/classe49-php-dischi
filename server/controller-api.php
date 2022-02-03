<?php
include __DIR__ . '/db.php';
header('Content-type: application/json');


if (isset($_GET['genre']) !== false) {
  $genre = $_GET['genre'];
  if ($genre === 'all') {
    $cardsFiltered = $cards;
  } else {
    $cardsFiltered = [];
    foreach ($cards as $card) {
      if ($card['genre'] === $genre) {
        $cardsFiltered[] = $card;
      }
    }
  }
  echo json_encode([
    'results' =>  $cardsFiltered,
    'length' => count($cards)
  ]);
} else {
  echo json_encode([
    'error' =>  'genere non selezionato'
  ]);
}
