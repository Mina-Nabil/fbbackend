<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructors_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getInstructors(){

    $strSQL = "SELECT INST_ID, INST_NAME, INST_DESC, INST_IMG
                FROM instructors ";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getInstructor_byID($ID){

    $strSQL = "SELECT INST_ID, INST_NAME, INST_DESC, INST_IMG 
              FROM instructors  WHERE INST_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }



  public function insertInstructor($Name, $Desc, $Image){

    $strSQL = "INSERT INTO `financial_brains`.`instructors` (`INST_NAME`, `INST_DESC`, `INST_IMG` )
               VALUES (\"{$Name}\", \"{$Desc}\", \"{$Image}\")";
    $query = $this->db->query($strSQL);

  }

  public function editInstructor($ID, $Name, $Desc, $Image){

    $strSQL = "UPDATE `financial_brains`.`instructors`
              SET `INST_NAME`=\"{$Name}\",
                  `INST_IMG`=\"{$Image}\",
                  `INST_DESC`=\"{$Desc}\" WHERE
                  `INST_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }

  public function deleteInstructor($ID){
    $strSQL = "DELETE FROM instructors WHERE INST_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
