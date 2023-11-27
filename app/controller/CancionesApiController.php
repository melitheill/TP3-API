<?php

   require_once 'app/models/CancionesModel.php';
   require_once 'app/view/ApiView.php';
 class CancionesApiController{
      
    private $view;
    private $model;

    public function __construct() {
        $this->model = new CancionesModel ();
        $this->view = new ApiView();
        }
   public function getCanciones($params = []){
        if (empty($params)){
        $canciones = $this->model->getCanciones();
        return $this->view-> response($canciones,200);
        } else {
         $cancion = $this->model-> getCancion($params[':ID']);
         if (!empty($cancion)){
            return $this->view-> response($cancion,200);
         } else {
            return $this->view-> response
            (['error' => 'La cancion con el el id = '.$params[':ID'].' no existe '],200);
         }
        } 
        
         
   }
         
 }