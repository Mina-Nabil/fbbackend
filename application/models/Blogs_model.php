<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getBlogs(){

    $strSQL = "SELECT BLOG_ID, BLOG_INST_ID, BLOG_TEXT, INST_NAME
                FROM blogs, instructors WHERE BLOG_INST_ID = INST_ID";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getBlog_byID($ID){

    $strSQL = "SELECT BLOG_ID, BLOG_TEXT, BLOG_INST_ID, INST_NAME
              FROM blogs, instructors  WHERE BLOG_INST_ID = INST_ID AND BLOG_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function getBlog_byInstructors($ID){

    $strSQL = "SELECT BLOG_ID, BLOG_TEXT, BLOG_INST_ID, INST_NAME
              FROM blogs, instructors  WHERE BLOG_INST_ID = INST_ID AND BLOG_INST_ID = {$ID}";
    $query = $this->db->query($strSQL);
    return $query->result_array();

  }

  public function insertBlog($InstructorID, $Text){

    $strSQL = "INSERT INTO `financial_brains`.`blogs` ( `BLOG_INST_ID`, `BLOG_TEXT` )
               VALUES (\"{$Name}\", {$InstructorID}, \"{$Desc}\")";
    $query = $this->db->query($strSQL);

  }

  public function editBlog($ID, $InstructorID, $Text){

    $strSQL = "UPDATE `financial_brains`.`blogs`
              SET `BLOG_TEXT`=\"{$Text}\",
                  `BLOG_INST_ID`=\"{$InstructorID}\" WHERE
                  `BLOG_ID`=\"{$ID}\"";
    $query = $this->db->query($strSQL);

  }

  public function deleteBlog($ID){
    $strSQL = "DELETE FROM blogs WHERE BLOG_ID = {$ID}";
    $query = $this->db->query($strSQL);
  }


}
