<?php
include "../admin/database.php";

if (!empty($_POST['email']) && !empty($_POST['password'])) {
        
        $email = $_POST['email'];
        $password = $_POST['password'];
     
        $db = Database::connect();
        $q = $db->prepare('SELECT * FROM users WHERE email = :email');
        $q->bindValue('email', $email);
        $q->execute();
        $res = $q->fetch(PDO::FETCH_ASSOC);
        
        
        if ($res) {
            $passwordHash = $res['password'];
            if (password_verify($password, $passwordHash)) {
                if ($res['type'] == 'pro') {
                    session_start();
                    $_SESSION['type'] == 'pro';
                    header("Location: ../admin/admin.php");   
                       
                  }else{
                    session_start();
                    header('location: ../index.php');
                    echo 'Vous êtes bien connecté';
                  }
            } else {
                echo "Identifiants invalides";
            }
        } else {
            echo "Identifiants invalides";
        }
    }
    ?> 