
<?php require "../admin/database.php" ?>
<?php
if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
 
    $db = Database::connect();
    $q = $db->prepare('INSERT INTO users (email, password, type) VALUES (:email, :password, "user")');
    $q->bindValue('email', $email);
    $q->bindValue('password', $password);
    $res = $q->execute();
 
    if ($res) {
        echo "Inscription réussie";
    }
}
?>
 