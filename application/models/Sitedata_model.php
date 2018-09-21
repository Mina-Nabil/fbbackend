<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sitedata_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getSite_data(){

    $strSQL = "SELECT `STDT_ID`,
                      `STDT_STUDTNO`,
                      `STDT_INSTNO`,
                      `STDT_CRSNO`,
                      `STDT_HOME_BIGIMG`,
                      `STDT_HOME_MEDIMG1`,
                      `STDT_HOME_MEDIMG2`,
                      `STDT_HOME_MEDIMG3`,
                      `STDT_HOME_SMLIMG1`,
                      `STDT_HOME_SMLIMG2`,
                      `STDT_HOME_SMLIMG3`,
                      `STDT_HOME_SMLIMG4`,
                      `STDT_HOME_SMLIMG5`,
                      `STDT_HOME_SMLIMG6`,
                      `STDT_HOME_SMLIMG7`,
                      `STDT_HOME_SMLIMG8`,
                      `STDT_HOME_SMLIMG9`
                      FROM site_data WHERE STDT_ID = 1";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }



  public function editSite_data($ID, $StdNo, $InsNo, $CrsNo,
                                $BigImg,
                                $MedImg1, $MedImg2, $MedImg3,
                                $SmallImg1 , $SmallImg2 , $SmallImg3 , $SmallImg4 , $SmallImg5,
                                $SmallImg6 , $SmallImg7 , $SmallImg8 , $SmallImg9  ){

    $strSQL = "UPDATE `financial_brains`.`site_data`
              SET `STDT_STUDTNO`=\"{$StdNo}\",
                  `STDT_INSTNO`=\"{$InsNo}\",
                  `STDT_CRSNO`=\"{$CrsNo}\",
                  `STDT_HOME_BIGIMG`=\"{$BigImg}\",
                  `STDT_HOME_MEDIMG1`=\"{$MedImg1}\",
                  `STDT_HOME_MEDIMG2`=\"{$MedImg2}\",
                  `STDT_HOME_MEDIMG3`=\"{$MedImg3}\",
                  `STDT_HOME_SMLIMG1`=\"{$SmallImg1}\",
                  `STDT_HOME_SMLIMG2`=\"{$SmallImg2}\",
                  `STDT_HOME_SMLIMG3`=\"{$SmallImg3}\",
                  `STDT_HOME_SMLIMG4`=\"{$SmallImg4}\",
                  `STDT_HOME_SMLIMG5`=\"{$SmallImg5}\",
                  `STDT_HOME_SMLIMG6`=\"{$SmallImg6}\",
                  `STDT_HOME_SMLIMG7`=\"{$SmallImg7}\",
                  `STDT_HOME_SMLIMG8`=\"{$SmallImg8}\",
                  `STDT_HOME_SMLIMG9`=\"{$SmallImg9}\" WHERE
                  `STDT_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }


}
