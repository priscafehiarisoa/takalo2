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
    public function countUser()
    {
        $sql="select count(idUtilisateur) isa from utilisateur ";
        $count=$this->db->query($sql);
        $isa=0;
        foreach ($count->result_array() as $c)
        {
            $isa=$c['isa'];
        }
        return $isa;
    }
    public function countEchange()
    {
        $sql="select count(idHistorique) isa from historique_echange where  etatEchange=1;";
        $query=$this->db->query($sql);
        $isa=0;
        foreach ($query->result_array() as $r)
        {
            $isa=$r['isa'];
        }
        return $isa;
    }
    public function countechangeByUser($idUser )
    {
        $sql="select count(idHistorique) isa from historique_echange where (idUtilisateur2= $idUser or idUtilisateur1 = $idUser) and etatEchange=1;";
        $query=$this->db->query($sql);
        $isa=0;
        foreach ($query->result_array() as $r)
        {
            $isa=$r['isa'];
        }
        return $isa;

    }
    public function listeUtilisateurAvecNombreEchange(){
    $sql="select idUtilisateur, nom, coalesce(count(idHistorique),0) nombreEchange from utilisateur left outer join historique_echange he on utilisateur.idUtilisateur = he.idUtilisateur1 or utilisateur.idUtilisateur = he.idUtilisateur2 where etatEchange = 1 group by idUtilisateur ";
    $query=$this->db->query($sql);
    $isa=0;
    $table=array();
    $i=0;
    foreach ($query->result_array() as $r)
    {
        $array[$i]=$r;
        $i++;
    }
    return $array;
}


}
?>


