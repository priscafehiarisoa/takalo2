<?php
class Fonctions extends CI_Model
{
    public function listObjectPourcentageWithoutId($idObjet, $pourcentage, $id){
        // recherche des 2 prix
        $sql="select prix from objet where idObjet = %s ";
        $sql=sprintf($sql, $this->db->escape($idObjet));
        $liste=$this->db->query($sql);
        $table = array();
        $i=0;
        foreach ($liste->result() as $r) {
            $table[$i]=$r;
            $i++;
        }
        $prix = $table[0]*$pourcentage/100;
        $prixTab = array();
        $prixTab[0] = $table[0]-$prix;
        $prixTab[1] = $table[1]+$prix;

        // selectionner objet de l'utilisateur entre prix1 et prix2
        $sql1="select distinct objet.idObjet, objet.image, ut.idUtilisateur,objet,ut.nom ,objet.prix
                from objet join objet_proprietaire on objet.idObjet=objet_proprietaire.idObjet 
                     join utilisateur ut  on ut.idUtilisateur = objet_proprietaire.idUtilisateur where ut.idUtilisateur!= %s and objet.prix<=%s and objet.prix>=%s";
        $sql1=sprintf($sql1, $this->db->escape($id, $prixTab[1], $prixTab[0]));
        $liste1=$this->db->query($sql1);
        $table1 = array();
        $j=0;
        foreach ($liste1->result() as $s) {
            $table1[$j]=$s;
            $j++;
        }

        return $table1;
    }

    public function differencePourcentage($prix, $idObjet){
        $sql="select prix from objet where idObjet = %s";
        $sql=sprintf($sql, $this->db->escape($idObjet));
        $liste=$this->db->query($sql);
        $table = array();
        $i=0;
        foreach ($liste->result() as $r) {
            $table[$i]=$r;
            $i++;
        }
        $price = $table[0]-$prix;
        $pourcent = ($price*100)/$table[0];
        return $pourcent;
    }
}