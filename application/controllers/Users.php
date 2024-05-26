<?php
    class Users extends CI_Controller {
        public function index(){
            $data['title'] = 'User Lists';

            $data['users'] = $this->user_model->get_user();
            $data["roles"] = $this->roles_model->get_roles();
            // print_r($data['users']);

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('users/index', $data);
            $this->load->view('templates/footer');
        }

        public function view($userid = NULL){
            $data['user'] = $this->user_model->get_user_by_id($userid);

            if(empty($data['user'])){
                show_404();
            }

            $data['complete_name'] = $data['user']['complete_name'];
            
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('users/view', $data);
            $this->load->view('templates/footer');
        }
        public function create(){
            $data["roles"] = $this->roles_model->get_roles();
           
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('users/create',$data);
                $this->load->view('templates/footer');
    
            
        }

        public function addUser(){
            // Retrieve form data
		$completeName = $this->input->post('completeName');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
        $role = $this->input->post('role');
        $status = $this->input->post('status');

		// Prepare data array
		$data = array(
			'complete_name' => $completeName,
			'email' => $email,
			'pword' => $password,
            'role' => $role,
            'status' => $status
		);

            $this->user_model->add_user($data);

            redirect('users');
        }
        // Delete
        public function delete($userid){
            $this->user_model->delete_user($userid);
            redirect('users');
        }

        //Edit
        public function edit(){
            $userid = $this->input->get('userid');
            // $userid = $this->input->get("userID")
            $data ['user'] = $this->user_model->get_user_by_id($userid);
            $data["roles"] = $this->roles_model->get_roles();

         
            $data['title'] = 'Edit User';

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('users/edit',$data);
            $this->load->view('templates/footer');
        }
        
        public function update(){
            $userid = $this->input->get('userid');
            $completeName = $this->input->post('completeName');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $role = $this->input->post('role_id');
        $status = $this->input->post('status');
        
            $data = array(
                'complete_name' => $completeName,
                'email' => $email,
                'pword' => $password,
                'status' => $status,
                'role' => $role
            );

            $this->user_model->update_user($userid,$data);
            redirect('users');
        }
}