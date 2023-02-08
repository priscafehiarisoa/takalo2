<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Utilisateur extends CI_Model{
    public function TologIn($email,$mdp){
        $requete="SELECT * FROM utilisateur where email = '$email' and mdp = '$mdp'";
        $query = $this->db->query($requete);
        $row = $query -> row_array();
        if($row != null){
            return true;
        }else{
            return false;
        }
    }
    public function insertUtilisateur($nom,$email,$mdp){
        $sql = "INSERT INTO UTILISATEUR VALUES (NULL,%s,%s,%s,1)";
        $sql = sprintf($sql,$this->db->escape($nom),$this->db->escape($email),$this->db->escape($mdp));
        $this->db->query($sql);
    }
    public function checkConnected($email,$mdp){
        $requete="SELECT * FROM utilisateur where email = '$email' and mdp = '$mdp'";
        $query = $this->db->query($requete);
        $tab = array();
        $a=0;
        foreach($query->result_array() as $row){
            $tab['idUtilisateur']=$row['idUtilisateur'];
            $tab['nom']=$row['nom'];
            $tab['email']=$row['email'];
            $tab['mdp']=$row['mdp'];
            $tab['type']=$row['type'];
            $a++;
        }
        return $tab;
    }
}
?>


