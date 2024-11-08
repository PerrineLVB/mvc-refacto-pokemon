<?php
require_once 'Database.php';
require_once 'models/Pokemon.php';

class PokemonController {
    private $pokemon;

    public function __construct() {
        $database = new Database();
        $db = $database->getConnection();
        $this->pokemon = new Pokemon($db);
    }

    public function getPokemons() {
        return $this->pokemon->getAllPokemons();
    }
}
?>
