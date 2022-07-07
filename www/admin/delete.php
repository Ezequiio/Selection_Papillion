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
if (!empty($_GET['id'])) {
    $id = checkInput(($_GET['id']));
}

if (!empty($_POST)) {
    $id = checkInput($_POST['id']);
    $db = Database::connect();
    $statement = $db->prepare("DELETE FROM items WHERE id = ?");
    $statement->execute(array($id));
    Database::disconnect();
    header('Location: admin.php');
    
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
    <title>Selection Papillon</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/styles.scss">
</head>

<body>
    <h1 class="logo">Supprimer un item</h1>
    <div class="admin">
        <div class="cool1">
            <div>
                <br>
                <form class="form" role="form" action="delete.php" method="post">
                    <input type="hidden" name="id" value="<?php echo $id; ?>" />
                    <p class="alert alert-warning">Etes vous sur de voulour supprimez ?</p>
                    <div class="form-actions">
                        <button type="submit" href="admin.php" class="btn btn-warning">Oui</button>
                        <a class="btn btn-default" href="admin.php"><span>
                                <!-- BOUTON ICONE -->
                            </span>Non</a>
                    </div>
                </form>
            </div>
        </div>