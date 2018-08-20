<?php header('Access-Control-Allow-Origin: *'); if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class main extends CI_Controller {

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

	function __construct(){
		parent::__construct();
		$this->load->model('main_model');
	}

	public function index()
	{
		$this->load->view('index.html');
	}

	public function openAdmin()
	{
		$this->load->view('admin.html');
	}

	public function record_on_database(){
		
		$arrData['product_name'] =$this->input->post('product_name'); 
		$arrData['product_price']=$this->input->post('product_price');
		$arrData['data_date']    =$this->input->post('data_date');    
		$arrData['data_time']    =$this->input->post('data_time');    
		$this->main_model->insertRecord($arrData);

		//Send output to Jquery
		$data['result'] = "success";
		$this->output->set_output(json_encode($data));
	}

	public function initialize_list(){
		$product_list = $this->main_model->selectAllData();
		$data['result'] = $product_list;
		$this->output->set_output(json_encode($data));
	}

	public function add_product(){
		$arrData['product_name'] =$this->input->post('product_name'); 
		$arrData['product_price']=$this->input->post('product_price');
		$arrData['quantity']=$this->input->post('quantity');
		$this->main_model->add_product($arrData);
	}

	public function delete_product(){
		$arrData['product_name'] =$this->input->post('product_name'); 
		$this->main_model->delete_product($arrData);
	}

	public function update_product(){
		$arrData['product_name'] =$this->input->post('product_name'); 
		$arrData['product_price']=$this->input->post('product_price');
		$arrData['quantity']=$this->input->post('quantity');
		$this->main_model->update_product($arrData);
	}

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
