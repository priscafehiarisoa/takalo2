<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Photo extends CI_Model{
    public function upload($name,$tmp)
    {
        $dossier = base_url("upload/");
        $fichier = basename($name);
        $taille_maxi = 100000;
        $extensions = array('.png', '.gif', '.jpg', '.jpeg');
        $extension = strrchr($name, '.');
        if(!in_array($extension, $extensions)) //Si l'extension n'est pas dans le tableau
        {
            $erreur = 'Vous devez uploader un fichier de type png, gif, jpg, jpeg, ';
        }
        if(!isset($erreur)) //S'il n'y a pas d'erreur, on upload
        {
            //On formate le nom du fichier ici...
            $fichier = strtr($fichier,
                'ÀÁÂÃÄÅÇÈÉÊËÌÍÎÏÒÓÔÕÖÙÚÛÜÝàáâãäåçèéêëìíîïðòóôõöùúûüýÿ',
                'AAAAAACEEEEIIIIOOOOOUUUUYaaaaaaceeeeiiiioooooouuuuyy');
            $fichier = preg_replace('/([^.a-z0-9]+)/i', '-', $fichier);
            if(move_uploaded_file($tmp, $dossier . $fichier)) //Si
            {
                echo "okkkkks";
                //header('Location:upload.html');
                echo $fichier ;
            }
            else //Sinon (la fonction renvoie FALSE).
            {
                echo 'Echec de l\'upload !';
                echo $fichier ;
                echo $tmp ;

            }
        }
        else
        {
            echo $erreur;
        }
    }
}
?>