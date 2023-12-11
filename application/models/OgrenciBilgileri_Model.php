<?php



class OgrenciBilgileri_Model extends CI_Model {

    public function __construct() { 
        parent::__construct();
    }

    public function save($data){
      return   $this->db->insert("ogrencibilgileri",$data);
    }
}