<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slides extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function home( $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data = $this->Slides_model->getSlides()[0];


    $data['formURL']      = 'Slides/edit';
    $data['ButtonValue']  = 'Update Slides';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/slides", $data);
    $this->load->view("templates/footer");
  }

  public function edit(){

    $SlidesIMG1 = '';

    if (!empty($_FILES['slideIMG1']['name'])) {

      $config['upload_path']          = FCPATH . "../financialbrains/images/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('slideIMG1')){

        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $SlidesIMG1 = $imgData['file_name'];
          $oldImage = $this->input->post('oldslideIMG1');
          if(isset($oldImage))
          unlink( FCPATH . "../financialbrains/images/".$oldImage);
      }

    } else {
        $SlidesIMG1 = $this->input->post('oldslideIMG1');
    }


    $SlidesIMG2 = '';

    if (!empty($_FILES['slideIMG2']['name'])) {

      $config['upload_path']          = FCPATH . "../financialbrains/images/";;
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('slideIMG2')){

        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $SlidesIMG2 = $imgData['file_name'];
          $oldImage = $this->input->post('oldslideIMG2');
            if(isset($oldImage))
          unlink(FCPATH . "../financialbrains/images/".$oldImage);
      }

    } else {
        $SlidesIMG2 = $this->input->post('oldslideIMG2');
    }


    $SlidesIMG3 = '';

    if (!empty($_FILES['slideIMG3']['name'])) {

      $config['upload_path']          =FCPATH . "../financialbrains/images/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('slideIMG3')){

        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $SlidesIMG3 = $imgData['file_name'];
          $oldImage = $this->input->post('oldslideIMG3');
          unlink( FCPATH . "../financialbrains/images/".$oldImage);
      }

    } else {
        $SlidesIMG3 = $this->input->post('oldslideIMG3');
    }


    $SlidesIMG4 = '';

    if (!empty($_FILES['slideIMG4']['name'])) {

      $config['upload_path']          = FCPATH . "../financialbrains/images/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('slideIMG4')){

        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $SlidesIMG4 = $imgData['file_name'];
          $oldImage = $this->input->post('oldslideIMG4');
          unlink(FCPATH . "../financialbrains/images/" . $oldImage);
      }

    } else {
        $SlidesIMG4 = $this->input->post('oldslideIMG4');
    }

    $SlidesIMG5 = '';

    if (!empty($_FILES['slideIMG5']['name'])) {

      $config['upload_path']          = FCPATH . "../financialbrains/images/";
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('slideIMG5')){

        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $SlidesIMG5 = $imgData['file_name'];
          $oldImage = $this->input->post('oldslideIMG5');
          unlink( FCPATH . "../financialbrains/images/".$oldImage);
      }

    } else {
        $SlidesIMG5 = $this->input->post('oldslideIMG5');
    }


    $slidetitle1 = $this->input->post('slide1Title');
    $slidetitle2 = $this->input->post('slide2Title');
    $slidetitle3 = $this->input->post('slide3Title');
    $slidetitle4 = $this->input->post('slide4Title');
    $slidetitle5 = $this->input->post('slide5Title');

    $slidedesc1 = $this->input->post('slide1Desc');
    $slidedesc2 = $this->input->post('slide2Desc');
    $slidedesc3 = $this->input->post('slide3Desc');
    $slidedesc4 = $this->input->post('slide4Desc');
    $slidedesc5 = $this->input->post('slide5Desc');


    $this->Slides_model->editSlides(1, $slidetitle1, $slidetitle2, $slidetitle3, $slidetitle4, $slidetitle5, $slidedesc1, $slidedesc2, $slidedesc3, $slidedesc4, $slidedesc5, $SlidesIMG1, $SlidesIMG2, $SlidesIMG3, $SlidesIMG4, $SlidesIMG5);




    $this->home('', 'Edit Done');

    }



}
