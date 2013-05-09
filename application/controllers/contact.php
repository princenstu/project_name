<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {


   public function index()
        {
            $data=array();
            $this->load->model('contact_model');
            $user_id= $this->session->userdata('user_id');
            $data['result'] =$this->contact_model->selectContact($user_id);
            $data['mainContent'] = $this->load->view('view_contact',$data,true);
            $this->load->view('home',$data);
            //echo '<pre>';
            //print_r($result);
            //exit();

        }

    public function add_contact()
    {
    $data=array();
    $data['mainContent']= $this->load->view('add_contact', $data, true);
    $data['title']= "Add Contact-info";
    $this->load->view('home', $data);
    }

    public function save_contact()
      {
      /* echo '<pre>';
      print_r($_POST);
      exit(); */
        $data=array();
        $data['user_id']=$this->session->userdata('user_id');
        $data['contact_name']=$this->input->post("contact_name", true);
        $data['contact_org']=$this->input->post("contact_org", true);
        $data['contact_email']=$this->input->post("contact_email", true);
        $data['contact_fid']=$this->input->post("contact_fid", true);
        $data['contact_phone']=$this->input->post("contact_phone", true);

        $this->load->model('contact_model');
        $this->contact_model->saveContact($data);
        $_SESSION['message']='Save Data Successfully! ';
        $this->add_contact();
        }

       public function searchContact()
        {
            $data=array();
            $this->load->model('contact_model');
            $user_id= $this->session->userdata('user_id');
            $search_text=$this->input->post('search_text',true);
            //echo '---'.$search_text;
            //exit();
            $data['result'] =$this->contact_model->searchContact($user_id,$search_text);
            $data['mainContent'] = $this->load->view('view_contact',$data,true);
            $this->load->view('home',$data);
        }
        function editContact($contact_id)
        {
            $this->load->model('contact_model');
            $data['row'] = $this->contact_model->selectContactById($contact_id);

            $data['mainContent'] = $this->load->view('edit_contact',$data,true);
            $this->load->view('home',$data);
        }
        public function updateContact()
        {
           //echo '<pre>';
          //print_r($_POST);
           //exit();
            $this->load->model('contact_model');
            $data['user_id'] = $this->session->userdata('user_id');
            $contact_id = $this->input->post('contact_id',true);
            $data['contact_id'] = $this->input->post('contact_id',true);
            $data['contact_name'] = $this->input->post('contact_name',true);
            $data['contact_org'] = $this->input->post('contact_org',true);
            $data['contact_email'] = $this->input->post('contact_email',true);
            $data['contact_fid'] = $this->input->post('contact_fid',true);
            $data['contact_phone'] = $this->input->post('contact_phone',true);
            $this->contact_model->editContact($data);
            $_SESSION['message'] ='Update Successfully';
            $this->index();

        }
        function deleteContact($contact_id)
	{

        $data= array();

        $this->load->model('contact_model');
        $this->contact_model->deleteContact($contact_id);
        $this->index();
        /*$user_id= $this->session->userdata('user_id');
        $data['result'] =$this->loginModel->selectContact($user_id);
        $data['main_content'] = $this->load->view('view_contact',$data,true);
        $this->load->view('home',$data);*/

	}

}
?>