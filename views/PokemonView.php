<?php
require_once 'PokemonController.php';

$controller = new PokemonController();
$pokemons = $controller->getPokemons();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Pokemons List</title>
</head>
<body>
    <h1>Pokemons List</h1>
    <?php if (!empty($pokemons)): ?>
        <?php foreach ($pokemons as $pokemon): ?>
            <h2><?php echo htmlspecialchars($pokemon['name']); ?></h2>
            <p><?php echo htmlspecialchars($pokemon['type']); ?></p>
        <?php endforeach; ?>
    <?php else: ?>
        <p>No pokemons found.</p>
    <?php endif; ?>
</body>
</html>
