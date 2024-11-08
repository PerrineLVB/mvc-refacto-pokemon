<?php
require_once './controllers/PokemonController.php';

$controller = new PokemonController();
$pokemons = $controller->getPokemons();
?>

<h1>Pokemons List</h1>
<?php if (!empty($pokemons)): ?>
    <?php foreach ($pokemons as $pokemon): ?><
        <h2><?= htmlspecialchars($pokemon['name']); ?></h2>
        <p><?= htmlspecialchars($pokemon['type']); ?></p>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun Pokémon</p>
<?php endif; ?>
