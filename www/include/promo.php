<?php require 'admin/database.php' ?>
<?php $db = Database::connect();
$statement = $db->query('SELECT * FROM categories WHERE id = 7');
$categories = $statement->fetchAll();


foreach ($categories as $category) {
    echo '<div class="shell">
    <div class="container">
            <div class="row">';


    $statement = $db->prepare('SELECT * FROM items WHERE items.category = ?');
    $statement->execute(array($category['id']));
    while ($item = $statement->fetch()) {

        echo   '<div class="col-lg-4">
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
}
Database::disconnect();
echo '</div></div></div>'
?>