<?php
    namespace App\Controller;
    use App\Model\Utilisateurs;
    use App\Utils\Utilitaire;
    use App\Vue\Template;

    class UtilisateurController extends Utilisateurs{
        public function getConnexion(){
            $error = '';
            if(isset($_POST['submit'])){
                $mail = Utilitaire::cleanInput($_POST['mail_utilisateur']);
                $this->setMail($mail);
                $recup = $this->getUtilisateurByMail();
                if($recup){
                    $password = Utilitaire::cleanInput($_POST["password_utilisateur"]);
                    $hash = $recup->getPassword();
                    if(password_verify($password,$hash)){
                        $_SESSION["connected"] = true;
                        $_SESSION["nom"] = $recup->getNom();
                        $_SESSION["prenom"] = $recup->getPrenom();
                        $_SESSION["pseudo"] = $recup->getPseudo();
                        $_SESSION["mail"] = $recup->getMail();
                        header('location:/hippocheer');
                    }

                }
            }
            Template::render('navbar.php', 'Connexion', 'vueConnexion.php', 'footer.php', 
            $error, ['script.js', 'main.js'], ['style.css', 'main.css', 'connexion.css']);
        }
        public function deconnexion(){
            $error = '';
            session_destroy();
            unset($_COOKIE);
            header('location:/hippocheer');
        }
        public function getInscripton(){
            $error = '';
            if(isset($_POST['submit'])){
                $nom = Utilitaire::cleanInput($_POST["nom_utilisateur"]);
                $prenom = Utilitaire::cleanInput($_POST["prenom_utilisateur"]);
                $mail = Utilitaire::cleanInput($_POST["mail_utilisateur"]);
                $pseudo = Utilitaire::cleanInput($_POST["pseudo_utilisateur"]);
                $password = Utilitaire::cleanInput($_POST["password_utilisateur"]);
                $confirm = Utilitaire::cleanInput($_POST["confirm_password"]);
                
                if(!empty($nom) AND !empty($prenom) AND !empty($mail) AND !empty($pseudo) AND !empty($password) AND !empty($confirm)){
                    $this->setMail($mail);
                    if(!$this->getUtilisateurByMail()){
                        if($password == $confirm){
                            $hash = password_hash($password,PASSWORD_DEFAULT);
                            $this->setNom($nom);
                            $this->setPrenom($prenom);
                            $this->setMail($mail);
                            $this->setPseudo($pseudo);
                            $this->setPassword($hash);
                            $this->addUtilisateur();
                        }else{
                            $error='Les mots de passe ne sont pas identiques.';
                        }
                    }else{
                        $error ='Le compte existe déjà.';
                    }
                }else{
                    $error = 'Veuillez remplir tous les champs.';
                }         
            }
            Template::render('navbar.php', 'Inscription', 'vueInscription.php', 'footer.php', 
            $error, ['script.js', 'main.js'], ['style.css', 'main.css', 'inscription.css']);
        }
    }


?>