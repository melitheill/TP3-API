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
    public function get($params =[]){
        if (!empty($_GET['sort'])&& !empty ($_GET['order'])){
           $sort = $_GET['sort'];
           $order = $_GET['order'];

           $artistas = $this-> model-> getArtistasOrder($sort,$order);
           return $this->view-> response($artistas,200);
        
        }
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

    public function update ($params =[]){
        $id = $params[':ID'];
        $cancion = $this->model-> getArtista($id);

        if($cancion){
            $body = $this->getData();

            $nombreArtista = $body->nombreArtista;
            $nacionalidad= $body->nacionalidad;
            $edad = $body->edad;

            $this->model->updateArtistas($nombreArtista,$nacionalidad,$edad,$id);
            $this->view-> response('La cancion con el '.$id.' ha sido modificada', 200);
        } else {
            $this->view-> response('La cancion con el '.$id.' no existe', 404);
        }
    }
}