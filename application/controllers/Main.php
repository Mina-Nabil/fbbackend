<?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class Main extends CI_Controller{

    public function __construct()
    {
      parent::__construct();
      //Codeigniter : Write Less Do More
    }

    function login($MSGErr = '')
    {
      if(isset($this->session->userdata['USRNAME'])){
        $this->home();
        return;
      }
      $header['ArrURL'] = $this->Master_model->getHeaderArr();
      $data["MSGErr"] = $MSGErr;
      $this->load->view('templates/header', $header);
      $this->load->view('pages/login', $data);
      $this->load->view('templates/footer');
    }

    function home(){
      $header['ArrURL'] = $this->Master_model->getHeaderArr();

      $this->load->view('templates/header', $header);
      $this->load->view('pages/home');
      $this->load->view('templates/footer');
    }

    function checkLoginData(){
      $userName = $this->input->post('username');
      $userPass = $this->input->post('userpass');
      $userType = $this->input->post('usertype');

      $res = $this->Master_model->user_login($userName, $userPass, $userType);
      if($res){
        $this->home();
      }else {
        $this->login('Invalid User data');
      }
    }

  }
