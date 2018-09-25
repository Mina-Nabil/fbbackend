<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Exams extends CI_Controller{

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
      $data['ArrExams'] = $this->Exams_model->getExams();
    else {
      $data['ArrExams'] = $this->Exams_model->getExam_byCourses($CourseID);
    }

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/exams", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();

    $data['EXAM_ID'] = '';
    $data['EXAM_NAME'] = '';
    $data['EXAM_CRS_ID'] = '';
    $data['EXAM_DESC'] = '';

    $data['formURL'] = 'exams/insert';
    $data['ButtonValue'] = 'Add Exam';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/addexam", $data);
    $this->load->view("templates/footer");
  }

  public function update($ExamID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $ExamItem = $this->Exams_model->getExam_byID($ExamID);

    $data['EXAM_NAME']    = $ExamItem[0]['EXAM_NAME'];
    $data['EXAM_CRS_ID']  = $ExamItem[0]['EXAM_CRS_ID'];
    $data['EXAM_DESC']    = $ExamItem[0]['EXAM_DESC'];
    $data['EXAM_ID']      = $ExamItem[0]['EXAM_ID'];

    $data['formURL'] = 'exams/edit/' . $ExamID;
    $data['ButtonValue'] = 'Update Exam';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addexam", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

      $examName = $this->input->post('examName');
      $examDesc = $this->input->post('examDesc');
      $examCourse = $this->input->post('examCourse');

      $this->Exams_model->editExam($ID, $examName, $examCourse, $examDesc);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $examName = $this->input->post('examName');
    $examDesc = $this->input->post('examDesc');
    $examCourse = $this->input->post('examCourse');

    $this->Exams_model->insertExam($examName, $examCourse, $examDesc);
    $this->home('', 'Insert Done');

  }

  public function delete($ExamID){
    $this->Exams_model->deleteExam($ExamID);
    $this->home('', 'Exam Deleted');
  }
}
