<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\controllers\SecurizedController;
use BWB\Framework\mvc\dao\DAOTeam;


class TeamController extends SecurizedController{


    function __construct(){
        parent::__construct();
    }



    //implémentation des méthodes décrites dans le fichier routing.json

    /**
     * Retourne la vue teams.php qui se trouve dans le dossier views
     */
    public function getTeams(){
        //traitement de la méthode
        $this->render("team", array(
            "teams"=>(new DAOTeam())->getAll()
        ));
    }

}