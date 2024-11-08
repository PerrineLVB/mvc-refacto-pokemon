<?php
require_once './Database.php';
class Pokemon {
    private $conn;
    private static $table = 'pokemons';

    private $id;
    private $name;
    private $type;


    public function getId() {
        return $this->id;
    }
    public function setId($id) {
        $this->id = $id;
    }
    public function getName() {
        return $this->name;
    }
    public function setName($name) {
        $this->name = $name;
    }
    public function getType() {
        return $this->type;
    }
    public function setType($type) {
        $this->type = $type;
    }


    public static function getAllPokemons() {
        $database = new Database();
        $dbh = $database->getConnection();
        $query = ("SELECT * FROM ". self::$table);
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        $pokemons = $stmt->fetchAll(PDO::FETCH_CLASS, 'Pokemon');
        return $pokemons;
    }

    public function getPokemonById($id) {
        $database = new Database();
        $dbh = $database->getConnection();
        $query = ("SELECT * FROM ". self::$table ." WHERE id_post = :id");
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Pokemon');
        $pokemon = $stmt->fetch();
        return $pokemon;
    }

    public function createPokemon($name, $type) {
        $database = new Database();
        $dbh = $database->getConnection();
        $query = "INSERT INTO " . self::$table . " (name, type) VALUES (:name, :type)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->execute();
    }

    public function updatePokemon($id, $name, $type) {
        $database = new Database();
        $dbh = $database->getConnection();
        $query = "UPDATE " . self::$table . " SET name = :name, type = :type WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':type', $type);
        $stmt->execute();
    }

    public function deletePokemon($id) {
        $database = new Database();
        $dbh = $database->getConnection();
        $query = "DELETE FROM ". self::$table ." WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}