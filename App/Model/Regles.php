<?php
    namespace App\Model;
    use App\Utils\BddConnect;
    use App\Model\Utilisateurs;
    use App\Model\Enfants;

    class Regles extends BddConnect{
        private ?int $id_regle;
        private ?string $intitule_regle;
        private ?bool $statut_regle;
        private ?string $valeur_regle;
        private ?Utilisateurs $nom_parent;
        private ?Enfants $nom_enfant;
        //Getter

        public function getId(): ?int{
            return $this->id_regle;
        }
        public function getIntitule(): ?string{
            return $this->intitule_regle;
        }
        public function getStatut(): ?bool{
            return $this->statut_regle;
        }
        public function getValeur(): ?int{
            return $this->valeur_regle;
        }
        public function getNomParent(): ?Utilisateurs{
            return $this->nom_parent;
        }
        public function getNomEnfant(): ?Enfants{
            return $this->nom_enfant;
        }

        public function setId(int $id_regle): void{
            $this->id_regle = $id_regle;
        }
        public function setIntitule(string $intitule_regle): void{
            $this->intitule_regle = $intitule_regle;
        }
        public function setStatut(bool $statut_regle): void{
            $this->statut_regle = $statut_regle;
        }
        public function setValeur(int $valeur_regle): void{
            $this->valeur_regle = $valeur_regle;
        }
        public function setNomParent(Utilisateurs $nom_parent): void{
            $this->nom_parent = $nom_parent;
        }
        public function setNomEnfant(Enfants $nom_enfant): void{
            $this->nom_enfant = $nom_enfant;
        }
    }

?>