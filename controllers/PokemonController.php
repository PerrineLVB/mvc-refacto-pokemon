<?php
require_once __DIR__.'/../models/Pokemon.php';

class PokemonController {
    public function getAll() {
        return Pokemon::getAllPokemons();
    }

    public function getById($id) {
        return (new Pokemon())->getPokemonById($id);
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['pokemonName'];
            $type = $_POST['pokemonType'];
            $pokemon = new Pokemon();
            $pokemon->createPokemon($name, $type);
            header('Location: index.php');
        } else {
            require_once 'views/createPokemon.php';
        }
    }

    public function update($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['pokemonName'];
            $type = $_POST['pokemonType'];
            $pokemon = new Pokemon();
            $pokemon->updatePokemon($id, $name, $type);
            header('Location: index.php');
        } else {
            $pokemon = (new Pokemon())->getPokemonById($id);
            require_once 'views/updatePokemon.php';
        }
    }

    public function delete($id) {
        $pokemon = new Pokemon();
        $pokemon->deletePokemon($id);
        header('Location: index.php');
    }
}
?>