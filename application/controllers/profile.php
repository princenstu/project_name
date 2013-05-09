<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends CI_Controller {
    public function index()
        {
            $data=array();
            $user_id=$this->session->userdata('user_id');
            $this->load->model('user_model');
            $data['result']=$this->user_model->selectUserByUserId($user_id);

            //echo '<pre>';
            //print_r($data['result']);
            $data['mainContent'] = $this->load->view('profile',$data,true);
            $data['title'] = 'Profile';
            //$data['']
            $this->load->view('home',$data);

        }
        public function viewEditProfile()
        {
            $data=array();
            $user_id=$this->session->userdata('user_id');
            $this->load->model('user_model');
            $data['result']=$this->user_model->selectUserByUserId($user_id);

            //echo '<pre>';
            //print_r($data['result']);
            $data['mainContent'] = $this->load->view('edit_profile',$data,true);
            $data['title'] = 'Profile';
            //$data['']
            $this->load->view('home',$data);
        }

        public function editProfile()
        {
            //echo '<pre>';
            //print_r($_POST);
            //print_r($_FILES);
            //exit();

            $data=array();
            $data['user_id']=$this->session->userdata('user_id');
            $data['first_name']=$this->input->post("first_name",true);
            $data['last_name']=$this->input->post("last_name",true);
            $data['email_address']=$this->input->post("email_address",true);
            $data['address']=$this->input->post("address",true);
            $data['mob_number']=$this->input->post("mob_number",true);
            $data['city']=$this->input->post("city",true);
            $data['country']=$this->input->post("country",true);
            $data['zip_code']=$this->input->post("zip_code",true);
            $data['profile_picture']='images/Profile_image/logo.jpg';
            //$user_id=$this->session->userdata('user_id');
            $this->load->model('user_model');
            $data['result']=$this->user_model->selectUserByUserId($data['user_id']);
             $errors='';
            if ($_FILES['profile_picture']['name'] && $_FILES['profile_picture']['size'])
		{
			$result = $this->imageUpload('profile_picture');
			if ($result)
			{
				if ($result['file_name'])
				{
					$data['profile_picture'] = $result['file_name'];
					if ($data['result']->profile_picture)
					{
						unlink($data['result']->profile_picture);
					}
				} else
				{
					$errors = $result['error'];
				}
			}
		}

		if ($errors)
		{
			$_SESSION['exception'] = strip_tags($errors); //"Image size too large";

			$data['mainContent'] = $this->load->view('edit_profile', $data, true);
			$data['homeTitle'] = 'Edit User';
			$this->load->view('home', $data);
			return;
		}


            $this->load->model('user_model');
            $this->user_model->updateUser($data);
            $_SESSION['message']='Update Data Sucessfully';
            $this->index();
        }

        /**
	 * for image upload
	 *
	 * @param unknown_type $fieldName
	 * @return unknown
	 */
	function imageUpload ($fieldName)
	{
		$config['upload_path'] = 'images/Profile_image/';
		$config['allowed_types'] = 'gif|jpg|png|bmp|tif';
		$config['max_size'] = '15';
		$config['max_width'] = '';
		$config['max_height'] = '';
		$this->load->library('upload', $config);
		if ($this->upload->do_upload($fieldName))
		{
			$data = $this->upload->data();
			$fileName = $config['upload_path'] . $data['file_name'];
			$return = array('file_name' => $fileName , 'error' => '');
			return $return;
		} else
		{
			$err = '';
			//removing the error as image upload is not required
			if ($this->upload->display_errors() != 'You did not select a file to upload')
			{
				$err = $this->upload->display_errors();
			}
			$return = array('file_name' => '' , 'error' => $err);
			return $return;
		}
	}
}
