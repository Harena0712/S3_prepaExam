<?php
    namespace app\models;
    use Flight;
    use PDO;

    class ChauffeurModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getById($idChauffeur) {
            $sql = "SELECT * FROM cooperativeChauffeur WHERE id = :idChauffeur";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idChauffeur', $idChauffeur);
            $stmt->execute();
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $chauffeur = [
                    'id' => $row['id'],
                    'nom' => $row['nom']
                ];
            }

            return $chauffeur;
        }
    }
?>