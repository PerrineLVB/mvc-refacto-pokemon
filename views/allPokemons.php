<?php
require_once './controllers/PokemonController.php';

$controller = new PokemonController();
$pokemons = $controller->getPokemons();
?>
<div class="container">
    <h1>Mon Pokedex</h1>
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
                    <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                    <a href="#" class="btn btn-success"><i class="fa-solid fa-edit"></i></a>
                    <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash"></i></a>
                </div>
            </div>
            <h2></h2>
            <p></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Aucun Pokémon</p>
    <?php endif; ?>
    </div>
</div>
