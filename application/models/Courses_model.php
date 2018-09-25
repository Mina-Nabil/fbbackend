<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getCourses(){

    $strSQL = "SELECT CRS_ID, CRS_NAME, CRS_BRIEF, CRS_OVERVIEW, CRS_CERTIFICATE, CRS_IMG, CRS_DUR, CRS_PRTY
              FROM courses ORDER BY CRS_PRTY ASC";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getCourse_byID($ID){

    $strSQL = "SELECT CRS_ID, CRS_NAME, CRS_BRIEF, CRS_OVERVIEW, CRS_CERTIFICATE, CRS_IMG, CRS_DUR, CRS_PRTY
              FROM courses WHERE CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertCourse($Name, $Brief, $Overview, $Certificate, $Image, $Duration, $Priorty){

    $strSQL = "INSERT INTO `financial_brains`.`courses` (`CRS_NAME`, `CRS_BRIEF`, `CRS_OVERVIEW`, `CRS_CERTIFICATE`, `CRS_IMG`, `CRS_DUR`, `CRS_PRTY`)
               VALUES ('{$Name}', '{$Brief}', '{$Overview}', '{$Certificate}', '{$Image}', '{$Duration}', '{$Priorty}')";
    $query = $this->db->query($strSQL);

  }

  public function editCourse($ID, $Name, $Brief, $Overview, $Certificate, $Image, $Duration, $Priorty){

    $strSQL = "UPDATE `financial_brains`.`courses`
              SET `CRS_NAME`='{$Name}',
                  `CRS_BRIEF`='{$Brief}',
                  `CRS_DUR`='{$Duration}',
                  `CRS_PRTY`='{$Priorty}',
                  `CRS_OVERVIEW`='{$Overview}',
                  `CRS_IMG`='{$Image}',
                  `CRS_CERTIFICATE`='{$Certificate}' WHERE
                  `CRS_ID`='{$ID}'";
    $query = $this->db->query($strSQL);

  }

  public function deleteCourse($ID){
    $strSQL = "DELETE FROM courses WHERE CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
