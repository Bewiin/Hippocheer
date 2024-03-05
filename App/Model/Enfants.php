<?php
    namespace App\Model;
    use App\Utils\BddConnect;
    use App\Model\Utilisateurs;
    
    class Enfants extends BddConnect{
        private ?int $id_enfant;
        private ?string $prenom_enfant;
        private ?int $nombre_point;
        private Utilisateurs $parent;

        //Getter

        public function getId(): ?int{
            return $this->id_enfant;
        }
        public function getPrenomEnfant(): ?string{
            return $this->prenom_enfant;
        }
        public function getNbrPoint(): ?int{
            return $this->nombre_point;
        }
        public function getParent(): ?Utilisateurs{
            return $this->parent;
        }

        //Setter

        public function setId(int $id_enfant):void{
            $this->id_enfant = $id_enfant;
        }
        public function setPrenomEnfant(string $prenom_enfant):void{
            $this->prenom_enfant = $prenom_enfant;
        }
        public function setNbrPoint(int $nombre_point):void{
            $this->nombre_point = $nombre_point;
        }
        public function setParent(Utilisateurs $parent):void{
            $this->parent = $parent;
        }

        public function addEnfant():void{
            try {
                $prenom_enfant = $this->prenom_enfant;
                $nombre_point = $this->nombre_point;
                $parent = $this->parent->getId();
                $requete = $this->connexion()->prepare('INSERT INTO enfants(prenom_enfant,nombre_point,id_parent)
                VALUE(?,?,?)');
                $requete->bindParam(1,$prenom_enfant,\PDO::PARAM_STR);
                $requete->bindParam(2,$nombre_point,\PDO::PARAM_INT);
                $requete->bindParam(3,$parent,\PDO::PARAM_INT);
                $requete->execute();

                
            } catch (\Exception $e) {
                die('Error'.$e->getMessage());
            }
        }
        public function selectEnfantByIdParent():Enfants|array{
            try {
                $id_parent = $this->parent->getId();
                
                $requete = $this->connexion()->prepare('SELECT id_enfant, prenom_enfant, nombre_point FROM enfants WHERE id_parent = ?');
                $requete->bindParam(1,$id_parent,\PDO::PARAM_INT);
                $requete->execute();
                 $requete->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE,Enfants::class);

                return $requete->fetchAll();

            } catch (\Exception $e) {
                die('Error:'.$e->getMessage());
            }
        }
    }

        

    

?>