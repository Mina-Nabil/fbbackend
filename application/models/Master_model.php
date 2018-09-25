<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master_model extends CI_Model{

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getHeaderArr(){
    $userName = '';
    $userType = '';
    $tmp = array();
    if(isset($this->session->userdata['USRNAME'])) {
      $tmp[0] = true;
      $tmp[1] = array(
        'Link' => 'home',
        'Name' => 'Home'
      );
      $tmp[2] = array(
        'Link' => 'courses',
        'Name' => 'Courses'
      );
      $tmp[3] = array(
        'Link' => 'exams',
        'Name' => 'Exams'
      );
      $tmp[4] = array(
        'Link' => 'benefits',
        'Name' => 'Benefits'
      );
      $tmp[5] = array(
        'Link' => 'topics',
        'Name' => 'Topics'
      );
      $tmp[6] = array(
        'Link' => 'candidates',
        'Name' => 'Candidates'
      );
      $tmp[7] = array(
        'Link' => 'instructors',
        'Name' => 'Instructors'
      );
      $tmp[8] = array(
        'Link' => 'teachings',
        'Name' => 'Teachings'
      );
      $tmp[9] = array(
        'Link' => 'blogs',
        'Name' => 'Blogs'
      );
      $tmp[10] = array(
        'Link' => 'contactus',
        'Name' => 'Contact Us'
      );
      $tmp[11] = array(
        'Link' => 'site_data',
        'Name' => 'Site Data'
      );



      if($this->session->userdata['USRNAME'] == 'admin'){
        $tmp[15] = array(
          'Link' => 'users',
          'Name' => 'Users'
        );
      }
      return $tmp;
    } else {
      $tmp[0] = false;
      $tmp[1] = array(
        'Link' => 'login',
        'Name' => 'Login'
      );
      return $tmp;
    }
  }

    public function user_login($userName, $passWord, $userType){
      $strSQL = "SELECT COUNT(*) AS EXP FROM users WHERE USR_NAME = '{$userName}'
                AND USR_PASS = '{$passWord}'";

      $query = $this->db->query($strSQL);
      $result = $query->result_array();
      if($result[0]['EXP'] == 1){
        $SESSArr = array (
          'USRNAME' => $userName,
          'USRTYPE' => $userType
        );
        $this->session->set_userdata($SESSArr);
        return true;
      }else {
        return false;
      }
    }
  }
