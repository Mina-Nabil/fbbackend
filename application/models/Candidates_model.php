<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidates_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getCandidates(){

    $strSQL = "SELECT CNDT_ID, CNDT_NAME, CNDT_CRS_ID, CRS_NAME
                FROM candidates, courses WHERE CNDT_CRS_ID = CRS_ID";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getCandidate_byID($ID){

    $strSQL = "SELECT CNDT_ID, CNDT_NAME, CNDT_CRS_ID, CRS_NAME
              FROM candidates, courses  WHERE CNDT_CRS_ID = CRS_ID AND CNDT_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getCandidate_byCourses($ID){

    $strSQL = "SELECT CNDT_ID, CNDT_NAME, CNDT_CRS_ID, CRS_NAME
              FROM candidates, courses  WHERE CNDT_CRS_ID = CRS_ID AND CNDT_CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertCandidate($Name, $CourseID){

    $strSQL = "INSERT INTO `financial_brains`.`candidates` (`CNDT_NAME`, `CNDT_CRS_ID` )
               VALUES (\"{$Name}\", {$CourseID})";
    $query = $this->db->query($strSQL);

  }

  public function editCandidate($ID, $Name, $CourseID){

    $strSQL = "UPDATE `financial_brains`.`candidates`
              SET `CNDT_NAME`=\"{$Name}\",
                  `CNDT_CRS_ID`=\"{$CourseID}\" WHERE
                  `CNDT_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }

  public function deleteCandidate($ID){
    $strSQL = "DELETE FROM candidates WHERE CNDT_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
