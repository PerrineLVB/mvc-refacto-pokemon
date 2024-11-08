<?php
class Database {
    private $host = "localhost";
    private $db_name = "pokemon_db";
    private $username = "root";
    private $password = "root";

    public function getConnection() {
        try {
            $db_conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $db_conn->exec("set names utf8");
        } catch(PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
            die();
        }
        return $db_conn;
    }
}
?>
