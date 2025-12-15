<?php
    namespace app\models;
    use Flight;
    use PDO;

    class ProduitModel {
        private $db;
        
        private $nom;
        private $prix;
        private $images;

        public function __construct($db) {
            $this->db = $db;
        }
        
        public function __constructModel($nom, $prix, $images){
            $this->nom = $nom;
            $this->prix = $prix;
            $this->images = $images;
        }

        public function getAll() {
            $stmt = $this->db->query("SELECT * FROM produit");
            
            $produits = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $produits[] = [
                    'id' => $row['id'],
                    'nom' => $row['nom'],
                    'prix' => $row['prix'],
                    'images' => $row['images']
                ];
            }

            return $produits;
        }
        
        public function getById($id) {
            $stmt = $this->db->prepare("SELECT * FROM produit WHERE id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            
            $produit = [];
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
                $produit = [
                    'id' => $row['id'],
                    'nom' => $row['nom'],
                    'prix' => $row['prix'],
                    'images' => $row['images']
                ];
            return $produit;
        }

        public function save() {
            $stmt = $this->db->prepare("INSERT INTO produit (nom, prix, images) VALUES (:nom, :prix, :images)");
            $stmt->bindParam(':nom', $this->nom);
            $stmt->bindParam(':prix', $this->prix);
            $stmt->bindParam(':images', $this->images);
            $stmt->execute();
        }
    }
?>