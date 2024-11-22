<?php
require_once '../controllers/PokemonController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $controller = new PokemonController();
    $controller->delete($id);
}
?>