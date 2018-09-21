<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller{

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

    $data['ArrContactus'] = $this->Contactus_model->getContactus();
    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/contactus", $data);
    $this->load->view("templates/footer");
  }


  public function update( $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $ContactusItem = $this->Contactus_model->getContactus();

    $data['CNTC_FB']      = $ContactusItem[0]['CNTC_FB'];
    $data['CNTC_MOB']     = $ContactusItem[0]['CNTC_MOB'];
    $data['CNTC_EMAIL']   = $ContactusItem[0]['CNTC_EMAIL'];
    $data['CNTC_INSTA']   = $ContactusItem[0]['CNTC_INSTA'];
    $data['CNTC_FROM']   = $ContactusItem[0]['CNTC_FROM'];
    $data['CNTC_TO']   = $ContactusItem[0]['CNTC_TO'];
    $data['CNTC_HOTLINE']  = $ContactusItem[0]['CNTC_HOTLINE'];
    $data['CNTC_ARBC_ABTUS']  = $ContactusItem[0]['CNTC_ARBC_ABTUS'];
    $data['CNTC_ABTUS']  = $ContactusItem[0]['CNTC_ABTUS'];
    $data['CNTC_ID']      = $ContactusItem[0]['CNTC_ID'];

    $data['formURL']      = 'Contactus/edit';
    $data['ButtonValue']  = 'Update Contactus';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addcontactus", $data);
    $this->load->view("templates/footer");
  }

  public function edit(){

    $ContactusIMG = '';

    $ContactusFB = $this->input->post('contactusFB');
    $ContactusHotline = $this->input->post('contactusHotline');
    $ContactusInsta = $this->input->post('contactusInsta');
    $ContactusMob = $this->input->post('contactusMob');
    $ContactusEmail = $this->input->post('contactusEmail');
    $ContactusAbtUs = $this->input->post('contactusAboutUS');
    $ContactusArbcAbtUs = $this->input->post('contactusArbcAboutUS');
    $ContactusFrom = $this->input->post('contactusFROM');
    $ContactusTo = $this->input->post('contactusTO');


    $this->Contactus_model->editContactus(1, $ContactusFB, $ContactusMob, $ContactusEmail,
    $ContactusInsta, $ContactusHotline, $ContactusAbtUs, $ContactusArbcAbtUs,$ContactusFrom, $ContactusTo);
    $this->home('', 'Edit Done');

    }



}
