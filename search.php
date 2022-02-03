<?php
include __DIR__ . '/server/db.php';
$cardsFiltered = $cards;

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
} ?>

<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ . '/partials/head.php';
?>

<body>
  <div class="container">
    <?php include __DIR__ . '/partials/header.php' ?>
    <form action="search.php" method="GET">
      <input type="text" name="titolo">
      <select name="genre" id="genre">
        <option value="all">all</option>
        <option value="Pop">Pop</option>
        <option value="Jazz">Jazz</option>
      </select>
      <button>Cerca</button>
    </form>
    <main>
      <div class="cards-container">
        <?php
        foreach ($cardsFiltered as $card) {
          include __DIR__ . '/partials/card.php';
        }
        ?>
      </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php' ?>
  </div>
</body>

</html>