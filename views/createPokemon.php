<?php
require_once 'views/partials/header.php';
?>

<form>
  <div class="mb-3">
    <label for="pokemonName" class="form-label">Email address</label>
    <input type="text" class="form-control" id="pokemonName">
  </div>
  <div class="mb-3">
    <label for="pokemonType" class="form-label">Password</label>
    <input type="text" class="form-control" id="pokemonType">
  </div>
  <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>

<?php
require_once 'views/partials/footer.php';
?>