<?php
require_once './controllers/PokemonController.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $controller = new PokemonController();
    $pokemon = $controller->getById($id);
}

require_once 'partials/header.php';
?>

    <section class="container w-50">
        <h1 class="text-center">Modifier le Pokémon</h1>
        <form action="updatePokemon.php?id=<?= $pokemon->getId(); ?>" method="post">
            <div class="mb-3">
                <label for="pokemonName" class="form-label">Son nom</label>
                <input type="text" class="form-control" id="pokemonName" placeholder="Nom du pokemon" name="pokemonName" value="<?= $pokemon->getName(); ?>">
            </div>
            <div class="mb-3">
                <label for="pokemonType" class="form-label">Son type</label>
                <input type="text" class="form-control" id="pokemonType" placeholder="Type du pokemon" name="pokemonType" value="<?= $pokemon->getType(); ?>">
            </div>
            <button type="submit" class="btn btn-primary" href="../index.php">Enregistrer</button>
        </form>
    </section>

<?php
require_once 'partials/footer.php';
?>