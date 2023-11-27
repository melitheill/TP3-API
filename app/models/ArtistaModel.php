<?php

class ArtistaModel{
    private $db;


   public function __construct() {
       $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
    }

   

   public function getArtistas() {
        $query = $this->db->prepare('SELECT * FROM artista ');
        $query->execute();
        $artistas = $query->fetchAll(PDO::FETCH_OBJ);
        return $artistas;
    }

    public function getArtista($id) {
        $query = $this->db->prepare('SELECT * FROM artista WHERE idArtistas = ? ');
        $query->execute([$id]);
        $artista = $query->fetch(PDO::FETCH_OBJ);
        return $artista;
    }

    public function updateArtistas ($nombre,$nacionalidad,$edad,$id) {
        $query = $this -> db -> prepare ('UPDATE artista SET nombreArtista = ? ,
        nacionalidad= ?, edad = ?, WHERE IdArtista = ? '  );
        $query -> execute([$nombre,$nacionalidad,$edad,$id]);
    }

    public function insertArtista ($nombreArtista,$nacionalidad,$edad){
        $query = $this->db->prepare('INSERT INTO artista(nombreArtista, nacionalidad, edad) VALUES (?,?,?)');
        $query->execute([$nombreArtista,$nacionalidad,$edad]);
        return $this-> db-> lastInsertId();
    }



    
   
    
 


    
}