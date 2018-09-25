<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benefits_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getBenefits(){

    $strSQL = "SELECT BNFT_ID, BNFT_NAME, BNFT_CRS_ID, BNFT_DESC, CRS_NAME
                FROM benefits, courses WHERE BNFT_CRS_ID = CRS_ID";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getBenefit_byID($ID){

    $strSQL = "SELECT BNFT_ID, BNFT_NAME, BNFT_CRS_ID, BNFT_DESC, CRS_NAME
              FROM benefits, courses  WHERE BNFT_CRS_ID = CRS_ID AND BNFT_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getBenefit_byCourse($ID){

    $strSQL = "SELECT BNFT_ID, BNFT_NAME, BNFT_CRS_ID, BNFT_DESC, CRS_NAME
              FROM benefits, courses  WHERE BNFT_CRS_ID = CRS_ID AND BNFT_CRS_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertBenefit($Name, $CourseID, $Desc){

    $strSQL = "INSERT INTO `financial_brains`.`benefits` (`BNFT_NAME`, `BNFT_CRS_ID`, `BNFT_DESC` )
               VALUES (\"{$Name}\", {$CourseID}, \"{$Desc}\")";
    $query = $this->db->query($strSQL);

  }

  public function editBenefit($ID, $Name, $CourseID, $Desc){

    $strSQL = "UPDATE `financial_brains`.`benefits`
              SET `BNFT_NAME`=\"{$Name}\",
                  `BNFT_CRS_ID`=\"{$CourseID}\",
                  `BNFT_DESC`=\"{$Desc}\" WHERE
                  `BNFT_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }

  public function deleteBenefit($ID){
    $strSQL = "DELETE FROM benefits WHERE BNFT_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
