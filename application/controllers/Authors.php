<?php
    class Authors extends CI_Controller {
        public function index(){
            $data['title'] = 'Authors Lists';
            
            $data['authors'] = $this->authors_model->get_authors();
            // print_r($data['volumes']);

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('authors/index',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //View
        //=========================================================
        public function view($auid = NULL){
            $data['authors'] = $this->authors_model->get_author_by_id($auid);

            if(empty($data['authors'])){
                show_404();
            }

            $data['author_name'] = $data['authors']['auid'];
            
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('authors/view',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //Create
        //=========================================================
        public function create(){
           
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('authors/create');
                $this->load->view('templates/footer');
    
            
        }
        //=========================================================
        //Add
        //=========================================================
        public function addAuthor(){
            // Retrieve form data
		$authorName = $this->input->post('authorName');
		$email = $this->input->post('email');
        $contactNumber = $this->input->post('contact_num');
        $title = $this->input->post('title');

		// Prepare data array
		$data = array(
			'author_name' => $authorName,
			'email' => $email,
            'contact_num' => $contactNumber,
            'title' => $title,
		);

            $this->authors_model->add_author($data);

            redirect('authors');
        }
        //=========================================================
        //Delete
        //=========================================================
        public function delete($auid){
            $this->authors_model->delete_author($auid);
            redirect('authors');
        }
        //=========================================================
        //Edit
        //=========================================================
        public function edit(){
            $auid = $this->input->get('auid');
            // $userid = $this->input->get("userID")
            $data ['author'] = $this->authors_model->get_author_by_id($auid);

         
            $data['title'] = 'Edit Author';

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('authors/edit',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //Update
        //=========================================================
        public function update(){
            $auid = $this->input->get('auid');
            $authorName = $this->input->post('author_name');
            $email = $this->input->post('email');
            $contactNumber = $this->input->post('contact_num');
            $title = $this->input->post('title');
        
            $data = array(
                'author_name' => $authorName,
                'email' => $email,
                'contact_num' => $contactNumber,
                'title' => $title
            );

            $this->authors_model->update_author($auid,$data);
            redirect('authors');
        }

       
}