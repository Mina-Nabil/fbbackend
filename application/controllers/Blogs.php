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
    $data['BLOG_DESC'] = '';
    $data['BLOG_TITLE'] = '';
    $data['BLOG_IMGE'] = '';

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

    $BlogItem = $this->Blogs_model->getBlog_byID($BlogID);

    $data['BLOG_TITLE']    = $BlogItem[0]['BLOG_TITLE'];
    $data['BLOG_DESC']  = $BlogItem[0]['BLOG_DESC'];
    $data['BLOG_IMGE']  = $BlogItem[0]['BLOG_IMGE'];
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

      $blogTitle = $this->input->post('blogTitle');
      $blogDesc = $this->input->post('blogDesc');


          $blogImge = '';

          if (!empty($_FILES['blogImge']['name'])) {

            $config['upload_path']          = FCPATH . "uploads/blog/";
            $config['allowed_types'] = 'gif|jpg|png';
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('blogImge')){
              $error = $this->upload->display_errors();
              $this->update(  'Invalid File' . $error);
            } else {
                $imgData = $this->upload->data();
                $blogImge = $imgData['file_name'];
            }

          } else {
              $blogImge = $this->input->post('oldblogImge');
          }

      $this->Blogs_model->editBlog($blogTitle, $blogDesc, $blogImge, $ID);
      $this->home('', 'Edit Done');
    }


  public function insert(){

    $blogImge = '';

    if (!empty($_FILES['blogImge']['name'])) {

      $config['upload_path']          = FCPATH . "uploads/blog/";
      $config['allowed_types'] = 'gif|jpg|png';
      $this->upload->initialize($config);

      if ( ! $this->upload->do_upload('blogImge')){
        $error = $this->upload->display_errors();
        $this->update(  'Invalid File' . $error);
      } else {
          $imgData = $this->upload->data();
          $blogImge = $imgData['file_name'];
      }

    } else {
        $blogImge = $this->input->post('oldblogImge');
    }

    $blogTitle = $this->input->post('blogTitle');
    $blogDesc = $this->input->post('blogDesc');

    $this->Blogs_model->insertBlog($blogTitle, $blogDesc ,$blogImge );
    $this->home('', 'Insert Done');

  }

  public function delete($BlogID){
    $this->Blogs_model->deleteBlog($BlogID);
    $this->home('', 'Blog Deleted');
  }
}
