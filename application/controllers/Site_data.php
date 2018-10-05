<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_data extends CI_Controller{

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

    $data['ArrSite_data'] = $this->Sitedata_model->getSite_data();
    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/site_data", $data);
    $this->load->view("templates/footer");
  }


  public function update( $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $Site_dataItem = $this->Sitedata_model->getSite_data();

    $data['STDT_STUDTNO']      = $Site_dataItem[0]['STDT_STUDTNO'];
    $data['STDT_INSTNO']     = $Site_dataItem[0]['STDT_INSTNO'];
    $data['STDT_CRSNO']   = $Site_dataItem[0]['STDT_CRSNO'];
    $data['STDT_INSTNO']   = $Site_dataItem[0]['STDT_INSTNO'];
    $data['STDT_HOME_BIGIMG']   = $Site_dataItem[0]['STDT_HOME_BIGIMG'];
    $data['STDT_HOME_MEDIMG1']   = $Site_dataItem[0]['STDT_HOME_MEDIMG1'];
    $data['STDT_HOME_MEDIMG2']   = $Site_dataItem[0]['STDT_HOME_MEDIMG2'];
    $data['STDT_HOME_MEDIMG3']   = $Site_dataItem[0]['STDT_HOME_MEDIMG3'];
    $data['STDT_HOME_SMLIMG1']  = $Site_dataItem[0]['STDT_HOME_SMLIMG1'];
    $data['STDT_HOME_SMLIMG2']  = $Site_dataItem[0]['STDT_HOME_SMLIMG2'];
    $data['STDT_HOME_SMLIMG3']  = $Site_dataItem[0]['STDT_HOME_SMLIMG3'];
    $data['STDT_HOME_SMLIMG4']  = $Site_dataItem[0]['STDT_HOME_SMLIMG4'];
    $data['STDT_HOME_SMLIMG5']  = $Site_dataItem[0]['STDT_HOME_SMLIMG5'];
    $data['STDT_HOME_SMLIMG6']  = $Site_dataItem[0]['STDT_HOME_SMLIMG6'];
    $data['STDT_HOME_SMLIMG7']  = $Site_dataItem[0]['STDT_HOME_SMLIMG7'];
    $data['STDT_HOME_SMLIMG8']  = $Site_dataItem[0]['STDT_HOME_SMLIMG8'];
    $data['STDT_HOME_SMLIMG9']  = $Site_dataItem[0]['STDT_HOME_SMLIMG9'];
    $data['STDT_ID']      = $Site_dataItem[0]['STDT_ID'];

    $data['formURL']      = 'Site_data/edit';
    $data['ButtonValue']  = 'Update Site Data';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addsite_data", $data);
    $this->load->view("templates/footer");
  }

  public function edit(){


///////////////////////////////////11111111111BIG111111111////////////////////////////////////////////////////////
    $bigIMG = '';

    if (!empty($_FILES['bigIMG']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('bigIMG')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error );
      } else {
          $imgData = $this->upload->data();
          $bigIMG = $imgData['file_name'];
      }

    } else {
        $bigIMG = $this->input->post('bigOldIMG');
    }
//////////////////////////////////////111111BIG11111///////////////////////////////////////////////////////

//////////////////////////////////////11111MED11111/////////////////////////////////////////////////////
    $medIMG1 = '';

    if (!empty($_FILES['medIMG1']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('medIMG1')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $medIMG1 = $imgData['file_name'];
      }

    } else {
        $medIMG1 = $this->input->post('medOldIMG1');
    }
//////////////////////////////////////////11111MED11111/////////////////////////////////////////////////

/////////////////////////////////////////2222MED222222///////////////////////////////////////////////////
    $medIMG2 = '';

    if (!empty($_FILES['medIMG2']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('medIMG2')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $medIMG2 = $imgData['file_name'];
      }

    } else {
        $medIMG2 = $this->input->post('medOldIMG2');
    }
//////////////////////////////////////22222MED22222///////////////////////////////////////////////////

//////////////////////////////////////33333MED3333//////////////////////////////////////////////////////
    $medIMG3 = '';

    if (!empty($_FILES['medIMG3']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('medIMG3')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $medIMG3 = $imgData['file_name'];
      }

    } else {
        $medIMG3 = $this->input->post('medOldIMG3');
    }
////////////////////////////////////////33333MED333333////////////////////////////////////////////////////

