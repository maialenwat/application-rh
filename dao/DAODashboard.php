<?php
namespace BWB\Framework\mvc\dao;
use BWB\Framework\mvc\DAO;
use PDO;
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DAODefault
 *
 * @author loic
 */
class DAODashboard extends DAO{
    //put your code here
    
    public function create($array) {
        
    }

    public function delete($id) {
        
    }

    public function getAll() {
        return $this->getPdo()->query("SELECT * FROM rhmanagement")->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAllBy($filter) {
        
    }

    public function retrieve($id) {
        
    }

    public function update($array) {
        
    }

}
