<?php
    namespace app\models;
    use Flight;
    use PDO;

    class MouvementModel {
        private $db;

        public function __construct($db) {
            $this->db = $db;
        }

        public function getAll() {
            $stmt = $this->db->query("SELECT * FROM cooperativeMouvement");
        
            $mouvements = [];
            while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $mouvements[] = [
                    'id' => $row['id'],
                    'idChauffeur' => $row['idChauffeur'],
                    'idVehicule' => $row['idVehicule'],
                    'idTrajet' => $row['idTrajet'],
                    'daty' => $row['daty']
                ];
            }

            return $mouvements;
        }
    }
?>