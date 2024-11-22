<?php
require_once 'views/partials/header.php';
?>

<div class="container">
    <h1>Mon Pokedex</h1>
    <a href="views/createPokemon.php" class="btn btn-info mb-3"><i class="fa-solid fa-plus"></i> Nouveau Pokémon</a>
    <div class="d-flex justify-content-evenly">
        <?php if (!empty($pokemons)): ?>
            <?php foreach ($pokemons as $pokemon): ?>
                <div class="card w-25">
                    <div class="card-header">
                        <?= $pokemon->getType(); ?>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">
                            <?= $pokemon->getName(); ?>
                        </h5>
                        <a href="views/onePokemon.php?id=<?= $pokemon->getId(); ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Voir</a>
                        <a href="views/updatePokemon.php?id=<?= $pokemon->getId(); ?>" class="btn btn-success"><i class="fa-solid fa-edit"></i> Modifier</a>
                        <form action="views/deletePokemon.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $pokemon->getId(); ?>">
                            <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun Pokémon</p>
        <?php endif; ?>
    </div>
</div>

<?php
require_once 'views/partials/footer.php';
?>