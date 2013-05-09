<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


public function index()
        {
            $data=array();
            $data['mainContent']=$this->load->view('admin',$data,true);
            $data['title']="Admin";
            $data['pic']= $this->load->view('pic5',$data,true);
            $this->load->view('home',$data);
        }



function loginCheck ()
	{

            //$user_id=$this->session->userdata('user_id');
            $email_address = $this->input->post('email_address', true);
            $password = $this->input->post('password', true);
            $this->load->model('login_model');
            $result = $this->login_model->loginCheck($email_address,$password);
            //echo '<pre>';
            //print_r($result);
           // exit();

            if ($result)
            {
                    $data= array();
                    //$_SESSION['user_id'] = $result->user_id;

                    $sessionData = array(
                   'user_id'  =>  $result->user_id,
                   'logged_in' => TRUE
               );
                   /* OR

                     $sessionData=array();
                     $sessionData['user_id']=$result->user_id;
                     $sessionData['logged_in']= TRUE;*/


                    $this->session->set_userdata($sessionData);
                    $data['first_name']= $result->first_name;
                    $data['last_name']= $result->last_name;
                    $data['mainContent'] = $this->load->view('welcome',$data,true);
                    //$data['homeTitle'] = 'Welcome';
                    //$data['']
                    $this->load->view('home',$data);
            }
            else
            {
                $_SESSION['exception'] = 'User Id Or Password Invalide';
                $this->index();

            }



	}

        function logout()
	{
		$this->session->unset_userdata('user_id','logged_in');
		$_SESSION['message'] = 'You are successfully logged out.';
		//redirect('login_controller/showLogin');
                $this->index();
	}

}
?>