<?php
include "database.php";
session_start();
if ($_SESSION['type'] == 'pro'){
  session_start();
}else{
  echo "Vous n'êtes pas administrateur";
  echo "<br>";
  echo "<a href='../index.php'>Veuillez cliquez-ici</a>";
  exit();
}
?>
<?php


if (!empty($_GET['id'])) {
    $id = checkInput($_GET['id']);
}

$db = Database::connect();
$statement = $db->prepare('SELECT items.id, items.name, items.description, items.image, items.price, items.economie, categories.name
     AS category FROM items LEFT JOIN categories ON items.category = categories.id WHERE items.id = ?');

$statement->execute(array($id));
$item = $statement->fetch();
Database::disconnect();
function checkInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Burger Code</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.scss">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body class="viewbody">
    <h1 class="viewtitle"></span> Voir un item</span></h1>
    
    <table class="table table-striped  table-dark tableview">
        <thead>
            <h1>Voir un item</h1>
        </thead>
        <tbody>
            <tr>
                <td class="tdline"><label>Nom :</label><?php echo '  ' . $item['name']; ?>
                <br>
                <label>Description :</label><?php echo '  ' . $item['description']; ?>
                <br>
                <label>Prix :</label><?php echo '  ' . number_format((float)$item['price'],2, '.', '') . ' €' ?>
                <br>
                <label>Catégorie :</label><?php echo '  '  . $item['category']; ?>
                <br>
                <label>Image :</label><?php echo '  '.$item['image']; ?>
                </td>
                <td><?php echo      '<div class="col-lg-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                        <img src="../image/' . $item['image'] . ' " class="card-img-top" alt="Jquery";/>
                        </div>
                        <div class="wsk-cp-text">
                        <div class="category">
                            <span>' . $item['name'] . '</span>
                        </div>
                        <div class="description-prod">
                        <p class="view-description"> ' . $item['description'] . '</p>
                        </div>
                        <div class="card-footer">
                        <div class="wcf-left">
                        <span class="price-view">' . number_format($item['price'], 2, '.', '') . ' € ' . $item['economie'] . ' </span>
                        </div>
          </div>
        </div>' ?></td>
            </tr>
        </tbody>
    </table>
    <a class="btn btnview btn-primary" href="admin.php"><span class="bi-arrow-left"></span> Retour</a>





        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>