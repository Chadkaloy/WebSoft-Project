<?php
    class Volumes extends CI_Controller {
        public function index(){
            $data['title'] = 'Volumes Lists';
            
            $data['volumes'] = $this->volume_model->get_volumes();
            // print_r($data['volumes']);

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('volumes/index',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //View
        //=========================================================
        public function view($volumeid = NULL){
            $data['volumes'] = $this->volume_model->get_volume_by_id($volumeid);

            if(empty($data['volumes'])){
                show_404();
            }

            $data['vol_name'] = $data['volumes']['volumeid'];
            
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('volumes/view',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //Create
        //=========================================================
        public function create(){
           
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('volumes/create');
                $this->load->view('templates/footer');
    
            
        }
        //=========================================================
        //Add Volume
        //=========================================================
        public function addVolume(){
            // Retrieve form data
		$volumeName = $this->input->post('volumeName');
		$description = $this->input->post('description');

		// Prepare data array
		$data = array(
			'vol_name' => $volumeName,
			'description' => $description,
		);

            $this->volume_model->add_volume($data);

            redirect('volumes');
        }
        //=========================================================
        //Delete
        //=========================================================
        public function delete($volumeid){
            $this->volume_model->delete_volume($volumeid);
            redirect('volumes');
        }
        //=========================================================
        //Edit
        //=========================================================
        public function edit(){
            $volumeid = $this->input->get('volumeid');
            // $userid = $this->input->get("userID")
            $data ['volume'] = $this->volume_model->get_volume_by_id($volumeid);

         
            $data['title'] = 'Edit Volume';

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('volumes/edit',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //Update
        //=========================================================
        public function update(){
            $volumeid = $this->input->get('volumeid');
            $volumeName = $this->input->post('vol_name');
            $description = $this->input->post('description');
        
            $data = array(
                'vol_name' => $volumeName,
                'description' => $description
            );

            $this->volume_model->update_volume($volumeid,$data);
            redirect('volumes');
        }
}