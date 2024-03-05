<?php
    require_once './env.php';
    //import de l'autoloader des classes
    require_once './vendor/autoload.php';
    use App\Controller\HomeController;
    use App\Controller\TableauController;
    use App\Controller\UtilisateurController;
    $homeController = new HomeController();
    $tableauController = new TableauController();
    $utilisateurController = new UtilisateurController();
    //utilisation de session_start(pour gérer la connexion au serveur)
    session_start();
    //Analyse de l'URL avec parse_url() et retourne ses composants
    $url = parse_url($_SERVER['REQUEST_URI']);
    //test si l'url posséde une route sinon on renvoi à la racine
    $path = isset($url['path']) ? $url['path'] : '/';
    //routeur
    if(isset($_SESSION["connected"])){
    switch ($path) {
        case '/hippocheer/':
            $homeController->getHome();
            break;
        case '/hippocheer/utilisateur/tableau':
            $tableauController->getTableau();
            break;
        case '/hippocheer/utilisateur/inscription':
            $homeController->getHome();
            break;
        case '/hippocheer/utilisateur/connexion':
            $homeController->getHome();
            break;
        case '/hippocheer/utilisateur/profil':
            $utilisateurController->getProfil();
            break;
        default:
            $homeController->get404();
            break;
    }
} else {
    switch ($variable) {
        case '/hippocheer/utilisateur/connexion':
            $utilisateurController->getConnexion();
            break;
        case '/hippocheer/utilisateur/inscription':
            $utilisateurController->getInscripton();
            break;
        
        default:
            # code...
            break;
    }
}
?>
