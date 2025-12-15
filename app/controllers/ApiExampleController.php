<?php

namespace app\controllers;

use flight\Engine;
use app\models\MouvementModel;
use app\models\VehiculeModel;
use app\models\ChauffeurModel;

use Flight;
class ApiExampleController {

	protected Engine $app;

	public function __construct($app) {
		$this->app = $app;
	}
	
	public function getListeVehiculeChauffeur() {
		$MouvementModel = new MouvementModel(Flight::db());
		$mouvements = $MouvementModel->getAll();

		$data = [];
		foreach($mouvements as $mouvement) {
			$VehiculeModel = new VehiculeModel(Flight::db());
			$Vehicule = $VehiculeModel->getById($mouvement["idVehicule"]);

			$ChauffeurModel = new ChauffeurModel(Flight::db());
			$Chauffeur = $ChauffeurModel->getById($mouvement["idChauffeur"]);

			$data[] = ['id' => $mouvement["id"], 
						'Chauffeur' => $Chauffeur, 
						'Vehicule' => $Vehicule, 
						'daty' => $mouvement["daty"]];
		}
		return $data;
	}

	public function getById($id) {
		$ProduitModel = new ProduitModel(Flight::db());
		$produit = $ProduitModel->getById($id);
		return $produit;
	}

	public function updateUser($id) {
		// You could actually update data from the database if you had one set up
		$statement = $this->app->db()->runQuery("UPDATE users SET email = ? WHERE id = ?", [ $this->app->data['email'], $id ]);
		$this->app->json([ 'success' => true, 'id' => $id ], 200, true, 'utf-8', JSON_PRETTY_PRINT);
	}
}