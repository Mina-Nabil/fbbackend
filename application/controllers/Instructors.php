<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructors extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function home( $MSGErr = '', $MSGOK = '')
  {
    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }


    $data['ArrInstructors'] = $this->Instructors_model->getInstructors();

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/instructors", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();

    $data['INST_ID'] = '';
    $data['INST_NAME'] = '';
    $data['INST_DESC'] = '';
    $data['INST_IMG'] = '';

    $data['formURL'] = 'instructors/insert';
    $data['ButtonValue'] = 'Add Instructor';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/addinstructor", $data);
    $this->load->view("templates/footer");
  }

  public function update($InstructorID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $InstructorItem = $this->Instructors_model->getInstructor_byID($InstructorID);

    $data['INST_NAME']    = $InstructorItem[0]['INST_NAME'];
    $data['INST_DESC']    = $InstructorItem[0]['INST_DESC'];
    $data['INST_IMG']    = $InstructorItem[0]['INST_IMG'];
    $data['INST_ID']      = $InstructorItem[0]['INST_ID'];

    $data['formURL'] = 'instructors/edit/' . $InstructorID;
    $data['ButtonValue'] = 'Update Instructor';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addinstructor", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

    $instructorIMG = '';

    if (!empty($_FILES['instructorIMG']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/instructors/";
      $config['allowed_types'] = 'jpg|png|jpeg';

      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('instructorIMG')){
        $error = $this->upload->display_errors();
        $this->update( $ID,  'Invalid File' . $error );
      } else {
          $imgData = $this->upload->data();
          $instructorIMG = $imgData['file_name'];
      }

    } else {
        $instructorIMG = $this->input->post('instructorOldIMG');
    }

      $instructorName = $this->input->post('instructorName');
      $instructorDesc = $this->input->post('instructorDesc');

      $this->Instructors_model->editInstructor($ID, $instructorName, $instructorDesc, $instructorIMG);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $instructorIMG = '';

    if (!empty($_FILES['instructorIMG']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/instructors/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('instructorIMG')){
        $error = $this->upload->display_errors();
        $this->add(   'Invalid File' . $error );
      } else {
          $imgData = $this->upload->data();
          $instructorIMG = $imgData['file_name'];
      }

    } else {
        $instructorIMG = $this->input->post('instructorOldIMG');
    }

    $instructorName = $this->input->post('instructorName');
    $instructorDesc = $this->input->post('instructorDesc');

    $this->Instructors_model->insertInstructor($instructorName, $instructorDesc, $instructorIMG);
    $this->home('', 'Insert Done');

  }

  public function delete($InstructorID){
    $this->Instructors_model->deleteInstructor($InstructorID);
    $this->home('', 'Instructor Deleted');
  }
}
