<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function __construct()
    {
        parent::__construct();

        if (!is_dir('./uploads/')) {
            mkdir('./uploads/', 0777, true);
        }
    }
//-----------------------------------------------LOGIN-----------------------------------------------------------//
//Page Login
    public function index(){$this->load->view('index');}
//Fonction Utilisateur
	public function checkutilisateur(){
        $this->load->model('Utilisateur');
        $bool = $this->Utilisateur->TologIn($_POST['email'],$_POST['password']);
        if($bool == null){
            redirect('welcome/errorLogin/');
        }else{
            $user = array();
            $user =  $this->Utilisateur->checkConnected($_POST['email'],$_POST['password']);
            $this->session->set_userdata('utilisateur',$user);
            redirect('welcome/accueil/');
        }
	}
//Fonction Deconnexion
	public function deconnect()	{
        $this->session->unset_userdata('utilisateur');
        redirect('welcome/');
    }
//Fonction erreur de Login
    public function errorLogin(){
        $data['erreur'] = 'Mot de passe ou email Invalide' ;
        $this->load->view('index',$data);
    }
//----------------------------------------------INSCRIPTION-----------------------------------------------------//
//Page Inscription
    public function subscribe(){$this->load->view('pages/inscription');}
//Fonction InsertUtilisateur
    public function inscription()
    {
        $this->load->model('Utilisateur');
        $this->Utilisateur->insertUtilisateur($_POST['nom'],$_POST['email'],$_POST['mdp']);
        redirect('welcome/index/');
    }
//----------------------------------------------LISTOBJET---------------------------------------------------------//
//Page Accueil
    public function accueil(){
        $user = array();
        $user = $_SESSION['utilisateur'];
        echo $user['nom'];
        $url="objet_controler/ListeObjetAutresUtilisateurs/".$user['idUtilisateur'];
        redirect($url);
        }
//MES PRODUITS
    public function produit(){
        $user = array();
        $user = $_SESSION['utilisateur'];
        echo $user['nom'];
        $url="objet_controler/ListeObjetPersonnelUtilisateur/".$user['idUtilisateur']."/0";
        redirect($url);
    }
//MES ECHANGES
     public function echange(){
            $user = array();
            $user = $_SESSION['utilisateur'];
           // $this->load->view('pages/etatObjet',$user);
           $url="objet_controler/pageDetailEchanges/".$user['idUtilisateur'];
           redirect($url);
     }
//-----------------------------------------------FORM_USER---------------------------------------------------------//
//AJOUT
    public function ajout(){
        $this->load->model('Objet_categorie');
        $liste = $this->Objet_categorie->listCategorie();
        $res['categ']=$liste;
        $this->load->view('pages/formulaireAjout',$res);
    }
//Upload
    public function photo(){$this->load->view('pages/photo');}
//photo
    public function do_upload(){
        //utilisateur
        $user = array();
        $user = $_SESSION['utilisateur'];
        //objet
        $objet = $_POST['objet'];
        $prix = $_POST['prix'];
        $nb = $_POST['nombre'];
        $idc = $_POST['categorie'];
        echo $objet;
        echo
        //upload

        $nb = $_POST['nombre'];
        $dossier = "upload/";
        $fichier = basename($_FILES['avatar']['name']);
        $image = $fichier;
        $taille_maxi = 100000;
        $tmp = $_FILES['avatar']['tmp_name'];
        $taille_maxi = 100000;
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($fichier, '.');
        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
            $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, ';
        }
        else{
            $config['upload_path'] = './uploads/';
            $config['allowed_types'] = 'gif|jpg|png';
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('avatar'))
            {
                $error = array('error' => $this->upload->display_errors());
                echo "erreur";
                //afficher l'erreur
            }
            else
            {
                $data = array('upload_data' => $this->upload->data());
                echo  "ok";
                $this->load->model('Objet_modele');
                $liste = $this->Objet_modele->insertObjet($objet,$idc,$image,$prix);
                //traiter les données de l'upload
            }

        }

    }


}

