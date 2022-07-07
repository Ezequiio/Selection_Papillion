<?php include '../include/head.php' ?>
<body class="bodypanier">
<?php include '../include/header.php' ?>
<?php require '../admin/database.php' ?>
<h1>Nos Astuces</h1>
<?php $db = Database::connect();
$statement = $db->query('SELECT * FROM categories WHERE id = 5');
$items = ["items"];
$categories = $statement->fetchAll();


foreach ($categories as $category) {

    echo '     
                <div class="contentastuce">
                <div class="">
                <div class="liste-astuce">';


    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
    $statement->bindValue('items.category', $items);
    $statement->execute(array($category['id']));
    while ($item = $statement->fetch()) {

        echo   '
            <div class="div-astuce">
                <div class="astuce">
                     
                        <div class="astuce-img">
                            <img src="../image/' . $item['image'] . ' "  alt="Image Astuce";/>
                        </div>
                        <div class="astuce-description">
                            <h1 class="title_astuce">' .$item['name'] . '</h1>
                         <p class="p_astuce">' .$item['description'] . '</p>
                       </div>
                </div>
            </div>
      
      
                       ';
    }echo ' </div>
            </div>
            </div>
    ';
}
Database::disconnect();
?>

</div>









<?php include '../include/footer.php' ?>
</body>