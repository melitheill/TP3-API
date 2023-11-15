
<?php

 class CancionesModel  {

    private $db;

    public function __construct() {
         $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
     }

    public function getCanciones (){
        $query = $this->db->prepare('SELECT * FROM artista INNER JOIN cancion AS cancion ON
        artista.idArtista =  cancion.idArtista INNER JOIN album AS album on album.idAlbum = cancion.idAlbum' ); 
        $query->execute();
        $canciones = $query->fetchAll(PDO::FETCH_OBJ);
        return $canciones;
    }
     
    
    
 }