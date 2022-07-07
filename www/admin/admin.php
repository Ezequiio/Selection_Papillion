<?php
include "database.php";
ob_start();
session_start();
if ($_SESSION['type'] = 'pro') {
} else {
  echo "Vous n'êtes pas administrateur";
  echo "<br>";
  echo "<a href='../index.php'>Veuillez cliquez-ici</a>";
  exit();
}
?>


<!DOCTYPE html>
<html>

<head>
  <title>Admin</title>
  <meta charset="utf-8" />
  <link rel="stylesheet" href="../css/style.scss">
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<?php
echo '  <body class=admintable>
              <h2 class="title_admin" style="text-align:center ;">Selection Papillon - Panel Administrateur</h2>
              <h1 class="title-item"><strong>Liste des items</strong><a href="insert.php" class="btn btn-success btn-lg"><span class="bi-plus"></span> Ajouter</a></h1>
              <div class="panel ">
                <div class="panel-body">
                  <div class="">
                    <table class="table table-striped table-hover tablewidth">
                     <thead class="header-sticky">
                      <tr>
                        <th scope="col">Nom</th>
                        <th scope="col">Description</th>
                        <th scope="col">Prix</th>
                        <th scope="col">Unité</th>
                        <th scope="col">Catégorie</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>'

?>


<?php


$db = Database::connect();
$statement = $db->query('SELECT  items.id, items.name, items.description, items.price, items.economie, categories.name AS category FROM items LEFT JOIN categories ON items.category = categories.id ORDER BY items.id DESC');
while ($item = $statement->fetch()) {
  echo '<tr>';
  echo '<td data-label="Nom">' . $item['name'] .  '</td>';
  echo '<td data-label="Description" >' . $item['description'] . '</td>';
  echo '<td data-label="Prix">' . $item['price'] . '</td>';
  echo '<td data-label="Unité">'  . $item['economie'] . '</td>';
  echo '<td data-label="Catégorie">' . $item['category'] . '</td>';
  echo '<td data-label="Actions" class="text-right">';
  echo '<a class="btn btnadmin btn-info" href="view.php?id=' . $item['id'] . '"><span class="bi-eye"></span> Voir</a>';
  echo '<a class="btn btnadmin btn-secondary" href="update.php?id=' . $item['id'] . '"><span class="bi-pencil"></span> Modifier</a>';
  echo '<a class="btn btnadmin btn-danger" href="delete.php?id=' . $item['id'] . '"><span class="bi-x"></span> Supprimer</a>';
  echo '</td>';
  echo '</tr>';

  Database::disconnect();
}
?>
</tbody>
</table>
</div>
</div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src='../main.js' type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</body>

</html>