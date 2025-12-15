<?php
    namespace app\models;
    use Flight;
    use PDO;

    class TrajetModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getById($idTrajet) {
            $sql = "SELECT * FROM cooperativeTrajet WHERE id = :idTrajet";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idTrajet', $idTrajet);
            $stmt->execute();
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $trajet = [
                    'id' => $row['id'],
                    'dateDebut' => $row['dateDebut'],
                    'dateFin' => $row['dateFin'],
                    'montantRecette' => $row['montantRecette'],
                    'montantCarburant' => $row['montantCarburant'],
                    'km' => $row['km']
                ];
            }

            return $trajet;
        }
    }
?>