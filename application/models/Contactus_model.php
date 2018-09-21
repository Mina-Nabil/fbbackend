<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getContactus(){

    $strSQL = "SELECT CNTC_ID, CNTC_FB, CNTC_MOB, CNTC_EMAIL, CNTC_INSTA, CNTC_HOTLINE, CNTC_ABTUS, CNTC_ARBC_ABTUS, CNTC_FROM, CNTC_TO
              FROM contactus WHERE CNTC_ID = 1";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }



  public function editContactus($ID, $FB, $Mob, $Email, $Insta, $Hotline, $AboutUs, $ArbcAboutUs, $From, $To){

    $strSQL = "UPDATE `financial_brains`.`contactus`
              SET `CNTC_FB`=\"{$FB}\",
                  `CNTC_MOB`=\"{$Mob}\",
                  `CNTC_EMAIL`=\"{$Email}\",
                  `CNTC_ABTUS`=\"{$AboutUs}\",
                  `CNTC_FROM`=\"{$From}\",
                  `CNTC_TO`=\"{$To}\",
                  `CNTC_ARBC_ABTUS`=\"{$ArbcAboutUs}\",
                  `CNTC_INSTA`=\"{$Insta}\",
                  `CNTC_HOTLINE`=\"{$Hotline}\" WHERE
                  `CNTC_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }


}
