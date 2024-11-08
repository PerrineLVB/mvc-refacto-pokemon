<?php
require_once 'Database.php';
class Pokemon {
    private $conn;
    private $table = 'pokemons';

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


    public function getAllPokemons() {
        $dbh = $this->conn;
        $query = "SELECT id, name, type FROM " . $this->table;
        $stmt = $dbh->prepare($query);
        $stmt->execute();
        return $stmt;
    }

    public function getPokemonById($id) {
        $dbh = $this->conn;
        $query = ("SELECT * FROM ". $this->table ." WHERE id_post = :id");
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, 'Pokemon');
        $pokemon = $stmt->fetch();
        return $pokemon;
    }

    public function createPokemon() {
        $dbh = $this->conn;
        $query = "INSERT INTO " . $this->table . " (name, type) VALUES (:name, :type)";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':type', $this->type);
        $stmt->execute();
    }

    public function updatePokemon() {
        $dbh = $this->conn;
        $query = "UPDATE " . $this->table . " SET name = :name, type = :type WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $this->id);
        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':type', $this->type);
        $stmt->execute();
    }

    public function deletePokemon($id) {
        $dbh = $this->conn;
        $query = "DELETE FROM ". $this->table ." WHERE id = :id";
        $stmt = $dbh->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}