<?php

// Match routes

$match = $router -> match();


// Fait correspondre la cible précisé avec la bonne vue.

if(is_array($match)) {
    // Règles de redirection -> Rôles
    
    if($match['target'] == "home" && $_SESSION['role'] == 'visitor'){
        header('Location:' . HTML_ROOT . '/');
        die();
    }
    
    if($match['target'] == "login" && $_SESSION['role'] == 'admin'){
        header('Location:' . HTML_ROOT . '/home');
        die();
    }
    
    if(!empty($_POST)){    
        if($match['target'] == 'login'){
            if (isset($_POST['email'], $_POST['password'])){
                $req = $db->query('SELECT * FROM `user` WHERE `email` = :email', [
                    ':email' => $_POST['email']
                ]);
                $result = $req->fetch();
                if($result){
                    if(password_verify($_POST['password'], $result['password'])){
                        $_SESSION['role'] = 'admin';
                        $_SESSION['name'] = $result['surname'];
                        $_SESSION['id_user'] = $result['id'];
                        header('Location: ' . HTML_ROOT . '/admin');
                        die();
                    }
                } else {
                    $error = 'Votre email ou votre mot de passe est incorrect.';
                }
            } else {
                $error = 'Vous n\'avez pas rempli tous les champs.';
            }
        }
    }










    
    
    require 'assets/components/header.php';
    // if($match['target'] == "home") {
        //     require 'assets/components/sidebar.php';
        // }
        include "./views/{$match['target']}.view.php";
    } else {
        require 'assets/components/header.php';
    include "./views/404.view.php";
}



require 'assets/components/footer.php';