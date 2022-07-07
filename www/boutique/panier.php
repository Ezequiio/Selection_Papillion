<?php include '../include/head.php' ?>
<body class="bodypanier">
<?php include '../include/header.php' ?>
<?php require '../admin/database.php' ?>
<h1>Nos Paniers</h1>
<?php $db = Database::connect();
$items = ["items"];
$statement = $db->query('SELECT * FROM categories WHERE id = 3');
$categories = $statement->fetchAll();


foreach ($categories as $category) { 
    
    echo '<div class="panierflex">
    <div class="container">
    <div class="row">
    ';


    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
    $statement->bindValue('items.category', $items);
    $statement->execute(array($category['id']));
    while ($item = $statement->fetch()) {

        echo   '<div class="carta col-lg-3 col-xs-12 col-md-6">
                    <img src="../image/' . $item['image'] . ' "  alt="Jquery";/>
                    <h1 class="title_astuce">' . $item['name'] . ' ' .  number_format($item['price'], 2, '.', '') . ' € </h1>
                    <p> ' . $item['description'] . '</p>
                    <div class="description_basket" id="ma-div-'.$item['id'].'">
                        <p class="description_p"> ' . $item['economie'] . '</p>
                    </div>
                    <button id="menu" class="buttonread"> En savoir plus ! </button>
                    </div>
      
      
                       ';
    }
    echo '</div>
    </div>
     </div>';
}
Database::disconnect();
?>

</div>









<?php include '../include/footer.php' ?>
</body>