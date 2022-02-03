<!DOCTYPE html>
<html lang="en">
<?php
include __DIR__ . '/server/db.php';
include __DIR__ . '/partials/head.php';
?>

<body>
  <div class="container">
    <?php include __DIR__ . '/partials/header.php' ?>
    <main id="app">
      <div class="cards-container">
        <div v-for="card in cards" class="card">
          <img :src="card.poster" />
          <div class="content">
            <h3>{{card.title}}</h3>
            <small>{{card.author}}</small>
            <strong>{{card.year}}</strong>
          </div>
        </div>
      </div>
    </main>
    <?php include __DIR__ . '/partials/footer.php' ?>
  </div>
</body>

</html>