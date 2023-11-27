<?php
 require_once 'app/view/ApiView.php';
 require_once 'app/models/ArtistaModel.php';
 require_once 'app/controller/ApiController.php';

class ArtistasApiController extends ApiController{
    
    private $model;

    public function __construct() {
        parent::__construct();
        $this->model = new ArtistaModel () ;
        
        }
    public function get(){
        $artistas = $this-> model-> getArtistas();
        return $this->view-> response($artistas,200);
    }

    public function create($params = []){
         
         $body = $this->getData();

         $nombreArtista = $body->nombreArtista;
         $nacionalidad= $body->nacionalidad;
         $edad = $body->edad;


        $id =  $this->model-> insertArtista($nombreArtista,$nacionalidad,$edad);
        $this->view->response('El artista fue agregado con el '.$id.' existosamente',201);

    }
}