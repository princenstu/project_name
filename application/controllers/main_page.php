<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main_page extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
            $data=array();
            $data['mainContent']=$this->load->view('content',$data,true);
            $data['title']="Home";
			$data['pic']= $this->load->view('pic1',$data,true);
            $this->load->view('home',$data);
	}

        public function gallery()
        {
            $data=array();
            $data['mainContent']=$this->load->view('gallery',$data,true);
            $data['title']="Photo Gallery";
	    $data['pic']= $this->load->view('pic3',$data,true);
            $this->load->view('home',$data);
        }
		
		
		
		public function about()
        {
            $data=array();
            $data['mainContent']=$this->load->view('about_us',$data,true);
             $data['title']="About Us";
			 $data['pic']= $this->load->view('pic4',$data,true);
            $this->load->view('home',$data);
        }
		
		
		public function syl()
        {
            $data=array();
            $data['mainContent']=$this->load->view('syllabus_list',$data,true);
             $data['title']="Syllabus List";
			  $data['pic']= $this->load->view('pic2',$data,true);
            $this->load->view('home',$data);
        }
		
		
	
		public function one()
        {
            $data=array();
            $data['mainContent']=$this->load->view('1',$data,true);
             $data['title']="1st Semester";
			 $data['pic']= $this->load->view('pic5',$data,true);
            $this->load->view('home',$data);
        }


      public function two()
        {
            $data=array();
            $data['mainContent']=$this->load->view('2',$data,true);
            $data['title']="2nd Semester";
			$data['pic']= $this->load->view('pic4',$data,true);
            $this->load->view('home',$data);
        }

	
		
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */