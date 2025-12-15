<?php
    namespace app\models;
    use Flight;
    use PDO;

    class VehiculeModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getById($idVehicule) {

            $sql = "SELECT * FROM cooperativeVehicule WHERE id = :idVehicule";
            $stmt = $this->db->prepare($sql);
            $stmt->bindParam(':idVehicule', $idVehicule);
            $stmt->execute();
        
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $vehicule = [
                    'id' => $row['id'],
                    'nom' => $row['nom']
                ];
            }

            return $vehicule;
        }
    }
?>