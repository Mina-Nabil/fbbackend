<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogs extends CI_Controller{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function home($InstructorID = '', $MSGErr = '', $MSGOK = '')
  {
    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    if($InstructorID == '' )
      $data['ArrBlogs'] = $this->Blogs_model->getBlogs();
    else {
      $data['ArrBlogs'] = $this->Blogs_model->getBlog_byInstructor($InstructorID);
    }

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/blogheader', $header);
    $this->load->view("pages/blogs", $data);
    $this->load->view("templates/footer");
  }

  public function add($MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrInstructors'] = $this->Instructors_model->getInstructors();

    $data['BLOG_ID'] = '';
    $data['BLOG_TEXT'] = '';
    $data['BLOG_INST_ID'] = '';

    $data['formURL'] = 'blogs/insert';
    $data['ButtonValue'] = 'Add Blog';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;


    $this->load->view('templates/blogheader', $header);
    $this->load->view("pages/addblog", $data);
    $this->load->view("templates/footer");
  }

  public function update($BlogID, $MSGErr = '', $MSGOK = ''){

    $header['ArrURL'] = $this->Master_model->getHeaderArr();
    if(!$header['ArrURL'][0]){ // If not logged in
      $this->load->view("login_redirect");
      return;
    }

    $data['ArrInstructors'] = $this->Instructors_model->getInstructors();
    $BlogItem = $this->Blogs_model->getBlog_byID($BlogID);

    $data['BLOG_TEXT']    = $BlogItem[0]['BLOG_TEXT'];
    $data['BLOG_INST_ID']  = $BlogItem[0]['BLOG_INST_ID'];
    $data['BLOG_ID']      = $BlogItem[0]['BLOG_ID'];

    $data['formURL'] = 'blogs/edit/' . $BlogID;
    $data['ButtonValue'] = 'Update Blog';

    $data['MSGErr'] = $MSGErr;
    $data['MSGOK'] = $MSGOK;

    $this->load->view('templates/blogheader', $header);
    $this->load->view("pages/addblog", $data);
    $this->load->view("templates/footer");
  }

  public function edit($ID){

      $blogText = $this->input->post('blogText');
      $blogInstructor = $this->input->post('blogInstructor');

      $this->Blogs_model->editBlog($ID, $blogInstructor, $blogText);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $blogText = $this->input->post('blogText');
    $blogInstructor = $this->input->post('blogInstructor');

    $this->Blogs_model->insertBlog($blogInstructor, $blogText);
    $this->home('', 'Insert Done');

  }

  public function delete($BlogID){
    $this->Blogs_model->deleteBlog($BlogID);
    $this->home('', 'Blog Deleted');
  }
}
