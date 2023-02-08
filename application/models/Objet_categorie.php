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
    ///INSERT categ
     public function insertCategorie($categ)
        {
            $sql = "insert into categories  values (null,%s) ";
            $sql = sprintf($sql,$this->db->escape($categ));
            $this->db->query($sql);
        }
}
?>


