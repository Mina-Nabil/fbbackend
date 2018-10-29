<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getBlogs(){

    $strSQL = "SELECT BLOG_ID, BLOG_TITLE, BLOG_DESC, BLOG_IMGE
                FROM blog
                ORDER BY BLOG_ID DESC
                LIMIT 20
                ";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getBlog_byID($ID){

    $strSQL = "SELECT BLOG_ID, BLOG_TITLE, BLOG_DESC, BLOG_IMGE
                FROM blog
                WHERE BLOG_ID = ?
                ";
    $query = $this->db->query($strSQL, array($ID));
    return $query->result_array();

  }



  public function insertBlog($Title, $Desc, $Image){

    $strSQL = "INSERT INTO `financial_brains`.`blog` (`BLOG_TITLE`, `BLOG_DESC`, `BLOG_IMGE` )
               VALUES (?, ?, ?)";
    $query = $this->db->query($strSQL, array($Title, $Desc, $Image));

  }

  public function editBlog($ID, $Title, $Desc, $Image){

    $strSQL = "UPDATE `financial_brains`.`blog`
              SET `BLOG_TITLE`= ? ,
                  `BLOG_DESC`= ? ,
                  `BLOG_IMGE`= ? WHERE
                  `BLOG_ID`= ? ";
    $query = $this->db->query($strSQL, array($Title, $Desc, $Image, $ID));

  }

  public function deleteBlog($ID){
    $strSQL = "DELETE FROM blog WHERE BLOG_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
