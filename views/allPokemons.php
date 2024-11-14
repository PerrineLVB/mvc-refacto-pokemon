<?php
require_once './controllers/PokemonController.php';

$controller = new PokemonController();
$pokemons = $controller->getAll();
?>

<div class="container">
    <h1>Mon Pokedex</h1>
    <a href="createPokemon.php" class="btn btn-primary mb-3"><i class="fa-solid fa-plus"></i> Nouveau Pokémon</a>
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
                        <a href="onePokemon.php?id=<?= $pokemon->getId(); ?>" class="btn btn-primary"><i class="fa-solid fa-eye"></i> Voir</a>
                        <a href="updatePokemon.php?id=<?= $pokemon->getId(); ?>" class="btn btn-success"><i class="fa-solid fa-edit"></i> Modifier</a>
                        <a href="" class="btn btn-danger"><i class="fa-solid fa-trash"></i> Supprimer</a>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p>Aucun Pokémon</p>
        <?php endif; ?>
    </div>
</div>