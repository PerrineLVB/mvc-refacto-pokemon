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
        $result = $this->pokemon->getAllPokemons();
        $pokemons = array();

        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            extract($row);
            $pokemon_item = array(
                'id' => $id,
                'name' => $name,
                'type' => $type
            );
            array_push($pokemons, $pokemon_item);
        }

        return $pokemons;
    }
}
?>