///////////////////////////////////////11111111SMALL11111111111111111115////////////////////////////
    $smlIMG1 = '';

    if (!empty($_FILES['smlIMG1']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG1')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG1 = $imgData['file_name'];
      }

    } else {
        $smlIMG1 = $this->input->post('smlOldIMG1');
    }
//511111111111111111111111111111111111SMALL5111111111111111111111111111111111111111111

///22222222222222222222222222SMALL222222222222222222SMALL2222222222222222222222222/
    $smlIMG2 = '';

    if (!empty($_FILES['smlIMG2']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG2')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG2 = $imgData['file_name'];
      }

    } else {
        $smlIMG2 = $this->input->post('smlOldIMG2');
    }
///22222222222222222222SMALL2222222222222222SMALL22222222222222222222222222222222222222////

///3333333333333333333333333333SMALL3///33333333333333333333333333333333333/////////////////
    $smlIMG3 = '';

    if (!empty($_FILES['smlIMG3']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG3')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG3 = $imgData['file_name'];
      }

    } else {
        $smlIMG3 = $this->input->post('smlOldIMG3');
    }
////3333333333333333333333333333SMALL3///33333333333333333333333333333333333///////////////////////////

////444444444444444444444SMALL4444444444444444444444444444444444SMALL44444444////////////////////////
    $smlIMG4 = '';

    if (!empty($_FILES['smlIMG4']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG4')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG4 = $imgData['file_name'];
      }

    } else {
        $smlIMG4 = $this->input->post('smlOldIMG4');
    }
////444444444444444444444SMALL4444444444444444444444444444444444SMALL44444444//////////////////

/////55555555555555555555SMALL55555555555555555555555555555SMALL55555555555555555555///////////
    $smlIMG5 = '';

    if (!empty($_FILES['smlIMG5']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG5')){
        $error = $this->upload->display_errors();
        $this->update(   'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG5 = $imgData['file_name'];
      }

    } else {
        $smlIMG5 = $this->input->post('smlOldIMG5');
    }
///////55555555555555555555SMALL55555555555555555555555555555SMALL55555555555555555555////////////

//////6666666666666666666666SMALL66666666666666666666SMALLL6666666666666666/////////////////
    $smlIMG6 = '';

    if (!empty($_FILES['smlIMG6']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG6')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG6 = $imgData['file_name'];
      }

    } else {
        $smlIMG6 = $this->input->post('smlOldIMG6');
    }
//////6666666666666666666666SMALL66666666666666666666SMALLL6666666666666666/////////////////////

//////7777777777777777SMALL7777777777777777777777777777777777777SMALL7777777777777////////////////
    $smlIMG7 = '';

    if (!empty($_FILES['smlIMG7']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG7')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG7 = $imgData['file_name'];
      }

    } else {
        $smlIMG7 = $this->input->post('smlOldIMG7');
    }
///////7777777777777777SMALL7777777777777777777777777777777777777SMALL7777777777777//////////

///////888888888888888888888SMALL88888888888888888888888SMALL888888888888888888///////////////
    $smlIMG8 = '';

    if (!empty($_FILES['smlIMG8']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG8')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG8 = $imgData['file_name'];
      }

    } else {
        $smlIMG8 = $this->input->post('smlOldIMG8');
    }
///////888888888888888888888SMALL88888888888888888888888SMALL888888888888888888//////////////

//////9999999999999999999999999SMALL99999999999999999999////////////999999999999
    $smlIMG9 = '';

    if (!empty($_FILES['smlIMG9']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/home/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('smlIMG9')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $smlIMG9 = $imgData['file_name'];
      }

    } else {
        $smlIMG9 = $this->input->post('smlOldIMG9');
    }
///////9999999999999999999999999SMALL99999999999999999999////////////999999999999/////////



    $Site_dataStdNo = $this->input->post('site_dataNOofStudents');
    $Site_dataCrsNo = $this->input->post('site_dataNOofCourses');
    $Site_dataInstNo = $this->input->post('site_dataNOofInstructors');



    $this->Sitedata_model->editSite_data(1, $Site_dataStdNo, $Site_dataInstNo, $Site_dataCrsNo,
    $bigIMG, $medIMG1, $medIMG2, $medIMG3,
    $smlIMG1, $smlIMG2, $smlIMG3, $smlIMG4, $smlIMG5, $smlIMG6, $smlIMG7, $smlIMG8, $smlIMG9);
    $this->home('', 'Edit Done');

    }



}
