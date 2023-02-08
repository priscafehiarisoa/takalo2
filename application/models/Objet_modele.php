<?php

class Objet_modele extends CI_Model
{
    public function listObject()
    {

        $liste=$this->db->query("select * from objet join objet_proprietaire on objet.idObjet=objet_proprietaire.idObjet join Images I on objet.idObjet = I.idObjet");
        $table = array();
        $i=0;
        foreach ($liste->result() as $r)
        {
            $table[$i]=$r;
            $i++;
        }
        return $table;

    }
    public function listObjectbyId($id)
    {
        $sql="select distinct * from objet join objet_proprietaire on objet.idObjet=objet_proprietaire.idObjet join Images I on objet.idObjet = I.idObjet where idUtilisateur=%s ";
        echo $sql;
        $sql=sprintf($sql, $this->db->escape($id));
        $liste=$this->db->query($sql);

        $table = array();
        $i=0;
        foreach ($liste->result() as $r)
        {
            $table[$i]=$r;
            $i++;
        }
        return $table;
    }

    public function listObjectWithoutThisId($id)
    {
        $sql="select distinct objet.idObjet,nomImage , idUtilisateur,objet 
                from objet join objet_proprietaire on objet.idObjet=objet_proprietaire.idObjet 
                    join Images I on objet.idObjet = I.idObjet where idUtilisateur!=%s ";
        $sql=sprintf($sql, $this->db->escape($id));
        $liste=$this->db->query($sql);

        $table = array();
        $i=0;
        foreach ($liste->result() as $r)
        {
            $table[$i]=$r;
            $i++;
        }
        return $table;
    }

    // gestion des liste etat object

     public function listeEtatObjet($etatDeLobjet)
     {
         $sql="select * from historique_echange where etatEchange=%i";
         $sql=sprintf($sql,$this->db->escape($etatDeLobjet));
         $req=$this->db->query($sql);
         $table=array();
         $i=0;
         foreach ($req->result() as $r)
         {
             $table[$i]=$r;
             $i++;
         }
         return $table;

     }
     public function listeDemandeEchangeRecu($utilisateur2)
     {
//         objet 1-> le utilisateur mandefa demande
//          objet 2-> le utilisateur andefasana demande
         $sql="select * from historique_echange where idUtilisateur2=%i and etatEchange=0";
         $sql=sprintf($sql, $this->db->escape($utilisateur2));
         $req=$this->db->query($sql);
         $table=array();
         $i=0;
         foreach ($req->result() as $r)
         {
             $table[$i]=$r;
             $i++;
         }
         return $table;
     }
    public function listeDemandeEchangeEnvoye($utilisateur1)
    {
//         objet 1-> le utilisateur mandefa demande
//          objet 2-> le utilisateur andefasana demande
        $sql="select * from historique_echange where idUtilisateur1=%i and etatEchange=0";
        $sql=sprintf($sql, $this->db->escape($utilisateur1));
        $req=$this->db->query($sql);
        $table=array();
        $i=0;
        foreach ($req->result() as $r)
        {
            $table[$i]=$r;
            $i++;
        }
        return $table;
    }

    public function listeDemandeRefuse($utilisateur2)
    {
        $sql="select * from historique_echange where idUtilisateur2=%i and etatEchange=-1";
        $sql=sprintf($sql, $this->db->escape($utilisateur2));
        $req=$this->db->query($sql);
        $table=array();
        $i=0;
        foreach ($req->result() as $r)
        {
            $table[$i]=$r;
            $i++;
        }
        return $table;
    }

}