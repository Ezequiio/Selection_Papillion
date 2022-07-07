<?php
include "database.php";
session_start();
if ($_SESSION['type'] == 'pro') {
    session_start();
} else {
    echo "Vous n'êtes pas administrateur";
    echo "<br>";
    echo "<a href='../index.php'>Veuillez cliquez-ici</a>";
    exit();
}
?>
<?php


$nameError = $descriptionError = $imageError = $priceError = $categoriesError = $economieError = $name = $description = $price = $image = $categories = $economie =  "";
if (!empty($_POST)) // Demande a la SuperGlobal si le post est vide
{
    $name = checkInput($_POST['name']);

    $description = checkInput($_POST['description']);

    $price = checkInput($_POST['price']);

    $categories = checkInput($_POST['category']);

    $economie = checkInput($_POST['economie']);

    $image = checkInput($_FILES['image']['name']);

    $imagePath = '../image/' . basename($image); // Chemin de l'image

    $imageExtension =  pathinfo($imagePath, PATHINFO_EXTENSION); // Type de l'image

    $isSuccess = true;
    $isUploadSuccess = false;

    if (empty($name)) {
        $nameError = 'Il faut un nom pour chaque élément';
        $isSucces = false;
    }
    if (empty($description)) {
        $descriptionError = 'Il faut une description';
        $isSucces = false;
    }
    if (empty($price)) {
        $priceError = 'Il manque un prix';
        $isSucces = false;
    }
    if (empty($economie)) {
        $economieError = 'Il manque la mesure';
        $isSucces = false;
    }
    if (empty($categories)) {
        $categoriesError = 'On a un sérieux problème si il y\'a une erreur ici';
        $isSucces = false;
    }
    if (empty($image)) {
        $imageError = 'Manque une image';
        $isSucces = false;
    } else {
        $isUploadSuccess = true;
        if ($imageExtension != "JPG" && $imageExtension != "png" && $imageExtension != "jpeg" && $imageExtension != "gif" && $imageExtension != "webp" && $imageExtension != "jpg") {
            $imageError = "Les fichiers autorisés sont .jpeg, .jpg, .png, .gif et .webp";
            $isUploadSuccess = false;
        }
        if (file_exists($imagePath)) {
            $imageError = "Le fichier existe déjà";
            $isUploadSuccess = false;
        }
        if ($_FILES["image"]["size"] > 50000000) {
            $imageError = "Le fichier ne doit pas depasser 500kb";
            $isUploadSuccess = false;
        }
        if ($isUploadSuccess) {
            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $imagePath)) {
                $imageError = "Il y a eu une erreur lors de l'upload";
                $isUploadSuccess = false;
            }
        }
    }

    if ($isSuccess && $isUploadSuccess) {
        $db = Database::connect();
        $statement = $db->prepare("INSERT INTO items (name,description,price,category,image,economie) values(?, ?, ?, ?, ?, ?)");
        $statement->execute(array($name, $description, $price, $categories, $image, $economie));

        database::disconnect();
        header("Location: admin.php");
    }
}

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
    <title>Insert Admin</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.scss">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body class="insertbody">
    <table class="table table-striped table-hover table-dark tableinsert">
        <thead>
            <h1 class="titleinsert"> Ajouter un item</h1>
        </thead>
        <tbody>
            <form class="form" role="form" action="insert.php" method="post" enctype="multipart/form-data">
                <tr>
                    <td><label>Nom : </label></td>
                    <td><input type="text" class="inputname" id="name" name="name" placeholder="Nom" value="<?php echo $name; ?>">
                        <span class="help-inline"><?php echo $nameError; ?></span>
                    </td>
                </tr>
                <td><label>Description : </label></td>
                <td><input type="text" class="inputdescription" id="description" name="description" placeholder="Description" value="<?php echo $description; ?>">
                    <span class="help-inline"><?php echo $descriptionError; ?></span>
                </td>
                </tr>
                <td><label>Prix : (en €)</label></td>
                <td><input type="number" step="0.01" class="inputprice" id="price" name="price" placeholder="Prix" value="<?php echo $price; ?>">
                    <span class="help-inline"><?php echo $priceError; ?></span>
                </td>
                </tr>
                <td><label>Unité* :</label></td>
                <td><input type="text" class="inputeconomie" id="economie" name="economie" placeholder="Unité de mesure" value="<?php echo $economie; ?>">
                    <span class="help-inline"><?php echo $economieError; ?></span>
                </td>
                </tr>
                <tr>
                    <td><label>Categories : </label></td>
                    <td><select class="" id="category" name="category">
                            <?php
                            $db = Database::connect();
                            foreach ($db->query('SELECT * FROM categories') as  $row) {
                                echo '<option value="' . $row['id'] . '">' . $row['name'] .  '</option>';
                            }
                            Database::disconnect();

                            ?>
                        </select>
                        <span class="help-inline"><?php echo $categoriesError; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><label for="image">Choisir une image :</label></td>
                    <td><input type="file" id="image" name="image">
                        <span class="help-inline"><?php echo $imageError; ?></span>
                    </td>
                </tr>
                <tr>
                    <td><a class="btn btn-primary" href="admin.php"><span>
                                <!-- BOUTON ICONE -->
                            </span>Retour</a></td>
                    <td><button type="submit" class="btn btn-success">Ajouter</button></td>
                </tr>
                <tr>
                    <td><i>*Ou Composition pour les Paniers</i></td>
                </tr>
            </form>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>