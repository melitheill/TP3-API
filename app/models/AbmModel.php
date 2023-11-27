<?php

class AbmModel {
   private $db;

   public function __construct(){
      $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
   }

   public function getAlbum() {
    $query = $this->db->prepare('SELECT * FROM album INNER JOIN artista ON album.IdArtista = artista.IdArtista ');
    $query->execute();
    $albums = $query->fetchAll(PDO::FETCH_OBJ);
    return $albums;
  }
   
   public function getCanciones(){
      $query = $this->db->prepare('SELECT * FROM cancion');
      $query->execute();
      $canciones = $query->fetchAll(PDO::FETCH_OBJ);
      return $canciones;
   }

   public function insertCanciones($nombreCancion,$duracion,$genero, $anio,$album,$artista )  {
     $query = $this->db->prepare('INSERT INTO cancion (nombreCancion, duracion, genero, anio, IdAlbum, IdArtista) 
     VALUES (?,?,?,?,?,?)');
     $query->execute([$nombreCancion,$duracion,$genero, $anio,$album,$artista ]);
   }

   public function deleteCancion($id) {
      $query = $this->db-> prepare('DELETE FROM cancion WHERE IdCancion = ?');
      $query->execute([$id]);
   }
    
   public function modificarCancion($nombreCancion,$duracion,$genero, $anio,$idCancion,){
      $query = $this->db->prepare('UPDATE cancion SET nombreCancion = ?, duracion = ?, 
      genero = ? , anio = ? WHERE cancion.IdCancion = ?');
      $query->execute([$nombreCancion,$duracion,$genero, $anio,$idCancion]);

   }
   
}