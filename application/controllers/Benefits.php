<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Benefits extends CI_Controller{

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
      $data['ArrBenefits'] = $this->Benefits_model->getBenefits();
    else {
      $data['ArrBenefits'] = $this->Benefits_model->getBenefit_byCourse($CourseID);
    }

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/benefits", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();

    $data['BNFT_ID'] = '';
    $data['BNFT_NAME'] = '';
    $data['BNFT_CRS_ID'] = '';
    $data['BNFT_DESC'] = '';

    $data['formURL'] = 'benefits/insert';
    $data['ButtonValue'] = 'Add Benefit';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/addbenefit", $data);
    $this->load->view("templates/footer");
  }

  public function update($BenefitID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $BenefitItem = $this->Benefits_model->getBenefit_byID($BenefitID);

    $data['BNFT_NAME']    = $BenefitItem[0]['BNFT_NAME'];
    $data['BNFT_CRS_ID']  = $BenefitItem[0]['BNFT_CRS_ID'];
    $data['BNFT_DESC']    = $BenefitItem[0]['BNFT_DESC'];
    $data['BNFT_ID']      = $BenefitItem[0]['BNFT_ID'];

    $data['formURL'] = 'benefits/edit/' . $BenefitID;
    $data['ButtonValue'] = 'Update Benefit';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addbenefit", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

      $benefitName = $this->input->post('benefitName');
      $benefitDesc = $this->input->post('benefitDesc');
      $benefitCourse = $this->input->post('benefitCourse');

      $this->Benefits_model->editBenefit($ID, $benefitName, $benefitCourse, $benefitDesc);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $benefitName = $this->input->post('benefitName');
    $benefitDesc = $this->input->post('benefitDesc');
    $benefitCourse = $this->input->post('benefitCourse');

    $this->Benefits_model->insertBenefit($benefitName, $benefitCourse, $benefitDesc);
    $this->home('', 'Insert Done');

  }

  public function delete($BenefitID){
    $this->Benefits_model->deleteBenefit($BenefitID);
    $this->home('', 'Benefit Deleted');
  }
}
