<?php

class Objet_controler extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Objet_modele','mod');

    }
    public function index()
    {
        $this->ListeObjetAutresUtilisateurs(1);
    }

//    controleur mi-rediriger any @ liste an'ny objet personnel an'le utilisateur

    public function ListeObjetPersonnelUtilisateur($id, $type)
    {
        $liste=$this->mod->listObjectbyId($id);
        $res['liste']=$liste;
        $res['type']=$type;
        $this->load->view('pages/listObjetUser',$res);
    }

    public function ListeObjetPersonnelUser($idUser, $idObjetAjoute,$type)
    {
        $liste=$this->mod->listObjectbyId($idUser);
        $res['liste']=$liste;
        $res['type']=$type;
        $res['objetAjoute']=$idObjetAjoute;
        $this->load->view('pages/listObjetUser',$res);
    }


    public function ListeObjetAutresUtilisateurs($id)
    {
//        0 -> liste aures users de misy an'le bouton echanger
//        1-> liste des objet possedes par l'utilisateur tsisy bouton echanger
//        2-. liste des objets possedes avec bouton echanger
        $liste=$this->mod->listObjectWithoutThisId($id);
        $res['liste']=$liste;
        $res['type']=1;
        $this->load->view('pages/listObjetUser',$res);
    }

    public function pageDetailEchanges($idUtilisateur)
    {
        $recu=$this->mod->listeDemandeEchangeRecu($idUtilisateur);
        $envoye=$this->mod->listeDemandeEchangeEnvoye($idUtilisateur);
        $refus=$this->mod->listeDemandeRefuse($idUtilisateur);
        $result['recu']=$recu;
        $result['envoye']=$envoye;
        $result['refus']=$refus;
        $this->load->view('pages/etatObjet',$result);
    }

//    gestion des listes etat objet

    public function echangerPartie1($idObject)
    {

        $obj['objet1']=$idObject;
        $objet=$this->mod->getUserByObjectId($idObject);
        $obj['user']=$objet;
        $user=$_SESSION['utilisateur'];
        $id=$user['idUtilisateur'];
        $this->ListeObjetPersonnelUser($id,$idObject,2);

    }
    public function echangerPartie2($idObjet1, $idObjet2)
    {
        $objet1=$this->mod->getUserByObjectId($idObjet1);
        echo $objet1[0]->idObjet;
        $objet2=$this->mod->getUserByObjectId($idObjet2);
        echo $objet2[0]->idObjet;
        $this->mod->insertHistorique($objet2[0]->idObjet,$objet1[0]->idObjet ,$objet2[0]->idUtilisateur ,  $objet1[0]->idUtilisateur,0  );
    }
}