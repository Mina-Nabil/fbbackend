<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachings_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getTeachings(){

    $strSQL = "SELECT TECH_ID, TECH_INST_ID, TECH_CRS_ID, CRS_NAME, INST_NAME
                FROM teaching, courses, instructors
                WHERE TECH_CRS_ID = CRS_ID AND TECH_INST_ID = INST_ID";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getTeaching_byID($ID){

    $strSQL = "SELECT TECH_ID, TECH_INST_ID, TECH_CRS_ID, CRS_NAME, INST_NAME
              FROM teaching, courses, instructors
              WHERE TECH_CRS_ID = CRS_ID AND TECH_INST_ID = INST_ID AND TECH_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getTeaching_byCourses($ID){

    $strSQL = "SELECT  TECH_ID, TECH_INST_ID, TECH_CRS_ID, CRS_NAME, INST_NAME
              FROM teaching, courses, instructors
              WHERE TECH_CRS_ID = CRS_ID AND TECH_INST_ID = INST_ID AND  TECH_CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertTeaching($CourseID, $InstructorID){

    $strSQL = "INSERT INTO `financial_brains`.`teaching` (`TECH_CRS_ID`, `TECH_INST_ID` )
               VALUES ({$CourseID}, {$InstructorID})";
    $query = $this->db->query($strSQL);

  }

  public function editTeaching($ID, $CourseID, $InstructorID){

    $strSQL = "UPDATE `financial_brains`.`teaching`
              SET `TECH_CRS_ID`=\"{$CourseID}\",
                  `TECH_INST_ID`=\"{$InstructorID}\" WHERE
                  `TECH_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }

  public function deleteTeaching($ID){
    $strSQL = "DELETE FROM teaching WHERE TECH_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
