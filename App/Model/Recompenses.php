<?php
    namespace App\Model;
    use App\Utils\BddConnect;
    use App\Model\Enfants;
    use App\Model\Utilisateurs;
    class Recompenses extends BddConnect{
        private ?int $id_recompense;
        private ?string $intitule_recompense;
        private ?bool $statut_recompense;
        private ?int $cout_recompense;
        private ?Enfants $enfant_recompense;
        private ?Utilisateurs $nom_parent_associe;
        //Getter
        public function getId(): ?int{
            return $this->id_recompense;
        }
        public function getIntitule(): ?string{
            return $this->intitule_recompense;
        }
        public function getStatut(): ?bool{
            return $this->statut_recompense;
        }
        public function getCout(): ?int{
            return $this->cout_recompense;
        }
        public function getEnfant(): ?Enfants{
            return $this->enfant_recompense;
        }
        public function getParent(): ?Utilisateurs{
            return $this->nom_parent_associe;
        }
        //Setter
        public function setId(int $id_recompense):void{
            $this->id_recompense = $id_recompense;
        }
        public function setIntitule(string $intitule_recompense):void{
            $this->intitule_recompense = $intitule_recompense;
        }
        public function setStatut(bool $statut_recompense):void{
            $this->statut_recompense = $statut_recompense;
        }
        public function setCout(int $cout_recompense):void{
            $this->cout_recompense = $cout_recompense;
        }
        public function setEnfant(Enfants $enfant_recompense){
            $this->enfant_recompense = $enfant_recompense;
        }
        public function setParent(Utilisateurs $nom_parent_associe){
            $this->nom_parent_associe = $nom_parent_associe;
        }
    }


?>