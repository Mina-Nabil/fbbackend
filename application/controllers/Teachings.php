<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teachings extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function home($CourseID = '', $MSGErr = '', $MSGOK = '')
  {
    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    if($CourseID == '' )
      $data['ArrTeachings'] = $this->Teachings_model->getTeachings();
    else {
      $data['ArrTeachings'] = $this->Teachings_model->getTeaching_byCourse($CourseID);
    }

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/teachings", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $data['ArrInstructors'] = $this->Instructors_model->getInstructors();

    $data['TECH_ID'] = '';
    $data['TECH_INST_ID'] = '';
    $data['TECH_CRS_ID'] = '';

    $data['formURL'] = 'teachings/insert';
    $data['ButtonValue'] = 'Add Teaching';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/addteaching", $data);
    $this->load->view("templates/footer");
  }

  public function update($TeachingID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $data['ArrInstructors'] = $this->Instructors_model->getInstructors();
    $TeachingItem = $this->Teachings_model->getTeaching_byID($TeachingID);


    $data['TECH_CRS_ID']  = $TeachingItem[0]['TECH_CRS_ID'];
    $data['TECH_INST_ID']    = $TeachingItem[0]['TECH_DESC'];
    $data['TECH_ID']      = $TeachingItem[0]['TECH_ID'];

    $data['formURL'] = 'teachings/edit/' . $TeachingID;
    $data['ButtonValue'] = 'Update Teaching';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addteaching", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

      $teachingInstID = $this->input->post('teachingInst');
      $teachingCrsID = $this->input->post('teachingCrs');

      $this->Teachings_model->editTeaching($ID, $teachingCrsID, $teachingInstID);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $teachingInstID = $this->input->post('teachingInst');
    $teachingCrsID = $this->input->post('teachingCrs');

    $this->Teachings_model->insertTeaching($teachingCrsID, $teachingInstID);
    $this->home('', 'Insert Done');

  }

  public function delete($TeachingID){
    $this->Teachings_model->deleteTeaching($TeachingID);
    $this->home('', 'Teaching Deleted');
  }
}
