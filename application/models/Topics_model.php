<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getTopics(){

    $strSQL = "SELECT TOPC_ID, TOPC_NAME, TOPC_CRS_ID, TOPC_DESC, CRS_NAME
                FROM topics, courses WHERE TOPC_CRS_ID = CRS_ID";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getTopic_byID($ID){

    $strSQL = "SELECT TOPC_ID, TOPC_NAME, TOPC_CRS_ID, TOPC_DESC, CRS_NAME
              FROM topics, courses  WHERE TOPC_CRS_ID = CRS_ID AND TOPC_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getTopic_byCourse($ID){

    $strSQL = "SELECT TOPC_ID, TOPC_NAME, TOPC_CRS_ID, TOPC_DESC, CRS_NAME
              FROM topics, courses  WHERE TOPC_CRS_ID = CRS_ID AND TOPC_CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertTopic($Name, $CourseID, $Desc){

    $strSQL = "INSERT INTO `financial_brains`.`topics` (`TOPC_NAME`, `TOPC_CRS_ID`, `TOPC_DESC` )
               VALUES (\"{$Name}\", {$CourseID}, \"{$Desc}\")";
    $query = $this->db->query($strSQL);

  }

  public function editTopic($ID, $Name, $CourseID, $Desc){

    $strSQL = "UPDATE `financial_brains`.`topics`
              SET `TOPC_NAME`=\"{$Name}\",
                  `TOPC_CRS_ID`=\"{$CourseID}\",
                  `TOPC_DESC`=\"{$Desc}\" WHERE
                  `TOPC_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }

  public function deleteTopic($ID){
    $strSQL = "DELETE FROM topics WHERE TOPC_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
