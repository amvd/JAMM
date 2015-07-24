<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Uploads extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
	}

	function index()
	{
		$this->load->view('upload_test', array('error' => $this->session->flashdata("error") ));
	}

	function do_upload()
	{
		$config['upload_path'] = 'assets/images/uploads';
		$config['allowed_types'] = 'gif|jpg|png';
		// $config['max_size']	= '100';
		// $config['max_width']  = '1024';
		// $config['max_height']  = '768';
		$config['file_name'] = 'profile';

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload())
		{

			$error = array('error' => $this->upload->display_errors());

			var_dump($error);
			$this->session->set_flashdata('error', $error);

			redirect("/Uploads");
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			// $this->session->set_flashdata('error');

			$this->load->view('upload_success', $data);


		}
	}



}