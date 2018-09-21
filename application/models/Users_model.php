<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getUsers(){

    $strSQL = "SELECT USR_ID, USR_NAME, USR_PASS FROM users";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getUser_byID($ID){

    $strSQL = "SELECT USR_ID, USR_NAME, USR_PASS FROM users WHERE USR_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertUser($Name, $Pass){

    $strSQL = "INSERT INTO `bolt`.`users` (`USR_NAME`, `USR_PASS`)
               VALUES ('{$Name}', '{$Pass}')";
    $query = $this->db->query($strSQL);

  }

  public function editUser($ID, $Name, $Pass){

    $strSQL = "UPDATE `bolt`.`users`
              SET `USR_NAME`='{$Name}',
                  `USR_PASS`='{$Pass}'   WHERE
                  `USR_ID`='{$ID}'";
    $query = $this->db->query($strSQL);

  }

  public function deleteUser($ID){
    $strSQL = "DELETE FROM users WHERE USR_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
