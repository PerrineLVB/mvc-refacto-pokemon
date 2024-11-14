<?php
require_once 'views/partials/header.php';
?>

    <section class="container w-50">
        <h1 class="text-center">Modifier le Pokémon</h1>
        <form action="" method="post">
            <div class="mb-3">
                <label for="pokemonName" class="form-label">Son nom</label>
                <input type="text" class="form-control" id="pokemonName" placeholder="Nom du pokemon" name="pokemonName" value="<?= $pokemon['name']; ?>">
            </div>
            <div class="mb-3">
                <label for="pokemonType" class="form-label">Son type</label>
                <input type="text" class="form-control" id="pokemonType" placeholder="Type du pokemon" name="pokemonType" value="<?= $pokemon['type']; ?>">
            </div>
            <button type="submit" class="btn btn-primary">Enregistrer</button>
        </form>
    </section>

<?php
require_once 'views/partials/footer.php';
?>