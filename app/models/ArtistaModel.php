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
        $query = $this->db->prepare('SELECT * FROM artista WHERE idArtista = ? ');
        $query->execute([$id]);
        $artista = $query->fetch(PDO::FETCH_OBJ);
        return $artista;
    }

    public function getArtistasOrder($sort,$order) {
        $query = $this->db->prepare('SELECT * FROM artista ORDER BY '.$sort.' '.$order.' ');
        $query->execute();
        $artistas = $query->fetchAll(PDO::FETCH_OBJ);
        return $artistas;
    }
        

    public function updateArtistas($nombreArtista,$nacionalidad,$edad,$id) {
        $query = $this -> db -> prepare ('UPDATE artista SET nombreArtista = ?,nacionalidad = ?,edad = ? WHERE IdArtista = ? ');
        $query -> execute([$nombreArtista,$nacionalidad,$edad,$id]);
    }

   

    public function insertArtista ($id,$nombreArtista,$nacionalidad,$edad){
        $query = $this->db->prepare('INSERT INTO artista(idArtista,nombreArtista, nacionalidad, edad) VALUES (?,?,?,?)');
        $query->execute([$id,$nombreArtista,$nacionalidad,$edad]);
        return $this-> db-> lastInsertId();
    }

    function delete($id) {
        $query = $this->db->prepare('DELETE FROM artista WHERE idArtista = ?');
        $query->execute([$id]);
    }




    
   
    
 


    
}