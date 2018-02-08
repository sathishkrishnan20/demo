<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {


	    public function __construct()
	    {
	        parent::__construct();
					$this->load->model('crudModel');
	        $this->load->helper('url_helper');
	    }
	public function index() {
		$data['users'] = $this->crudModel->getRecords();
		$this->load->view('templates/header');
		$this->load->view('userList', $data);
	}

	public function addUser() {


			$this->form_validation->set_rules('userName', 'userName', 'required');

			if ($this->form_validation->run() === FALSE) {
            $this->load->view('templates/header');
            $this->load->view('userCreate');

      } else {

				$data = array(
	         'user_name' => $this->input->post('userName'),
	         'password' => $this->input->post('userName'),
	         'active_flag' => 1
	     );
				 $this->crudModel->insertUser($data);
				 $this->index();
			}
	}

	public function viewUser($id) {

		   $this->load->view('templates/header');
			 $data['user'] = $this->crudModel->getUserById($id);
			 $this->load->view('userData', $data);
	}


		public function deleteUser($id) {

			   $this->crudModel->deleteUserById($id);
				 $this->index();
		}

		public function editUser($id) {

				$data['user'] = $this->crudModel->getUserById($id);
				$this->load->view('editData', $data);

				$this->form_validation->set_rules('userName', 'userName', 'required');

				if ($this->form_validation->run() === TRUE) {

					$data = array(
		         'user_name' => $this->input->post('userName'),
		         'password' => $this->input->post('userName'),
		         'active_flag' => 1
		     );
					 $this->crudModel->updateUser($id,$data);
					 $this->index();
				}


		}




}
