<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topics extends CI_Controller{

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
      $data['ArrTopics'] = $this->Topics_model->getTopics();
    else {
      $data['ArrTopics'] = $this->Topics_model->getTopic_byCourse($CourseID);
    }

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/topics", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();

    $data['TOPC_ID'] = '';
    $data['TOPC_NAME'] = '';
    $data['TOPC_CRS_ID'] = '';
    $data['TOPC_DESC'] = '';

    $data['formURL'] = 'topics/insert';
    $data['ButtonValue'] = 'Add Topic';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/header', $header);
    $this->load->view("pages/addtopic", $data);
    $this->load->view("templates/footer");
  }

  public function update($TopicID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrCourses'] = $this->Courses_model->getCourses();
    $TopicItem = $this->Topics_model->getTopic_byID($TopicID);

    $data['TOPC_NAME']    = $TopicItem[0]['TOPC_NAME'];
    $data['TOPC_CRS_ID']  = $TopicItem[0]['TOPC_CRS_ID'];
    $data['TOPC_DESC']    = $TopicItem[0]['TOPC_DESC'];
    $data['TOPC_ID']      = $TopicItem[0]['TOPC_ID'];

    $data['formURL'] = 'topics/edit/' . $TopicID;
    $data['ButtonValue'] = 'Update Topic';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/header', $header);
    $this->load->view("pages/addtopic", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

      $topicName = $this->input->post('topicName');
      $topicDesc = $this->input->post('topicDesc');
      $topicCourse = $this->input->post('topicCourse');

      $this->Topics_model->editTopic($ID, $topicName, $topicCourse, $topicDesc);
      $this->home('', '', 'Edit Done');
    }


  public function insert(){

    $topicName = $this->input->post('topicName');
    $topicDesc = $this->input->post('topicDesc');
    $topicCourse = $this->input->post('topicCourse');

    $this->Topics_model->insertTopic($topicName, $topicCourse, $topicDesc);
    $this->home('', '', 'Insert Done');

  }

  public function delete($TopicID){
    $this->Topics_model->deleteTopic($TopicID);
    $this->home('', '', 'Topic Deleted');
  }
}
