<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Objet_categorie extends CI_Model{
    public function listCategorie()
    {
        $liste=$this->db->query("select * from categories");
        $table = array();
        $i=0;
        foreach ($liste->result() as $r)
        {
            $table[$i]=$r;
            $i++;
        }
        return $table;
    }
}
?>


