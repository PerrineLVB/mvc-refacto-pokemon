<?php
class Pokemon {
    private $conn;
    private $table = 'pokemons';

    public $id;
    public $name;
    public $type;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function getAllPokemons() {
        $query = "SELECT id, name, type FROM " . $this->table;
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;
    }
}
?>
