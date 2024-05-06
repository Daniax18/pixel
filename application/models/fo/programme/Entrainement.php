<?php
date_default_timezone_set('Indian/Antananarivo');
defined('BASEPATH') OR exit('No direct script access allowed');

class Entrainement extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    // INSERT MA LISTE DE PROGRAMME
    public function insertProgramme($id_client, $id_programme){
        $data['id_client'] = $id_client;
        $data['id_programme'] = $id_programme;
        $data['dateDebut'] = date('Y-m-d');
        $data['statusProgramme'] = 1;

        $this->db->insert('programme_client', $data);
    }

    // PRENDRE MA LISTE DE PROGRAMME
    public function getListProgrammesFaits($id_client){
        $this->db->select('*');
        $this->db->from('v_programme_client');
        $this->db->where('id_client', $id_client);
        $query = $this->db->get();

        return $query->result_array();
    }

   // PRENDRE LES EXERCICES D'UN SERVICE
    public function getMyDetailsExercice($id_programme){
        $this->db->select('*');
        $this->db->from('exercice');
        $this->db->where('id_programme', $id_programme);
        $query = $this->db->get();

        return $query->result_array();
    }   

    // PRENDRE TOUS LES SERVICES
    public function getServices(){
        $this->db->select('*');
        $this->db->from('programme');
        $query = $this->db->get();

        return $query->result_array();
    }

    // LISTE DES HABILITIES
    public function getHabilities(){
        $this->db->select('*');
        $this->db->from('hability');
        $query = $this->db->get();

        return $query->result_array();
    }
}
