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
        $this->load->view('test',$res);
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
        $refuse=$this->mod->listeDemandeRefuse($idUtilisateur);
        $result['recu']=$recu;
        $result['envoye']=$envoye;
        $result['refuse']=$refuse;
        $this->load->view('test',$result);
    }

//    gestion des listes etat objet

}