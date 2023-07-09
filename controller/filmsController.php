<?php
include_once('model/filmsModel.php');

class FilmsController
{
    protected $id_films;
    protected $nom;
    protected $film;
    protected $photos;
    protected $text;
    protected $date_ajout;
    protected $id_utilisateurs;
    private $model;

    public function __construct()
    {
        $this->model = new FilmsModel();
    }


    public function ajoutFilm()
    {
        echo  $this->nom = trim($_POST['nom']);
        $this->film = $this->fileUpload('film', 'video');
        $this->photos = $this->fileUpload('photos', 'photo');
        $this->text = trim($_POST['text']);
        $this->date_ajout = date('Y-m-d');
        $this->id_utilisateurs = 50;

        if ($this->nom != '' && $this->film != '' && $this->photos != '' && $this->text != '') {
            if ($this->model->ajoutFilm($this->nom, $this->film, $this->photos, $this->text, $this->date_ajout, $this->id_utilisateurs)) {
                echo '<h2 class="title_connection">Film ajouté</h2>';
            }
        } else {
            $this->formAjoutFilm();
        }
    }

    public function formAjoutFilm()
    {
        include('view/ajoutFilm.php');
    }




    public function fileUpload($name, $type = "photo")
    {

        $fichier = explode('.', $_FILES[$name]['name']);
        $extension = end($fichier); // recuperer l'extention du fichier ex : jpj png pdf ...

        $typeFichierTmp = mime_content_type($_FILES[$name]['tmp_name']); // type du fichier ex: 'image/jpeg', 'image/png'

        $chemin = 'assets/media/' . microtime(true) . '.' . $extension; // le chemin et le nouveau nom de fichier 

        if ($type == 'video') {
            $typeFichierAccepter = ['video/mp4', 'video/x-matroska'];
            $typeExtAccepter = ['mp4', 'mkv'];
        } else {
            $typeFichierAccepter = ['image/jpeg', 'image/png'];
            $typeExtAccepter = ['jpg', 'png', 'gif'];
        }


        // in_array(test,tab)

        if (in_array($typeFichierTmp, $typeFichierAccepter) && in_array($extension, $typeExtAccepter)) {
            if (move_uploaded_file($_FILES[$name]['tmp_name'], $chemin)) {
                return $chemin;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}
