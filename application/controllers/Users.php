<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function home($MSGErr = '', $MSGOK = '')
  {
    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrUsers'] = $this->Users_model->getUsers();
    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/users", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['USR_NAME']  = '';
    $data['USR_PASS']  = '';
    $data['USR_ID']    = '';

    $data['formURL'] = 'users/insert';
    $data['ButtonValue'] = 'Add User';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/adduser", $data);
    $this->load->view("templates/footer");
  }

  public function update($UserID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $UserItem = $this->Users_model->getUser_byID($UserID);

    $data['USR_NAME']  = $UserItem[0]['USR_NAME'];
    $data['USR_PASS']  = $UserItem[0]['USR_PASS'];
    $data['USR_ID']    = $UserItem[0]['USR_ID'];

    $data['formURL'] = 'users/edit/' . $UserID;
    $data['ButtonValue'] = 'Update User';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/adduser", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

    $userName = $this->input->post('userName');
    $userPass = $this->input->post('userPass');

      $this->Users_model->editUser($ID, $userName, $userPass);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $userName = $this->input->post('userName');
    $userPass = $this->input->post('userPass');

    $this->Users_model->insertUser($userName, $userPass);
    $this->home('', 'Insert Done');

  }

  public function delete($UserID){
    $this->Users_model->deleteUser($UserID);
    $this->home('', 'User Deleted');
  }
}
