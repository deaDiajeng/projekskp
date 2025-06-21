<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    private $pdo;

    public function __construct() {
        parent::__construct();
        $this->pdo = $this->load->database('', TRUE)->conn_id; // Ambil instance PDO dari CI3
    }

    public function check_login($username, $password) {
        $sql = "SELECT * FROM user WHERE username = :username AND password = :password";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(':username', $username, PDO::PARAM_STR);
        $stmt->bindParam(':password', $password, PDO::PARAM_STR);
        $stmt->execute();
        
        return $stmt->fetch(PDO::FETCH_OBJ); // Return user jika ditemukan, false jika tidak
    }
    
}
