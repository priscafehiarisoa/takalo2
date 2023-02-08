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

    public function ListeObjetPersonnelUtilisateur($id)
    {
        $liste=$this->mod->listObjectbyId($id);
        $res['liste']=$liste;
        $this->load->view('pages/listObjetUser',$res);
    }

    public function ListeObjetAutresUtilisateurs($id)
    {
        $liste=$this->mod->listObjectWithoutThisId($id);
        $res['liste']=$liste;
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

}