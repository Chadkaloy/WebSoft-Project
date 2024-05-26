<?php
    class PublicPages extends CI_Controller {
        public function index(){
            $data['title'] = 'Articles with Authors Lists';
            
            $data['article_author'] = $this->public_articles_model->get_articles_with_authors();
            // print_r($data['volumes']);

            $this->load->view('templates/publicviewheader');
            $this->load->view('templates/publicviewnav');
            $this->load->view('publicpages/publicview',$data);
            $this->load->view('templates/publicviewfooter');
        }
        public function volume(){
            $data['title'] = 'Volumes Lists';
            
            $data['article_author'] = $this->public_articles_model->get_volumes();
            // print_r($data['volumes']);

            $this->load->view('templates/publicviewheader');
            $this->load->view('templates/publicviewnav');
            $this->load->view('publicpages/volume',$data);
            $this->load->view('templates/publicviewfooter');
        }
        public function articles(){
            $data['title'] = 'Articles Lists';
            
            $data['article_author'] = $this->public_articles_model->get_articles();
            // print_r($data['volumes']);

            $this->load->view('templates/publicviewheader');
            $this->load->view('templates/publicviewnav');
            $this->load->view('publicpages/articles',$data);
            $this->load->view('templates/publicviewfooter');
        }
        public function authors(){
            $data['title'] = 'Authors Lists';
            
            $data['article_author'] = $this->public_articles_model->get_authors();
            // print_r($data['volumes']);

            $this->load->view('templates/publicviewheader');
            $this->load->view('templates/publicviewnav');
            $this->load->view('publicpages/authors',$data);
            $this->load->view('templates/publicviewfooter');
        }
        public function aboutus(){
            $data['title'] = 'About Us';
            
            // $data['article_author'] = $this->public_articles_model->get_authors();
            // print_r($data['volumes']);

            $this->load->view('templates/publicviewheader');
            $this->load->view('templates/publicviewnav');
            $this->load->view('publicpages/aboutus',$data);
            $this->load->view('templates/publicviewfooter');
        }
}