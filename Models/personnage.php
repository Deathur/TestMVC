<?php
    include_once "./Models/connectBDD.php";
    Class Personnage {
        // ???
        private $id;
        private $nom;
        private $pdo;

        public function __construct($pdo) {
            $this->pdo = $pdo;
        }
        // Getter
        public function getId()
        {
            return $this->id;
        }
        public function getNom()
        {
            return $this->nom;
        }
        // Setter
        public function setNom($nom)
        {
            $this->nom = $nom;
        }
        // Methode
        public function afficherNom(){
            $sql="SELECT * FROM `utilisateurs` WHERE id_user = 1";
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>