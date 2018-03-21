<?php

/** @property services_model $services_model *
 */
class Services extends Front_end
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('services_model');
        $this->load->library('form_validation');

    }


    // this function will redirect to book service page
    function index()
    {
		$this->view('explore/index');
        
    }
	
	// this function will redirect login page
	function directlogin()
	{
		
		$this->view('admin/login');
		
	}

    // this function to load service book page
    function book_service()
    {
        $this->load->view('theme/header');
        $this->view('content/book_service');

    }
	
	// this function will redirect to login page
	function map()
	
	{
		if (!$this->session->userdata('log'))
		{
			
		 redirect('services/index');
		}
		
		$this->book_service();
		
		
		
    
	}
	
	// this function will redirect to package 1 page
	function packages()
	{
		
		$this->view('explore/packagestourist');
		
	}
	
	// this function will redirect to about us page
	function aboutus()
	{
		
		$this->view('explore/aboutus');
		
	}
	
	// this function will redirect to contact us page
	function contactus()
	{
		
		$this->view('explore/contact');
		
	}
	
	//this function will redirect to signup page
	function signup()
	{
		
		$this->view('admin/signup');
		
	}
	
	//this function will redirect to reset password page
	function passreset()
	{
		
		$this->view('admin/reset');
		
	}
	
	//this function will redirect to guide login page
	function guidelogin()
	{
	
    	$this->view('guide/login');
		
	}
	
	//this function will redirect to guide signup page
	function guidesignup()
	{
		$this->view('guide/register');
		
	}
	
	//this function will redirect to guide reset password page
	function guidereset()
	{
		
		$this->view('guide/forgot-password');
		
	}
	
	//this function will redirect to guide index page
	function guideindex()
	{
		$email = $this->session->userdata('log');
		$sql = "SELECT r.request_id,r.name as 'request name',r.phone,re.fullname as 'Rec name' from requests r, ci_providers re WHERE re.user_id = r.reciever_id and re.email = '".$email."'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
     	$data = array(
			'result' => $result
		);
		$this->view('guide/index',$data);
        		
		
	}
	
	//this function will redirect to guide requests page
	function guideindexrequest()
	{
		
		$email = $this->session->userdata('log');
		$sql = "SELECT r.request_id,r.name as 'request name',r.phone,re.fullname as 'Rec name' from requests r, ci_providers re WHERE re.user_id = r.reciever_id and re.email = '".$email."'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
     	$data = array(
			'result' => $result
		);
		$this->view('guide/index',$data);
	
	}
	
	
    // this function receive ajax request and return closest providers
    function closest_locations(){

        $location =json_decode( preg_replace('/\\\"/',"\"",$_POST['data']));
        $lan=$location->longitude;
        $lat=$location->latitude;
        $ServiceId=$location->ServiceId;
        $base = base_url('services/request_guide');
        $providers= $this->services_model->get_closest_locations($lan,$lat,$ServiceId);
        $indexed_providers = array_map('array_values', $providers);
    
	// this loop will change retrieved results to add links in the info window for the provider
        $x = 0;
        foreach($indexed_providers as $arrays => &$array){
            foreach($array as $key => &$value){
                if($key === 1){
                    $pieces = explode(",", $value);
                    $value = "$pieces[1]<a href='$base/$pieces[0]'>Request Guide</a>";
                }

                $x++;
            }
        }
        echo json_encode($indexed_providers,JSON_UNESCAPED_UNICODE);

    }

    function order_service_two()
    {
        $this->form_validation->set_rules('lat', 'lat', 'trim|required');
        $this->form_validation->set_rules('lng', 'lng', 'trim|required');
        $this->form_validation->set_rules('RequestAddress', 'RequestAddress', 'trim|required');

        if ($this->form_validation->run($this) == FALSE) {
            $data['error'] = validation_errors('
        <div class="alert alert-danger notices errorimg alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert">
         <span aria-hidden="true">×</span><span class="sr-only">Close</span></button>', '</div> ');
            $this->view('content/order_service_two', $data);
        } else {
            print_r($this->input->post());

        }
    }
    function insert_data()
	{
		$data = array(
        'name' => $this->input->post('name'),
        'email' => $this->input->post('email'),
        'phone' => $this->input->post('phone'),
        'address' => $this->input->post('address'),
		'password' => $this->input->post('password'),
		'username' => $this->input->post('username')
        );
        //Transfering data to Model
        $this->db->insert("users",$data);
        $data['message'] = 'Data Inserted Successfully';
	}
	
	//function insert_data_guide()
	function insert_data_guide()
	{
		$data = array(
	    'fullname' => $this->input->post('fullname'),
        'email' => $this->input->post('email'),
        'number' => $this->input->post('number'),
        'lng' => (float)$this->input->post('lng'),
		'lat' => (float)$this->input->post('lat'),
		'password' => $this->input->post('password'),
		'service_id' => $this->input->post('Service_type')
        );
        //Transfering data to Model
        $this->db->insert("ci_providers",$data);
        $data['message'] = 'Data Inserted Successfully';
	}
	
	//fatching data for login and generating session
	function read_data()
	{
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$this->db->from('users');
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$res=$this->db->get()->result();
		
		if(count($res)>0)
		{
		  $session_data= $email;
		  
		  $this->session->set_userdata('log',$session_data);
		  
		  redirect("services/map");	
		}
		else
		{
			echo "SORRY";
		}	
	}
	
	
	
	
	
	//fatching data for guide login and generating session
	function read_data_guide()
	{
		
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		$this->db->from('ci_providers');
	    $this->db->where('email',$email);
		$this->db->where('password',$password);
		$res=$this->db->get()->result();
		
		
		if(count($res)>0)
		
		{
		  $session_data= $email;
		  $user_id=$res[0]->user_id;
		  $this->session->set_userdata('log',$session_data);
		  redirect("services/guideindex");
          
		}
			else
		{
			echo "SORRY";
		}
	}
	
	// destroying session for logout
	function close_session()
    {  
     $this->session->sess_destroy();
     	 
	 redirect ("services/index");	 
    }
	
	//destroy session for guide dashboard
	function close_session_guide()
    {
		
     $this->session->sess_destroy();
     	 
	 redirect ("services/guidelogin");	 
    }
	
	function request_guide($id)
	{ 
	
	    $email=$this->session->userdata('log');
		
		$this->db->where('email',$email);
		$this->db->from('users');
		$res=$this->db->get()->result();
		
		$name=$res[0]->name;
		$email_id=$res[0]->email;
        $number_id=$res[0]->phone;
        $service_id=$res[0]->phone;
		
		$data = array(
        'name' => $name,
        'email' => $email_id,
        'phone' => $number_id,
		'reciever_id'=>$id,
		'service_id'=>$service_id
		 );
		
		$this->db->insert('requests',$data);
        echo "Your request has been sent and the guide will contact you as soon as possible.";
		
	}
	
	
	
}
/* End of file news.php */
/* Location: ./application/controllers/Services.php */