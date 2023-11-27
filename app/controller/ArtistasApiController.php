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

         $idArtista = $body-> idArtista;
         $nombreArtista = $body->nombreArtista;
         $nacionalidad= $body->nacionalidad;
         $edad = $body->edad;


        $id =  $this->model-> insertArtista($idArtista,$nombreArtista,$nacionalidad,$edad);
        $this->view->response('El artista fue agregado con el '.$idArtista.' existosamente',201);

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
            $this->view-> response('El artista con el '.$id.' ha sido modificada', 200);
        } else {
            $this->view-> response('El artista con el '.$id.' no existe', 404);
        }
    }

    function delete($params = []) {
        $id = $params[':ID'];
        $artista = $this->model-> getArtista($id);

        if($artista) {
            $this->model->delete($id);
            $this->view-> response('El artista con el '.$id.' ha sido eliminado', 200);
           
        } else {
            $this->view->response('El artista con id='.$id.' no existe.', 404);
        }
    }

}