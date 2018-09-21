<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getExams(){

    $strSQL = "SELECT EXAM_ID, EXAM_NAME, EXAM_CRS_ID, EXAM_DESC, CRS_NAME
                FROM exams, courses WHERE EXAM_CRS_ID = CRS_ID";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getExam_byID($ID){

    $strSQL = "SELECT EXAM_ID, EXAM_NAME, EXAM_CRS_ID, EXAM_DESC, CRS_NAME
              FROM exams, courses  WHERE EXAM_CRS_ID = CRS_ID AND EXAM_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getExam_byCourses($ID){

    $strSQL = "SELECT EXAM_ID, EXAM_NAME, EXAM_CRS_ID, EXAM_DESC, CRS_NAME
              FROM exams, courses  WHERE EXAM_CRS_ID = CRS_ID AND EXAM_CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertExam($Name, $CourseID, $Desc){

    $strSQL = "INSERT INTO `financial_brains`.`exams` (`EXAM_NAME`, `EXAM_CRS_ID`, `EXAM_DESC` )
               VALUES (\"{$Name}\", {$CourseID}, \"{$Desc}\")";
    $query = $this->db->query($strSQL);

  }

  public function editExam($ID, $Name, $CourseID, $Desc){

    $strSQL = "UPDATE `financial_brains`.`exams`
              SET `EXAM_NAME`=\"{$Name}\",
                  `EXAM_CRS_ID`=\"{$CourseID}\",
                  `EXAM_DESC`=\"{$Desc}\" WHERE
                  `EXAM_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }

  public function deleteExam($ID){
    $strSQL = "DELETE FROM exams WHERE EXAM_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
