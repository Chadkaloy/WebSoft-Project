<?php
    class Articles extends CI_Controller {
        public function index(){
            $data['title'] = 'Articles Lists';
            
            // $data['articles'] = $this->articles_model->get_articles();
            $data["volumes"] = $this->volume_model->get_volumes();
            $selected_volume = $this->input->post("volume");

            if ($selected_volume === 'none') {
                $data['articles'] = $this->articles_model->get_articles();
                $data['selected_id'] = null;
            } elseif ($selected_volume != "") {
                $data['articles'] = $this->articles_model->get_articles_by_volume($this->input->post("volume"));
                $data['selected_id'] = $this->input->post("volume");
            } else {
                $data['articles'] = $this->articles_model->get_articles();
                $data['selected_id'] = null;
            }
            // print_r($data['volumes']);

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('articles/index',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //View
        //=========================================================
        public function view($articleid = NULL){
            $data['articles'] = $this->articles_model->get_article_by_id($articleid);
            $data["volumes"] = $this->volume_model->get_volumes();
            $selected_volume = $this->input->post("volume");

            // if(empty($data['articles'])){
            //     show_404();
            // };
            
            // if ($selected_volume === 'none') {
            //     $data['articles'] = $this->articles_model->get_articles();
            //     $data['selected_id'] = null;
            // } elseif ($selected_volume != "") {
            //     $data['articles'] = $this->articles_model->get_articles_by_volume($this->input->post("volume"));
            //     $data['selected_id'] = $this->input->post("volume");
            // } else {
            //     $data['articles'] = $this->articles_model->get_articles();
            //     $data['selected_id'] = null;
            // }

            // $data['articles'] = $this->articles_model->get_articles();
            // $data['selected_id'] = null;

            $data['title'] = $data['articles']['articleid'];
            
            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('articles/view',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //Create
        //=========================================================
        public function create(){

            $data["volumes"] = $this->volume_model->get_volumes();
            $data["authors"] = $this->authors_model->get_authors();
           
                $this->load->view('templates/header');
                $this->load->view('templates/nav');
                $this->load->view('articles/create',$data);
                $this->load->view('templates/footer');
    
            
        }
        //=========================================================
        //Add Article
        //=========================================================
        public function addArticle(){

            $config['upload_path']          = 'assets/cmujs_pdf/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 2048;
            $config['max_width']            = 1024;
            $config['max_height']           = 768;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('filename'))
            {
            $error = array('error' => $this->upload->display_errors());
            echo $error['error'];
                }
             
        $upload_data = $this->upload->data();
        $filename = $upload_data['file_name'];
            // Retrieve form data
		$title = $this->input->post('title');
        $keywords = $this->input->post('keywords');
        $abstract = $this->input->post('abstract');
        $published = $this->input->post('published');
        $doi = $this->input->post('doi');
        $volumeid = $this->input->post('volumeid');

		// Prepare data array
		$data = array(
			'title' => $title,
            'keywords' => $keywords,
            'abstract' => $abstract,
            'published' => $published,
			'filename' => $filename,
            'doi' => $doi,
            'volumeid' => $volumeid,
		);

           $article_id = $this->articles_model->add_article($data);
           $author = $this->input->post("authorid");

           $authordata = array(
            'article_id' => $article_id,
            'audid' => $author,
        );

        $this->authors_model->insert_article_author($authordata);

        redirect("articles");

          
        }
        //=========================================================
        //Delete
        //=========================================================
        public function delete($articleid){
            $this->articles_model->delete_article($articleid);
            redirect('articles');
        }
        //=========================================================
        //Edit
        //=========================================================
        public function edit(){
            $articleid = $this->input->get('articleid');
            // $userid = $this->input->get("userID")
            $data['article'] = $this->articles_model->get_article_by_id($articleid);
            $data["volumes"] = $this->volume_model->get_volumes();
            $data["authors"] = $this->authors_model->get_authors();

         
            $data['title'] = 'Edit Article';

            $this->load->view('templates/header');
            $this->load->view('templates/nav');
            $this->load->view('articles/edit',$data);
            $this->load->view('templates/footer');
        }
        //=========================================================
        //Update
        //=========================================================
        public function update(){
            $articleid = $this->input->get('articleid');
            $title = $this->input->post('title');
            $keywords = $this->input->post('keywords');
            $abstract = $this->input->post('abstract');
            $published = $this->input->post('published');
            $filename = $this->input->post('filename');
            $doi = $this->input->post('doi');
            $volumeid = $this->input->post('volumeid');
        
            $data = array(
                'title' => $title,
                'keywords' => $keywords,
                'abstract' => $abstract,
                'published' => $published,
                'filename' => $filename,
                'doi' => $doi,
                'volumeid' => $volumeid,
            );

            $this->articles_model->update_article($articleid,$data);
            redirect('articles');
        }
}