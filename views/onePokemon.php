<?php
require_once 'views/partials/header.php';
?>

    <section class="container w-50">
        <h1 class="text-center">Détails du Pokémon</h1>
        <div class="mb-3">
            <label for="pokemonName" class="form-label">Nom</label>
            <input type="text" class="form-control" id="pokemonName" value="<?= $pokemon['name']; ?>" readonly>
        </div>
        <div class="mb-3">
            <label for="pokemonType" class="form-label">Type</label>
            <input type="text" class="form-control" id="pokemonType" value="<?= $pokemon['type']; ?>" readonly>
        </div>
        <a href="index.php" class="btn btn-primary">Retour</a>
    </section>

<?php
require_once 'views/partials/footer.php';
?>