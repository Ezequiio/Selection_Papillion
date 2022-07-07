<?php include "../admin/database.php"; 
    session_start();   
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="initial-scale=1.0, user-scalable=yes" />
    <title>Fruits</title>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&display=swap" rel="stylesheet">
    <link rel='stylesheet' type='text/css' media='screen' href='../css/style.scss'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


</head>

<body class="bodyphp">
<?php include '../include/header.php'?>
<h1 class="title_fruit">Nos Fruits</h1>
<?php $db = Database::connect();
$items = ["items"];
$statement = $db->query('SELECT * FROM categories WHERE id = 1');
$categories = $statement->fetchAll();


foreach ($categories as $category) { 
    echo '<div class="content_fl">
            <div class="container">
                <div class="row">';


    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
    $statement->bindValue('items.category', $items);
    $statement->execute(array($category['id']));
    while ($item = $statement->fetch()) { 

        echo   '<div class="col-lg-3">
                    <div class="wsk-cp-product">
                        <div class="wsk-cp-img">
                        <img src="../image/' . $item['image'] . ' " class="card-img-top" alt="Jquery";/>
                        </div>
                        <div class="wsk-cp-text">
                            <div class="category">
                                <span>' . $item['name'] . '</span>
                            </div>
                            <div class="description-prod">
                                <p class="content-description"> ' . $item['description'] . '</p>
                            </div>
                            <div class="card-footer">
                                <div class="wcf-left">
                                    <span class="price">' . number_format($item['price'], 2, '.', '') . ' € ' . $item['economie'] . ' </span>
                                </div>
                            </div>
                        </div>
                     </div>
                </div>
      
      
                        ';
    }
    echo '</div></div></div>';
}
Database::disconnect();

?>

























<?php include "../include/footer.php" ?>