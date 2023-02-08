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
        $sql="select distinct * from objet 
                join objet_proprietaire on objet.idObjet=objet_proprietaire.idObjet
                join utilisateur ut  on ut.idUtilisateur =  objet_proprietaire.idUtilisateur where ut.idUtilisateur=%s ";
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
        $sql="select distinct objet.idObjet,objet.image , ut.idUtilisateur,objet,ut.nom ,objet.prix
                from objet join objet_proprietaire on objet.idObjet=objet_proprietaire.idObjet 
                     join utilisateur ut  on ut.idUtilisateur = objet_proprietaire.idUtilisateur where ut.idUtilisateur!= %s";
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
         $sql="select * from historique_echange where etatEchange=%s";
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
         $liste=$this->db->query(" select o1.objet as objet1 ,  o2.objet as objet2 ,  o1.image as image1 ,  o2.image as image2 , ut1.email as nom1, ut2.email as nom2 from historique_echange hist
        join objet  o1  on hist.idObjet1=o1.idObjet 
        join objet  o2 on hist.idObjet2= o2.idObjet
        join utilisateur ut1 on hist.idUtilisateur1= ut1.idUtilisateur
        join utilisateur ut2 on hist.idUtilisateur2 = ut2.idUtilisateur
            where idUtilisateur2=$utilisateur2 and etatEchange = 0");
         $table = array();
         $i=0;
         foreach ($liste->result() as $r)
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
            $liste=$this->db->query(" select o1.objet as objet1 ,  o2.objet as objet2 ,  o1.image as image1 ,  o2.image as image2 , ut1.email as nom1, ut2.email as nom2 from historique_echange hist
        join objet  o1  on hist.idObjet1=o1.idObjet 
        join objet  o2 on hist.idObjet2= o2.idObjet
        join utilisateur ut1 on hist.idUtilisateur1= ut1.idUtilisateur
        join utilisateur ut2 on hist.idUtilisateur2 = ut2.idUtilisateur
            where idUtilisateur1=$utilisateur1 and etatEchange = 0");
        $table = array();
        $i=0;
        foreach ($liste->result() as $r)
        {
            $table[$i]=$r;
            $i++;
        }
        return $table;
    }

    public function listeDemandeRefuse($utilisateur2)
    {
        $sql = "select o1.objet as objet1 ,  o2.objet as objet2 ,  o1.image as image1 ,  o2.image as image2 , ut1.email as nom1, ut2.email as nom2 from historique_echange hist
        join objet  o1  on hist.idObjet1=o1.idObjet 
        join objet  o2 on hist.idObjet2= o2.idObjet
        join utilisateur ut1 on hist.idUtilisateur1= ut1.idUtilisateur
        join utilisateur ut2 on hist.idUtilisateur2 = ut2.idUtilisateur
            where idUtilisateur2=$utilisateur2 and etatEchange = -1";
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

}