<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courses extends CI_Controller{

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

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/courses", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['CRS_ID'] = '';
    $data['CRS_NAME'] = '';
    $data['CRS_BRIEF'] = '';
    $data['CRS_OVERVIEW'] = '';
    $data['CRS_CERTIFICATE'] = '';
    $data['CRS_IMG'] = '';
    $data['CRS_DUR'] = '';
    $data['CRS_PRTY'] = '';

    $data['formURL'] = 'courses/insert';
    $data['ButtonValue'] = 'Add Course';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/addcourse", $data);
    $this->load->view("templates/footer");
  }

  public function update($CourseID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $CourseItem = $this->Courses_model->getCourse_byID($CourseID);

    $data['CRS_NAME'] = $CourseItem[0]['CRS_NAME'];
    $data['CRS_BRIEF'] = $CourseItem[0]['CRS_BRIEF'];
    $data['CRS_OVERVIEW'] = $CourseItem[0]['CRS_OVERVIEW'];
    $data['CRS_CERTIFICATE'] = $CourseItem[0]['CRS_CERTIFICATE'];
    $data['CRS_IMG'] = $CourseItem[0]['CRS_IMG'];
    $data['CRS_DUR'] = $CourseItem[0]['CRS_DUR'];
    $data['CRS_PRTY'] = $CourseItem[0]['CRS_PRTY'];
    $data['CRS_ID'] = $CourseItem[0]['CRS_ID'];

    $data['formURL'] = 'courses/edit/' . $CourseID;
    $data['ButtonValue'] = 'Update Course';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addcourse", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

    $courseIMG = '';

    if (!empty($_FILES['courseIMG']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/courses/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('courseIMG')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error );
      } else {
          $imgData = $this->upload->data();
          $courseIMG = $imgData['file_name'];
      }

    } else {
        $courseIMG = $this->input->post('courseOldIMG');
    }

      $courseName = $this->input->post('courseName');
      $courseBrief = $this->input->post('courseBrief');
      $coursePriorty = $this->input->post('coursePriorty');
      $courseOverview = $this->input->post('courseOverview');
      $courseDuration = $this->input->post('courseDuration');
      $courseCertificate = $this->input->post('courseCertificate');

      $this->Courses_model->editCourse($ID, $courseName, $courseBrief, $courseOverview, $courseCertificate, $courseIMG, $courseDuration, $coursePriorty);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $courseIMG = '';

    if (!empty($_FILES['courseIMG']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/courses/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('courseIMG')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error );
      } else {
          $imgData = $this->upload->data();
          $courseIMG = $imgData['file_name'];
      }

    } else {
        $courseIMG = $this->input->post('courseOldIMG');
    }

    $courseName = $this->input->post('courseName');
    $courseBrief = $this->input->post('courseBrief');
    $coursePriorty = $this->input->post('coursePriorty');
    $courseOverview = $this->input->post('courseOverview');
    $courseCertificate = $this->input->post('courseCertificate');
    $courseDuration = $this->input->post('courseDuration');

    $this->Courses_model->insertCourse($courseName, $courseBrief, $courseOverview, $courseCertificate, $courseIMG, $courseDuration, $coursePriorty);
    $this->home('', 'Insert Done');

  }

  public function delete($CourseID){
    $this->Courses_model->deleteCourse($CourseID);
    $this->home('', 'Course Deleted');
  }
}
