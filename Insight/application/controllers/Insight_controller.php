<?php
class Insight_controller extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Members_model');
		$this->load->helper('url');
	}

	public function index(){
		$this->load->view('home');

	} 

	// for staff add
	public function view(){
		$this->load->helper('url');
		$this->load->view("add1");

	}
	public function add(){
		$this->load->helper('url');
		$data=array(
		'ID'=>$this->input->post('id'),
		'NIC'=>$this->input->post('nic'),
		'name'=>$this->input->post('name'),
		'gender'=>$this->input->post('gender'),
		'birthDay'=>$this->input->post('bday'),
		'telNo'=>$this->input->post('tel'),
		'address'=>$this->input->post('address'),
		'joined_date'=>$this->input->post('date'),
		'salary'=>$this->input->post('salary'),
		);

		$this->Members_model->add2($data);
		$this->load->view("add1");

		}

	//for staff view
	public function viewEmp(){
		$data['result']=$this->Members_model->view_Emp();
		$this->load->view("searchMember",$data);


	}
	//for staff
	public function searchEmp(){
		$empId=$this->input->post('search');
		$data['result']=$this->Members_model->search_Emp($empId);
		$this->load->view("upMember",$data);



	}

	public function updateEmp(){
		$this->load->helper('url');
		$id= $this->input->post('id');
		$data=array(
		'NIC'=>$this->input->post('nic'),
		'name'=>$this->input->post('name'),
		'gender'=>$this->input->post('gender'),
		'birthDay'=>$this->input->post('bday'),
		'telNo'=>$this->input->post('tel'),
		'address'=>$this->input->post('address'),
		'joined_date'=>$this->input->post('date'),
		'salary'=>$this->input->post('salary'),
		);

		$this->Members_model->update_Emp($data,$id);
		$data['result']=$this->Members_model->view_Emp();
		$this->load->view("searchMember",$data);

		}


}

?>