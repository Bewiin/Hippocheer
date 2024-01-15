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
    }

    

?>