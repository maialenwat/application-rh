<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAOOperation;


class OperationController extends Controller{


    function __construct(){
        parent::__construct();
    }



    //implémentation des méthodes décrites dans le fichier routing.json

    /**
     * Retourne la vue employees.php qui se trouve dans le dossier views
     */
    public function getOperations(){
        //traitement de la méthode
        $this->render("operations", array(
            "operations"=>(new DAOOperation())->getAll()
        ));
    }
}