<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getSlides(){

    $strSQL = "SELECT SLD_TTL1, SLD_TTL2, SLD_TTL3, SLD_TTL4, SLD_TTL5, SLD_DSC1, SLD_DSC2, SLD_DSC3, SLD_DSC4, SLD_DSC5, SLD_IMG1, SLD_IMG2, SLD_IMG3, SLD_IMG4, SLD_IMG5

              FROM slides WHERE SLD_ID = 1";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function editSlides($ID, $slidetitle1, $slidetitle2, $slidetitle3, $slidetitle4, $slidetitle5, $slidedesc1, $slidedesc2, $slidedesc3, $slidedesc4, $slidedesc5, $SlidesIMG1, $SlidesIMG2, $SlidesIMG3, $SlidesIMG4, $SlidesIMG5){

    $strSQL = "UPDATE `financial_brains`.`slides`
              SET `SLD_TTL1`=?,
                  `SLD_TTL2`=?,
                  `SLD_TTL3`=?,
                  `SLD_TTL4`=?,
                  `SLD_TTL5`=?,
                  `SLD_DSC1`=?,
                  `SLD_DSC2`=?,
                  `SLD_DSC3`=?,
                  `SLD_DSC4`=?,
                  `SLD_DSC5`=?,
                  `SLD_IMG1`=?,
                  `SLD_IMG2`=?,
                  `SLD_IMG3`=?,
                  `SLD_IMG4`=?,
                  `SLD_IMG5`=?
              WHERE
                  `SLD_ID`=?";
    $query = $this->db->query($strSQL, array($slidetitle1, $slidetitle2, $slidetitle3, $slidetitle4, $slidetitle5, $slidedesc1, $slidedesc2, $slidedesc3, $slidedesc4, $slidedesc5, $SlidesIMG1, $SlidesIMG2, $SlidesIMG3, $SlidesIMG4, $SlidesIMG5, $ID));

  }


}
