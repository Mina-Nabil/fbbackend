<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Candidates extends CI_Controller{

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
      $data['ArrCandidates'] = $this->Candidates_model->getCandidates();
    else {
      $data['ArrCandidates'] = $this->Candidates_model->getCandidate_byCourse($CourseID);
    }

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/candidates", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();

    $data['CNDT_ID'] = '';
    $data['CNDT_NAME'] = '';
    $data['CNDT_CRS_ID'] = '';

    $data['formURL'] = 'candidates/insert';
    $data['ButtonValue'] = 'Add Candidate';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/addcandidate", $data);
    $this->load->view("templates/footer");
  }

  public function update($CandidateID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $CandidateItem = $this->Candidates_model->getCandidate_byID($CandidateID);

    $data['CNDT_NAME']    = $CandidateItem[0]['CNDT_NAME'];
    $data['CNDT_CRS_ID']  = $CandidateItem[0]['CNDT_CRS_ID'];
    $data['CNDT_ID']      = $CandidateItem[0]['CNDT_ID'];

    $data['formURL'] = 'candidates/edit/' . $CandidateID;
    $data['ButtonValue'] = 'Update Candidate';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addcandidate", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

      $candidateName = $this->input->post('candidateName');
      $candidateCourse = $this->input->post('candidateCourse');

      $this->Candidates_model->editCandidate($ID, $candidateName, $candidateCourse);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $candidateName = $this->input->post('candidateName');
    $candidateCourse = $this->input->post('candidateCourse');

    $this->Candidates_model->insertCandidate($candidateName, $candidateCourse);
    $this->home('', 'Insert Done');

  }

  public function delete($CandidateID){
    $this->Candidates_model->deleteCandidate($CandidateID);
    $this->home('', 'Candidate Deleted');
  }
}
