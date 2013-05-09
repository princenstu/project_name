<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Controller {

public function index()
        {
            $data=array();
            $data['first_name'] = '';
            $data['last_name'] = '';
            $data['email_address'] = '';
            $data['address'] = '';
            $data['mob_number'] = '';
            $data['city'] = '';
            $data['country'] = '';
            $data['zip_code'] = '';
           
            $data['mainContent']=$this->load->view('registration',$data,true);
            $data['title']="Registration";
            $data['pic']= $this->load->view('pic4',$data,true);
            $this->load->view('home',$data);
        }

        public function saveData() {
    /*echo '<pre>';
            print_r($_POST);*/
        $this->load->library ( 'validation' );
        $rules ['first_name'] = "trim|required";
        $rules ['last_name'] = "trim|required";
        $rules ['email_address'] = "trim|required|valid_email";
        $rules ['password'] = "trim|required|min_length[6]|matches[confirm_password]";
        $rules ['confirm_password'] = "trim|required|min_length[6]";
       
        $rules ['address'] = "trim|required|max_length[200]";
        $rules['mob_number'] = "trim|required|min_length[14]";
        $rules ['city'] = "trim|required";
        $rules ['country'] = "trim|required";
        $rules['zip_code'] = "trim|required";
        
      
        $this->validation->set_rules ( $rules );
        $fields ['first_name'] = "First name";
        $fields ['last_name'] = "Last name";
       
        $fields ['email_address'] = "E-mail";
        
        $fields ['password'] = "Password";
        $fields ['confirm_password'] = "Confirm Password Mustbe Same as Password";
       
        $fields ['address'] = "Address";
        $fields['mob_number'] = "Mob number";
        $fields ['city'] = "City";
        $fields ['country'] = "User Country";
        $fields['zip_code'] = "Zip";
        
       
        $this->validation->set_fields ( $fields );
        $vdata['first_name'] = $this->input->post('first_name', true);
        $vdata['last_name'] = $this->input->post('last_name', true);
        
        $vdata['email_address'] = $this->input->post('email_address', true);
        
       
        $vdata['address'] = $this->input->post('address', true);
        $vdata['mob_number'] = $this->input->post('mob_number', true);
        $vdata['city'] = $this->input->post('city', true);
        $vdata['country'] = $this->input->post('country', true);
        $vdata['zip_code'] = $this->input->post('zip_code', true);
       
        

        $this->validation->set_error_delimiters ( '<div class="error">', '</div>' );
        if ($this->validation->run () == FALSE)
        {
            //echo '<pre>';
            //print_r($vdata);
            $_SESSION['exception']=$this->validation->error_string;
            $data['mainContent']=$this->load->view('registration',$vdata,true);
            $data['pic']= $this->load->view('pic4',$data,true);
            $this->load->view('home',$data);
        }
        else
        {

    $data=array();
    $this->load->helper ( 'security' );
    $data['first_name']=$this->input->post("first_name",true);
    $data['last_name']=$this->input->post("last_name",true);
    $data['email_address']=$this->input->post("email_address",true);
    $data['password']=$this->input->post("password",true);

    //echo '---'.$data['password'].'<br/>';
    $data ['password'] = do_hash ( $data['password'], 'md5' );
    //echo '---'.$data['password'].'<br/>';
    $data['address']=$this->input->post("address",true);
    $data['mob_number']=$this->input->post("mob_number",true);
    $data['city']=$this->input->post("city",true);
    $data['country']=$this->input->post("country",true);
    $data['zip_code']=$this->input->post("zip_code",true);
    $this->load->model('user_model');
    if (! $this->user_model->checkDuplicateEmail ( $this->input->post ( 'email_address', true ) ))
    {


    $this->user_model->saveUser($data);
    $this->load->model('mailer_model');

    $data['from_address'] = 'shafiul.alam@TstarNet.com';
    $data['admin_full_name'] = 'Shafiul Alam';
    $data['to_address'] = $data ['email_address'];
    $data['subject'] = 'Account Activition Successfull';
    $data['user_email_password']=$this->input->post ( 'password', true );

    $this->mailer_model->sendeEmail($data, 'activitionEmail');


    $_SESSION['message']='Data Successfully Saved! ';

    $this->index();
    }
    else
    {
            //echo "In else";exit();
            $_SESSION['exception'] = 'This user is already registered';
            $this->index();
    }
        }



  }

}