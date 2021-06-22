<?php

namespace BWB\Framework\mvc\controllers;

use BWB\Framework\mvc\Controller;
use BWB\Framework\mvc\dao\DAODashboard;

class DashboardController extends Controller
{
    function __construct()
    {
        parent::__construct();
    }
    
//retourne la vue dashboard.php
    public function dashboard() {
        $data = array(
            "dashboard"=>(new DAODashboard())->getAll()
        );

        $this->response->render("dashboard", $data);
        
    }
}
