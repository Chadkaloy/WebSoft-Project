<?php
    class Roles extends CI_Controller {
        public function index(){
            $data['title'] = 'Roles Lists';

            $data['roles'] = $this->roles_model->get_roles();
            // print_r($data['users']);

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('roles/index', $data);
            $this->load->view('templates/footer');
        }

        public function view(){
            $rolesid = $this->input->get("role");
            $data['roles'] = $this->roles_model->get_roles_by_id($rolesid);

            if(empty($data['roles'])){
                show_404();
            }

            $data['role_name'] = $data['roles']['role_name'];
            
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('roles/view', $data);
            $this->load->view('templates/footer');
        }
        public function create(){
            $data["roles"] = $this->roles_model->get_roles();
           
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('roles/create');
                $this->load->view('templates/footer');
    
            
        }

        public function addRoles(){
            // Retrieve form data
		$roleName = $this->input->post('role_name');

		// Prepare data array
		$data = array(
			'role_name' => $roleName,
		);

            $this->roles_model->add_roles($data);

            redirect('roles');
        }
        // Delete
        public function delete($rolesid){
            $this->roles_model->delete_roles($rolesid);
            redirect('roles');
        }

        //Edit
        public function edit(){
            $rolesid = $this->input->get('role_id');
            // $userid = $this->input->get("userID")
            $data ['roles'] = $this->roles_model->get_roles_by_id($rolesid);

         
            $data['title'] = 'Edit Roles';

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('roles/edit',$data);
            $this->load->view('templates/footer');
        }
        
        public function update(){
            $rolesid = $this->input->get('role_id');
            $roleName = $this->input->post('roleName');
        
            $data = array(
                'role_name' => $roleName,
            );

            $this->roles_model->update_roles($rolesid,$data);
            redirect('roles');
        }
}