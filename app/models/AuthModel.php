<?php


 class AuthModel {
    private $db;
         
   public function __construct() {
    $this->db = new PDO('mysql:host=localhost;dbname=web2-spotify;charset=utf8mb4', 'root', '');
  }

   public function getUsuarios($usuario) {
       
       $query = $this->db->prepare('SELECT * FROM usuarios WHERE user = ?');
       $query->execute([$usuario]);
       return $query->fetch(PDO::FETCH_OBJ);
   }

 }