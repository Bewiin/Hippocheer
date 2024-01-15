<?php
    namespace App\Model;
    use App\Utils\BddConnect;
    
    class Utilisateurs extends BddConnect{
        private ?int $id_utilisateur;
        private ?string $nom_utilisateur;
        private ?string $prenom_utilisateur;
        private ?string $mail_utilisateur;
        private ?string $pseudo_utilisateur;
        private ?string $password_utilisateur;
        //Getter
        public function getId(): ?int{
            return $this->id_utilisateur;
        }
        public function getNom(): ?string{
            return $this->nom_utilisateur;
        }
        public function getPrenom(): ?string{
            return $this->prenom_utilisateur;
        }
        public function getMail(): ?string{
            return $this->mail_utilisateur;
        }
        public function getPseudo(): ?string{
            return $this->pseudo_utilisateur;
        }
        public function getPassword(): ?string{
            return $this->password_utilisateur;
        }
        //Setter
        public function setId(int $id_utilisateur):void{
            $this->id_utilisateur = $id_utilisateur;
        }
        public function setNom(string $nom_utilisateur):void{
            $this->nom_utilisateur = $nom_utilisateur;
        }
        public function setPrenom(string $prenom_utilisateur):void{
            $this->prenom_utilisateur = $prenom_utilisateur;
        }
        public function setMail(string $mail_utilisateur):void{
            $this->mail_utilisateur = $mail_utilisateur;
        }
        public function setPseudo(string $pseudo_utilisateur):void{
            $this->pseudo_utilisateur = $pseudo_utilisateur;
        }
        public function setPassword(string $password_utilisateur):void{
            $this->password_utilisateur = $password_utilisateur;
        }
        // INSERT UN UTILISATEUR EN BDD
        public function addUtilisateur():void{

            try {
                $nom = $this->nom_utilisateur;
                $prenom = $this->prenom_utilisateur;
                $mail = $this->mail_utilisateur;
                $pseudo = $this->pseudo_utilisateur;
                $password = $this->password_utilisateur;

                $requete = $this->connexion()->prepare('INSERT INTO utilisateurs 
                (nom_utilisateur,prenom_utilisateur,mail_utilisateur,pseudo_utilisateur,password_utilisateur) 
                VALUE (?,?,?,?,?)');
                $requete->bindParam(1,$nom,\PDO::PARAM_STR);
                $requete->bindParam(2,$prenom,\PDO::PARAM_STR);
                $requete->bindParam(3,$mail,\PDO::PARAM_STR);
                $requete->bindParam(4,$pseudo,\PDO::PARAM_STR);
                $requete->bindParam(5,$password,\PDO::PARAM_STR);
                $requete->execute();

            } catch (\Exception $e) {
                die('Error: '.$e->getMessage());
            }
        }

        public function getUtilisateurByMail():Utilisateurs|bool{
            try {
                $mail = $this->mail_utilisateur;
                $requete = $this->connexion()->prepare('SELECT id_utilisateur,nom_utilisateur,prenom_utilisateur
                ,mail_utilisateur,pseudo_utilisateur,password_utilisateur FROM utilisateurs
                WHERE mail_utilisateur = ?');
                $requete->bindParam(1,$mail, \PDO::PARAM_STR);
                $requete->execute();
                $requete->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, Utilisateurs::class);
                return $requete->fetch();
            } 
            catch (\Exception $e) {
                die('Error : '.$e->getMessage());
            }

        }
    }


?>