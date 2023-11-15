<?php

class AlbumModel {
    private $db;


    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
     }
 
    public function getAlbum() {
         $query = $this->db->prepare('SELECT * FROM album');
         $query->execute();
         $album = $query->fetchAll(PDO::FETCH_OBJ);
         return $album;
     }

     public function getByName($nombreAlbum)  {
        $query = $this->db->prepare('SELECT * FROM artista INNER JOIN cancion ON artista.idArtista = cancion.idArtista INNER JOIN album ON cancion.idAlbum = album.idAlbum 
        WHERE nombreAlbum=? ');
        $query->execute([$nombreAlbum]);
        $canciones = $query->fetchAll(PDO::FETCH_OBJ);
        return $canciones;

     }
}